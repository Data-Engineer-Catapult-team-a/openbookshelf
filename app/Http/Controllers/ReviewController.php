<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RakutenRws_Client;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $client = new RakutenRws_Client();

        define("RAKUTEN_APPLICATION_ID"     , config('app.rakuten_id'));
        define("RAKUTEN_APPLICATION_SEACRET", config('app.rakuten_key'));

        $client->setApplicationId(RAKUTEN_APPLICATION_ID);

        // $title = $request->input('title');
        $title = "Laravel";
        // api叩く
        $response = $client->execute('BooksBookSearch', array(
            //入力パラメーター
            'title' => $title,
        ));


        // レスポンスが正しいかをisOk()で確認
        if ($response->isOk()) {
        
        $items = array();

            foreach ($response as $key => $rekutenItem) {
                $items[$key]['title'] = $rekutenItem['title'];
                $items[$key]['author'] = $rekutenItem['author'];
                $items[$key]['itemPrice'] = $rekutenItem['itemPrice'];

                // if($rekutenItem['imageFlag']) {
                //     $imgSrc = $rekutenItem['mediumImageUrls'][0]['imageUrl'];
                //     $items[$key]['img_src'] = preg_replace('/^http:/', 'https:', $imgSrc);
                // }
        }
        } else {
            echo 'Error:'.$response->getMessage();
    }
    return view('index', ["items"=>$items]);
}
    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
