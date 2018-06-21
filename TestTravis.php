<?php
require_once(__DIR__."/vendor/autoload.php");

use CaT\TravisTest\Html;

$html = new Html();

$site = $html->getHeader("TravisTest");
$site .= $html->getBody("Hier soll eine Ausgabe stehen.");

return $site;