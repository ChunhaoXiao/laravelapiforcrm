<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use Illuminate\Support\Facades\Auth;
use App\Services\MessageService;
use App\Http\Resources\AgendaResource;

class PendingAgendaController extends Controller
{
    public function index() {
        
        $datas = Auth::user()->agendas()->coming()->with("type")->get();
        return $datas;
    }

    public function show(Agenda $agenda) {
        return new AgendaResource($agenda);
    }
}
