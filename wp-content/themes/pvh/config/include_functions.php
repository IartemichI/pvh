<?php
searchFunctionsFiles();
function searchFunctionsFiles(): void
{
    $dir = get_template_directory() . '/functions/';
    $files = scandir($dir);
    $files_include = [];
    foreach ($files as $file) {
        if (preg_match('/\.(php)/', $file)) {
            $files_include[] = $dir . $file;
        }
    }
    include_files($files_include);
}


function include_files(&$files_include): void
{
    foreach ($files_include as $file) {
        require_once $file;
    }
}
