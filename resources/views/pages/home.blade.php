@extends('serviceTemplate.app')

@section('content')
<h1 class="mt-4">Servisas</h1>
  <div class="row">
    @foreach($services as $service)
    <div class="col-4">
        <ul>
            <li>{{$service->title}}</li>
            <li>address:{{$service->address}}</li>
            <li>direktorius: {{$service->director}}</li>
            <li><a href="/service/{{$service->id}}">Placiau...</a></li>
        </ul>
    </div>
    @endforeach
  </div>                 
@endsection