<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = "tb_city";
    protected $fillable = ['province_id', 'city'];

    public function province()
    {
        return $this->belongsTo('App\Province');
    }
}
