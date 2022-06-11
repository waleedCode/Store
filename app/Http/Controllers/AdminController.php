<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\order;
use App\Models\Product;

class AdminController extends Controller
{
    public function view_category()
    {
        $data = category::all();

        return view('admin.category' , compact('data'));
    }


    public function add_category(Request $request)
    {
        $data = new category;

        $data->category_name = $request->category;
      
        $data->save();

        return redirect()->back()->with('message','تم اضافة النوع بنجاح');
    }

    public function delete_category($id)
    {
        $data = Category::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'تم حذف النوع بنجاح');
    }

    public function view_product()
    {
        $category =category::all();
        return view('admin.show-truck' , compact('category'));
    }

    public function add_product(Request $request)
    {
        $product = new product;
        $product->board_number=$request->board_number;
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();        

        $request->image->move('product', $imagename);

        $product->category=$request->category;

        $product->image=$imagename;

        $product->car_model=$request->car_model;

        $product->car_brand  =$request->car_brand  ;

        $product->car_brand  =$request->car_brand  ;


        $product->card_expiration_date=$request->card_expiration_date;

        $product->vehicle_registration_expiry_date=$request->vehicle_registration_expiry_date;

       
        $product->save();

        return redirect()->back()->with('message','تم اضافة المركبة بنجاح');

    }

    public function show_product()
    {
        $product=product::all();
        return view('admin.show_product' , compact('product'));
    }

    

    public function delete_product($id)
    {
        $product=product::find($id);
        $product->delete();

        return redirect()->back()->with('message' ,'تم حذف المركبة');

    }

    public function update_product($id)
    {
        $category = Category::all();

        $product=product::find($id);
        return view('admin.update_product' ,compact('product','category'));
    }



    //  Orders

    public function view_order()
    {
        $orders =order::all();
        return view('admin.order' , compact('orders'));
    }

    public function add_order(Request $request)
    {
        $orders = new order;
        $orders->owner_identity=$request->owner_identity;
        $orders->driver_identity=$request->driver_identity;
        $orders->car_brand=$request->car_brand;
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();        

        $request->image->move('orders', $imagename);

        $orders->image=$imagename;

        $orders->car_model=$request->car_model;

        $orders->board_number  =$request->board_number  ;


        $orders->driving_license_exp_date=$request->driving_license_exp_date;

        $orders->card_expiration_date=$request->card_expiration_date;

        $orders->vehicle_registration_expiry_date=$request->vehicle_registration_expiry_date;

       


        $orders->save();

        return redirect()->back()->with('message','تم اضافة المركبة بنجاح');

    }

    public function show_order()
    {
        $orders=order::all();
        return view('admin.show_order' , compact('orders'));
    }

    

    public function delete_order($id)
    {
        $orders= order::find($id);
        $orders->delete();

        return redirect()->back()->with('message' ,'تم حذف المركبة');

    }

    public function update_order($id)
    {
        $orders= order::find($id);
        return view('admin.update_order' ,compact('orders'));
    }

}
