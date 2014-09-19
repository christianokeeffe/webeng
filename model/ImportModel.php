<?php
class ImportModel
{
    public $string;
	public $listOfCountries;
 
    public function __construct(){
        $this->getData();
    }
	
	public function insertToDB($tableName, $listOfObjects){
		$con = conFatory();
		mysqli_query($con,"TRUNCATE TABLE $tableName");

		switch ($tableName) {
			case 'country':
				$first = true;
				$sqlstring = "INSERT INTO country (capital,carcode,datacode,gdp_agri,gdp_ind,gdp_serv,gdp_total,goverment,id,indep_date,infant_mortality,inflation,name,population,population_growth,total_area) VALUES ";
				foreach ($listOfObjects as $country) {
					if(!$first)
					{
						$sqlstring .= ",";
					}
					else
					{
						$first = false;
					}
					$sqlstring .= "('". $country->getCapital() . "','" . $country->getCarcode() . "','" . $country->getDatacode() . "'," . $country->getGdp_agri() . "," . $country->getGdp_ind() . "," . $country->getGdp_serv() . ",";
					$sqlstring .= $country->getGdp_total() . ",'". $country->getGoverment() . "','" . $country->getId() . "','" . $country->getIndep_date() . "','" . $country.getInfant_mortality() . "',";
					$sqlstring .= $country->getInflation() . ",'" . $country->getName() . "'," . $country->getPopulation() . "," . $country.getPopulation_growth() . "," . $country.getTotal_area() . ")"; 
				}
				$sqlstring .= ";";
				mysqli_query($con, $sqlstring);
				break;
			case 'city':
				$first = true;
				$sqlstring = "INSERT INTO city (country,id,latitude,longtitude,name,province) VALUES ";
				foreach ($listOfObjects as $city) {
					if(!$first)
					{
						$sqlstring .= ",";
					}
					else
					{
						$first = false;
					}
					$sqlstring .= "('". $city->geCountry() . "','" $city->getId() . "','" . $city->getLatitude() . "','" . $city->getLongtitude() . "','" . $city->getName() . "','" . $city->getProvince . "')"; 
				}
				$sqlstring .= ";";
				mysqli_query($con, $sqlstring);
				break;
			case 'continent':
				$first = true;
				$sqlstring = "INSERT INTO continent (id,name) VALUES ";
				foreach ($listOfObjects as $continent) {
					if(!$first)
					{
						$sqlstring .= ",";
					}
					else
					{
						$first = false;
					}
					$sqlstring .= "('". $continent->getId() . "','" . $continent->getName() . "')"; 
				}
				$sqlstring .= ";";
				mysqli_query($con, $sqlstring);
				break;
			default:
				# code...
				break;
		}
		mysqli_close($con);
	}
}