<?php
/**
 * Created by PhpStorm.
 * User: akke
 * Date: 27/03/2017
 * Time: 14:02
 */
namespace LaravelDaily\Timezones;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TimezonesController extends Controller
{

    public function index($timezone = NULL)
    {
        $current_time = ($timezone)
            ? Carbon::now(str_replace('-','/',$timezone))
            : Carbon::now();
        return view('timezones::welcome', compact('current_time'));
    }

}