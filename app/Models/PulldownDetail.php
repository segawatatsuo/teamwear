<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PulldownDetail extends Model
{
    protected $fillable = [
        'price',
        'value',
        'conditions',
        'pulldown_mains_id',
    ];

    public function PulldownMain()
    {
        return $this->belongsTo('App\Models\PulldownMain');
    }
}
