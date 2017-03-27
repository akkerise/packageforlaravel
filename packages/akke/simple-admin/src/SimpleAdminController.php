<?php
/**
 * Created by PhpStorm.
 * User: akke
 * Date: 27/03/2017
 * Time: 16:30
 */
namespace AkKe\SimpleAdmin;

use App\Http\Controllers\Controller;
use App\User;

class SimpleAdminController extends Controller {

    // public function __construct() {
    //     $this->middleware('auth');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::all();

        return view('SimpleAdmin::admin',compact('users'));
    }
}