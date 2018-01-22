<!-- edit.blade.php -->

@extends('master')
@section('content')
<div><h3>{{$crud->nom}} {{$crud->prenom}} Contact </h3> </div>
<div>Identité du contact: </div>
<div class="container">
  <form method="post" action="{{action('CRUDController@update', $id)}}">
    <div class="form-group row">
      {{csrf_field()}}
      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Civilité</label>
      <div class="col-sm-10">
        {{$crud->civilite}}
      </div>
    </div>
	<div class="form-group row">
      {{csrf_field()}}
      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Nom</label>
      <div class="col-sm-10">
        {{$crud->nom}}
      </div>
    </div>
	<div class="form-group row">
      {{csrf_field()}}
      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Prénom</label>
      <div class="col-sm-10">
        {{$crud->prenom}}
      </div>
    </div>
	<div class="form-group row">
      {{csrf_field()}}
      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Fonction</label>
      <div class="col-sm-10">
        {{$crud->fonction}}
      </div>
    </div>
	<div class="form-group row">
      {{csrf_field()}}
      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Service</label>
      <div class="col-sm-10">
        {{$crud->service}}
      </div>
    </div>
	
	
	<div class="form-group row">
      {{csrf_field()}}
      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">E-mail</label>
      <div class="col-sm-10">
        {{$crud->email}}
      </div>
    </div>
	<div class="form-group row">
      {{csrf_field()}}
      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Téléphone mobile</label>
      <div class="col-sm-10">
        {{$crud->telephone_mobile}}
      </div>
    </div>
	<div class="form-group row">
      {{csrf_field()}}
      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Date de naissance</label>
      <div class="col-sm-10">
        {{$crud->date_naissance}}
		
      </div>
    </div>
	
    <div> Société: </div>
	<div class="form-group row">
      {{csrf_field()}}
      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Nom</label>
      <div class="col-sm-10">
       {{$crud->societe}}
	   </div>
	</div>
	<div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Adresse</label>
      <div class="col-sm-10">
        {{$crud->adresse}}
      </div>
    </div>
	<div class="form-group row">
      {{csrf_field()}}
      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Code postal</label>
      <div class="col-sm-10">
        {{$crud->code_postal}}
      </div>
    </div>
	<div class="form-group row">
      {{csrf_field()}}
      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Ville</label>
      <div class="col-sm-10">
        {{$crud->ville}}
      </div>
    </div>
		
	<div class="form-group row">
      {{csrf_field()}}
      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Téléphone</label>
      <div class="col-sm-10">
        {{$crud->telephone}}
      </div>
    </div>
	<div class="form-group row">
      {{csrf_field()}}
      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Site web</label>
      <div class="col-sm-10">
        {{$crud->site_web}}
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
	  <a href="{{action('CRUDController@index')}}" class="btn btn-warning">Retour à la liste des contacts</a>
    </div>
  </form>
</div>
@endsection


