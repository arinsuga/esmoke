<?php

namespace Arins\Repositories\Pelaksanaan;

use Arins\Repositories\BaseRepository;
use Arins\Repositories\Pelaksanaan\PelaksanaanRepositoryInterface;

class PelaksanaanRepository extends BaseRepository implements PelaksanaanRepositoryInterface
{

    public function __construct($parData)
    {
        parent::__construct($parData);

        $this->inputField = [
            'kegiatan_id' => null,
            'jenis_id' => null,
            'subjenis1_id' => null,
            'subjenis2_id' => null,
            'statuspelaksanaan_id' => null,
            'progress' => null,
            'subject' => null,
            'description' => null,
            'resolution' => null,
            'startdt' => null,
            'enddt' => null,
            'targetdt' => null,
            'employee_id' => null,
            'employeedept_id' => null,
            'employeesubdept_id' => null,
            'enduser_id' => null,
            'enduserdept_id' => null,
            'endusersubdept_id' => null,
            'image' => null,
            'created_by' => null,
            'updated_by' => null,
        ];

        $this->validateInput = [
            'kegiatan_id' => 'required',
            'subject' => 'required',
            'description' => 'required',
            'startdt' => 'required',
            'enddt' => 'required',
            'employee_id' => 'required',
        ];

        $this->validateField = [
            'kegiatan_id' => 'required',
            'statuspelaksanaan_id' => 'required',
            'subject' => 'required',
            'description' => 'required',
            'startdt' => 'required',
            'enddt' => 'required',
            'employee_id' => 'required',
        ];

    }

    public function byJenis($id)
    {
        return $this->model->where('jenis_id', $id)->get();
    }

    public function byKegiatan($id)
    {
        return $this->model->where('kegiatan_id', $id)->get();
    }


}