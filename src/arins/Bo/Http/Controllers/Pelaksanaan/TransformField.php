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

        if (isset($paDataField['startdt'])) {

            // $startdt = $dataField['meetingdt'].' '.$dataField['startdt'].':00'; 
            $startdt = $dataField['startdt'];
            $dataField['startdt'] = ConvertDate::strDatetimeToDate($startdt);

        }

        if (isset($paDataField['enddt'])) {

            // $enddt = $dataField['meetingdt'].' '.$dataField['enddt'].':00'; 
            $enddt = $dataField['enddt']; 
            $dataField['enddt'] = ConvertDate::strDatetimeToDate($enddt);
    
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

