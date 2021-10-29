<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReviweList;
use Validator;
use Auth;
// use App\Models\Books;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('book.search');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       $result = $request->request->all();
        return view('registration',["result"=>$result]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'comment' => 'required | max:200'
        ]);
        // バリデーション:エラー
        if ($validator->fails()) {
            return redirect()
            ->route('Books.index')
            ->withInput()
            ->withErrors($validator);
        }
        // $data1=$request->result1->result1;
        // dd($data1);
        $redefinition['isbn'] = $request->result1['isbn'];
        $redefinition['title'] = $request->result1['title'];
        $redefinition['publisherName'] = $request->result1['publisherName'];
        $redefinition['mediumImageUrl'] = $request->result1['mediumImageUrl'];
        $redefinition['itemUrl'] = $request->result1['itemUrl'];
        $redefinition['evaluation'] = $request['evaluation'];
        $redefinition['comment'] = $request['comment'];
        $id = Auth::id();
        $redefinition['user_id'] = $id;
        // dd($redefinition);
        $result = ReviweList::create($redefinition);
        return view('book.search');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
