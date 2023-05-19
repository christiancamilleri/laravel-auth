@extends('layouts/admin')

@section('content')
    <div class="container">
        Benvenuto <b>{{$user[0]->name}}</b> 
        <br>
        <a href="admin/project">Clicca qui per visualizzare i progetti</a>
    </div>
@endsection