<?php
namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

use App\DataTables\studentDataTable;


class ClientCRUDController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
// $data['clients'] = Client::orderBy('id','desc')->paginate(5);
// return view('clients.index', $data);
  $client = Client::all();
  return view('clients.clients' ,compact('client'));
  
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('clients.clients.create-client');
}
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/

  public function store( Request $request)
    {
        $client = new Client;
        $client->client_code = $request->input('client_code');
        $client->identity_number = $request->input('identity_number');
        $client->full_name = $request->input('full_name');
        $client->phone = $request->input('phone');
        $client->nationality = $request->input('nationality');
        $client->bank_name = $request->input('bank_name');
        $client->iban_number = $request->input('iban_number');
        $client->iban_number = $request->input('iban_number');
        $client->email = $request->input('email');

        $client->password =bcrypt( $request->input('password'));
        $client->password_confirmation =bcrypt( $request->input('password_confirmation'));


        if( $request->hasFile('identity_image'))
        {
            $file =$request->file('identity_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/clients/',$filename);
            $client->identity_image = $filename;
        }
        if( $request->hasFile('iban_image'))
        {
            $file =$request->file('iban_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/clients/',$filename);
            $client->iban_image = $filename;
        }

        
        $client->save();
        return redirect()->back()->with('status','تم اضافة العميل بنجاح') ;

    }
/**
* Display the specified resource.
*
* @param  \App\Client  $Client
* @return \Illuminate\Http\Response
*/
public function show(Client $Client)
{
return view('clients.show',compact('Client'));
} 
/**
* Show the form for editing the specified resource.
*
* @param  \App\Client  $Client
* @return \Illuminate\Http\Response
*/
public function edit($id)
{
  // $client = Client::find($id);
    $client = Client::find($id);

  return view('clients.edit' ,compact('client'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\Client  $Client
* @return \Illuminate\Http\Response
*/

public function index2(studentDataTable $dataTable)
{
    return $dataTable->render('studenttable');
} 
public function update(Request $request, $id)
{
  $client = Client::find($id);

  $client->client_code = $request->input('client_code');
        $client->identity_number = $request->input('identity_number');
        $client->full_name = $request->input('full_name');
        $client->phone = $request->input('phone');
        $client->nationality = $request->input('nationality');
        $client->bank_name = $request->input('bank_name');
        $client->iban_number = $request->input('iban_number');
        $client->iban_number = $request->input('iban_number');
        $client->email = $request->input('email');

        $client->password = $request->input('password');
        $client->password_confirmation = $request->input('password_confirmation');


        if( $request->hasFile('identity_image'))
        {
            $file =$request->file('identity_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/clients/',$filename);
            $client->identity_image = $filename;
        }
        if( $request->hasFile('iban_image'))
        {
            $file =$request->file('iban_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/clients/',$filename);
            $client->iban_image = $filename;
        }
$client->save();
return redirect()->route('clients.clients')
->with('success','تم تعديل بيانات العميل');
}
/**
* Remove the specified resource from storage.
*
* @param  \App\Client  $Client
* @return \Illuminate\Http\Response
*/
public function destroy(Client $Client)
{
$Client->delete();
return redirect()->route('clients.index')
->with('success','تم حذف بيانات العميل');
}

public function search(Request $request)
    {
        
       $output ='';
       $emp = Client::all();

        $client = Client:: where('phone', 'Like' ,'%'.$request->search.'%')
            ->orWhere('email', 'like', '%' . $request->search . '%')
            ->orWhere('full_name', 'like', '%' . $request->search . '%')
            ->orWhere('client_code ', 'like', '%' . $request->search . '%')
            ->orWhere('nationality', 'like', '%' . $request->search . '%')
            ->orWhere('bank_name', 'like', '%' . $request->search . '%')
            ->orWhere('iban_number', 'like', '%' . $request->search . '%')
            ->orWhere('phone', 'like', '%' . $request->search . '%')
            ->orWhere('iban_number ', 'like', '%' . $request->search . '%')->get();
            if($output == '')
            {
                     
            }
        foreach($client as $client)
        {
            $output.=
            '<tr>
            <td> '.$client->emp_code.'  </td>
            <td> '.$client->identity_number.'  </td>
            <td> '.$client->emp_name.'  </td>
            <td> '.$client->phone.'  </td>
            <td> '.$client->nationality.'  </td>
            <td> '.$client->bank_name.'  </td>
            <td> '.$client->iban_number.'  </td>
            <td> '.$client->email.'  </td>
            <td> '.$client->identity_image.'  </td>
            <td> <a class="btn btn-primary">تعديل </a></td>
            <td> <a class="btn btn-danger">مهام </a> </td>

            
            </tr>';

        }
    
        return response($output);
    
}


}