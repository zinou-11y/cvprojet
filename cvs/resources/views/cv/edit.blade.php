@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ url('cvs/'.$cv->id) }}" method='post'  enctype="multipart/form-data">
                <input type ="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
                <div class="form-group">
                <label for=""> Title :</label>
                <input type='text' name='titre' @if($errors->get('titre')) class="form-control is-invalid" @endif class='form-control' value="{{ $cv->titre }}">

                @if(count($errors->get('titre')))
                        <ul>
                        @foreach ($errors->get('titre') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                        </ul>
                    @endif
                </div>
                <br>
                <div class="form-group">
                <label for="" > Text presentation  : </label>
                <textarea @if($errors->get('presentation')) class="form-control is-invalid" @endif name='presentation' class='form-control'>{{ $cv->presentation }}</textarea>
                @if(count($errors->get('presentation')))
                    <ul>
                    @foreach ($errors->get('presentation') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                    </ul>
                @endif
                <div class="form-group">
                    <label for="" > Ajouter Une Image : </label>
                        <input class="form-control" type="file" name="photo" placeholder="ajouter l'image">
                </div>
                <hr>


                <input type='submit' class='form-control btn btn-danger' value='modifier'>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
