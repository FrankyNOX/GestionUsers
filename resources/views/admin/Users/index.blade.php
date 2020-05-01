@extends('admin.layaout')
@section('titre')
    Acceuil
@stop
@section('page_titre')
    Tout les utilisateurs
@stop
@section('container')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                <a href="{{route('users.create')}}" >
                    Ajouter un utilisateur <i class="fas fa-plus-square"></i>
                </a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Compte Actif</th>
                        @if(Auth::user()->rolename() == "Superadmin")
                            <th class="actions"></th>
                        @endif
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Compte Actif</th>
                        @if(Auth::user()->rolename() == "Superadmin")
                        <th class="actions"></th>
                        @endif
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{ Helper::getRolename($user->role) }}</td>

                            <td>
                                @if($user->active == 1)
                                    <i class="fas fa-check-square text-success"></i>
                                @else
                                    <i class="fas fa-times-circle text-danger"></i>
                                @endif
                            </td>
                            @if(Auth::user()->rolename() == "Superadmin")
                            <td class="actions">

                                <div class='btn-group'>
                                    <a href="{{ route( 'users.edit', $user->id) }}" class="btn btn-primary btn-xs" title="Modifier utilisateur" ><i class="fas fa-pen"></i></a></li>
                                    <form method="post" action="{{route('users.destroy',$user->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        @if ( $user->hasRole('Admin|Opérateur|Lecteur') )
                                            <button class="btn btn-danger btn-xs" title="Supprimer utilisateur"><i class="fa fa-trash"></i></button>
                                        @endif
                                    </form>
                                    <a href="{{ route( 'users.show',$user->id)  }}" title="Voir utilisateur" class="btn btn-success btn-xs"><i class="fas fa-user-alt"></i></a></li>
                                </div>
                            @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop

