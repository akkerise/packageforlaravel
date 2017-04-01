<?php

namespace App\Http\Controllers;
use App\Repository\PostRepo as repo;
use App\Validation\PostValidator;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $repo;

    public function __construct(repo $repo)
    {
        $this->repo = $repo;
    }

    public function edit($id = NULL){
        return view('admin.edit')->with([
            'data' => $this->repo->postOfId($id)
        ]);
    }

    public function editPost(Request $request){
        $all = $request->all();
        $validate = PostValidator::validate($all);

    }

}
