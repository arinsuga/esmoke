<?php

namespace Arins\Repositories\Jenis;

use Arins\Repositories\BaseRepository;
use Arins\Repositories\Jenis\JenisRepositoryInterface;

class JenisRepository extends BaseRepository implements JenisRepositoryInterface
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