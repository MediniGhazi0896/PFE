<?php

use Illuminate\Database\Seeder;

class ReportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //OrgMesures
        DB::table('ReportMesuresOrgs')->insert([
            "report_id"=>1
        ]);
        //TechMesures
        DB::table('report_mesuresteches')->insert([
            "report_id"=>1
        ]);
        //PhyMesures
        DB::table('report_mesuresphies')->insert([
            "report_id"=>1
        ]);
    }
}
