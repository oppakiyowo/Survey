<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Survey;
use Auth;
use App\Http\Requests\user\CreateUsersRequest;
use App\Http\Requests\user\UpdateProfileRequest;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.index')->with('users', User::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUsersRequest $request)
    {
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);

        session()->flash('success', 'users berhasil di tambah');
        return redirect(route('users.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show')
        ->with('user',$user)
        ->with('users', User::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user =User::where('id', $id)->firstorFail();
        return view('users.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Update(UpdateProfileRequest $request, User $user)
    {
        // $user =auth()->user(); hanya bisa di update  bagi yang login saja

        $user->update([
            'name' => $request->name,
            'about'=> $request->about,
            'password' => Hash::make($request->password),
            'email'=> $request->email
        ]);

    session()->flash('success', 'Profile User berhasil di Update');
    return redirect(route('users.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if ($user->id == 1) {
            session()->flash('error', 'User ini Tidak bisa di Hapus');
            return redirect()->route('users.index');
        }


        $user->delete();

        session()->flash('success', 'User berhasil di hapus');
        return redirect(route('users.index'));
    }

    public function ChangePassword()
    {

        return view('users.changepassword');
    }

    public function UpdatePassword(Request $request){


        $validatedData = $request->validate([
            'new-password' => 'required|min:6',

        ]);

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
        return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }
        if(!(strcmp($request->get('new-password'), $request->get('new-password-confirm'))) == 0){
            //New password and confirm password are not same
            return redirect()->back()->with("error","New Password should be same as your confirmed password. Please retype new password.");
         }
         //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect(route('users.index'))->with("success","Password changed successfully !");


        }

 }
