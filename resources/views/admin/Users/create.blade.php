@extends('admin.layaout')
@section('titre')
    Creer un utilisateur
@stop
@section('page_titre')
    Nouvel Utilisateur
@stop
@section('container')

    <!-- DataTales Example -->
    <div class="row">


        <div class="col-lg-12 order-lg-1">

            <div class="card shadow mb-4">

                <div class="card-header py-3">
                </div>

                <div class="card-body">

                    <form method="post" enctype="multipart/form-data" action="{{route('users.store')}}" autocomplete="off">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="name">Nom<span class="small text-danger">*</span></label>
                                        <input type="text" id="name" class="form-control" name="name" placeholder="Nom" >
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="email">Adresse Email<span class="small text-danger">*</span></label>
                                        <input type="email" id="email" class="form-control" name="email" placeholder="example@example.com">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="password">Mot de passe</label>
                                        <input type="password" id="new_password" class="form-control" name="password" placeholder="Mot de passe">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="confirm_password">Confirmer Mot de passe</label>
                                        <input type="password" id="confirm_password" class="form-control" name="password_confirmation" placeholder="Confirm mot de passe">
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
                                        <img src="{{asset('files/avatar/avatar0.png')}}"
                                             style='width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;'> "
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!-- Button -->
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-primary">Valider</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>
@stop


