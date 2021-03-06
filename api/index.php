<?
$f3 = require('lib/base.php');
$f3->clear('CACHE');
include("../SQLConnect.php");
include("../model/metadata/CountryMetaData.php");
include("../model/CountryModel.php");
header('Content-Type: application/json');
    	$f3->cmodel = new CountryModel();
$f3->route('GET /',
    function() {
        echo 'Cool api!';
    }
);
$f3->route('GET /country',
    function($f3) {
        echo json_encode($f3->cmodel->listOfCountries);
    }
);
$f3->route('GET /country/@id',
    function($f3) {
    	$cont = null;
    	for($i = 0; $i < count($f3->cmodel->listOfCountries); $i++)
    	{
    		if($f3->cmodel->listOfCountries[$i]->getId() == $f3->get('PARAMS.id'))
    		{
    			$cont = $f3->cmodel->listOfCountries[$i];
    			break;
    		}
    	}
    	if($cont == null)
    	{
    		echo "Country not foundt";
    	}
    	else
    	{
        	echo json_encode($cont);
    	}
    }
);

$f3->route('POST /country/@id', 
    function($f3, $params) {
        $cmodel = new CountryModel();
        //$tempCountry = new Country($f3->get('capital'),
        //                          $f3->get('carcode'),
          //                           $f3->get('datacode'),
            //                        $f3->get('gdp_agri'),
              //                      $f3->get('gdp_ind'),
                //                    $f3->get('gdp_serv'),
                  //                  $f3->get('gdp_total'),
                    //                $f3->get('goverment'),
                      //              $f3->get('id'),
                        //            $f3->get('indep_date'),
                          //          $f3->get('infant_mortality'),
                            //        $f3->get('inflation'),
                              //      $f3->get('name'),
                                //    $f3->get('population'),
                                  //  $f3->get('population_growth'),
                                    //$f3->get('total_area'));
        
        foreach($cmodel->listOfCountries as &$c){
            if ($c->getId() == $f3->get('PARAMS.id')){
                $tempCountry = $c;
                break;
            }
        }
        if ($tempCountry != null){
            if($f3->get('POST.name') != null){
                $tempCountry->APIsetName($f3->get('POST.name'));
            } else if($f3->get('POST.capital') != null){
                $tempCountry->APIsetCapital($f3->get('POST.capital'));
            }
            else if($f3->get('POST.population') != null){
                $tempCountry->APIsetPopulation($f3->get('POST.population'));
            } else {
            echo "ERROR";
            }
        } else {
            echo "ERROR";
        }
        //$this->$tempCountry->APIset($f3->get('name'),$f3->get('id'),$f3->get('capital'),$f3->get('population'));
        $cmodel->setData($tempCountry);
    }
);

$f3->run(); 
?>