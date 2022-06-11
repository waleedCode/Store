<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientCompany;


class ClientCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientcompany = ClientCompany::all();
        return view('clients.company.clients-company' ,compact('clientcompany'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.company.create-clients-company');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ClientCompany = new ClientCompany;
        $ClientCompany->company_code = $request->input('company_code');
        $ClientCompany->company_name = $request->input('company_name');
        $ClientCompany->Commercial_record_number = $request->input('Commercial_record_number');
        $ClientCompany->Commercial_record_image = $request->input('Commercial_record_image');
        $ClientCompany->tax_number = $request->input('tax_number');
        $ClientCompany->bank_name = $request->input('bank_name');
        $ClientCompany->bank_number = $request->input('bank_number');
        $ClientCompany->password = $request->input('password');
        $ClientCompany->password_confirmation = $request->input('password_confirmation');
        if( $request->hasFile('iban_iamge'))
        {
            $file =$request->file('iban_iamge');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/ClientCompanys/',$filename);
            $ClientCompany->iban_iamge = $filename;
        }
        if( $request->hasFile('Commercial_record_image'))
        {
            $file =$request->file('Commercial_record_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/ClientCompanys/',$filename);
            $ClientCompany->Commercial_record_image = $filename;
        }

        
        $ClientCompany->save();
        return redirect()->back()->with('status','تم اضافة شركة عميل') ;
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
}
