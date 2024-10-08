<div class="grid grid-cols-4 gap-2">
    @foreach ($this->projects as $project)
        <li>
            <a href="{{ route('projects.show', $project) }}">
                <x-project-card-simple :$project />
            </a>
        </li>
    @endforeach
</div>
