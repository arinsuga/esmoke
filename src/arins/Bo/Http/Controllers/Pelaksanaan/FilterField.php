<?php

namespace Arins\Bo\Http\Controllers\Pelaksanaan;

use Illuminate\Http\Request;
use Auth;

use Arins\Facades\ConvertDate;

trait FilterField
{

    protected function filters($request) {

        $startdt = null;
        $enddt = null;

        //Start date
        if ($request->input('startdt') != null) {

            $startdt = $request->input('startdt') . ' 00:00:00';

        } //endif

        //End date
        if ($request->input('enddt') != null) {

            $enddt = $request->input('enddt') . ' 00:00:00';

        } //endif

        $data = [
            'employee_id' => $request->input('employee_id'),
            'kegiatan_id' => $request->input('kegiatan_id'),
            'startdt' => ConvertDate::strDatetimeToDate($startdt),
            'enddt' => ConvertDate::strDatetimeToDate($enddt),
            'subject' => $request->input('subject'),
        ];
        $filter = $data;

        return $filter;
    }

}

