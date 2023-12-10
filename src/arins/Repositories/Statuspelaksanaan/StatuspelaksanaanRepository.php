<?php

namespace Arins\Repositories\Statuspelaksanaan;

use Arins\Repositories\BaseRepository;
use Arins\Repositories\Statuspelaksanaan\StatuspelaksanaanRepositoryInterface;

class StatuspelaksanaanRepository extends BaseRepository implements StatuspelaksanaanRepositoryInterface
{
    public function __construct($parData)
    {
        parent::__construct($parData);

        $this->inputField =[
            'name' => null,
            'description' => null,
            'image' => null,
            'numsort' => null,
            'status' => null,
        ];

        $this->validateInput = [
            'name' => 'required',
            'description' => 'required',
        ];

        $this->validateField = [
            'name' => 'required',
            'description' => 'required',
            'image' => null,
            'numsort' => 'required',
            'status' => 'required',
         ];
        
    }
}