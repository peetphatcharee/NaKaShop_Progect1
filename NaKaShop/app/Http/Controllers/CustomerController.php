<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Customer as Cus;
class CustomerController extends Controller
{
    public function postRegister2(Request $req)//สมัครลูกค้า
    {
        // dd('ok');
        $customer_name = $req->input("customer_name");
     
        

        $data = array("customer_name"=>$req->input("customer_name"),
		"customer_password"=>$req->input("customer_password"),
		"customer_email"=>$req->input("customer_email"),
        "customer_tel"=>$req->input("customer_tel"),
        "customer_address"=>$req->input("customer_address"));
        $insert = Cus::postRegis2($data);
        // dd($data);
        return redirect('login_Shop');
    }
}
