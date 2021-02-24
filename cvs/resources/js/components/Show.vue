
<template>
<div class="card text-dark  bg-light" >
    <div class="row">
        <div class="col-md-10 text-center"><div class="card-header ">Experience</div>
        </div>
            <div class="col-md text-center " ><button class="btn btn-success" > Ajouter </button>
            </div>
                <div class="card-body">
                        <div>
                                <div class="form-group">
                                    <label for="">titre</label>
                                    <input type="text" class="form-control"  placeholder="le titre" >
                                </div>
                                    <div class="form-group " >
                                        <label for="">body</label>
                                        <textarea name="" class="form-control" placeholder="le contenue du cv"  ></textarea>
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

                                        <ul class="list-control">
                                            <li class="list-control-item"  >
                                                <h3>title</h3>
                                                    <p class="card-text">
                                                        Lorem ipsum dolor sit amet
                                                        consectetur adipisicing elit. Cum dolorum
                                                        consectetur excepturi laudantium ipsa accusamus
                                                        assumenda magnam unde provident aut suscipit neque
                                                        quidem consequatur nobis beatae quis magni
                                                    </p>
                                                    <small>date debut - date fin</small>
                                            </li><br>
                                            <div class="row  ">
                                                <div class="col-md-4">
                                                    <button class="btn btn-warning mr-4 btn-sm  "  > editier </button>
                                                    <button class="btn btn-danger btn-sm mr-4    "  > supprimer </button>
                                                    <button class="btn btn-info btn-sm  " > ajouter </button>
                                                </div>
                                            </div>
                                        </ul>
                        </div>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>


