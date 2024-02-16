@extends('layouts.admin');

@section('content')
    <form action="/admin/projects" method="POST">
        @csrf
        <label for="name">Project name:</label>
        <input type="text" name='name' id='name'>
        <button type="submit">Add</button>
    </form>
@endsection