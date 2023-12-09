<?php

namespace Arins\Models;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{

    protected $table = 'kegiatan';

    protected $fillable = [
        'jenis_id',
        'subjenis1_id',
        'subjenis2_id',
        'koordinator_id',
        'statuskegiatan_id',
        'progress',
        'name',
        'description',
        'target_startdt',
        'target_enddt',
        'actual_startdt',
        'actual_enddt',
        'image',
        'numsort',
        'created_by',
        'updated_by',
    ];

    protected $dates = [
        'target_startdt',
        'target_enddt',
        'actual_startdt',
        'actual_enddt',
        'created_at',
        'updated_at',
    ];

    public function jenis()
    {
        return $this->belongsTo('Arins\Models\Jenis');
    }

    public function pelaksanaan()
    {
        return $this->hasMany('Arins\Models\Pelaksanaan');
    }

}
