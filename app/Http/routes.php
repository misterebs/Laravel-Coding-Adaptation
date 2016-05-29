<?php

//Login Logout
Route::controllers([
    'auth' => 'Auth\AuthController',
    //'password' => 'Auth\PasswordController',
]);

//Blog Pages
get('about', 'AboutController@showAbout');
get('services', 'ServicesController@showServices');
$router->get('contact', 'ContactController@showForm');
Route::post('contact', 'ContactController@sendContactInfo');
get('rss', 'BlogController@rss');
get('sitemap.xml', 'BlogController@siteMap');


// Admin area
get('admin', function () {
    return redirect('/admin/post');
});

Route::group(['namespace' => 'Admin', 'middleware' => 'auth',], function () {
    resource('admin/post', 'PostController', ['except' => 'show']);
    resource('admin/tag', 'TagController', ['except' => 'show']);
    get('admin/upload', 'UploadController@index');
    post('admin/upload/file', 'UploadController@uploadFile');
    delete('admin/upload/file', 'UploadController@deleteFile');
    post('admin/upload/folder', 'UploadController@createFolder');
    delete('admin/upload/folder', 'UploadController@deleteFolder');
});

// Blog Posts
get('/', function () {
    return redirect('/');
});
get('/', 'BlogController@index');
get('/{slug}', 'BlogController@showPost');
