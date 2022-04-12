<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AdminController extends Controller
{
    public function view_category()
    {
        $data = Category::all();

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
        return view('admin.product');
    }

    public function add_product(Request $request)
    {
        
    }
}
