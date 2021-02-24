@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ url('cvs') }}" method='POST' enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for=""> Title :</label>
                            <input type='text' name='titre'@if($errors->get('titre')) class="form-control is-invalid" @endif  class='form-control' value="{{ old('titre') }}">
                                @if(count($errors->get('titre')))
                                    <ul>
                                        @foreach ($errors->get('titre') as $message)
                                            <li>{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                    </div><br>
                <div class="form-group has-error">
                    <label for=""> Text presentation  :</label>
                        <textarea name='presentation' @if($errors->get('presentation')) class="form-control is-invalid" @endif  class='form-control'>{{ old('presentation') }}</textarea>
                            @if(count($errors->get('presentation')))
                                <ul>
                                    @foreach ($errors->get('presentation') as $message)
                                        <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                            @endif
                </div><br>
                    <div class="form-group">
                        <label for="" > Ajouter Une Image : </label>
                            <input class="form-control" type="file" name="photo" placeholder="ajouter l'image">
                    </div><hr>
                        <input type='submit' class='form-control btn btn-primary' value='Enregistrer'>
            </form>
        </div>
    </div>
</div>

@endsection
