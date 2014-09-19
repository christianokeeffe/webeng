<?php
class City{
	private $country;
	private $id;
	private $latitude;
	private $longtitude;
	private $name;
	private $province;
	
	public function __construct($country,$id,$latitude,$longtitude,$name,$province){
		$this->country = $country;
		$this->id = $id;
		$this->latitude = $latitude;
		$this->longtitude = $longtitude;
		$this->name = $name;
		$this->province = $province;
	}
	public function getCountry(){return $this->country;}
	public function getId(){return $this->id;}
	public function getLatitude(){return $this->latitude;}
	public function getLontitude(){return $this->longtitude;}
	public function getName(){return $this->name;}
	public function getProvince(){return $this->province;}
}
?>