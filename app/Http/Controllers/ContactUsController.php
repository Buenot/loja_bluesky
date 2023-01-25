<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Http\Requests\StoreContactUsRequest;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UpdateContactUsRequest;

class ContactUsController extends Controller
{
    /**
     * Exiba uma listagem do recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.contatos'); 
    }

    /**
     * Mostre o formulário para criar um novo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        
    }

    /**
     * Armazene um recurso recém-criado no armazenamento.
     *
     * @param  \App\Http\Requests\StoreContactUsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactUsRequest $request)
    {
        $input = Validator::make($request->all(), [
            'name'=>'required|string',
            'email'=>'required|string',
            'descriptioncontact' =>'required|string',
            'description' =>'required|string',
       ]);
       
       if (!$input->fails()) {
            $name = $request->name;
            $email = $request->email;
            $descriptioncontact = $request->descriptioncontact;
            $description= $request->description;
       

            //Envio para o banco
            //validação
            $contactUs = new ContactUs();
            $contactUs->name = $name;
            $contactUs->email = $email;
            $contactUs->descriptioncontact = $descriptioncontact;
            $contactUs->description = $description;
            $contactUs->save();
     }
         return redirect('/contatos'); 
    }

    /**
     *Exiba o recurso especificado.
     *
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function show(ContactUs $contactUs)
    {
        //
    }

}
