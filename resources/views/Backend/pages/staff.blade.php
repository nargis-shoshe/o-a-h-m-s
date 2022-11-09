@extends('Backend.master')

@section('content')

<h1>   staff list </h1>

<a href="{{url('/add/make')}}" class="btn btn-primary"> create staff list</a>


<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Phone_Number</th>
        <th scope="col">Handle</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>abc</td>
        <td>01658852589</td>
        <td> senior citizen</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>xyz</td>
        <td>01234569870</td>
        <td>foods</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>efg</td>
        <td>01478523697</td>
        <td>cleaning</td>
    </tr>
    </tbody>
</table>

 

@endsection