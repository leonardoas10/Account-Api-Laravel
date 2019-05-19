<?php

use Illuminate\Http\Request;
use App\Constants;
use App\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/signin', "AuthController@signin" );

Route::post('/register', "AuthController@register");  

// Route::get('/test', function (Request $request) {

//     $user = new User();
    
//     // $user->name = 'a';

//     $usr1 = new User();
//     // $usr1->name = 'b';

//     dump($user->name);
//     dump($usr1->name);

//     echo 'aparte';

//     dump($user::myClass);
//     dump($usr1::myClass);
//     dump($usr1::hi());
//     dump($usr1->h2());

//     dd(User::myClass);
// });  


// <?php

// class usuario {
//     public $nombreUsuario;
//     public static $minPassword = 6;

//     public static function validar($passs){
//         if(strlen($passs) >= $minPassword) {
//             return true;
//         }
//         else {
//             return false;
//         }
//     }
// }
//  $pass = "123456";

// if(usuario::validar($pass)) {
//     echo "true";
// }
// else {
//     echo "false";
// }

// ?>
