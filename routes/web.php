    <?php

 	Route::view('/', 'welcome');
    Auth::routes();

    Route::get('users', 'UserController@index');
    Route::get('changeStatus', 'UserController@changeStatus');
