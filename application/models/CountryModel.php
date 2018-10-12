<?php
class CountryModel extends CI_Model {

	public function showCountries() {
		$qry = $this->db->get('country');
		return $qry->result_array();
	}

	public function countCities() {
		$qry = $this->db->select('CountryCode, COUNT(city.Name) as total')
					->from('city')
					->group_by('CountryCode')
					->get();
		return $qry->result_array();	
	}

	public function findCitiesbyCode($code) {
		return $this->db->select('Name, Population')->where('CountryCode',$code)->get('city')->result_array();	
	}

	public function findLanguageByCode($code) {
		return $this->db->select('Language, Percentage')->where('CountryCode',$code)->get('countrylanguage')->result_array();	
	}

	public function getCountriesByRange($min,$max) {
		$qry = "SELECT Name FROM `country` WHERE Population BETWEEN $min AND $max";
		$query = $this->db->query($qry);
		return $query->result_array();
	}

	public function deleteData($code) {
		$this->db->trans_start();
		$this->db->query("DELETE FROM `country` WHERE Code = '$code'");
		$this->db->query("DELETE FROM countrylanguage WHERE CountryCode = '$code'");
		$this->db->query("DELETE FROM city WHERE CountryCode = '$code'");
		if(!$this->db->trans_complete()) {
			echo "Error";
		}
	}
}