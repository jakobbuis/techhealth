<?php

namespace App\Http\Controllers;

use App\Http\Resources\Project as ProjectResource;
use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('name', 'asc')->get();
        return ProjectResource::collection($projects);
    }
}
