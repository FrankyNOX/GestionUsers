
@extends('admin.layaout')
@section('titre')
    Modifier un utilisateur
@stop
@section('page_titre')
    Editer un utilisateur
@stop
@section('container')

    <div class="row">


        <div class="col-lg-12 order-lg-1">

            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Compte</h6>
                </div>

                <div class="card-body">

                    <form method="POST" action="{{ route('users.update',$user->id) }}" enctype="multipart/form-data" autocomplete="off">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <input type="hidden" name="_method" value="PUT">

                        <h6 class="heading-small text-muted mb-4">Informations de l'utilisateur</h6>

                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="name">Nom<span class="small text-danger">*</span></label>
                                        <input type="text" id="name" class="form-control" name="name" placeholder="Name" value="{{ old('name', $user->name) }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="email">Address Email<span class="small text-danger">*</span></label>
                                        <input type="email" id="email" class="form-control" name="email" placeholder="example@example.com" value="{{ old('email', $user->email) }}">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="current_password">Mot de passe actuel</label>
                                        <input type="password" id="current_password" class="form-control" name="current_password" placeholder="Current password">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="new_password">Nouveau mot de passe</label>
                                        <input type="password" id="new_password" class="form-control" name="new_password" placeholder="Nouveau mot de passe">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="confirm_password">Confirmer mot de passe</label>
                                        <input type="password" id="confirm_password" class="form-control" name="password_confirmation" placeholder="Confirmer mot de passe">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="role">Role</label>
                                        <select name="role" id="role" class="form-control">
                                            <option value="0">Lecteur</option>
                                            <option value="1">Opérateur</option>
                                            <option value="4">Admin</option>
                                            <option value="5">Superadmin</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="compte">Compte Actif</label>
                                        <select name="active" id="compte" class="form-control" >
                                            <option value="1">OUI</option>
                                            <option value="0">NON</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="avatar">Avatar</label>
                                        <input type="file" id="avatar" class="form-control" name="avatar" >
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div  class="form-group" >
                                        <img src="{{asset($user->avatar)}}"
                                             style='width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;'>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Button -->
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-primary">Sauvegarder</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>
@stop





