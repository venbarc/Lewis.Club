<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');

});

Route::get('/test-database-connection', function () {
    try {
        \Illuminate\Support\Facades\DB::connection()->getPdo();
        echo "Connected successfully to the database!";
    } catch (\Exception $e) {
        die("Could not connect to the database. Error: " . $e->getMessage());
    }
});