@extends('layouts.app')
@section('content')
<h1>Clients</h1>
<table class="table">
    <tr>
        <th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Company</th>
    </tr>
    @foreach($clients as $client)
    <tr>
        <td>{{ $client->id }}</td>
        <td>{{ $client->name }}</td>
        <td>{{ $client->email }}</td>
        <td>{{ $client->phone }}</td>
        <td>{{ $client->company }}</td>
    </tr>
    @endforeach
</table>
@endsection
