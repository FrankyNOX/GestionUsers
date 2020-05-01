@extends('admin.layaout')
@section('titre')
    Voir un utilisateur
@stop
@section('page_titre')
    Tabeau de bord
@stop
@section('container')
    <!-- Content Row -->
    <div class="row">

        <div class="col-lg-4 order-lg-2">

            <div class="card shadow mb-4">
                <center>
                    <div class="card-profile-image mt-4">
                        <img src="{{asset($user->avatar)}}" class="rounded-circle" alt="user-image">
                    </div>
                </center>
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <h5 class="font-weight-bold">{{  $user->name }}</h5>
                                <p>{{  $user->rolename() }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="col-lg-8 order-lg-1">

            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Mon compte</h6>
                </div>

                <div class="card-body">

                    <form method="POST" action="{{ route('users.update',$user->id) }}" autocomplete="off">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <input type="hidden" name="_method" value="PUT">

                        <h6 class="heading-small text-muted mb-4">Informations de l'utilisateurs</h6>

                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="name">Nom<span class="small text-danger"></span></label>
                                        <input type="text" id="name" class="form-control" name="name" placeholder="Name" value="{{ old('name', $user->name) }}" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="email">Adress Email<span class="small text-danger"></span></label>
                                        <input type="email" id="email" class="form-control" name="email" placeholder="example@example.com" value="{{ old('email', $user->email) }}" disabled>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>
@stop



