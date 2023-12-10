<?php

namespace Arins\Bo\Http\Controllers\Jenis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Arins\Http\Controllers\WebController;

use Arins\Repositories\Jenis\JenisRepositoryInterface;

// use Arins\Facades\Response;
// use Arins\Facades\Filex;
// use Arins\Facades\Formater;
// use Arins\Facades\ConvertDate;

class JenisController extends WebController
{
    protected $dataActivitytype, $dataTasktype;

    public function __construct(JenisRepositoryInterface $parData)
    {
        $this->sViewName = 'jenis';

        parent::__construct();

        $this->data = $parData;

        $this->dataModel = [
            // 'tasktype' => $this->dataTasktype->byActivitytype($this->activitytype_id),
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
