@extends('layouts.app')

@section('content')
<div class="container">
    <div  class="row">

            <div class="card-header col-md-2  px-3 " >
                <img src="/assets/me.png" class="img-thumbnail rounded-circle " alt="..." width="250" height="250">
            </div>

                <div class="card-header  col-md-7" >
                    <div class="container">
                        <h1 class="mt-3 ml-2">Amariche zineddine</h1>
                            <li class="list-group px-3 ">
                                <ul>


                                    <li> MY NAME IS ZINEDDINE AMARICHE IM JUNIOR FULL STUCK DEVELOPER, I LERNED PROGRAMMING AT UNIVERSTY
                                        , I GRATUATED IN 2016 WITH LICENSE IN COMPUTER SCIENCE. </li>
                                </ul>
                            </li>
                    </div>
                </div>

        <div class="card-header  col-md-3 px-0 py-4" >
                <ul>
<p class="h6">infromation personelle</p>
                        <ul >
                            <li>  Celebataire </li>
                        </ul>
                        <ul >
                            <li>  Dar elbeida ,alger Algerie </li>
                        </ul>
                        <ul >
                            <li>  esbootcamp@gamil.com </li>
                        </ul>

                        <ul >
                            <li>  0770-00-00-12</li>
                        </ul>
                    </ul>

        </div>

    </div>
</div>
<br>
<div class="container">
    <div  class="row">
        <div class="card  col-md-12 pl-0 pr-0" >
            <div class="card-header text-center"> Soft Skils:
                <div class="float-right">
                    <button class="btn btn-warning btn-sm "  > editier </button>
                    <button class="btn btn-danger btn-sm  "  > supprimer </button>
                    <button class="btn btn-info  btn-sm " > ajouter </button>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container">
    <div  class="row">

        <div class="card  col-md-4 pl-0 pr-0" >
            <div class="card-body">comunication</div>
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
                </li>
        </ul>
        <div  class="row px-3 pl-0 pr-0">
            <div class="card-footer col-md-12 " >
                <h6 class = "rating-text ">Rating :</h6>
                        <div class = "rating-wrapper col-md-10">
                            <input type="radio" name="rating" id="star-1"><label for='star-1'></label>
                            <input type="radio" name="rating" id="star-2"><label for='star-2'></label>
                            <input type="radio" name="rating" id="star-3"><label for='star-3'></label>
                            <input type="radio" name="rating" id="star-4"><label for='star-4'></label>
                            <input type="radio" name="rating" id="star-5"><label for='star-5'></label>
                        </div>
                        <div class="float-right col-md-3 pr-5 ">
                            <button class = "btn btn-outline-primary btn-sm mb-3">
                                Rate
                            </button>
                        </div>
            </div>
        </div>
    </div>


        <div class="card  col-md-4 pl-0 pr-0" >
            <div class="card-body">solutions </div>
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
                </li>
        </ul>
        <div  class="row px-3 pl-0 pr-0">
            <div class="card-footer col-md-12 " >
                <h6 class = "rating-text ">Rating :</h6>
                <div class="stars" data-rating="3">
                    <span class="star">&nbsp;</span>
                    <span class="star">&nbsp;</span>
                    <span class="star">&nbsp;</span>
                    <span class="star">&nbsp;</span>
                    <span class="star">&nbsp;</span>
                </div>
                        <div class="float-right col-md-3 pr-5 ">
                            <button class = "btn btn-outline-primary btn-sm mb-3">
                                Rate
                            </button>
                        </div>
            </div>
        </div>
    </div>



        <div class="card  col-md-4 pl-0 pr-0" >
            <div class="card-body">show ineciative</div>
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
        <div  class="row px-3 pl-0 pr-0">
            <div class="card-footer col-md-12 " >
                <h6 class = "rating-text ">Rating :</h6>

                        <div class="float-right col-md-3 pr-5 ">
                            <button class = "btn btn-outline-primary btn-sm mb-3">
                                Rate
                            </button>
                        </div>
            </div>
        </div>

        </div>
    </div>
</div>

<br>
<br>

<div class="container">
    <div  class="row">
        <div class="card  col-md-8 pl-0 pr-0" >
            <div class="card-header text-center">PROJETS </div>
            <div class="container">
                <div  class="row">
                    <div class="card  col-md-6 pl-0 pr-0" >
                        <div class="card" style="">
                            <img src="/assets/article1.png" class="card-img-top" alt="..." width="250" height="250" >
                            <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        </div>
                        <div class="card  col-md-6 pl-0 pr-0" >
                            <div class="card" style="">
                                <img src="/assets/article4.png" class="card-img-top" alt="..."  width="250" height="250">
                                <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
        </div>
    </div>
</div>
        <div class="card text-dark col-md-4 ms-auto pl-0 pr-0" >
            <div class="card-header text-center  ">competence</div>
            <div class="container pt-3">
                <label>html</label>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25% </div>
                </div>
                <br>
                <label>css</label>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 88%;" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">88%</div>
                </div><br>
                <label>java script</label>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
                </div><br>
                <label>Nod js</label>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">35%</div>
                </div><br>
                <label>php</label>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                </div><br>
                <label>laravel</label>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">55%</div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    //initial setup
    document.addEventListener('DOMContentLoaded', function(){
        let stars = document.querySelectorAll('.star');
        stars.forEach(function(star){
            star.addEventListener('click', setRating);
        });

        let rating = parseInt(document.querySelector('.stars').getAttribute('data-rating'));
        let target = stars[rating - 1];
        target.dispatchEvent(new MouseEvent('click'));
    });

    function setRating(ev){
        let span = ev.currentTarget;
        let stars = document.querySelectorAll('.star');
        let match = false;
        let num = 0;
        stars.forEach(function(star, index){
            if(match){
                star.classList.remove('rated');
            }else{
                star.classList.add('rated');
            }
            //are we currently looking at the span that was clicked
            if(star === span){
                match = true;
                num = index + 1;
            }
        });
        document.querySelector('.stars').setAttribute('data-rating', num);
    }

</script>

@endsection
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src = "/assets/script22.js"></script>
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
