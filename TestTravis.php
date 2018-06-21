<?php
require_once(__DIR__."/vendor/autoload.php");

use CaT\TravisTest\Html;

function run()
{
	$html = new Html();

	$site = $html->getHeader("TravisTest");
	$site .= $html->getBody("Hier soll eine Ausgabe stehen.");

	return $site;
}
$start_time = microtime(true);
run();

$time_elapsed_secs = microtime(true) - $start_time;
echo "execution time:    ".$time_elapsed_secs."s\n";
echo "peak memory usage: ".number_format(memory_get_peak_usage(), 0, ".", ".")." byte\n";