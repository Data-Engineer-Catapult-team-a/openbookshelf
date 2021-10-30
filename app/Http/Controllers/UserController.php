<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ReviewList;
use Auth;


class UserController extends Controller
{
    //
    public function search()
    {
        $users = User::orderBy('id')->where(function ($query) {

            // 検索機能
            if ($search = request('search')) {
                $query->where('name', 'LIKE', "%{$search}%");
            }

            // 8投稿毎にページ移動
        })->paginate(10);
        return view('user.search',[
            "users" => $users
        ]);
    }


    public function index()
    {
        $myid=Auth::id();

        $user = User::inRandomOrder()->where('id','!=',$myid)->first();

        $id=$user['id'];
        $reviews =ReviewList::where("user_id", $id)->get();
        return view('user.index',[
            "user" => $user,
            "reviews" => $reviews
        ]);
    }

    public function mypage(){
        $myid=Auth::id();
        
        $reviews =ReviewList::where("user_id", $myid)->get();
        $user =User::where("id", $myid)->first();
        return view('user.mypage',[
            "reviews" => $reviews,
            "user" => $user
        ]);
    }
}
