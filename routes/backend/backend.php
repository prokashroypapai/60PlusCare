<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\WelcomeController;

//auth
require __DIR__ . '/auth.php';


Route::group(['prefix' => 'admin', 'middleware' => 'manager'], function() {
    Route::get('/', [WelcomeController::class, 'home']);

    Route::get('info', function (){
        return view('backend/siteinfo.info');
    });

    //location
    //require __DIR__ . '/location.php';

    //clinic
    require __DIR__ . '/clinic.php';

    //staffs
    require __DIR__ . '/staff.php';

    //doctor
    require __DIR__ . '/doctor.php';

    //category
    require __DIR__ . '/category.php';

    //zone
    require __DIR__ . '/zone.php';

    //directory
    require __DIR__ . '/directory.php';

    //registered users
    require __DIR__ . '/registeredUsers.php';

    //membership
    require __DIR__ . '/membership.php';

    //service
    require __DIR__ . '/service.php';

    //slider
    require __DIR__ . '/slider.php';

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

    //article
    require __DIR__ . '/article.php';

    //testimonial
    require __DIR__ . '/testimonial.php';

    //contact
    require __DIR__ . '/contact.php';

    //appointment
    require __DIR__ . '/appointment.php';

    //noticeboard
    require __DIR__ . '/noticeboard.php';
});
