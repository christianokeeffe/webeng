<?
$f3 = require('lib/base.php');
$f3->clear('CACHE');
include("../SQLConnect.php");
include("../model/metadata/CountryMetaData.php");
include("../model/CountryModel.php");
header('Content-Type: application/json');

$f3->route('GET /',
    function() {
        echo 'Cool api!';
    }
);
$f3->route('GET /country',
    function() {
    	$cmodel = new CountryModel();
        echo json_encode($cmodel->listOfCountries);
    }
);



$f3->run(); 
?>