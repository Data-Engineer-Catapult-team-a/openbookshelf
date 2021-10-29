<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ReviewList;


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
        $user = User::inRandomOrder()->first();
        $id=$user['id'];
        $reviews =ReviewList::where("user_id", $id)->get();
        return view('user.index',[
            "user" => $user,
            "reviews" => $reviews
        ]);
    }
}
