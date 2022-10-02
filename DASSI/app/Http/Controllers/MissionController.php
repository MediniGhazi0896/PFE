<?php

namespace App\Http\Controllers;

use App\Corp;
use DB;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    public function showMissionsList(){
        $missionsRaw = auth()->user()->missions;
        $missions = [];
        foreach ($missionsRaw as $missionRaw) {
            if($missionRaw->completed == 1) {
                continue;
            }
            $mission = [
                'name' => Corp::where('id',$missionRaw->corp_id)->first()->name,
                'date' => $missionRaw->created_at,
                'id' => $missionRaw->mission_id
            ];
            array_push($missions, (object)$mission);
        }
        return view('pages.missions-list',['missions'=>$missions]);
    }

    public function finishMissionJson($id){
        DB::table('missions')->where('report_id',$id)->update([
            'completed'=>1,
            'updated_at'=>now()
        ]);
        return response()->json("success");
    }
}
