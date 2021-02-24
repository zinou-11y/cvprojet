<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cv;
use App\Models\Experience;


use App\Http\Requests\cvRequest;
use Illuminate\Support\Facades\Auth;


class CvController extends Controller
{    public   function __construct(){
        $this->middleware('auth');
}

    // permet de lister les cvs
    public function index(){
        if (Auth::user()->is_admin){
            $listcv =Cv::all();
        }else{
            $listcv = Cv::where('user_id', Auth::user()->id)->get();
        }

        //where ('user_id' , Auth::user())->cvs;// Cv::all();
        return view ('cv.index' , ['cvs' =>$listcv]);

    }
// affiche le formulaire de creation du cv
    public function create(){
        return view('cv.create');

    }


// permet d enregister le cv
    public function store(cvRequest $request) {
        $cv = new Cv();
        $cv->titre =$request->input('titre');
        $cv->presentation =$request->input('presentation');
        $cv->user_id = Auth::user()->id;
        if($request->hasFile('photo')){
            $cv->photo = $request->photo->store('public');
    }
        $cv->save();
        session()->flash('succes' , 'le cv a été bien enregistré');
        return redirect('/cvs');
    }
    // permet de modifier un cv
    public function update( cvRequest $request , $id){
        $cv = Cv::find($id);
        $cv->titre = $request->input('titre');
        $cv->presentation = $request->input('presentation');
        if($request->hasFile('photo')){
            $cv->photo = $request->photo->store('public');
    }
        $cv->save();
        session()->flash('edit' , 'le cv a été bien modifier');
        return redirect ('cvs');

    }
 // permet de recupere le cv est metre dans le formulaire
    public function edit($id){
        $cv= Cv::find($id);
        $this->authorize('update', $cv);
        return view('cv.edit', ['cv'=>$cv]);

}
public function show($id){
    $cv= Cv::find($id);
    return view('cv.show', ['id'=>$id]);
}
public function sho($id){
    $cv= Cv::find($id);
    return view('cv.sho', ['id'=>$id]);
}

    // permet de supp le cv
    public function destroy(Request $request , $id){
        $cv = Cv::find($id);
        $this->authorize('delete', $cv);
        $cv->delete();
        session()->flash('suprime' , 'le cv a été bien suprimé :)');
        return redirect('/cvs');
    }
 public function getExperiences($id)
{
    $cv = Cv::find($id);

    return $cv->experiences;
}
/*
public function addExperience(Request $request)
{
    $experience = new Experience;
    $experience->titre = $request->titre ;
    $experience->body  = $request->body ;
    $experience->debut  = $request->debut ;
    $experience->fin  = $request->fin ;
    $experience->cv_id  = $request->cv_id ;
    $experience->save();
    return response() ->json(['etat'=>true , 'id'=>$experience->id]);
}

*/

    }
