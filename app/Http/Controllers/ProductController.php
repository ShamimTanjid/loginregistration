<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{


   public function __construct()
    {
        $this->middleware('auth');
    }





    public function index(){
    	return view('product.Index');
    }
    public function ProductInsert(Request $request){
            $validatedData = $request->validate([
           'Product_name' => 'required|max:55',
           'Product_Code' => 'required',
           'Product_Image' => 'required',
           'Product_Buy_Date' => 'required',
          ]);

         $product= new Product;
         $product->Product_name=$request->Product_name;
         $product->Product_Code=$request->Product_Code; 
         $product->Product_Buy_Date=$request->Product_Buy_Date;
        
          if($request->hasfile('Product_Image')){
          	$file=$request->file('Product_Image');
          	$extention=$file->getClientOriginalExtension();
            $filename=time() .'.' . $extention;
            $file->move('uploads/products/',$filename);
            $product->Product_Image=$filename;
          }else{
          	return $request;
          	$product->Product_Image='';
          }
          
          $product->save();

          if($product->save()){
                    $notification=array(
                'messege'=>'product add Successfully',
                'alert-type'=>'success'
                 );
                return Redirect()->back()->with($notification);      
          }else{
          	return Redirect()->back();
          }
    }
    public function viewproduct(){
    	$allProduct=Product::all();
    	return view('product.AllProduct',compact('allProduct'));
    }
    public function viewproductsngl($id){
    	$snglproduct=Product::find($id);
    	return view('product.snglprdct',compact('snglproduct'));
    }

    public function Deltep($id){
    	$deletep=Product::findOrFail($id);
    	 //unlink(public_path() .  '/uploads/products/' . $deletep->Product_Image->file );
    	$image='/uploads/products/'.$deletep->Product_Image;
    	$path= str_replace('\\','/',public_path());
    	unlink($path.$image);
    	$deletep->delete();

    	return Redirect('productview');

    }

    public function editproduct($id){
    	$edit=Product::find($id);
    	return view('product.edit')->with('edit',$edit);
    }
    public function updateeproduct(Request $request,$id){
    	$validatedData = $request->validate([
           'Product_name' => 'required|max:55',
           'Product_Code' => 'required',
           'Product_Image' => 'required',
           'Product_Buy_Date' => 'required',
          ]);
          

          $update=Product::find($id);
         $update->Product_name=$request->Product_name;
         $update->Product_Code=$request->Product_Code; 
         $update->Product_Buy_Date=$request->Product_Buy_Date;

         if($request->hasfile('Product_Image')){
          	$file=$request->file('Product_Image');
          	$extention=$file->getClientOriginalExtension();
            $filename=time() .'.' . $extention;
            $file->move('uploads/products/',$filename);
            $update->Product_Image=$filename;
          }else{
          	return $request;
          	$update->Product_Image='';
          }
          
          $update->save();

          if($update->save()){
                    $notification=array(
                'messege'=>'product add Successfully',
                'alert-type'=>'success'
                 );
                return Redirect()->back()->with($notification);      
          }else{
          	return Redirect('product-view');
          }
    	

    	

    }
}
