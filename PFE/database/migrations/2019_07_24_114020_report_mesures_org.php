<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReportMesuresOrg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ReportMesuresOrgs', function (Blueprint $table) {
            $table->bigInteger('report_id')->unsigned();
        $table->primary('report_id');
        $table->foreign('report_id')->references('mission_id')->on('missions');
        $table->string('Nomination_offcielle_RSSI')->default('NonMentionne');
        $table->string('Fiche_de_poste_RSSI')->default('NonMentionne');
        $table->string('Rattachement_RSSI')->default('NonMentionne');
        $table->string('Existence_officielle_Cellule_Sécurité')->default('NonMentionne');
        $table->string('Existence_officielle_Comité_Sécurité')->default('NonMentionne');
        $table->string('Existence_formelle_PSSI')->default('NonMentionne');
        $table->string('PorteePSSI')->default('NonMentionne');
        $table->string('Communication')->default('NonMentionne');
        $table->string('Maintien_de_la_PSSI')->default('NonMentionne');
        $table->string('Existence_formelle_PCA')->default('NonMentionne');
        $table->string('Maintien_du_PCA')->default('NonMentionne');
        $table->string('Existence_formelle_PRA')->default('NonMentionne');
        $table->string('Maintien_du_PRA')->default('NonMentionne');
        $table->string('Organisation_de_crise_en_cas_de_sinistre')->default('NonMentionne');
        $table->string('Site_Secours')->default('NonMentionne');
        $table->string('Inventaire_complet')->default('NonMentionne');
        $table->string('Procédure_formelle_de_classification')->default('NonMentionne');
        $table->string('Mise_en_place_de_la_classification')->default('NonMentionne');
        $table->string('Existence_formelle_de_la_gestion_des_risques')->default('NonMentionne');
        $table->string('Couverture_totale_du_Métier')->default('NonMentionne');
        $table->string('Fréquence_de_réalisation')->default('NonMentionne');
        $table->string('Procédure_formelle_de_gestion_des_incidents')->default('NonMentionne');
        $table->string('Existence_dune_cellule_de_gestion_des_incidents')->default('NonMentionne');
        $table->string('Politique_formelle_de_sauvegarde')->default('NonMentionne');
        $table->string('Couverture_des_données_métier')->default('NonMentionne');
        $table->string('Couverture_des_données_de_serveurs_de_support')->default('NonMentionne');
        $table->string('Couverture_des_données_des_PCs_utilisateurs_sensibles')->default('NonMentionne');
        $table->string('Couverture_des_running-config_des_equipes_sec&res')->default('NonMentionne');
        $table->string('Couverture_Clonage_OS_des_serveurs')->default('NonMentionne');
        $table->string('Couverture_des_codes_sources_et_des_paramètres_de_config')->default('NonMentionne');
        $table->string('Maintien_de_la_pol_de_sauvegarde')->default('NonMentionne');
        $table->string('Tests_de_restauration_périodiques')->default('NonMentionne');
        $table->string('Sécurité_phys_des_copies_de_sauvegarde')->default('NonMentionne');
        $table->string('Existence_des_copies_à_un_site_distant')->default('NonMentionne');
        $table->string('Existence_dun_Tableau_de_bord_SSI')->default('NonMentionne');
        $table->string('Contrôle_d’accès_au_DC:Portee-IndicateursOpérationnels')->default('NonMentionne');
        $table->string('Contrôle_d’accès_au_DC:Portee-IndicateursStrategiques')->default('NonMentionne');
        $table->string('Existence_de_lAudit_interne_de_la_sécurité')->default('NonMentionne');
        $table->string('Réalisation')->default('NonMentionne');
        $table->string('Réalisation:Periodique')->default('NonMentionne');
        $table->string('Réalisation:Suite_a _un_incident')->default('NonMentionne');
        $table->string('Réalisation:Suite_mise_en_place_nouveau_sys')->default('NonMentionne');
        $table->string('Portee')->default('NonMentionne');
        $table->string('Portee:Aspect_Tech')->default('NonMentionne');
        $table->string('Portee:Aspect_Phy')->default('NonMentionne');
        $table->string('Portee:Aspect_Org')->default('NonMentionne');
        $table->string('Portee:Aspect_tech-Org-Phy')->default('NonMentionne');
        $table->string('Existence_dune_démarche_de_conf')->default('NonMentionne');
        $table->string('Nature')->default('NonMentionne');
        $table->string('Nature:ISO27001')->default('NonMentionne');
        $table->string('Nature:PCI-DSS')->default('NonMentionne');
        $table->string('Etape')->default('NonMentionne');
        $table->string('Politique_formelle_de_contrôle_d’accès')->default('NonMentionne');
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
        Schema::dropIfExists('ReportMesuresOrgs');
    }
}
