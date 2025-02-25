<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});



$modulesPath = base_path('domains');


if (!file_exists($modulesPath)) {
    mkdir($modulesPath, 0755, true);
}

$modules = array_filter(scandir($modulesPath), function ($folder) use ($modulesPath) {
    return $folder !== '.' && $folder !== '..' && is_dir("$modulesPath/$folder");
});

foreach ($modules as $module) {
    $moduleRoutePath = base_path("domains/{$module}/Routes/web.php");

    if (file_exists($moduleRoutePath)) {
        require $moduleRoutePath;
    }
}







