<?php

namespace App\Livewire\Project;

use App\Models\Project;
use Livewire\Component;
use Livewire\Attributes\Computed;
class Index extends Component
{
  

    public function render()
    {
        return view('livewire.project.index');
    }

    #[Computed()]

    public function projects(){

        return Project::query()->inRandomOrder()->get();
    }

}

