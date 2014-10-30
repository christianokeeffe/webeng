public function setData($objectToChangeToo){
		if ($objectToChangeToo != null)
		{	
			$this->dbReplace($objectToChangeToo->getId(), $objectToChangeToo->getName(), $objectToChangeToo->getCapital(), $objectToChangeToo->getPopulation());
		} else {
			echo "ERROR";
		}
	}

	private function dbReplace($searchKey, $name, $capital, $population){
		$con = conFatory();
		mysqli_query($con,"UPDATE country SET name='". $name ."', capital='". $capital ."', population=". $population ." WHERE id='". $searchKey. "'");
		mysqli_close($con);
	}