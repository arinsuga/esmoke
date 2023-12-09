<?php

namespace Arins\Repositories\Kegiatan;

use Arins\Repositories\BaseRepository;
use Arins\Repositories\Kegiatan\KegiatanRepositoryInterface;

class KegiatanRepository extends BaseRepository implements KegiatanRepositoryInterface
{

    public function __construct($parData)
    {
        parent::__construct($parData);

        $this->inputField = [
            'jenis_id' => null,
            'subjenis1_id' => null,
            'subjenis2_id' => null,
            'koordinator_id' => null,
            'statuskegiatan_id' => null,
            'progress' => null,
            'name' => null,
            'description' => null,
            'target_startdt' => null,
            'target_enddt' => null,
            'actual_startdt' => null,
            'actual_enddt' => null,
            'image' => null,
            'numsort' => null,
            'created_by' => null,
            'updated_by' => null,
        ];

        $this->validateInput = [
            'name' => 'required',
            'description' => 'required',
        ];

        $this->validateField = [
            'name' => 'required',
            'description' => 'required',
            'numsort' => 'required',
            'status' => 'required',
        ];

    }

    public function byJenis($id)
    {
        return $this->model->where('jenis_id', $id)->get();
    }
}