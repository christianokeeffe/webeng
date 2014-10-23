<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
</head>
<body style=" padding-top: 70px;">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<?php
include("SQLConnect.php");
include("EasyRdf.php");
include("model/metadata/CityMetaData.php");
include("model/metadata/CountryMetaData.php");
include("model/metadata/ContinentMetaData.php");
include("model/CountryModel.php");
include("model/ImportModel.php");
include("controller/countryController.php");
include("controller/importController.php");
include("view/countryView.php");
include("view/importView.php");
include("view/editCountryView.php");
include("view/indexview.php");
include("view/displayRdfView.php");

$model;
$controller;
$view;

$page = "";

if(isset($_GET['page']))
{
	$page = $_GET['page'];
}

switch ($page) {
	case 'countryList':
		$reg = "active";
		$model = new CountryModel();
		$controller = new CountryController($model);
		$view = new countryView($controller, $model);
		break;
	case 'countryEdit':
		$reg = "active";
		$model = new CountryModel();
		$controller = new CountryController($model);
		$view = new editCountryView($controller, $model);
		break;
	case 'import':
		$imp = "active";
		$model = new ImportModel();
		$controller = new ImportController($model);
		$view = new importView($controller, $model);
		break;
	default:
		$front = "active";
		$view = new indexView();		
		break;
}
include("view/topbar.php");
 $view->output();
?>
</body>
</html>