@extends('layouts.Back')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Liste Producteurs</h4>
                </p>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Nom </th>
                                <th> Prénom(s) </th>
                                <th> Rôle </th>
                                <th> Status </th>
                            </tr>
                        </thead>
                        <tbody>

                            @if (count($users) > 0)
                                @foreach ($users as $user)
                                    <tr>
                                        <td> {{ $user->id }} </td>
                                        <td> {{ $user->nom }}</td>
                                        <td> {{ $user->prenom }}</td>
                                        <td><label class="badge badge-info">{{ $user->role }}</label></td>
                                        <td>
                                            @if ($user->status == 1)
                                                <label class="badge badge-success">Actif</label>
                                            @else
                                                <label class="badge badge-danger">Inactif</label>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5">Pas de données à Afficher</td>
                                </tr>
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
