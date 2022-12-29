<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\annoucement;
use Illuminate\Support\Facades\DB;

class AnnoucementController extends Controller
{


    public function AnnoucementPage(){
        $anns =\App\Models\annoucement::all();

        return view('annoucement.annoucementDashboard',['anns'=> $anns]);
    }

    public function EVAnnoucementPage(){
        $anns =\App\Models\annoucement::where('annoucement_type', '=', 'Evaluators')
        ->orwhere('annoucement_type', '=', 'Both')
        ->get();


        return view('annoucement.evannoucement',['anns'=> $anns]);
    }

    public function StdAnnoucementPage(){
        $anns =\App\Models\annoucement::where('annoucement_type', '=', 'Students')
        ->orwhere('annoucement_type', '=', 'Both')
        ->get();

        return view('annoucement.stdannoucement',['anns'=> $anns]);
    }






    public function create()
    {
        $id = DB::table('annoucements')
            ->count() + 1;

            $id = "0" . $id;
       


        return view('annoucement.AddannoucementDetails', ['id' => $id])->with('success','Data Successfully Inserted');
    }


    public function store()
    {
        $anns = new  annoucement();
        $anns->id = request('id');
        $anns->annoucement_title = request('annoucement_title');
        $anns->annoucement_details = request('annoucement_details');
        $anns->annoucement_type = request('annoucement_type');
        error_log($anns);

        $anns->save();


        return redirect('annoucement/AddannoucementDetails')->with('success','Data Successfully Inserted');
    }


    //delete Annoucement
    public function delete($id)
    {
   
    error_log('Annoucement Destroying...');
    error_log($id);
    $anns = DB::table('annoucements')->select('*')->where('id', '=', $id);
    $anns->delete();

    return redirect('/annoucementDashboard')->with('success','Data Successfully Deleted');
   }


   public function EditAnn($id)
   {
    $anns = annoucement::find($id);

    return view('annoucement/EditannoucementDetails',['anns'=>$anns]);
    }


    public function UpdateAnn(Request $request,$id){
        $anns = \App\Models\annoucement::find($id);
        $anns->update($request->all());

        return redirect('/annoucementDashboard')->with('success','Annoucement Successfully updated');
    }



    public function detail($id)
    {

        $anns = annoucement::find($id);

        return view('annoucement/annoucementdetails', ['anns'=> $anns]);



    }


   
}
