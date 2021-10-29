<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RakutenRws_Client;

class RakutenApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_rakuten_items(Request $request)
    {
        $client = new RakutenRws_Client();

        define("RAKUTEN_APPLICATION_ID", config('app.rakuten_id'));
        define("RAKUTEN_APPLICATION_SEACRET", config('app.rakuten_key'));

        $client->setApplicationId(RAKUTEN_APPLICATION_ID);

        $title = $request->search;
        // var_dump($title);
        // exit();
        $response = $client->execute('BooksBookSearch', array(
            'title' => $title
        ));

        // var_dump($response);
        // exit();

        if ($response->isOk()) {
            $items = array();

            foreach ($response as $key => $rekutenItem) {
                $items[$key]['title'] = $rekutenItem['title'];
                $items[$key]['isbn'] = $rekutenItem['isbn'];
                $items[$key]['mediumImageUrl'] = $rekutenItem['mediumImageUrl'];
                $items[$key]['publisherName'] = $rekutenItem['publisherName'];
                $items[$key]['itemUrl'] = $rekutenItem['itemUrl'];
            }
        } else {
            echo 'Error:' . $response->getMessage();
        }
        // var_dump($items);
        // exit();
        if (empty($items)) {
            return redirect()->route('Books.create')->with('message', "{$title}に関する本は見つかりませんでした。");
        } else {
            return view('result', ["result1" => $items]);
        }
    }
}
