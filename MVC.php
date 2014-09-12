<html>
<head></head>
<body>
<?php
include("model/Model.php");
include("view/View.php");
include("controller/Controller.php");
include("view/countryView.php");
$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);
 $view->output();
?>
</body>
</html>