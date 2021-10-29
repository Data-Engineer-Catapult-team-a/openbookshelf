<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class review_listsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('review_lists')->insert([
            [
                'id' => '1',
                'user_id' => '3',
                'isbn' => '9784334777456',
                'evaluation' => '3',
                'title' => 'ルージュ',
                'publisherName' => '光文社',
                'mediumImageUrl' => 'https://thumbnail.image.rakuten.co.jp/@0_mall/book/cabinet/7456/9784334777456.jpg?_ex=120x120',
                'itemUrl' => 'https://books.rakuten.co.jp/rb/15696282/',
                'comment' => '世田谷区祖師谷で起きた母子三人惨殺事件。'
            ],
            [
                'id' => '2',
                'user_id' => '3',
                'isbn' => '9784087497335',
                'evaluation' => '2',
                'title' => '太陽を、つかむ男',
                'publisherName' => '集英社',
                'mediumImageUrl' => 'https://thumbnail.image.rakuten.co.jp/@0_mall/book/cabinet/7335/9784087497335.jpg?_ex=120x120',
                'itemUrl' => 'https://books.rakuten.co.jp/rb/478222/',
                'comment' => '経営危機に直面した佐世保重工（ＳＳＫ）は、銀行団と大株主間の思惑、利害が複雑に絡み合い、再建計画は漂流を続けていた。'
            ],
            [
                'id' => '3',
                'user_id' => '2',
                'isbn' => '9784122066762',
                'evaluation' => '1',
                'title' => '硝子の太陽',
                'publisherName' => '中央公論新社',
                'mediumImageUrl' => 'https://thumbnail.image.rakuten.co.jp/@0_mall/book/cabinet/6762/9784122066762.jpg?_ex=120x120',
                'itemUrl' => 'https://books.rakuten.co.jp/rb/15708413/',
                'comment' => '沖縄の活動家死亡事故を機に反米軍基地デモが全国で激化する中、新宿署の東弘樹警部補は、「左翼の親玉」を取調べていた。'
            ],
            [
                'id' => '4',
                'user_id' => '1',
                'isbn' => '9784909876041',
                'evaluation' => '3',
                'title' => '9784909876041',
                'publisherName' => '朝日学生新聞社',
                'mediumImageUrl' => 'https://thumbnail.image.rakuten.co.jp/@0_mall/book/cabinet/6041/9784909876041.jpg?_ex=120x120',
                'itemUrl' => 'https://books.rakuten.co.jp/rb/16167151/',
                'comment' => '生徒会を辞めてぽっかりと時間ができてしまった高２の華。'
            ],
            [
                'id' => '5',
                'user_id' => '2',
                'isbn' => '9784062630863',
                'evaluation' => '2',
                'title' => '国境の南、太陽の西',
                'publisherName' => '講談社',
                'mediumImageUrl' => 'https://thumbnail.image.rakuten.co.jp/@0_mall/book/cabinet/0863/9784062630863.jpg?_ex=120x120',
                'itemUrl' => 'https://books.rakuten.co.jp/rb/757161/',
                'comment' => '今の僕という存在に何らかの意味を見いだそうとするなら、僕は力の及ぶかぎりその作業を続けていかなくてはならないだろうーたぶん。'
            ],
            [
                'id' => '6',
                'user_id' => '2',
                'isbn' => '9784334777456',
                'evaluation' => '4',
                'title' => 'ルージュ',
                'publisherName' => '光文社',
                'mediumImageUrl' => 'https://thumbnail.image.rakuten.co.jp/@0_mall/book/cabinet/7456/9784334777456.jpg?_ex=120x120',
                'itemUrl' => 'https://books.rakuten.co.jp/rb/15696282/',
                'comment' => 'とても面白い。'
            ]
        ]);
    }
}
