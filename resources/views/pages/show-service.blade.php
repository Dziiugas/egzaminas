

@section('content')
<div class="card">
    <h1 class="mt-4">{{$service->title}}</h1>
    <p>{{$service->address}}</p>
    <p>{{$service->director}}</p>
    <ul>
        <li>{{$service->Title}}</li>
        <li>{{$service->Address}}</li>
        <li>{{$service->Director}}</li>
    </ul>
    <ul>
        <li><a href="/service/edit/{{$service->id}}">Redaguoti</a></li>
        <li><a href="/service/delete/{{$service->id}}">Salinti</a></li>
    </ul>
</div>
