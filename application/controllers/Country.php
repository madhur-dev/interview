<?php
defined('BASEPATH') or exit('No Direct script access allowed');

class Country extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('CountryModel');
	}

	public function index() {
		$data['countries'] = $this->CountryModel->showCountries();
		$data['cities'] = $this->CountryModel->countCities();
		$this->load->view('country.php', $data);
	}

	public function Cities() {
		$Code = $this->uri->segment(3);
		$data['cities'] =$this->CountryModel->findCitiesbyCode($Code);
		$this->load->view('cities',$data);
	}

	public function Language() {
		$Code = $this->uri->segment(3);
		$data['languages'] =$this->CountryModel->findLanguageByCode($Code);
		$this->load->view('language',$data);
	}

	public function rangeForm() {
		$this->load->view('form.php');
	}

	public function Range() {
		$min = $this->input->post('min');
		$max = $this->input->post('max');
		$data['ranges'] = $this->CountryModel->getCountriesByRange($min, $max);
		$this->load->view('countrybypopulation.php', $data); 
	} 

	public function delete() {
		$code = $this->uri->segment(3);
		$result = $this->CountryModel->deleteData($code);
		if($result) {
			echo "DELETED";
		} else {
			echo "Some Error";
		}
	}
}