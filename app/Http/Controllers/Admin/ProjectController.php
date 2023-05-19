<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validation($request);

        $formData = $request->all();


        $newProject = new Project();

        $newProject->name = $formData['name'];
        $newProject->thumb_preview = $formData['thumb_preview'];
        $newProject->description = $formData['description'];
        $newProject->link_repo = $formData['link_repo'];
        $newProject->languages = $formData['languages'];
        $newProject->frameworks = $formData['frameworks'];

        $newProject->slug = Str::slug($formData['name'], '-');

        $newProject->save();

        return redirect()->route('admin.project.show', $newProject->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return "sei nello show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
    private function validation($request)
    {

        $formData = $request->all();

        $validator = FacadesValidator::make($formData, [
            'name' => 'required',
            'thumb_preview' => 'required',
            'description' => 'required',
            'link_repo' => 'required',
            'languages' => 'required',
            'frameworks' => 'required',
        ], [
            'name.required' => 'Questo campo non può rimanere vuoto',
            'thumb_preview.required' => 'Questo campo non può rimanere vuoto',
            'description.required' => 'Questo campo non può rimanere vuoto',
            'link_repo.required' => 'Questo campo non può rimanere vuoto',
            'languages.required' => 'Questo campo non può rimanere vuoto',
            'frameworks.required' => 'Questo campo non può rimanere vuoto',

        ])->validate();

        return $validator;
    }
}
