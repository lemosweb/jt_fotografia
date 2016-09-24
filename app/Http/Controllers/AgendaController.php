<?php

namespace App\Http\Controllers;

use App\Agenda;
use Illuminate\Http\Request;
use App\Http\Requests;



class AgendaController extends Controller
{
    private $agenda;

    public function __construct(Agenda $agenda)
    {

        $this->agenda = $agenda;
    }

    public function index()
    {
         $agendas = $this->agenda->paginate(3);

        return view('admin.agenda.index',compact('agendas'));
    }

    public function create()
    {
        return view('admin.agenda.create');
    }

    public function store(Request $request)
    {

        $this->agenda->create($request->all());

        return redirect()->route('agenda.index');
    }

    public function edit($id)
    {

         $agenda= $this->agenda->find($id);

        return view('admin.agenda.edit', compact('agenda'));
    }

    public function update(Request $request, $id)
    {

        $agenda = $this->agenda->find($id);

        $agenda->update($request->all());

        return redirect()->route('agenda.index');
    }


    public function destroy($id)
    {

        $this->agenda->find($id)->delete();

        return redirect()->route('agenda.index');
    }
}
