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
            'exception' => null,
            'created_by' => null,
            'updated_by' => null,
        ];

        $this->validateInput = [
            'kegiatan_id' => 'required',
            // 'subject' => 'required',
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

    public function existEmployeeStartEnd($employeeId, $startdt, $enddt, $pelaksanaanId = null)
    {
        $result = -1;

        if ( isset($employeeId) && isset($startdt) && isset($enddt) ) {

            $result = 0;
            $statuspelaksanaan_id = 1; //open

            //id
            $data1 = $this->model::where('employee_id', $employeeId);
            $data2 = $this->model::where('employee_id', $employeeId);
            $data3 = $this->model::where('employee_id', $employeeId);

            //statuspelaksanaan_id
            $data1 = $data1->where('statuspelaksanaan_id', $statuspelaksanaan_id);
            $data2 = $data2->where('statuspelaksanaan_id', $statuspelaksanaan_id);
            $data3 = $data3->where('statuspelaksanaan_id', $statuspelaksanaan_id);

            if ($pelaksanaanId != null) {

                $data1 = $data1->where('id', '!=', $pelaksanaanId);
                $data2 = $data2->where('id', '!=', $pelaksanaanId);
                $data3 = $data3->where('id', '!=', $pelaksanaanId);
    
            }

            //startdt
            $data1 = $data1->where('startdt', '<=', $startdt);
            $data1 = $data1->where('enddt', '>=', $startdt);

            //enddt
            $data2 = $data2->where('startdt', '<=', $enddt);
            $data2 = $data2->where('enddt', '>=', $enddt);

            //startdt - enddt
            $data3 = $data3->where('startdt', '>=', $startdt);
            $data3 = $data3->where('enddt', '<=', $enddt);


            $data1 = $data1->get();
            $data2 = $data2->get();
            $data3 = $data3->get();

            $result = count($data1);
            if ($result <= 0) {
                
                $result = count($data2);
                if ($result <= 0) {
                    $result = count($data3);
                } //end if
    
            } //end if
    

        } //end if      

        return $result;
    }

    public function byCustom($filter, $take=null)
    {
        
        // $result = $this->model::where('room_id', $id);
        $result = null;

        //employee_id
        if (isset($filter['employee_id'])) {

            $result = $this->model::where('employee_id', $filter['employee_id']);

        }

        //kegiatan_id
        if (isset($filter['kegiatan_id'])) {

            if ($result != null) {
                $result = $result->where('kegiatan_id', $filter['kegiatan_id']);
            } else {
                $result = $this->model::where('kegiatan_id', $filter['kegiatan_id']);
            }

        }

        //subject
        if (isset($filter['subject'])) {

            if ($result != null) {
                $result = $result->where('subject', 'like', '%' . $filter['subject'] . '%');
            } else {
                $result = $this->model::where('subject', 'like', '%' . $filter['subject'] . '%');
            }

        }

        //startdt - enddt
        if (
            isset($filter['startdt']) &&
            isset($filter['enddt'])
        ) {

            //startdt
            if ($result != null) {
                $result = $result->where('startdt', '<=', $filter['startdt']);
                $result = $result->where('enddt', '>=', $filter['startdt']);
            } else {
                $result = $this->model::where('startdt', '<=', $filter['startdt']);
                $result = $this->model::where('enddt', '>=', $filter['startdt']);
            }
            //enddt
            $result = $result->where('start', '<=', $filter['enddt']);
            $result = $result->where('enddt', '>=', $filter['enddt']);

        } elseif ( isset($filter['startdt']) && !isset($filter['enddt']) ) {

            //startdt
            if ($result != null) {
                $result = $result->where('startdt', '<=', $filter['startdt']);
                $result = $result->where('enddt', '>=', $filter['startdt']);
            } else {
                $result = $this->model::where('startdt', '<=', $filter['startdt']);
                $result = $result->where('enddt', '>=', $filter['startdt']);
            }

        } elseif ( !isset($filter['startdt']) && isset($filter['enddt']) )  {

            //enddt
            if ($result != null) {
                $result = $result->where('startdt', '<=', $filter['enddt']);
                $result = $result->where('enddt', '>=', $filter['enddt']);
            } else {
                $result = $this->model::where('startdt', '<=', $filter['enddt']);
                $result = $result->where('enddt', '>=', $filter['enddt']);
            }

        }//end if


        //statuspelaksanaan_id
        if (isset($filter['statuspelaksanaan_id'])) {

            if ($result != null) {
                $result = $result->where('statuspelaksanaan_id', $filter['statuspelaksanaan_id']);
            } else {
                $result = $this->model::where('statuspelaksanaan_id', $filter['statuspelaksanaan_id']);
            }

        }
        
        if ($result != null) {
            
            if ($take == null) {
                $result = $result->get();
            } else {
                $result = $result->take($take)->get();
            }

        } else {

            if ($take == null) {
                $result = $this->model::all();
            } else {
                $result = $this->model::take($take)->all();
            }
            
        }

        return $result;
    }

    public function byJenis($id)
    {
        return $this->model->where('jenis_id', $id)->get();
    }

    public function byKegiatan($id)
    {
        return $this->model->where('kegiatan_id', $id)->get();
    }

    public function byStatus($statusId)
    {
        return $this->model->where('statuspelaksanaan_id', $statusId)->get();
    }

    public function byStatusOpen()
    {
        return $this->byStatus(1);
    }

    public function byStatusClose()
    {
        return $this->byStatus(2);
    }

    public function byStatusCancel()
    {
        return $this->byStatus(3);
    }

    public function byStatusReject()
    {
        return $this->byStatus(4);
    }

    public function byStatusPending()
    {
        return $this->byStatus(5);
    }

}