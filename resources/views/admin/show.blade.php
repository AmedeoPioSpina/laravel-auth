@extends('layouts.admin');

@section('content')
    <div>
            <p>
                {{$project->name}}
            </p>
            <form action="{{ route('admin.edit', $project->id)}}">
                <button>
                    edit
                </button>
            </form>
        </li>
    </div>
@endsection