<?php

namespace App\Http\Controllers;

use Illuminate\Http\request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\Audit;
use App\Moral;
use App\Physical;
use App\File;
use \PDF;
use Dompdf\Dompdf;
use DB;

class AuditorController extends Controller
{


public function showListPage(){
if(auth()->user()->role != "User")
        {
	$Physical = Physical::All();
	$Moral = Moral::All();
	
	return view('pages.list-auditor',['Moral'=>$Moral],['Physical'=>$Physical]);
}
else {
            return redirect('/home');
        }
    }

 public function showUpdateMoralPage($id) {
 if(auth()->user()->role != "User")
        {
        $Moral = Moral::where('id',$id)->first();
        return view('pages.update-moral',['Moral'=>$Moral]);
    }
else {
            return redirect('/home');
        }
}

public function showUpdatePhysicalPage($id){
if(auth()->user()->role != "User")
{
        $Physical = Physical::where('id',$id)->first();
        return view('pages.update-physical',['Physical'=>$Physical]);
    }
else {
            return redirect('/home');
        }
}


 public function showuploadformpage(){
       if(auth()->user()->role != "User")
        {
        return view('pages.upload-form');
    }
else {
            return redirect('/home');
        }
    }

public function showDownloadformpage(){
       if(auth()->user()->role != "User")
        { 
        return view('pages.Download-form');
     }
else {
            return redirect('/home');
        }
       }

public function showMoralformpage() {
 if(auth()->user()->role != "User")
        { 
		return view('pages.upload-moral');
 }
else {
            return redirect('/home');
        }
}

public function showPhysicalformpage() {
 if(auth()->user()->role != "User")
        { 
		return view('pages.upload-physical');
  }
else {
            return redirect('/home');
        }
}

public function ShowStep2Moral(){
		return view('pages.Step2-Moral');
}

public function ShowStep2Physical(){
		return view('pages.Step2-Physical');
}


public function submitMoralform(request $request) 
{
$rules = array(
        	
            'name'=>'required',
            'lastname'=>'required',
        	'nationality'=>'required',
            'birthdate'=>'required|date',
            'NIC'=>'required',
            'issued'=>'required|date',
        	'in'=>'required',
        	'address'=>'required',
        	'phone'=>'required',
        	'email'=>'required'
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
            $Moral = new Moral();
       
            $Moral->name = $request->name;
            $Moral->lastname = $request->lastname;
            $Moral->nationality = $request->nationality;
            $Moral->birthdate = $request->birthdate;
            $Moral->NIC = $request->NIC;
        	$Moral->issued =$request->issued;
        	$Moral->in = $request->in;
        	$Moral->address = $request->address;
        	$Moral->phone= $request->phone;
        	$Moral->email= $request->email;
            $Moral-> save();
        }

      $request->validate([
                'Moralfilesnames' => 'required',
                'Moralfilesnames.*' => 'mimes:jpg,jpeg,png,bmp|max:200000000',
        ]);


        if($request->hasFile('Moralfilesnames'))
         {
        
            foreach($request->file('Moralfilesnames') as $file)
            {
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/Moralfiles/', $name); 
       			$file= new File();
        	    $file->filenames=json_encode($name);
        	    $file->save();
        
            }
         }
	
	  return redirect('/Moral/Conditions')->withStatus('Moral Persons Added Successfully And Data files has been successfully added to Moralfiles Directory'); 
         
}

public function SubmitStep2Moral(request $request) {
$value1 = $request->input('cond1');
$value2 = $request->input('cond2');
$value3 = $request->input('cond3');
$value4 = $request->input('cond4');
$value5 = $request->input('cond5');
$value6 = $request->input('cond6');
$value7 = $request->input('cond7');
$value8 = $request->input('cond8');
$value9 = $request->input('cond9');
$value10 = $request->input('cond10');
$value11= $request->input('cond11');


 if  ( ($value1 == 'yes') && ($value2 == 'yes') && ($value3 == 'yes') && ($value4 == 'yes') && ($value5 == 'yes') && ($value6 == 'yes') && ($value7 == 'yes') && ($value8 == 'yes') && ($value9 == 'yes') && ($value10 == 'yes') && ($value11 == 'yes'))
{ 
 return redirect('/form/Download');
  
} 
else
{
return redirect()->back()->withStatus(__(' Something went Wrong !!  A condition is not verfied ! Try Again !! '));;
} 
}



public function updateMoral(request $request){
    //id
    $id = $request->id;
    //validation rules
    $rules = array(
    		
            'name'=>'required',
            'lastname'=>'required',
        	'nationality'=>'required',
            'birthdate'=>'required|date',
            'NIC'=>'required',
            'issued'=>'required|date',
        	'in'=>'required',
        	'address'=>'required',
        	'phone'=>'required',
        	'email'=>'required|email'
        );
    //validate against the inputs from our form
    $validator = Validator::make(Input::all(), $rules);
    // check if the validator fails 
    if ($validator->fails()) {
    return redirect()->back()->witherrors($validator)->withInput();
    }
    else 
    {
    		
     		$name = $request->name;
            $lastname = $request->lastname;
            $nationality = $request->nationality;
            $birthdate = $request->birthdate;
            $NIC = $request->NIC;
        	$issued =$request->issued;
        	$in = $request->in;
        	$address = $request->address;
        	$phone= $request->phone;
        	$email= $request->email;
    		$time = now();
    		$array = [
            
            'name'=>$name,
            'lastname'=>$lastname,
            'nationality'=>$nationality,
            'birthdate'=>$birthdate,
            'NIC'=>$NIC,
            'issued'=>$issued,
            'in'=>$in,
            'address'=>$address,
            'phone'=>$phone,
            'email'=>$email,
            'updated_at'=>$time,
            ];
    		DB::table('moral')->where('id',$id)->update($array);
    		return redirect('/audit/list')->withStatus(__('Moral Person Updated !! '));;
    }
    }


// physical person form functions : 


public function submitPhysicalform(request $request) 
{
$rules = array(
        	
            'name'=>'required',
            'lastname'=>'required',
        	'nationality'=>'required',
            'birthdate'=>'required|date',
            'NIC'=>'required',
            'issued'=>'required|date',
        	'in'=>'required',
        	'address'=>'required',
        	'phone'=>'required',
        	'email'=>'required'
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
            $Physical = new Physical();
        	
            $Physical->name = $request->name;
            $Physical->lastname = $request->lastname;
            $Physical->nationality = $request->nationality;
            $Physical->birthdate = $request->birthdate;
            $Physical->NIC = $request->NIC;
        	$Physical->issued =$request->issued;
        	$Physical->in = $request->in;
        	$Physical->address = $request->address;
        	$Physical->phone= $request->phone;
        	$Physical->email= $request->email;
            $Physical-> save();
        }

        $request->validate([
                'Physicalfilesnames' => 'required',
                'Physicalfilesnames.*' => 'mimes:jpg,jpeg,png,bmp|max:200000000',
        ]);


        if($request->hasfile('Physicalfilesnames'))
         {
            foreach($request->file('Physicalfilesnames') as $file)
            {
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/Physicalfiles/', $name); 
                $file= new File();
        	    $file->filenames=json_encode($name);
        	    $file->save();
           	
            }
         }

       return redirect('/Physical/Conditions')->withStatus(' Physical Persons Added SuccessfullyData files has been successfully added To Physical files Directory');
    }




public function SubmitPhysicalConditions(request $request) {
$value1 = $request->input('cond1');
$value2 = $request->input('cond2');
$value3 = $request->input('cond3');
$value4 = $request->input('cond4');
$value5 = $request->input('cond5');
$value6 = $request->input('cond6');
$value7 = $request->input('cond7');
$value8 = $request->input('cond8');

 if  ( ($value1 == 'yes') && ($value2 == 'yes') && ($value3 == 'yes') && ($value4 == 'yes') && ($value5 == 'yes') && ($value6 == 'yes') && ($value7 == 'yes') && ($value8 == 'yes') )
{ 
 return redirect('/form/Download');
  
} 
else
{
return redirect()->back()->withStatus(__(' Something went Wrong !!  A condition is not verfied ! Try Again !! '));;
} 
}


public function updatePhysical(request $request){
    //id
    $id = $request->id;
    //validation rules
    $rules = array(
    		
            'name'=>'required',
            'lastname'=>'required',
        	'nationality'=>'required',
            'birthdate'=>'required|date',
            'NIC'=>'required',
            'issued'=>'required|date',
        	'in'=>'required',
        	'address'=>'required',
        	'phone'=>'required',
        	'email'=>'required'
        );
    //validate against the inputs from our form
    $validator = Validator::make(Input::all(), $rules);
    // check if the validator fails 
    if ($validator->fails()) {
    return redirect()->back()->witherrors($validator)->withInput();
    }
    else 
    {
    		
     		$name = $request->name;
            $lastname = $request->lastname;
            $nationality = $request->nationality;
            $birthdate = $request->birthdate;
            $NIC = $request->NIC;
        	$issued =$request->issued;
        	$in = $request->in;
        	$address = $request->address;
        	$phone= $request->phone;
        	$email= $request->email;
    		$time = now();
    		$array = [
           
            'name'=>$name,
            'lastname'=>$lastname,
            'nationality'=>$nationality,
            'birthdate'=>$birthdate,
            'NIC'=>$NIC,
            'issued'=>$issued,
            'in'=>$in,
            'address'=>$address,
            'phone'=>$phone,
            'email'=>$email,
            'updated_at'=>$time,
            ];
    		DB::table('physical')->where('id',$id)->update($array);
    		return redirect('/audit/list')->withStatus(__('Physical Person Updated !! '));;
    }
    }


 public function uploadform(request $request)
   
	{
        $request->validate([
            'file' => 'required|mimes:pdf|max:51200‬',
        ]);
  
      
   		$fileName = $request->file->getClientOriginalName();
        $request->file->move(public_path('Files'), $fileName);	 
  				$file= new File();
        	    $file->filenames=json_encode($fileName);
        	    $file->save();
        
       		 return back()
            ->withStatus('You have successfully uploaded file :  '.$fileName)
            ->with('file',$fileName);
   
    }

public function exportPDF(request $request)
{

	$Physical = Physical::All();
	$Moral = Moral::All();


if (($request->input('person_type') == 'Moral Person') && ($request->input('name')  == $Moral->name)) {
 // Fetch all customers from database
    $data = Moral::get();

    // Send data to the view using loadView function of PDF facade
    $pdf = \PDF::loadView('pdf.upload-moral', $data);
    // If you want to store the generated pdf to the server then you can use the store function
    $pdf->save(storage_path().'_filename.pdf');
    // Finally, you can download the file using download function
    return $pdf->download('Moral.pdf'); 

   
       }
     else
      {
      if (($request->input('person_type') == 'Physical Person') && ($request->input('name')  == $Physical->name)) {
       // Fetch all customers from database
    $data = Physical::get();
    // Send data to the view using loadView function of PDF facade
    $pdf = \PDF::loadView('pdf.upload-physical', $data);
    // If you want to store the generated pdf to the server then you can use the store function
    $pdf->save(storage_path().'_filename.pdf');
    // Finally, you can download the file using download function
    return $pdf->download('Physical.pdf'); 
      //	return view('pages.upload-physical',['Physical'=>$Physical]);
       }
}
}

  
   


// end of Controller 
}


