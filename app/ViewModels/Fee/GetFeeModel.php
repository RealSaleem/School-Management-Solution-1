<?php

namespace App\ViewModels\Fee;

use App\Core\RequestExecutor;
use App\ViewModels\BaseViewModel;
use App\Models\Fee;
use Auth;

class GetFeeModel extends BaseViewModel{

public $action_type;

    public static function load($request)
    {

$student_id  = $request->student_id;
$action_type = $request->action_type;

        if($action_type == 'get_record'){

        $columns = [
            'id',         
            'status',     
            'month',      
            'student_name',
            'fee',
            'recived_fee',
            'fee_type',   
            'recived_fee',
        ];
        $StdFees = Fee::where('school_id',Auth::user()->school->id)
                            ->where('student_id',$student_id)->get();


    $StdFees->transform(function ($fee) {
            
            $data = [
                'id'            => $fee->id,
                'status'        => ($fee->status == 1) ? 'Paid' : 'Unpaid',
                'month'         => $fee->month,
                'student_name'  => getStudentName($fee->student_id),
                'fee_type'      => getFeeType($fee->fee_type_id),
                'fee'           => $fee->fee,               
                'recived_fee'   => $fee->recived,
            ];

            return (object)$data;
        });
            return [ 'data' =>  $StdFees];
        }else{
             return [ 'data' => null ];
        }



       
    }
}
