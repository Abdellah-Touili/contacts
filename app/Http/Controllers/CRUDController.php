<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crud;

class CRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cruds = Crud::all()->toArray();

        return view('crud.index', compact('cruds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $crud = new Crud([
	  'civilite' => $request->get('civilite'),
	  'prenom' => $request->get('prenom'),
	  'nom' => $request->get('nom'),
	  'fonction' => $request->get('fonction'),
	  'service' => $request->get('service'),
	  'telephone_mobile' => $request->get('telephone_mobile'),
	  'email' => $request->get('email'),
	  'date_naissance' => $request->get('date_naissance'),
	  'societe' => $request->get('societe'),
	  'adresse' => $request->get('adresse'),
	  'code_postal' => $request->get('code_postal'),
	  'ville' => $request->get('ville'),
	  'telephone' => $request->get('telephone'),
	  'site_web' => $request->get('site_web')
        ]);

       $crud->save();
       return redirect('/crud');
    }

    /**
     * Display the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$crud = Crud::find($id);
        return view('crud.show', compact('crud','id'));
	}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crud = Crud::find($id);
        return view('crud.edit', compact('crud','id'));
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
        $crud = Crud::find($id);
        $crud->civilite = $request->get('civilite');
        $crud->nom = $request->get('nom');
		$crud->prenom = $request->get('prenom');
		$crud->fonction = $request->get('fonction');
		$crud->service = $request->get('service');
		$crud->telephone_mobile = $request->get('telephone_mobile');
		$crud->email = $request->get('email');
		$crud->date_naissance = $request->get('date_naissance');
		$crud->societe = $request->get('societe');
		$crud->adresse = $request->get('adresse');
		$crud->code_postal = $request->get('code_postal');
		$crud->ville = $request->get('ville');
		$crud->telephone = $request->get('telephone');
		$crud->site_web = $request->get('site_web');
	
        $crud->save();

        return redirect('/crud');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $crud = Crud::find($id);
      $crud->delete();

      return redirect('/crud');
    }
}
