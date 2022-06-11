<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Employee::all();
        return view('admin.users.employees',compact('employee'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.employees');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new Employee;
        $employee->emp_code = $request->input('emp_code');
        $employee->identity_number = $request->input('identity_number');
        $employee->emp_name = $request->input('emp_name');
        $employee->phone = $request->input('phone');
        $employee->nationality = $request->input('nationality');
        $employee->email = $request->input('email');
        $employee->password =bcrypt( $request->input('password'));
        $employee->password_confirm =bcrypt( $request->input('password_confirm'));
        if( $request->hasFile('identity_image'))
        {
            $file =$request->file('identity_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/clients/',$filename);
            $employee->identity_image = $filename;
        }
        $employee->save();
        return redirect()->back()->with('status','تم اضافة موظف بنجاح') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function search(Request $request)
    {
        
       $output ='';
       $emp = Employee::all();

        $employee = Employee:: where('phone', 'Like' ,'%'.$request->search.'%')
            ->orWhere('email', 'like', '%' . $request->search . '%')
            ->orWhere('emp_name', 'like', '%' . $request->search . '%')
            ->orWhere('emp_code', 'like', '%' . $request->search . '%')
            ->orWhere('nationality', 'like', '%' . $request->search . '%')
            ->orWhere('identity_number', 'like', '%' . $request->search . '%')->get();
            if($output == '')
            {
                     
            }
        foreach($employee as $employee)
        {
            $output.=
            '<tr>
            <td> '.$employee->emp_code.'  </td>
            <td> '.$employee->identity_number.'  </td>
            <td> '.$employee->emp_name.'  </td>
            <td> '.$employee->phone.'  </td>
            <td> '.$employee->nationality.'  </td>
            <td> '.$employee->email.'  </td>
            <td> <a class="btn btn-primary">تعديل</a></td>
            <td> <a class="btn btn-warning">مهام </a> </td>

            
            </tr>';

        }
    
        return response($output);
    
}
}
