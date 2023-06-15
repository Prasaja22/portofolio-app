<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Models\Pesan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pesan::where('status', 'waiting')->orderBy('created_at', 'desc')->paginate(6);

        $text = 'Are you really sure you want to?';
        $title = 'Delete this?';

        confirmDelete($title, $text );

        return view('dahsboard.pages.messages', compact('data'));

    }


    public function replied()
    {

        $data = Pesan::where('status', 'replied')->paginate(6);

        $text = 'Are you really sure you want to?';
        $title = 'Delete this?';

        confirmDelete($title, $text );

        return view('dahsboard.pages.replied', compact('data'));
    }


    public function balasPesan(Request $request)
    {
        $request->validate([
            'reply' => 'required|min:10',
        ]);

        $data = [
            'subject' => 'Web Reply',
            'body' => $request->reply,
        ];

        $sendTo = $request->email;



        try{
            Mail::to($sendTo)->send(new SendEmail($data));

            Pesan::find($request->id)->update([
                "email" => $request->email,
                "pesan" => $request->message,
                "status" => 'replied',
            ]);

            return redirect('/messages')->with('toast_success', 'You Have replied this message');

        } catch( \Exception $e ){
            return back()->with('toast_error', 'Hmmm... Looks like something went wrong 😔')->withInput();
        }


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'emailm' => 'required|email:filter|min:8',
            'message' => 'required|min:5',
        ]);

        if($validate->fails()){
            return back()->with('toast_error', 'You need to fill the form corectly')->withInput();
        }

        Pesan::create([
            'email' => $request->emailm,
            'pesan' => $request->message,
        ]);


        return redirect('/')->with('toast_success', 'Successfully Send Message, wait for response on your email box');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Pesan::findOrFail($id);

        return view('dahsboard.pages.replypesan', compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        Pesan::findOrFail($id)->delete();

        return redirect('/replied')->with('toast_success', 'Pesan Berhasil Dihapus');
    }
}
