<?php

namespace App\Http\Controllers;

use App\Http\Actions\Projects\Upload;
use App\Http\Requests\UploadProjectRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    //

    public function uploadProject(Upload $action, UploadProjectRequest $request) {
        return $action->handle($request);
    }

    public function displayUploadForm() {

        $supervisors = Auth::user()->teachers();

        return view('html.upload');
    }
}
