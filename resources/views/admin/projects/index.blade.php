@extends('layouts/admin')

@section('content')
    
<div class="container py-3">

    <table class="table table-striped table-dark table-hover">
      <thead class="text-bg-danger">
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
            <td><img src="{{$item->thumb_preview}}"></img></td>
            <td>{{$item->description}}</td>
            <td><a href="">{{$item->link_repo}}</a></td>
            <td>{{$item->languages}}</td>
            <td>{{$item->frameworks}}</td>
            <td><a href="{{route('admin.project.show', $item)}}">Apri</a></td>
            <td><a href="{{route('admin.project.edit', $item)}}">Modifica</a></td>
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