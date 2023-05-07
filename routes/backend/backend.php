<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\WelcomeController;

//auth
require __DIR__ . '/auth.php';


Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
    Route::get('/', [WelcomeController::class, 'home']);

    //location
    require __DIR__ . '/location.php';

    //staffs
    require __DIR__ . '/staff.php';

    //doctor
    require __DIR__ . '/doctor.php';

    //membership
    require __DIR__ . '/membership.php';

    //service
    require __DIR__ . '/service.php';

    //package
    require __DIR__ . '/package.php';

    //page
    require __DIR__ . '/page.php';

    //seo
    require __DIR__ . '/seo.php';

    //member
    require __DIR__ . '/member.php';

    //subscription
    require __DIR__ . '/subscription.php';

    //gallery
    require __DIR__ . '/gallery.php';
});
