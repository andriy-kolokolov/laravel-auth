@extends('admin.layouts.base')

@section('contents')

    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Project Details</div>
                <div class="card-body">
                    <div class="mb-4">
                        <strong>Title:</strong> {{ $project->title }}
                    </div>
                    <div class="mb-4">
                        <strong>Description:</strong> {{ $project->description }}
                    </div>
                    <div class="mb-4">
                        <strong>Project URL:</strong> <a href="{{ $project->project_url }}">{{ $project->project_url }}</a>
                    </div>
                    <div class="mb-4">
                        <strong>Programming Languages:</strong>
                        {{ implode(', ', $project->programmingLanguages->pluck('programming_language')->toArray()) }}
                    </div>
                    <div class="mb-4">
                        <strong>Frameworks:</strong>
                        {{ implode(', ', $project->frameworks()->pluck('framework')->toArray()) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
