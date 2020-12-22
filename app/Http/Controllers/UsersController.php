<?php

namespace App\Http\Controllers;

use App\PostsModel;
use App\UsersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
   public function __construct()
   {
       $this->UsersModel = new UsersModel();
       $this->PostsModel = new PostsModel();
   }
   public function index(){
       $data = [
        $this->UsersModel->alldata(),
        $this->UsersModel->alldata1(),
    ];
    $post = [
        $this->PostsModel->alldata(),
        $this->PostsModel->alldata1(),
    ];
    // dd($post);
    return view('navbar.after-insert',['data'=> $data]);
   }
}
