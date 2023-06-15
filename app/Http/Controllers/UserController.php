<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('authentication.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = Validator::make( $request->all(), [
            'name' => 'required',
            'email' => 'required|email:filter',
            'password' => 'required|min:8',
        ] );

        if($validate->fails()){
            return back()->with('toast_error', $validate->messages()->all()[0])->withInput();;
        }

        try{

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'avatar' => "",
            ]);

            return redirect('/login')->with('toast_success', 'Hoarray You have successfully created account');



        } catch (\Exception $e){

            return back()->with('toast_error', 'Hmmm... Looks like your email is already used 😔')->withInput();
        }


    }

    public function authenticate(Request $request): RedirectResponse
    {

        $credentials = $request->validate([
            'email' => 'required|email:filter|min:8',
            'password' => 'required|min:8',
        ]);

        try{
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();

                if( Auth::user()->role == 'admin' || Auth::user()->role == 'staff'){
                    return redirect()->intended('/dahsboard')->with('toast_success', 'Horray, You have Loggin!');
                } else {
                    return redirect()->intended('/dahsboard')->with('toast_success', 'Horray, You have Loggin!');
                }

            } else {
                return redirect()->back()->withInput()->with('toast_error', $credentials)->withInput();
            }

        } catch (\Exception $e) {
            return redirect('/')->withInput()->with('toeast_error', $e);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data = User::paginate(7);

        $text = 'Are you really sure you want to?';
        $title = 'Delete this?';

        confirmDelete($title, $text );

        return view('dahsboard.pages.user', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = User::findOrFail($id);

        return view('dahsboard.pages.useredit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $data = User::findOrFail($id);

        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
        ]);

        if($validate->fails()){
            return back()->withInput()->with('toast_error', 'You need to fill the form corectly');
        }

        try {
            $data->update([
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
            ]);

            return redirect('/users')->with('toast_success', 'Successfully updated');
        } catch (\Exception $e) {
            return back()->withInput()->with('toast_error', 'something went wrong');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


    public function delete(String $id)
    {

        User::findOrFail($id)->delete();

        return redirect('/users')->with('toast_success', 'Successfully deleted');


    }


}
