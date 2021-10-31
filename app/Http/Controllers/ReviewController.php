<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\ReviewList;
use App\Models\User;

class ReviewController extends Controller
{
    //
    public function go_personal_page(Request $request, int $user_id )
    {
        $reviews =ReviewList::where("user_id", $user_id)->get();
        $user = User::where("id", $user_id)->first();
        return view('user.personal_page',[
            "reviews" => $reviews,
            "user" => $user
        ]);

    }

    public function go_personal_review(Request $request, int $id)
    {
        $reviews =ReviewList::where("id", $id)->get();
        return view('user.personal_review',[
            "reviews" => $reviews
        ]);
    }

    public function destroy(Request $request, int $id)
    {
        $result = ReviewList::find($id)->delete();
        return redirect()->route('user.mypage');
    }
}
