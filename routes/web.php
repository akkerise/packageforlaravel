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

Route::resource('products','ProductController');

Route::get('/_debugbar/assets/stylesheets', [
    'as' => 'debugbar-css',
    'uses' => '\Barryvdh\Debugbar\Controllers\AssetController@css'
]);

Route::get('/_debugbar/assets/javascript', [
    'as' => 'debugbar-js',
    'uses' => '\Barryvdh\Debugbar\Controllers\AssetController@js'
]);



Route::get('/que',function (){                                                     // route from <server_ip>/que
    $queue = Queue::push('LogMessage', array('message' => 'Time: '.time()));               // this will push job in queue
    // OR
    //$queue = Queue::later($delay,'LogMessage', array('message' => 'Time: '.time()));     // this will push job in queue after $delay
    //sleep(5);    //you can add delay here too

    print_r(" ".$queue." ".time());            //prints queue_id and time stamp
});


class LogMessage{                                                                //bad practice to deploy code here :p


    public function fire($job,$data){                                         //takes data and performs action.

        File::append(app_path().'/queue.txt',$data['message'].PHP_EOL);
        $job->delete();


    }
}

Route::get('/que',function (){                                                     // route from <server_ip>/que
    $queue = Queue::push('LogMessage', array('message' => 'Time: '.time()));               // this will push job in queue
    // OR
    //$queue = Queue::later($delay,'LogMessage', array('message' => 'Time: '.time()));     // this will push job in queue after $delay
    //sleep(5);    //you can add delay here too

    print_r(" ".$queue." ".time());            //prints queue_id and time stamp
});

Route::get('/', function() {
    // this doesn't do anything other than to
    // tell you to go to /fire
    return "go to /fire";
});

Route::get('fire', function () {
    // this fires the event
    event(new App\Events\EventName());
    return "event fired";
});

Route::get('test', function () {
    // this checks for the event
    return view('test');
});