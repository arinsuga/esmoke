<?php

namespace Arins\Models;

use Illuminate\Database\Eloquent\Model;

class Pelaksanaan extends Model
{

    protected $table = 'pelaksanaan';

    protected $fillable = [
        'kegiatan_id',
        'jenis_id',
        'subjenis1_id',
        'subjenis2_id',
        'statuspelaksanaan_id',
        'progress',
        'subject',
        'description',
        'resolution',
        'startdt',
        'enddt',
        'targetdt',
        'employee_id',
        'employeedept_id',
        'employeesubdept_id',
        'enduser_id',
        'enduserdept_id',
        'endusersubdept_id',
        'image',
        'created_by',
        'updated_by',
    ];

    protected $dates = [
        'startdt',
        'enddt',
        'targetdt',
        'created_at',
        'updated_at',
    ];

    public function employee()
    {
        return $this->belongsTo('Arins\Models\Employee');
    }

    public function jenis()
    {
        return $this->belongsTo('Arins\Models\Jenis');
    }

    public function kegiatan()
    {
        return $this->belongsTo('Arins\Models\Kegiatan');
    }

}
