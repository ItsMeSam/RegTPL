# RegTPL
A super simple template engine, which was developed for Acuney Framework.

# MVC
Are you looking for a MVC example with RegTPL? Check my Acuney Framework repository.

# Example

```php
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
```
This is a snippet from the example directory. Look in the example directory for a more wide example.