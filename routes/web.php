<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/test2', function () {
    class usuario {
        public $nombreUsuario;
        public static $minPassword = 6;
    
        public static function validar($passs){
            if(strlen($passs) >= self::$minPassword) {
                return true;
            }
            else {
                return false;
            }
        }
    }
     $pass = "1234";
    
    if(usuario::validar($pass)) {
        return "true";
    }
    else {
        return "false";
    }
    

});


