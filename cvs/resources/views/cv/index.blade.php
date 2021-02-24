@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

                @if (session()->has('succes'))
                    <div class="alert alert-success">
                            {{ session()->get('succes') }}
                    </div>
                @endif

                @if (session()->has('suprime'))
                    <div class="alert alert-danger">
                            {{ session()->get('suprime') }}
                    </div>
                @endif

                @if (session()->has('edit'))
                    <div class="alert alert-success">
                            {{ session()->get('edit') }}
                    </div>
                @endif

                <h1>la liste de mes cv
                    <div class="float-right py-4  ">
                        <a href="{{ url('cvs/create') }}" class='btn btn-info '> Créer Un Nouveau Cv ! </a>
                    </div>
                </h1>
            </div>
    </div>
        <div class="container">
            <div class="row">
                @foreach ($cvs as $cv)
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="{{ asset('storage/'. $cv->photo) }}" alt="..." width= "350" height="250">
                                <div class="caption py-2">
                                    <h3>{{ $cv->titre }}</h3>
                                        <p>{{ $cv->presentation }}</p>
                                            <p>
                                            <form action="{{ url('cvs/'.$cv->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <a href="{{ url('cvs/'.$cv->id.'/sho') }}" class="btn btn-info">details</a>
                                                <a href="{{ url('cvs/'.$cv->id.'/edit') }}" class="btn btn-warning">editer</a>
                                                @can('delete', $cv)
                                                <button type="submit" class="btn btn-danger">supprimer</button>
                                                @endcan
                                            </form>
                                        </p>
                                </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
</div>




@endsection
