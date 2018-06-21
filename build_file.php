#!/usr/bin/env php
<?php

$base_dir = __DIR__;

$src_dir = "$base_dir/src";
$vendor_dir = "$base_dir/vendor";
$dicto_path = "$base_dir/dicto.php";

$build_dir = __DIR__;
$phar_name = "site.html";
$phar_path = "$build_dir/$phar_name";

// Remove previously created phar if one exists.
if (file_exists($phar_path)) {
    unlink($phar_path);
}

require_once($base_dir."/TestTravis.php");

$site = run();
$file = file_put_contents($phar_name, $site);

chmod($phar_path, 0755);