#!/usr/bin/env php
<?php

$base_dir = __DIR__;

$src_dir = "$base_dir/src";
$vendor_dir = "$base_dir/vendor";

$build_dir = __DIR__;
$phar_name = "TestTravis.phar";
$phar_path = "$build_dir/$phar_name";

// Remove previously created phar if one exists.
if (file_exists($phar_path)) {
    unlink($phar_path);
}

$phar = new Phar
    ( $phar_path
    , FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::KEY_AS_FILENAME
    , $phar_name
    );

$phar->buildFromDirectory($base_dir);

$phar->setStub(<<<STUB
#!/usr/bin/env php
<?php
Phar::mapPhar();
include "$phar_name/TestTravis.php";
__HALT_COMPILER();
STUB
);

chmod($phar_path, 0755);