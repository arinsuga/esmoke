<?php

namespace Arins\Models;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{

    protected $table = 'jenis';

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

    public function kegiatan()
    {
        return $this->hasMany('Arins\Models\Kegiatan');
    }

    public function pelaksanaan()
    {
        return $this->hasMany('Arins\Models\Pelaksanaan');
    }

}
