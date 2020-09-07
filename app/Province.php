<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Province extends Model
{
    protected $table = "tb_province";
    protected $fillable = ['province'];

    public function city()
    {
        return $this->BelongsTo('App\City');
    }
}
