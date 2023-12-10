<?php

namespace Arins\Bo\Http\Controllers\Kegiatan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Arins\Http\Controllers\WebController;

use Arins\Repositories\Kegiatan\KegiatanRepositoryInterface;
use Arins\Repositories\Jenis\JenisRepositoryInterface;

// use Arins\Facades\Response;
// use Arins\Facades\Filex;
// use Arins\Facades\Formater;
// use Arins\Facades\ConvertDate;

class KegiatanController extends WebController
{
    protected $dataJenis;

    public function __construct(KegiatanRepositoryInterface $parData,
                                JenisRepositoryInterface $parDataJenis)
    {
        $this->sViewName = 'kegiatan';

        parent::__construct();

        $this->data = $parData;
        $this->dataJenis = $parDataJenis;

        $this->dataModel = [
            'jenis' => $this->dataJenis->all(),
        ];        

        /**
         * overrided property.\
         * Set this properties to empty array if you want to use default validation message
         * Set this properties to any like example if you want to customize validation message
         */
        // $this->validationMessages = [
        //     //Example:
        //     // 'required' => 'kolom :attribute wajib diisi.',
        // ];

    }

    // public function getJson($taskType_id = null) {

    //     $model = $this->data->byActivitytypeByTasktype($this->activitytype_id, $taskType_id);
    //     $data['results'] = [];

    //     foreach ($model as $key => $item) {
    //         # code...
    //         array_push($data['results'],['id' => $item->id, 'text' => $item->name]);
    //     } //end loop
    //     //$data['pagination'] = ['more' => true];

    //     return response()->json($data);
    // } //end method

}
