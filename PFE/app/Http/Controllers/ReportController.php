<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReportMesuresOrg;
use App\ReportMesuresPhy;
use App\ReportMesuresTech;
use App\Mission;
use App\Corp;
use DB;

class ReportController extends Controller
{
    public function showReportForm($id){
        $reportOrg = DB::table('ReportMesuresOrgs')->where('report_id',$id)->first();
        $reportPhy = DB::table('report_mesuresphies')->where('report_id',$id)->first();
        $reportTech = DB::table('report_mesuresteches')->where('report_id',$id)->first();
        $mission = Mission::where('mission_id',$id)->first();
        $corp = Corp::where('id',$mission->corp_id)->first();
        return view('pages.report-form',['id'=>$id,'year'=>$mission->year,'reportPhy'=>$reportPhy,'reportTech'=>$reportTech,'reportOrg'=>$reportOrg,'corp'=>$corp]);
    }
    public function updateReport(request $request){
        $id = $request->id;
        $tableReq = $request->table;
        $tableName;
        $key = $request->key;
        $value = $request->value;
        switch ($tableReq) {
            case 'org':
                $tableName = "reportmesuresorgs";
                break;
            
                case 'phy':
                $tableName = "report_mesuresphies";
                break;
            
                case 'tech':
                $tableName = "report_mesuresteches";
                break;
            
            default:
                # code...
                break;
        }
        DB::table($tableName)->where('report_id',$id)->update( [$key=>$value,'updated_at'=>now()] );
        return response()->json('updated successfully');
    }
}
