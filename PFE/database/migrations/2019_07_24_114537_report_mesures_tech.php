<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReportMesuresTech extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_mesuresteches', function (Blueprint $table) {
            $table->bigInteger('report_id')->unsigned();
            $table->primary('report_id');
            $table->foreign('report_id')->references('mission_id')->on('missions');
            $table->string('Existence_dune_solution_antivirale')->default('NonMentionne');
$table->string('MAJ_périodique_de_la_Sol_Antivirale')->default('NonMentionne');
$table->string('Couverture_des_serveurs')->default('NonMentionne');
$table->string('Couverture_des_PCs')->default('NonMentionne');
$table->string('Existence_Dép_auto_patchs&cor_Séc_OS')->default('NonMentionne');
$table->string('Couverture_des_serveurs_Dep_auto')->default('NonMentionne');
$table->string('Couverture_des_PCs_Dep_auto')->default('NonMentionne');
$table->string('Processus_MAJ_Sécurité_Existence')->default('NonMentionne');
$table->string('Processus_MAJ_Sécurité_Couverture')->default('NonMentionne');
$table->string('Processus_MAJ_Réseau_Existence')->default('NonMentionne');
$table->string('Processus_MAJ_Réseau_Couverture')->default('NonMentionne');
$table->string('Remp_OS_Serveurs_EoL_EoS')->default('NonMentionne');
$table->string('Remp_OS_PCs_EoL_EoS')->default('NonMentionne');
$table->string('Remp_Produits_Sécurité_EoL_EoS')->default('NonMentionne');
$table->string('Remp_Produits_Réseau_EoL_EoS')->default('NonMentionne');
$table->string('Utilisation_Contrôleur_de_domaines')->default('NonMentionne');
$table->string('Utilisation_dune_Solution_IAM')->default('NonMentionne');
$table->string('Utilisation_Proxy_Accès_Internet')->default('NonMentionne');
$table->string('Matrice_de_Flux_Réseau_MFR_formelle')->default('NonMentionne');
$table->string('Implémentation_règles_de_filtr-Equips_frontauX')->default('NonMentionne');
$table->string('Implémentation_Filtrage_inter-VLAN_cf_MFR')->default('NonMentionne');
$table->string('Existence_dun_réseau_dadmin')->default('NonMentionne');
$table->string('Isolé_du_réseau_production_et_Internet')->default('NonMentionne');
$table->string('Admin_qu’à_partir_des_machines_de_ce_réseau')->default('NonMentionne');
$table->string('Utilisation_protocoles_admin_chiffrés')->default('NonMentionne');
$table->string('Désactiv_des_partages_rés_sur_les_serveurs')->default('NonMentionne');
$table->string('Désactiv_des_partages_rés_sur_les_PCs')->default('NonMentionne');
$table->string('Utilisation_des_serveurs_de_fichier')->default('NonMentionne');
$table->string('Systeme_de_detection:Existence')->default('NonMentionne');
$table->string('Déf_politique_de_détection')->default('NonMentionne');
$table->string('Configuration')->default('NonMentionne');
$table->string('Processus_de_suivi_des_alertes_générées')->default('NonMentionne');
$table->string('Solution_SIEM:Existence')->default('NonMentionne');
$table->string('Solution_SIEM:Portee_serveurs')->default('NonMentionne');
$table->string('Solution_SIEM:Portee_Equips_Sec')->default('NonMentionne');
$table->string('Solution_SIEM:Portee_Equips_Res')->default('NonMentionne');
$table->string('Synchronisation_des_horloges')->default('NonMentionne');
$table->string('Couverture_des_Serveurs:CM')->default('NonMentionne');
$table->string('Couverture_applications_métier')->default('NonMentionne');
$table->string('Couverture_SGBDs')->default('NonMentionne');
$table->string('Couverture_équips_sécurite')->default('NonMentionne');
$table->string('Couverture_équips_réseau')->default('NonMentionne');
$table->string('Sép_infras_dév,_test_et_exploitation')->default('NonMentionne');
$table->timestamps();
});
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report_mesuresteches');
    }
}
