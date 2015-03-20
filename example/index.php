<?php

include "vendor/RegTPL.class.php"; //.. Include RegTPl

$tpl = new RegTPL(); //.. Make an instantiance of RegTPL

$tpl->setDirectory("public"); //.. Set public as TPL directory
$tpl->setCacheDirectory("cache"); //.. This directory doesn't exist, but RegTPL will create the directory

define("ARECONSTANTSWORKING", "Yes, they work."); //.. Define constant so we can use them
$tpl->addVar("title", "Home"); //.. Assigning a RegTPL variable

$tpl->parse('home'); //.. Parse the template file
$tpl->display('home.tpl'); //.. Display the file

?>