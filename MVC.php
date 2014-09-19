<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
</head>
<body>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<?php
include("SQLConnect.php");
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
		$model = new CountryModel();
		$controller = new CountryController($model);
		$view = new countryView($controller, $model);
		break;
	case 'countryEdit':
		$model = new CountryModel();
		$controller = new CountryController($model);
		$view = new editCountryView($controller, $model);
		break;
	case 'import':
		$model = new ImportModel();
		$controller = new ImportController($model);
		$view = new importView($controller, $model);
		break;
	default:
		$model = new CountryModel();
		$controller = new CountryController($model);
		$view = new countryView($controller, $model);
		break;
}
 $view->output();
?>
</body>
</html>