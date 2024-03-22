@extends('serviceTemplate.app')

@section('content')
<h1 class="mt-4">Pridėti servisa</h1>
@include('serviceTemplate/_partials/errors')
<form action="/store/service" method="post" enctype="multipart/form-data">
    @csrf
    </div>
    <div class="form-group m-1">
        <input type="text" name="title" class="form-control" placeholder="Serviso pavadinimas">
    </div>
    <div class="form-group m-1">
        <input type="text" name="address" class="form-control" placeholder="Serviso adresas">
    </div>
    <div class="form-group m-1">
        <input type="text" name="director" class="form-control" placeholder="Serviso direktorius">
    </div>
    <div class="form-group m-1">
        <button type="submit" class="btn btn-primary">Saugoti</button>
    </div>
</form>
@endsection