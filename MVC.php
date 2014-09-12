<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
</head>
<body>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<?php
include("model/CountryModel.php");
include("controller/countryController.php");
include("view/countryView.php");
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