<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
  $pagina = "home";
    return view($pagina, compact("pagina"));
});
Route::get('/contact', function () {
  $pagina = "contact";
  return view($pagina, compact("pagina"));
});
Route::get('/about', function () {
  $pagina = "about";
  return view($pagina, compact("pagina"));
});
