@extends('layouts/admin')

@section('content')
    <ul>
        
        <li>
            {{$project->name}}
        </li>
        <li>
            {{$project->thumb_preview}}
        </li>
        <li>
            {{$project->description}}
        </li>
        <li>
            {{$project->link_repo}}
        </li>
        <li>
            {{$project->languages}}
        </li>
        <li>
            {{$project->frameworks}}
        </li>
        

       
    </ul>
@endsection