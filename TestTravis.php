<?php

require_once("./Out.php");

$out = new Out();

$site = $out->getHeader("TravisTest");
$site .= $out->getBody("Hier soll eine Ausgabe stehen.");

return $site;