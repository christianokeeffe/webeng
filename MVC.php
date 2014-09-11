<html>
<head></head>
<body>
<?php
include("model/Model.php");
include("view/View.php");
include("controller/Controller.php");
$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);
 
if (isset($_GET['action']) && !empty($_GET['action'])) {
    $controller->{$_GET['action']}();
} 
echo $view->output();
?>
</body>
</html>