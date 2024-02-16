@extends('layouts.admin');

@section('content')
    <form action="{{route('admin.update', $project->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Project name:</label>
        <input type="text" name='name' id='name' value="{{$project->name}}">
        <button type="submit">modify</button>
    </form>
@endsection