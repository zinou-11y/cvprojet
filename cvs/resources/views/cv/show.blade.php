@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h1>@{{ message }}</h1>
        <div class="container" id="app">
            <div class="card text-dark  col-md-12" >
                <hr>
                <!--<div class="row float-right">
                    <div class="col-md-12 py-4 mr-4 ">
                        <button class="btn btn-info   " > ajouter </button>
                    </div>
                </div>*/-->
                    <!--ajouter une Experience-->
                    <div class="card text-dark  bg-light" >
                        <div class="row">
                            <div class="col-md-12 text-center"><div class="card-header "> Ajouter Une Nouvelle Experience</div></div>
                                <div class="col-md-12 " >
                                    <div class="card-body">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default">Title :</span>
                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                            <div class="input-group">
                                                <span class="input-group-text">Entré ton text :</span>
                                                <textarea class="form-control" aria-label="With textarea"></textarea>
                                            </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for=""> date debut</label>
                                                            <input type="date" class="form-control" placeholder="debut"  >
                                                        </div>
                                                    </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for=""> date fin</label>
                                                                <input type="date" class="form-control" placeholder=" fin" >
                                                            </div>
                                                        </div>
                                                </div>
                                            <br>
                                    </div>
                                </div>
                            </div>
                        <button class="btn btn-success" > Ajouter </button><hr>
                            <!--Experience card-->
                                <div class="card text-dark  bg-light" >
                                    <div  class="row  ">
                                        <div class="col-md-12">
                                            <div class="card-header text-center py-2 ">Experience 1</div>
                                                <ul class="list-control">
                                                    <br>
                                                    <h1>Voici notre titre</h1>
                                                    <li class="list-control-item">
                                                        <p class="card-text ">
                                                            Lorem ipsum dolor sit amet
                                                            consectetur adipisicing elit. Cum dolorum
                                                            consectetur excepturi laudantium ipsa accusamus
                                                            assumenda magnam unde provident aut suscipit neque
                                                            quidem consequatur nobis beatae quis magni
                                                        </p>
                                                        <small class='' > Date debut - Date fin</small>
                                                    </li>
                                                </ul>
                                            </div>
                                    </div>
                                        <div class="col-md-6 py-4 mr-4 ">
                                            <button class="btn btn-warning btn-sm "  > editier </button>
                                            <button class="btn btn-danger btn-sm  "  > supprimer </button>
                                            <button class="btn btn-info  btn-sm " > ajouter </button>
                                        </div>
                                </div>
                    </div>
                    <hr>
                </div>

        </div>

    </div>
</div>

@endsection


@section('javascripts')
    <script src="js/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"> </script>

<script>
    var app = new Vue ({
        el:'#app',
        data:{
            message:"Bonjour Zineddine : ",
            experiences:[],
        },
    });
</script>

@endsection
