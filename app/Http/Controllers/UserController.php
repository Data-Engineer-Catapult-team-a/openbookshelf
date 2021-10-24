<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;



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


    public function find()
    {
    }
}
