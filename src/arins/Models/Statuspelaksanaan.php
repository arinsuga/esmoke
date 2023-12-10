<?php

namespace Arins\Models;

use Illuminate\Database\Eloquent\Model;

class Statuspelaksanaan extends Model
{

    protected $table = 'statuspelaksanaan';

    protected $fillable = [
        'name',
        'description',
        'image',
        'numsort',
        'status',
        'created_by',
        'updated_by',
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function pelaksanaan()
    {
        return $this->hasMany('Arins\Models\Pelaksanaan');
    }

}
