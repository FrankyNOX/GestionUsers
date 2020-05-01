<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\API\UsersController as UserAPI;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Appel dynamique des donnees via l'API
        $users = (new UserAPI)->index();
        return view('admin.Users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Sauvegarde dynamique des donnees via l'API
        (new UserAPI)->store($request);
        return redirect()->route('users.index')->withSuccess('Utilisateur crée');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Appel dynamique des donnees via l'API
        $user = (new UserAPI)->show($id);
        return view('admin.Users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Appel dynamique des donnees via l'API
        $user = (new UserAPI)->edit($id);
        return view('admin.Users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Sauvegarde dynamique des donnees via l'API
        (new UserAPI)->update($request,$id);
        return redirect()->route('users.index')->withSuccess('Modification Effectuée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Destruction dynamique des donnees via l'API
        (new UserAPI)->destroy($id);
        return back()->withSuccess(trans('Utilisateurs suprimé avec success'));
    }
    public function language()
    {
        session()->put('locale', session('locale') == 'fr' ? 'en' : 'fr');

        return redirect()->back();
    }


}
