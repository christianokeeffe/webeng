<?
$f3 = require('lib/base.php');
$f3->route('GET /',
    function() {
        echo 'Cool api!';
    }
);
$f3->run(); 
?>