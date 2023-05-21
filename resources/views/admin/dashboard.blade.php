@extends('layouts/admin')

@section('content')
    <div class="container d-flex flex-column align-items-center">
        Benvenuto <strong>{{ Auth::user()->name }}</strong> 
        <br>
        <a href="admin/project"><button class="btn btn-secondary">Clicca qui per visualizzare i progetti</button></a>
    </div>
@endsection