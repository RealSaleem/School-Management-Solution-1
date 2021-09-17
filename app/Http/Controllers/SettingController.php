<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\DiscountSetting;
use Validator;

class SettingController extends Controller
{

    public function index()
    {
        $setting = DiscountSetting::where('user_id', Auth::user()->id)->get();
        return response(['data' => $setting, 'message' => 'DiscountSetting detail']);
    }

    public function update(Request $request)
    {
        $input = $request->all();

        if(isset($input)) {

            $setting = DiscountSetting::where('user_id', Auth::user()->id)->get();

            if(isset($input['approve_reviews'])) {
                $setting->approve_reviews = $input['approve_reviews'];
            } else if($input['enable_disable_system']) {
                $setting->approve_reviews = $input['enable_disable_system'];
            }

            $setting->save();

            if($setting) {
                return response(['status' => ['success' => 200], 'message' => 'DiscountSetting updated successfully']);
            } else {
                return response(['status' => ['failed' => 403], 'message' => 'DiscountSetting cannot be updated']);
            }

        }

        return response(['message' => 'Validation errors', 'errors' =>  $validator->errors(), 'status' => false], 422);

    }

    public function enableVoucherSystem($status)
    {
        if(isset($status)){

            $setting = DiscountSetting::where(['user_id' => Auth::user()->id])->update(['enable_disable_system' => $status]);

            if($setting) {
                return response(['status' => ['success' => 200], 'message' => 'Voucher system updated']);
            } else {
                return response(['status' => ['failed' => 403], 'message' => 'Voucher system cannot be updated']);
            }
        }

        return response(['message' => 'Validation errors', 'errors' =>  $validator->errors(), 'status' => false], 422);
    }

}
