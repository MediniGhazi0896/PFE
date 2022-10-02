<?php

namespace App\Http\Controllers;

use Illuminate\Http\request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\Corp;
use DB;

class CorpsController extends Controller
{

    public function showCreationPage(){
        return view('pages.create-corp');
    }
    public function showListPage(){
        $corps = Corp::all();
        return view('pages.list-corp',['corps'=>$corps]);
    }
    public function showUpdatePage($id){
        $corp = Corp::where('id',$id)->first();
        return view('pages.update-corp',['corp'=>$corp]);
    }


    public function createCorp(request $request){
        //validation rules
        $rules = array(
            'name'=>'required|unique:corps,name',
            'activity_sector'=>'required',
            'category'=>'required',
            'criticality_class'=>'required',
            'type'=>'required'
        );
        // validate against the inputs from our form
        $validator = Validator::make(Input::all(), $rules);
        // check if the validator failed -----------------------
        if ($validator->fails()) {
            // redirect our user back to the form with the errors from the validator
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else
        {
            $corp = new Corp();
            $corp->name = $request->name;
            $corp->activity_sector = $request->activity_sector;
            $corp->category = $request->category;
            $corp->criticality_class = $request->criticality_class;
            $corp->type = $request->type;
            $corp-> save();
            return redirect('/corps')->withStatus(__('Société créée avec succès!'));;
        }
    }
    public function updateCorp(request $request){
        //id
        $id = $request->id;
        //validation rules
        $rules = array(
            'name'=>'required|unique:corps,name,'.$id,
            'activity_sector'=>'required',
            'category'=>'required',
            'criticality_class'=>'required',
            'type'=>'required'
        );
        // validate against the inputs from our form
        $validator = Validator::make(Input::all(), $rules);
        // check if the validator failed -----------------------
        if ($validator->fails()) {
            // redirect our user back to the form with the errors from the validator
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else
        {
            $name = $request->name;
            $activity_sector = $request->activity_sector;
            $category = $request->category;
            $criticality_class = $request->criticality_class;
            $type = $request->type;
            $time = now();
            $array = [
                'name'=>$name,
                'activity_sector'=>$activity_sector,
                'category'=>$category,
                'criticality_class'=>$criticality_class,
                'type'=>$type,
                'updated_at'=>$time,
            ];
            DB::table('corps')->where('id',$id)->update($array);
            return redirect('/corps')->withStatus(__('Société modifiée avec succès!'));;
        }
    }
}
