@extends('layouts.app')
@section('content')
<h1>Companies</h1>
<table class="table">
    <tr>
        <th>ID</th><th>Name</th><th>Address</th><th>Phone</th><th>Email</th>
    </tr>
    @foreach($companies as $company)
    <tr>
        <td>{{ $company->id }}</td>
        <td>{{ $company->name }}</td>
        <td>{{ $company->address }}</td>
        <td>{{ $company->phone }}</td>
        <td>{{ $company->email }}</td>
    </tr>
    @endforeach
</table>
@endsection
