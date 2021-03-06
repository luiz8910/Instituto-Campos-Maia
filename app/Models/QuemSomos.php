<?php

namespace Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class QuemSomos extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = "quemsomos";

    protected $fillable = [
        "description", 'whyUs', 'ourValues', 'vision', 'linkVideo'
    ];

}
