<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReportMesuresPhy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_mesuresphies', function (Blueprint $table) {
            $table->bigInteger('report_id')->unsigned();
            $table->primary('report_id');
            $table->foreign('report_id')->references('mission_id')->on('missions');
$table->string('Local_Data_Center:Existence')->default('NonMentionne');
$table->string('Classification')->default('NonMentionne');
$table->string('Zone_d_emplacement')->default('NonMentionne');
$table->string('Couverture_onduleurs_Serveurs')->default('NonMentionne');
$table->string('Couverture_onduleurs_Equips_rés_&_séc')->default('NonMentionne');
$table->string('Couverture_onduleurs_PCs')->default('NonMentionne');
$table->string('Existence_Groupe_électrogène')->default('NonMentionne');
$table->string('Test_régulier_du_groupe_électrogène')->default('NonMentionne');
$table->string('Système_de_climatisation_adéquate')->default('NonMentionne');
$table->string('Redondance')->default('NonMentionne');
$table->string('Contrat_de_maintenance')->default('NonMentionne');
$table->string('Chemins_de_câbles_dédiés_et_séparés')->default('NonMentionne');
$table->string('Etiquetage')->default('NonMentionne');
$table->string('Plans_de_chemins_de_câblage')->default('NonMentionne');
$table->string('Contrôle_d’accès_au_Data-Center:cle')->default('NonMentionne');
$table->string('Contrôle_d’accès_au_Data-Center:carte')->default('NonMentionne');
$table->string('Contrôle_d’accès_au_Data-Center:bio')->default('NonMentionne');
$table->string('Solution_de_détection_d’intrusion')->default('NonMentionne');
$table->string('Système_de_vidéo-surveillance')->default('NonMentionne');
$table->string('Murs_résistants')->default('NonMentionne');
$table->string('Détecteurs_de_fumée')->default('NonMentionne');
$table->string('Extincteurs_automatiques')->default('NonMentionne');
$table->string('Porte_Data_Center_Coupe-feu')->default('NonMentionne');
$table->string('Détecteurs_d’humidité')->default('NonMentionne');
$table->string('Système_d’alerte')->default('NonMentionne');
$table->string('Dispositif_Anti-foudre')->default('NonMentionne');
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
        Schema::dropIfExists('report_mesuresphies');
    }
}
