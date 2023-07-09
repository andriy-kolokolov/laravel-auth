<?php

namespace App\Models\Project;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function index() {
        $projects = Project::with('languages', 'frameworks')->get();
        return view('projects.index', compact('projects'));
    }

    // Define the relationship with languages
    public function languages()
    {
        return $this->hasMany(ProjectProgrammingLanguage::class);
    }

    // Define the relationship with frameworks
    public function frameworks()
    {
        return $this->hasMany(ProjectFramework::class);
    }
}
