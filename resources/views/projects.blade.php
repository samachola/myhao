@extends ('layout')

@section('content')

<div class="featured-projects">
        <div class="title">
            <h2>Projects</h2>

            @if (Auth::user())
            <a href="/projects/add">Add Project</a>
            @endif
        </div>
        <div class="projects">
            @foreach ($projects as $project)
            <div class="project">
                <div class="image"></div>
                <div class="details">
                    <p>{{ $project->title }}</p>
                    <span class="location"><i class="fa fa-map-marker" aria-hidden="true"></i></i> {{ $project->location }}</span>
                    <div class="info">
                        <i class="fa fa-home" aria-hidden="true"></i> <span class="size">Rooms: {{ $project->rooms }} | Bed: {{ $project->beds }} | Baths: 2</span>
                    </div>
                    @if (Auth::user())
                    <a href="/projects/myhao/{{$project->id}}" class="action"> Get House </a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
