@extends('layouts/admin')

@section('content')
    
<div class="container py-3">

    <table class="table table-striped">
      <thead>
        <th>
          Nome progetto
        </th>
        <th>
          Link preview
        </th>
        <th>
          Descrizione
        </th>
        <th>
          Link repository
        </th>
        <th>
          Linguaggi Utilizzati
        </th>
        <th>
            Frameworks utilizzati
        </th>
      </thead>
    
      <tbody>

        @foreach ($projects as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td><a href="">{{$item->thumb_preview}}</a></td>
            <td>{{$item->description}}</td>
            <td><a href="">{{$item->link_repo}}</a></td>
            <td>{{$item->languages}}</td>
            <td>{{$item->frameworks}}</td>
          <td>
          </td>
        </tr>    
      @endforeach
  
    </tbody>
  </table>
  
</div>

<hr class="mb-5">

<div class="container text-center py-5">
  <a class="btn btn-primary" href="project/create">Aggiungi un fumetto</a>
</div>

@endsection