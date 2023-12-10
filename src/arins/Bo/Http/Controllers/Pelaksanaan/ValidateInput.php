<?php

namespace Arins\Bo\Http\Controllers\Pelaksanaan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;

trait ValidateInput
{

    //Overrideable from WebController method
    protected function validateStore($data, $validateInput, $validationMessages) {
        $result = true;

        //Basic validation
        $this->validator = Validator::make($data, $validateInput, $validationMessages);
        if ($this->validator->fails()) {

            $result = false;

        } //end if validator

        //Custom validation
        $employee_id = $data['employee_id'];
        $startdt = $data['startdt'];
        $enddt = $data['enddt'];
        $validationData = $this->data->existEmployeeStartEnd($employee_id, $startdt, $enddt);
        if ( ($validationData < 0) || ($validationData > 0) ) {

            $result = false;
            if ($validationData > 0) {

                $this->validator->errors()
                ->add('custom', 'Karyawan sudah ada kegiatan pada periode ' . $data['startdt'] . ' s/d ' . $data['enddt']);

            } //end if

        } //end if

        return $result;
    }

    //Overrideable from WebController method
    protected function validateUpdate($data, $validateInput, $validationMessages) {
        $result = true;

        //Basic validation
        $this->validator = Validator::make($data, $validateInput, $validationMessages);
        if ($this->validator->fails()) {

            $result = false;

        } //end if validator

        //Custom validation
        $employee_id = $data['employee_id'];
        $startdt = $data['startdt'];
        $enddt = $data['enddt'];
        $validationData = $this->data->existEmployeeStartEnd($employee_id, $startdt, $enddt);
        if ( ($validationData < 0) || ($validationData > 0) ) {

            $result = false;
            if ($validationData > 0) {

                $this->validator->errors()
                ->add('custom', 'Karyawan sudah ada kegiatan pada periode ' . $data['startdt'] . ' s/d ' . $data['enddt']);

            } //end if

        } //end if

        return $result;
    }

}

