<?php

namespace App\Http\Controllers;

use App\Models\Issue;

class ActividadeController extends Controller
{
    public function getActividadesPendentesAlocadasByUser($id)
    {

        try {
            $actividadesPendente = Issue::where('id', $id)->where('is_aproved', false)->get();
            return $actividadesPendente;
        } catch (\Exception $e) {
            return ["message" => "ERROR"];
        }
    }
}
