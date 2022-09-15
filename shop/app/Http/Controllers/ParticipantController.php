<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participants;

class ParticipantController extends Controller
{
    public function index()
    {
        $participants = Participants::all();
        return view("participants.index")->with("participants", $participants);
    }

    public function create()
    {
        return ("participants.create");
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Participants::create($input);
        return redirect('participant')->with('flash_message', 'Participant Added!');
    }

    public function show($id)
    {
        $participant = Participants::find($id);
        return view('particpants.show')->with('participants', $participant);
    }

    public function edit($id)
    {
        $participant = Participants::find($id);
        return view('particpants.edit')->with('participants', $participant);
    }


    public function update(Request $request, $id)
    {
        $participant = Participants::find($id);
        $input = $request->all();
        $participant->update($input);
        return redirect('participant')->with('flash_message', 'participant Updated!');
    }

    public function destroy($id)
    {
        Participants::destroy($id);
        return redirect('participant')->with('flash_message', 'participant deleted!');
    }
}
