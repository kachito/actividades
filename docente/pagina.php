<?php 
include_once("DemoCollector.php");

$id =1;

$DemoCollectorObj = new DemoCollector();

foreach ($DemoCollectorObj->showDemos() as $c) {
	# code...
	echo "<div>";
	echo $c->getIdDemo() . "&&" . $c->getNombre();
	echo "</div>";
	
}

 ?>