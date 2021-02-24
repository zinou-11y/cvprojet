@extends('layouts.app')
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-2 text-center">
                <h2> ERROR 403 | Cette page n'est pas autoriser pour toi !
                    <a href="{{ url('cvs') }}" class="btn btn-success py-2"> Retour </a>
                </h2>

            </div>
        </div>
    </div>

    @endsection
