<?php

namespace App\Http\Controllers;

use App\Posts;
use App\Posts1;
use App\Users;
use App\Users1;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function karyawan(){
        $data = [
          Users::first(),
          Users1::first(),
        ];
        // $posts =[

        //     Posts1::all(),
        //     Posts::all(),
        // ];
        return view('navbar.karyawan',['data_karyawan' => $data]);
    }
    public function home(){
        $data = Users::all();
        $posts = Posts::all();

        $users = \App\Posts::select(DB::raw("COUNT(*) as count"))
        -> whereYear('post_date',date('Y'))
        -> groupBy(DB::raw("Month(post_date)"))
        -> pluck('count');
        
        $month = \App\Posts::select(DB::raw("Month(post_date) as month"))
        -> whereYear('post_date',date('Y'))
        -> groupBy(DB::raw("Month(post_date)"))
        -> pluck('month');
        
        $datas = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach($month as $index => $month){
            $datas[$month] = $users[$index];
        }
        $categories = [];
        foreach($data as $tgl){
            $categories[] = $tgl->name;
        }
        return view('navbar.Home',['posting' => $posts, 'user'=>$data,'categories'=> $categories, 'datas'=>$datas]);
    }
    public function detail($ID){
        
        // $karyawan =   Users::where('user_nicname', $ID)->first();
        // $ID->where('post_author', Auth::users()->ID);
        // $karyawan =   Users::where('user_nicname', $user_nicename)->first();
        // $karyawan =   Users1::find($ID);
        // $karyawan =   Users::find($ID);

        // $posts = \App\Posts::all();
        // $posts = \App\Posts1::all();
        // $posts = \App\Posts1::all();
         
        $karyawan = [
            Users::find($ID),
            Users1::find($ID),
        ];
        $posts =[

            Posts1::all(),
            Posts::all(),
        ];
        
        // dd($karyawan);
        // $posts = Posts1::all();
        // $categories = [];
        // foreach($posts as $ps){
        //     $categories[] = $ps->posting;
        // //     // $data[] = $karyawan->posts()->where('id', $ps->id)->first();
        // }
        dd($karyawan);
        return view('navbar.detail',['karyawan' => $karyawan]);
    // }
    }
}
