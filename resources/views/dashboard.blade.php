@extends('main')

@section('title','List User')
@section('data')
<thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Goar</th>
        <th scope="col">Email</th>
        <th scope="col">Soft Delete</th>
        <th scope="col">Force Delete</th>
    </tr>
</thead>
<tbody>
    @foreach ($users as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td><a href="softDelete/{{ $user->id }}" class="text-warning btn"><i class="fa fa-solid fa-trash"></i>Delete</a></td>
            <td><a href="forceDelete/{{ $user->id }}" class="text-danger btn" onclick="return confirm('Are You Sure to Delete Permanent?')"><i class="fa fa-solid fa-trash"></i>Force</a></td>
        </tr>
    @endforeach
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
</tbody>
@endsection
