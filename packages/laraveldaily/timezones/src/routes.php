<?php
/**
 * Created by PhpStorm.
 * User: akke
 * Date: 27/03/2017
 * Time: 14:05
 */
Route::get('timezones/{timezone?}',
    'LaravelDaily\Timezones\TimezonesController@index');