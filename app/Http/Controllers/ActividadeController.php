<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use Illuminate\Http\Request;

class ActividadeController extends Controller
{
    public function getActividadesPendentesAlocadasByUser($id)
    {

        try {
            $actividadesPendente = Issue::where("author_id" , $id)->where("is_aproved" , false)->get();
            return $actividadesPendente;
        } catch (\Exception $e) {
            return ["message" => "ERROR"];
        }
    }


    public function cadatrarActividade(Request $request)
    {
        try {
            $actividade = new Issue();
            $actividade->tracker_id = $request->tracker_id ;
            $actividade->project_id = $request->project_id;
            $actividade->subject = $request->subject;
            $actividade->description = $request->description;
            $actividade->due_date = $request->due_date;
            $actividade->category_id = $request->category_id;
            $actividade->status_id = $request->status_id;
            $actividade->assigned_to_id = $request->assigned_to_id;
            $actividade->priority_id = $request->priority_id;
            $actividade->fixed_version_id = $request->fixed_version_id;
            $actividade->author_id = $request->author_id;
            $actividade->author_id = $request->author_id;
            $actividade->start_date = $request->start_date;
            $actividade->done_ratio = $request->done_ratio;
            $actividade->estimated_hours = $request->estimated_hours;
            $actividade->parent_id = $request->parent_id;
            $actividade->root_id = $request->root_id;
            $actividade->lft = $request->lft;
            $actividade->rgt = $request->rgt;
            $actividade->is_private = $request->is_private;
            $actividade->closed_on  = $request->closed_on;
            $actividade->is_aproved = $request->is_aproved;
            $actividade->aproved_by = $request->aproved_by;
            $actividade->aproved_on  = $request->aproved_on;

            $actividade->save();
            return ["message" => "Saved successfully"];
        } catch (\Exception $error) {
            return [
                "message" => "saving error",
                "erro" => $error
            ];
        }
    }
}
