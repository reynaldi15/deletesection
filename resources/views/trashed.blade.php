@extends('main')

@section('title','Archive User')

@section('data')
    <h3><a href="/restore-all" class="btn btn-success"><i class="fa fa-sharp fa-solid fa-trash-arrow-up"></i>Restore All</a></h3>
    <table id="example" class="table table-bordered table-hover display">
<thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Goar</th>
        <th scope="col">Email</th>
        <th scope="col">Dipaulak</th>
    </tr>
</thead>
<tbody>
    @foreach ($users as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td><a href="restore/{{ $user->id }}" class="text-warning btn"><i class="fa fa-sharp fa-solid fa-trash-arrow-up"></i></a></td>
        </tr>
    @endforeach
</tbody>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@endsection
