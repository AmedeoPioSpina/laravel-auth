@extends('layouts.admin');

@section('content')
    <form action="/admin/projects/create" method="GET">
        <button type="submit">
            Create project
        </button>
    </form>
    <ul>
        @forelse ($projects as $project)
        <li>
            <p>
                <a href="{{route('admin.show', $project->id)}}">
                    {{$project->name}}
                </a>
            </p>
            <form action="{{ route('admin.edit', $project->id)}}">
                <button>
                    edit
                </button>
            </form>
        </li>
        @empty
        <li>
            No projects!
        </li>
        @endforelse
    </ul>
@endsection