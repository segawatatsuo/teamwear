<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maker extends Model
{
    protected $fillable = [
        'content',
        'person',
        'address',
        'tel',
        'fax',
        'mail',
    ];

    public function pulldown()
    {
        //自モデルから全データを取得する。取得した値はcollection型なので配列に変換する。
        $contents=$this::get()->toArray();
        //配列をidとcontentだけの連想配列に変換してFormファサードでプルダウンに使用する
        $pulldown=[];
        foreach ($contents as $val) {
            $pulldown += array($val['content']=>$val['content']);
        }
        return $pulldown;
    }
}
