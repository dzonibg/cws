<?php
session_start();
require 'core.php';

//$cws = new ContentWriter();
//$cws = $cws->rand();
//var_dump($cws);
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php //pulled in bootstrap from cdn
require_once 'views/layout/header.php'; //requiring header HTML
$request = new Router();
$request->direct();
require_once 'views/layout/footer.php'; //requiring footer & closing tags HTML
?>

