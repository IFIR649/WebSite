<?php

namespace App\Http\Controllers;

use App\Models\contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    

    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $reglas = [
            'name' => 'required',
            'Subject' => 'required',
            'email' => 'required',
            'message' => 'required',
        ];

        $mensajes = [
            'name.required' => 'El campo nombre es obligatorio',
            'Subject.required' => 'El campo asunto es obligatorio',
            'email.required' => 'El campo email es obligatorio',
            'message.required' => 'El campo mensaje es obligatorio',
        ];
        $this->validate($request, $reglas, $mensajes);


        // $request->validate([
        //     'name' => 'required',
        //     'Subject' => 'required',
        //     'email' => 'required',
        //     'message' => 'required',
        // ]);

        contact::create($request->all());

        return redirect()->route('contact')
            ->with('success', 'Contact created successfully.');
    }
}

?>
