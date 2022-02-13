<?php

namespace RainbowDigital\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use RainbowDigital\Exports\ProductsExport;
use Maatwebsite\Excel\Facades\Excel;
use RainbowDigital\Imports\productsImport;
class PurchaseController extends Controller
{
       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AddPurchase()
    {
    	return view('Purchase.add_purchase');
    }

    public function AllPurchase()
    {
    	$purchase=DB::table('purchases')->get();
    	return view('Purchase.all_purchase', compact('purchase'));
    }

    public function InsertPurchase(Request $request)
    {
    	$data=array();
    	$data['purchase_name']=$request->purchase_name;
    	$data['purchase_code']=$request->purchase_code;
    	$data['cat_id']=$request->cat_id;
      $data['purchase_unit']=$request->purchase_unit;
    	$data['sup_id']=$request->sup_id;
    	$data['purchase_garage']=$request->purchase_garage;
    	$data['purchase_route']=$request->purchase_route;
    	$data['buy_date']=$request->buy_date;
    	$data['expire_date']=$request->expire_date;
    	$data['buying_price']=$request->buying_price;
    	$data['selling_price']=$request->selling_price;
    	 $image=$request->file('purchase_image');
        if ($image) {
            $image_name= str_random(5);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/Purchase/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
                $data['purchase_image']=$image_url;
                $product=DB::table('purchases')
                         ->insert($data);
              if ($product) {
                 $notification=array(
                 'messege'=>'Successfully Purchase Inserted ',
                 'alert-type'=>'success'
                  );
                return Redirect()->back()->with($notification);                      
             }else{
              $notification=array(
                 'messege'=>'error ',
                 'alert-type'=>'success'
                  );
                 return Redirect()->back()->with($notification);
             }      
                
            }else{

              return Redirect()->back();
                
            }
        }else{
              return Redirect()->back();
        }
    	

    }


    public function DeletePurchase($id)
    {
         $delete=DB::table('purchases')
                ->where('id',$id)
                ->first();
         $photo=$delete->purchase_image;
         unlink($photo);
         $dltprod=DB::table('purchases')
                  ->where('id',$id)
                  ->delete();
         if ($dltprod) {
                 $notification=array(
                 'messege'=>'Successfully purchase Deleted ',
                 'alert-type'=>'success'
                  );
                return Redirect()->route('all.purchase')->with($notification);                      
             }else{
              $notification=array(
                 'messege'=>'error ',
                 'alert-type'=>'success'
                  );
                 return Redirect()->back()->with($notification);
        }     
    }

    public function ViewProduct($id)
    {
        $prod=DB::table('products')
             ->join('categories','products.cat_id','categories.id')
             ->join('suppliers','products.sup_id','suppliers.id')
             ->select('categories.cat_name','products.*','suppliers.name')
             ->where('products.id',$id)
             ->first();
        return view('view_product', compact('prod'));   
    }

    public function EditProduct($id)
    {
        $prod=DB::Table('products')->where('id',$id)->first();
        return view('edit_product', compact('prod'));

    }

    public function UpdateProduct(Request $request,$id)
    {
       $data=array();
        $data['product_name']=$request->product_name;
        $data['product_code']=$request->product_code;
        $data['cat_id']=$request->cat_id;
        $data['product_unit']=$request->product_unit;
        $data['sup_id']=$request->sup_id;
        $data['product_garage']=$request->product_garage;
        $data['product_route']=$request->product_route;
        $data['buy_date']=$request->buy_date;
        $data['expire_date']=$request->expire_date;
        $data['buying_price']=$request->buying_price;
        $data['selling_price']=$request->selling_price;

        $image=$request->file('product_image');

      if ($image) {
       $image_name=str_random(20);
       $ext=strtolower($image->getClientOriginalExtension());
       $image_full_name=$image_name.'.'.$ext;
       $upload_path='public/Products/';
       $image_url=$upload_path.$image_full_name;
       $success=$image->move($upload_path,$image_full_name);
       if ($success) {
          $data['product_image']=$image_url;
             $img=DB::table('products')->where('id',$id)->first();
             $image_path = $img->product_image;
             $done=unlink($image_path);
          $product=DB::table('products')->where('id',$id)->update($data); 
         if ($product) {
                $notification=array(
                'messege'=>'Product Update Successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->route('all.product')->with($notification);                      
            }else{
              return Redirect()->back();
             } 
          }
      }else{
        $oldphoto=$request->old_photo;
         if ($oldphoto) {
          $data['product_image']=$oldphoto;  
          $user=DB::table('products')->where('id',$id)->update($data); 
         if ($user) {
                $notification=array(
                'messege'=>'Product Update Successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->route('all.product')->with($notification);                      
            }else{
              return Redirect()->back();
             } 
          }
       }
    }



//products import and export
    public function ImportProduct()
    {
      return view('import_product');
    }

   public function export() 
    {
        return Excel::download(new ProductsExport, 'products.xlsx');
    }


     public function import(Request $request) 
    {
        $import=Excel::import(new ProductsImport, $request->file('import_file'));
         if ($import) {
                $notification=array(
                'messege'=>'Product Import Successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->route('all.product')->with($notification);                      
            }else{
              return Redirect()->back();
             } 
          
    }

}
