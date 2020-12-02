<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public static function getAll(){//หน้าแสดง Product
        return DB::table('product')
       
        ->get();
    } 
    public static function get_Shop($id){//หน้าแสดง Product
        return DB::table('product')
        ->where('shop_id','=',$id)
        ->get();
    } 
    public static function postSh($data){//เพิ่มสินค้า
        return DB::table('product')
        ->insert($data); //
    }
    public static function getType(){//หน้าเพิ่มview
        return DB::table('product_category')
        ->get();//
    }

    public static function select($id){//แก้ไขสินค้า
        return DB::table('product')
        ->where('product_id',$id)
        ->first();
    }
    public static function updateSh($data,$product_id)//อัพเดตสินค้า

    {
      
        return DB::table('product')
        ->where('product_id',$product_id)
        ->update($data);
    }
    public static function del($id){//ลบ
        return DB::table('product')
        ->where('product_id',$id)
        ->delete();
    }
    public static function getRe(){//หน้าสมัครสมาชิกร้านค้า view
        return DB::table('shop')
        ->get();//
    }
    public static function postRegis($data){//เพิ่มสมัครสมาชิกร้านค้า
        return DB::table('shop')
        ->insert($data); //
    }
    public static function getlogin($id,$pass){//หน้าเข้าสู่ระบบร้านค้า view
        return DB::table('shop')
        ->where('shop_email','=',$id)
        ->where('shop_password','=',$pass)
        ->get()->first();//
    }
    public static function get_Shop2($id){//หน้าแสดงproductเพิ่มเติม
        return DB::table('product')
        ->where('product_id',$id)//แสดงรายละเอียดของแต่ละproduct
       
        ->get();
    }
    public static function get_profile($id){//หน้าแสดง  โปรไฟล์
        return DB::table('shop')
        ->where('shop_id','=',$id)
        ->get();
    } 
    public static function get_shopprofile($id)//แก้ไข
    {
        return DB::table('shop')
        ->where('shop_id',$id)
        ->first();
    }
    public static function updateprofile($data,$shop_id)//อัพเดต

    {
      
        return DB::table('shop')
        ->where('shop_id',$shop_id)
        ->update($data);
    }
}
