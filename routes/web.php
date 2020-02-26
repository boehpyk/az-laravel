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

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'App\Http\Middleware\AdminMiddleware']], function() {
    Route::get('/', function () {
        return view('admin/index');
    })->name('admin_index');
    Route::get('/events', 'EventController@index')->name('admin_events_index')->defaults('archive', false);
    Route::get('/events/archive', 'EventController@index')->name('admin_events_archive')->defaults('archive', true);
    Route::get('/events/create', 'EventController@create')->name('admin_events_create');
    Route::post('/events/create', 'EventController@store')->name('admin_events_store');
    Route::get('/events/{event}', 'EventController@show')->where('id', '[0-9]+')->name('admin_events_show');
    Route::get('/events/{event}/edit', 'EventController@edit')->where('id', '[0-9]+')->name('admin_events_edit');
    Route::post('/events/{event}/edit', 'EventController@update')->where('id', '[0-9]+')->name('admin_events_update');
    Route::post('/events/{event}/delete', 'EventController@destroy')->where('id', '[0-9]+')->name('admin_events_delete');
    /**
    widgets
     */
    Route::get('/widgets', 'WidgetController@index')->name('admin_widgets_index');
    Route::get('/widgets/create', 'WidgetController@create')->name('admin_widgets_create');
    Route::post('/widgets/create', 'WidgetController@store')->name('admin_widgets_store');
    Route::get('/widgets/{widget}/edit', 'WidgetController@edit')->where('id', '[0-9]+')->name('admin_widgets_edit');
    Route::post('/widgets/{widget}/edit', 'WidgetController@update')->where('id', '[0-9]+')->name('admin_widgets_update');
    Route::post('/widgets/{widget}/delete', 'WidgetController@destroy')->where('id', '[0-9]+')->name('admin_widgets_delete');
    /**
     * videos
     */
    Route::get('/videos', 'VideoController@index')->name('admin_videos_index');
    Route::post('/videos', 'VideoController@update')->name('admin_videos_update');
    Route::get('/videos/create', 'VideoController@create')->name('admin_videos_create');
    Route::post('/videos/create', 'VideoController@store')->name('admin_videos_store');
    /**
    links
     */
    Route::get('/links', 'LinkController@index')->name('admin_links_index');
    Route::get('/links/create', 'LinkController@create')->name('admin_links_create');
    Route::post('/links/create', 'LinkController@store')->name('admin_links_store');
    Route::get('/links/{link}/edit', 'LinkController@edit')->where('id', '[0-9]+')->name('admin_links_edit');
    Route::post('/links/{link}/edit', 'LinkController@update')->where('id', '[0-9]+')->name('admin_links_update');
    Route::post('/links/{link}/delete', 'LinkController@destroy')->where('id', '[0-9]+')->name('admin_links_delete');

    /**
    text links
     */
    Route::get('/text_links', 'TextLinkController@index')->name('admin_text_links_index');
    Route::get('/text_links/create', 'TextLinkController@create')->name('admin_text_links_create');
    Route::post('/text_links/create', 'TextLinkController@store')->name('admin_text_links_store');
    Route::get('/text_links/{text_link}/edit', 'TextLinkController@edit')->where('id', '[0-9]+')->name('admin_text_links_edit');
    Route::post('/text_links/{text_link}/edit', 'TextLinkController@update')->where('id', '[0-9]+')->name('admin_text_links_update');
    Route::post('/text_links/{text_link}/delete', 'TextLinkController@destroy')->where('id', '[0-9]+')->name('admin_text_links_delete');

    /**
     * SEO
     */
    Route::get('/seo/edit', 'SEOController@edit')->name('admin_seo_edit');
    Route::post('/seo/edit', 'SEOController@update')->name('admin_seo_update');
    

    
});

Route::get('/', 'HomeController@home')->name('index_page');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
