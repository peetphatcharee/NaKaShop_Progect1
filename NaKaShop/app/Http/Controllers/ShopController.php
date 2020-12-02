<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Shop as Sh;
use Illuminate\Support\Facades\Input;
class ShopController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    Public function getprofile($id){//แสดง Product
        $shop = Sh::get_profile($id);
        $data = array('Sh'=>$shop,'shop_id'=>$id); 
		return view('Shop_profile',$data);
    }
    Public function getListPro($id){//แสดง Product
        $product = Sh::get_Shop($id);
        $data = array('Sh'=>$product,'shop_id'=>$id); 
		return view('Shop_productlist',$data);
    }
    public function getListPro2($id){//แสดง Product2

		// dd('fghjhgf');
		$Sh = Sh::get_Shop2($id);//แสดงรายละเอียดของแต่ละProduct
		   
		 $data = array('Sh'=>$Sh);     	
		return view('Shop_detailproduct',$data);
		
		}

    public function getForm($shop_id)//แสดงหน้าเพิ่มสินค้า
    {
        $product = Sh::getType();//**** */
        
    	$data = array('Sh'=>$product,'shop_id'=>$shop_id); 

        return view('Shop_addproduct',$data);//ไปหน้าฟอร์มเเอดเเละดึงดาต้าไปด้วย
	}
    public function postForm(Request $req)//เพิ่มสินค้า
    {
        // dd('ok');
        $product_name = $req->input("product_name");
        // $image = $req->file("product_image")->store('image', ['disk' => 'public']);
        $file = Input::file('product_image');
        $file->move(public_path().'/',$file->getClientOriginalName());

        

        $data = array("product_name"=>$req->input("product_name"),
        "shop_id"=>$req->input("shop_id"),
		"product_num"=>$req->input("product_num"),
		"product_price"=>$req->input("product_price"),
		"product_image"=>$file->getClientOriginalName(),
        "product_detail"=>$req->input("product_detail"),
        "category_id"=>$req->input("category_id"));
        $insert = Sh::postSh($data);
        // dd($data);
        return redirect('Shop_productlist'.$req->input("shop_id"));
    }
    public function getEdit($id,$shop_id) //แก้ไขสินค้า
    {
		// dd($data);
        $product = Sh::select($id,$shop_id);
        $getType = Sh::getType();//**** */
        // // $type = Ac::getType();
        $data = array('product'=>$product ,'Sh'=>$getType,'shop_id'=>$shop_id);
        		//dd($data)
        return view('Shop_editproduct',$data);//ไปหน้าฟอร์มเเอดเเละดึงดาต้าไปด้วย
       
    }
    public function updateForm(Request $req) //ทำการอัพเดตสินค้า
    {
        
        $product_name = $req->input("product_name");
        $file = Input::file('product_image');
        $file->move(public_path().'/',$file->getClientOriginalName());
        
        $product_id = $req->input('product_id');
         $shop_id = $req->input('shop_id');
        $product_num=$req->input("product_num");
		$product_price=$req->input("product_price");
		$product_image=$file->getClientOriginalName();
        $product_detail=$req->input("product_detail");
        $category_id=$req->input("category_id");

        $data = array("product_id"=>$product_id,
					"product_name"=>$product_name,		
                    "product_num"=>$product_num,
                    "product_price"=>$product_price,
					"product_image"=>$product_image,
					"product_detail"=>$product_detail);

        // dd($shop_id );
       
        $insert = Sh::updateSh($data,$product_id);
        return redirect("Shop_productlist".$shop_id);
    }
    public function del_product($id,$shop_id)//ลบสินค้า
    {
		
		$product = Sh::del($id);
		

		//dd($activity);
        return redirect("Shop_productlist$shop_id");
       
    }
    // public function cart()
    // {
    
    //     return view('cart');
	// }
    public function getRegister_shop1()
    {
        $Register = Sh::getRe();//**** */
        
    	$data = array('Sh'=>$Register); 

        return view('Shop_Register',$data);//ไปหน้าฟอร์มเเอดเเละดึงดาต้าไปด้วย
	}
    public function postRegister1(Request $req)//เพิ่ม
    {
        // dd('ok');
        $shop_owner = $req->input("shop_owner");
        // $image = $req->file("product_image")->store('image', ['disk' => 'public']);
        $file = Input::file('shop_logo');
        $file->move(public_path().'/',$file->getClientOriginalName());

        

        $data = array("shop_owner"=>$req->input("shop_owner"),
		"shop_name"=>$req->input("shop_name"),
		
		"shop_password"=>$req->input("shop_password"),
        "shop_email"=>$req->input("shop_email"),
        "shop_tel"=>$req->input("shop_tel"),
        "shop_address"=>$req->input("shop_address"),
        "shop_logo"=>$file->getClientOriginalName());
        $insert = Sh::postRegis($data);
        // dd($data);
        return redirect('login_Shop');
    }
    public function getlogin_shop1(Request $data )
    {
        $id=$data->input('email');
        $pass=$data->input('password');
        $Login = Sh::getlogin($id,$pass);//**** */
        // dd($Login);
        if($Login!=null){
            // $product = Sh::get_Shop($Login->shop_id);
            // $data = array('Sh'=>$product,'shop_id'=>$Login->shop_id); 
            // return view('Shop_productlist',$data);
            session(['name' => $Login->shop_name]);
            session(['img' => $Login->shop_logo]);
         
            return redirect('Shop_productlist'.$Login->shop_id);
        }
        elseif($Login==null){
            return redirect('login_Shop');
        }
    	// $data = array('Sh'=>$Login->shop_name); 

        //ไปหน้าฟอร์มเเอดเเละดึงดาต้าไปด้วย
    }
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('login_Shop');
    }
    public function geteditprofile($id,$shop_id) //แก้ไขโปรไฟล์
    {
		// dd($data);
        $shop = Sh::get_shopprofile($id,$shop_id);
        // // $type = Ac::getType();
        $data = array('shop'=>$shop ,'shop_id'=>$shop_id);
        		//dd($data)
        return view('Shop_editprofile',$data);//ไปหน้าฟอร์มเเอดเเละดึงดาต้าไปด้วย
       
    }
    public function updateProfile(Request $req) //ทำการอัพเดตโปรไฟล์
    {
        
        $product_name = $req->input("product_name");
        $file = Input::file('product_image');
        $file->move(public_path().'/',$file->getClientOriginalName());
        
        $product_id = $req->input('product_id');
         $shop_id = $req->input('shop_id');
        $product_num=$req->input("product_num");
		$product_price=$req->input("product_price");
		$product_image=$file->getClientOriginalName();
        $product_detail=$req->input("product_detail");
        $category_id=$req->input("category_id");

        $data = array("product_id"=>$product_id,
					"product_name"=>$product_name,		
                    "product_num"=>$product_num,
                    "product_price"=>$product_price,
					"product_image"=>$product_image,
					"product_detail"=>$product_detail);

        // dd($shop_id );
       
        $insert = Sh::updateSh($data,$product_id);
        return redirect("Shop_productlist".$shop_id);
    }
    
}

