<?php

namespace Arins\Bo\Http\Controllers\Pelaksanaan;

use Illuminate\Http\Request;
use Auth;

use Arins\Facades\ConvertDate;
use Arins\Facades\Formater;

trait TransformField
{

    //Overrideable from WebController method
    protected function transformFieldCreate($paDataField) {
        $dataField = $paDataField;
        $dataField['statuspelaksanaan_id'] = 1; //default open on create

        if (isset($paDataField['startdt'])) {

            // $startdt = $dataField['meetingdt'].' '.$dataField['startdt'].':00'; 
            $startdt = $dataField['startdt'];
            $dataField['startdt'] = ConvertDate::strDateToDate($startdt);

        }

        if (isset($paDataField['enddt'])) {

            // $enddt = $dataField['meetingdt'].' '.$dataField['enddt'].':00'; 
            $enddt = $dataField['enddt']; 
            $dataField['enddt'] = ConvertDate::strDateToDate($enddt);

        }

        return $dataField;
    }

    //Overrideable from WebController method
    protected function transformFieldEdit($paDataField) {

        $dataField = $paDataField;

        return $dataField;
    }

    //Overrideable method
    protected function transformFieldUpdate($paDataField) {

        $dataField = $this->transformFieldCreate($paDataField);

        return $dataField;
    }

}

