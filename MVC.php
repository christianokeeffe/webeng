<html>
<head></head>
<body>
<?php
include("model/CountryModel.php");
include("view/countryView.php");
include("controller/countryController.php");

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