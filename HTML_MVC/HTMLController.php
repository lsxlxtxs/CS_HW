<?php

require_once("HTMLView.class.php");
require_once("BodyElement.class.php");

$myView = new HTMLView();
$data = array('name'=>'Simon Farkle');
$myView->addElement(new BodyElement($data));
$myView->printView();

?>