<!-- index.blade.php -->
<div class="pull-left">
<a class="btn btn-success" href="{{ route('crud.create') }}">Ajouter un contact</a>
</div>
@extends('master')
@section('content')
  <div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Civilité</th>
		<th>Prénom</th>
        <th>Nom</th>
		<th>Téléphone</th>
        <th>Email</th>
        <th>Société</th>
		<th>Ville</th>
		
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($cruds as $post)
      <tr>
        <td>{{$post['civilite']}}</td>
        <td>{{$post['prenom']}}</td>
        <td>{{$post['nom']}}</td>
		<td>{{$post['telephone']}}</td>
        <td>{{$post['email']}}</td>
        <td>{{$post['societe']}}</td>
		 <td>{{$post['ville']}}</td>
        <td><a href="{{action('CRUDController@edit', $post['id'])}}" class="btn btn-warning">Editer</a></td>
		<td><a href="{{action('CRUDController@show', $post['id'])}}" class="btn btn-success">Voir</a></td>
        <td>
          <form action="{{action('CRUDController@destroy', $post['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE" onClick="return confirm('Confirmez la suppression?');">
            <button class="btn btn-danger" type="submit">Supprimer</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection
