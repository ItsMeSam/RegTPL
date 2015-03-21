<?php

include "vendor/RegTPL.class.php"; //.. Include RegTPl

$tpl = new RegTPL(); //.. Make an instantiance of RegTPL

$tpl->setDirectory("public"); //.. Set public as TPL directory
$tpl->setCacheDirectory("cache"); //.. This directory doesn't exist, but RegTPL will create the directory

define("ARECONSTANTSWORKING", "Yes, they work."); //.. Define constant so we can use them
$tpl->addVar("title", "Home"); //.. Assigning a RegTPL variable
$tpl->addVar("array", array(
	1 => array(
		"title"	  	=> 	"Title 1",
		"content" 	=>	"Content 1" 
	),
	2 => array(
		"title"	  	=> 	"Title 2",
		"content" 	=>	"Content 2" 
	)

)); //.. Arrays are working too. I simulate a news table came from a database.

$tpl->parse('home'); //.. Parse the template file
$tpl->display('home.tpl'); //.. Display the file

?>