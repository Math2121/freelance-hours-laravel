<?php

namespace App\Livewire\Project;

use App\Models\Project;
use Livewire\Component;

class Proposals extends Component
{
    public Project $project;
    public function render()
    {
        return view('livewire.project.proposals');
    }
}
