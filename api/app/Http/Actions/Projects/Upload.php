<?php

namespace App\Http\Actions\Projects;
use App\Http\Requests\UploadProjectRequest;
use App\Http\Resources\DepartmentResource;
use App\Models\Department;
use App\Models\Project;
use App\Models\ProjectShots;

class Upload {

    public function handle( UploadProjectRequest $request ) {

        $project_file = $request->file('project_file')->store('project_files') ?? false;

        if(!$project_file) return back()->withErrors([
            "project_file" => "Unable to upload project file"
        ]);

        $project = Project::create([
            'title' => $request->title,
            'description' => $request->description,
            'supervisor_id' => $request->supervisor,
            'project_file' => $project_file,
        ]);

        foreach($request->file('snapshots') as $snapshot) {
            $path = $snapshot->store('shapshots');

            ProjectShots::create([
                'image'      => $path,
                'project_id' => $project->id,
            ]);
        }
        
        return DepartmentResource::collection(Department::all());
    }
}