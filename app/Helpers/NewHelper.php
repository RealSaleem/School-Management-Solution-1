<?php

use App\Models\Plugin;
use App\Models\ProductsSampleData;
use App\Models\FeeType;
use App\Models\Student;
use App\Models\Fee;

if (!function_exists('remove_special_characters')) {
    function remove_special_characters($string)
    {
        return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    }
}

if (!function_exists('date_time_am_pm')) {
    function date_time_am_pm($date)
    {
        return date("Y-m-d h:i:s A", strtotime($date));
    }
}



if (!function_exists('getFeeType')) {
    function getFeeType($id)
    {
         $fee_type = FeeType::find($id);

   return (isset($fee_type->fee_type) && $fee_type->fee_type != null) ? $fee_type->fee_type : 'N/A';
    }
}

if (!function_exists('getStudentName')) {
    function getStudentName($id)
    {
         $std = Student::find($id);
   return $std->name;
    }
}

if (!function_exists('getReceptNumber')) {
    function getReceptNumber()
    {
        $fee = Fee::where('school_id',Auth::user()->school->id)->orderBy('recpt_no','DESC')->first();
         dd($fee->recpt_no);
        if(is_null($fee->recpt_no)){
        return 'INV-0001';
        }else{

        }
       

    }
}







if (!function_exists('getReligion')) {
    function getReligion($id)
    {
        $religion = "";
        if($id == 1){
             $religion = 'Islam'; 
        }else if($id == 2){
              $religion = 'Cristian';
        }else if($id == 3){
              $religion = 'Hindu';
        }else if($id == 4){
              $religion = 'Sikh';
        }
        return $religion;
    }
}





if (!function_exists('getStringCode')) {
    function getStringCode($string)
    {
       
$words = explode(" ", $string);
$code = "";

foreach ($words as $w) {
  $code .= $w[0];
}

return $code;

    }
}







if (!function_exists('image_path')) {
    function upload_image_path($path)
    {
        return str_replace("public", "", \URL::to('/')).'/uploads/'.$path;
    }
}

if (!function_exists('orderClass')) {
    function orderClass($status)
    {
        $class = 'badge badge-success';
        if(strtolower($status) == 'failed' || strtolower($status) == 'cancelled' || strtolower($status) == 'void'){
            $class = 'badge badge-danger';
        }
        return $class;
    }
}
if (!function_exists('get_public_path')) {
    function get_public_path()
    {
        return str_replace("public", "", \URL::to('/'));
    }
}




if (!function_exists('checkPlugin')) {
    function checkPlugin($plugin_name)
    {
        $store = Auth::user()->store_id;
        $plugin = Plugin::where('name', $plugin_name)
            ->orWhere('slug', $plugin_name)
            ->whereHas('store_plugin', function ($q) use ($store) {
                return $q->where('store_id', $store)->where('active', 1);
            })
            ->with('store_plugin')
            ->first();

        return $plugin;
    }
}
if (!function_exists('get_plugin')) {
    function get_plugin($slug_or_name)
    {
        return checkPlugin($slug_or_name);
    }
}

if (!function_exists('number_format_without_currency')) {
    function number_format_without_currency($number)
    {
        if ($number == "") {
            $number = 0;
        }
        $round_off = \Auth::user()->store->round_off;

        if (is_null($round_off)) {
            $round_off = 2;
        }
        return sprintf('%s', number_format($number, $round_off, '.', ''));
    }
}

if (!function_exists('order_status')) {
    function order_status($status)
    {
        $order_status = \App\Helpers\OrderStatus::toArray();
        return isset($order_status[$status]) ? $order_status[$status] : '';
    }
}

//---------------------------------------------Sample Stock Sheet
if (!function_exists('getDumySocialLinksOnStoreCreate')) {
    function getDumySocialLinksOnStoreCreate()
    {
        $link = [["link" => 'https://www.facebook.com'], ["link" => 'https://twitter.com/'], ["link" => 'https://www.youtube.com'], ["link" => 'https://www.instagram.com']];
        return $link;
    }
}

//---------------------------------------------Sample Stock Sheet
if (!function_exists('getSampleWebBannerImages')) {
    function getSampleWebBannerImages()
    {
        $link = [
            \App\Helpers\CustomUrl::asset('sample/sample_web_banners/1.jpg'),
            \App\Helpers\CustomUrl::asset('sample/sample_web_banners/2.jpg')
        ];
        return $link;
    }
}

if (!function_exists('termsAndConditionsContent')) {
    function termsAndConditionsContent()
    {
        return "We want to solve the biggest problem in mobile: everyone is guessing.
        Publishers need to know what apps to build, how to monetize them, and where to price them.
        Advertisers and brands need to identify their target users, and determine where to allocate resources in order to reach them most effectively.
        Investors need to know which apps and genres are growing the quickest, and where users are really spending their time (and money).
        In business, we need data to make informed decisions.Done provides the most actionable mobile app insights in the industry.
        We aim to make this data available to as many people";
    }
}

if (!function_exists('AboutUsContent')) {
    function AboutUsContent()
    {
        return "We want to solve the biggest problem in mobile: everyone is guessing.
        Publishers need to know what apps to build, how to monetize them, and where to price them.
        Advertisers and brands need to identify their target users, and determine where to allocate resources in order to reach them most effectively.
        Investors need to know which apps and genres are growing the quickest, and where users are really spending their time (and money).
        In business, we need data to make informed decisions.Done provides the most actionable mobile app insights in the industry.
        We aim to make this data available to as many people";
    }
}

if (!function_exists('checkResult')) {
    function checkResult($status)
    {
        if($status == 0){
            return "No";
        }else if($status == 1){
            return "YES";
        }
    }
}

if (!function_exists('IsSchool')) 
{
    function IsSchool()
    {if(isset(Auth::user()->type) && Auth::user()->type == 1)
     {return true;}else{return false;}}
}
if (!function_exists('IsAdmin')) 
{
    function IsAdmin()
    {if(isset(Auth::user()->type) && Auth::user()->type == 0)
     {return true;}else{return false;}}
}
