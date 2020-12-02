<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Customer extends Model
{   
    public static function postRegis2($data){//สมัครสมาชิกลูกค้า
    return DB::table('customer')
    ->insert($data); //
}
}
