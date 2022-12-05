<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PulldownMain extends Model
{
    protected $fillable = [
        'jname',
        'name',
        'conditions'
    ];

    public function PulldownDetails()
    {
        return $this->hasMany('App\Models\PulldownMain');
    }
}
