@extends('servicesTemplate.app')
@section('content')
    <h1 class="mt-4">Visos kategorijos</h1>
    <a href="/add-service" class="btn btn-primary">Nauja Servisas</a>
    <table class="table">
        <tr>
            <th>serviso pavadinimas</th>
            <th>Keisti</th>
            <th>Šalinti</th>
        </tr>
        @foreach($services as $service)
           <tr>
                   <td>{{$service->title}}</td>
                   <td><a href="/service/edit/{{$service->id}}">Keisti</a></td>
                   <td><a href="/service/delete/{{$service->id}}">Šalinti</a></td>
           </tr>
           @endforeach
    </table>
@endsection