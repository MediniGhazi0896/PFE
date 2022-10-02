<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div id="accordion" class="checkout">
				<div class="panel checkout-step">
					<div> <span class="checkout-step-number">1</span>
						<h4 class="checkout-step-title"> <a role="button" data-toggle="collapse"
								data-parent="#accordion" href="#collapseOne">Organisation</a></h4>
					</div>
					<div id="collapseOne" class="collapse in">
						<div class="checkout-step-body">
							<div class="row">
								<div class="col-lg-12 col-md-12 cold-sm-12">
									<h5>Nomination offcielle RSSI</h5>
									<div class="ml-5">
										<input type="radio" data-table="org" data-field="Nomination_offcielle_RSSI" name="e3" id="e3-1" value="404" @if($report->Nomination_offcielle_RSSI == "NonMentionne")checked @endif>
										<label class="font-weight-bold" for="e3-1">Non Mentionné</label>
										<br>
										<input type="radio"data-table="org" data-field="Nomination_offcielle_RSSI"  name="e3" id="e3-2" value="1" @if($report->Nomination_offcielle_RSSI == "Oui")checked @endif>
										<label class="font-weight-bold" for="e3-2">Oui</label>
										<br>
										<input type="radio" data-table="org" data-field="Nomination_offcielle_RSSI" name="e3" id="e3-3" value="0" @if($report->Nomination_offcielle_RSSI == "Non")checked @endif>
										<label class="font-weight-bold" for="e3-3">Non</label>
										<br>
									</div>
									<hr>

									<h5>Fiche de poste RSSI</h5>
									<div class="ml-5">
										<input type="radio" data-table="org" data-field="Fiche_de_poste_RSSI" name="f3" id="f3-1" value="404" @if($report->Fiche_de_poste_RSSI == "NonMentionne")checked @endif>
										<label for="f3-1">Non Mentionné</label>
										<br>
										<input type="radio" data-table="org" data-field="Fiche_de_poste_RSSI" name="f3" id="f3-2" value="1" @if($report->Fiche_de_poste_RSSI == "Oui")checked @endif>
										<label for="f3-2">oui</label>
										<br>
										<input type="radio" data-table="org" data-field="Fiche_de_poste_RSSI" name="f3" id="f3-3" value="0" @if($report->Fiche_de_poste_RSSI == "Non")checked @endif>
										<label for="f3">non</label>
									</div>
									<hr>

									<h5>Rattachement RSSI</h5>
									<div class="ml-5">
										<select class="form-control" name="g3" id="g3">
											<option data-table="org" data-field="Rattachement_RSSI" value="404"  @if($report->Rattachement_RSSI == "NonMentionne") selected="selected" @endif >Non Mentionné</option>
											<option data-table="org" data-field="Rattachement_RSSI" value="DG"  @if($report->Rattachement_RSSI == "DG") selected="selected" @endif >DG</option>
											<option data-table="org" data-field="Rattachement_RSSI" value="DSI"  @if($report->Rattachement_RSSI == "DSI") selected="selected" @endif >DSI</option>
											<option data-table="org" data-field="Rattachement_RSSI" value="Direction Administrative"  @if($report->Rattachement_RSSI == "Direction Administrative") selected="selected" @endif >Direction Administrative</option>
											<option data-table="org" data-field="Rattachement_RSSI" value="Direction Audit Interne"  @if($report->Rattachement_RSSI == "Direction Audit Interne") selected="selected" @endif >Direction Audit Interne</option>
											<option data-table="org" data-field="Rattachement_RSSI" value="Direction Risques "  @if($report->Rattachement_RSSI == "Direction Risques ") selected="selected" @endif >Direction Risques </option>
										</select>
									</div>
									<hr>

									<h5>Existence officielle Cellule Sécurité</h5>
									<div class="ml-5">
										<input type="radio" data-table="org" data-field="Existence_officielle_Cellule_Sécurité" name="h3" id="h3-1" value="404"  @if($report->Existence_officielle_Cellule_Sécurité == "NonMentionne")checked @endif>
										<label for="h3-1">Non Mentionné</label>
										<br>
										<input type="radio" data-table="org" data-field="Existence_officielle_Cellule_Sécurité" name="h3" id="h3-2" value="1" @if($report->Fiche_de_poste_RSSI == "Oui")checked @endif>
										<label for="h3-2">oui</label>
										<br>
										<input type="radio" data-table="org" data-field="Existence_officielle_Cellule_Sécurité" name="h3" id="h3-3" value="0" @if($report->Fiche_de_poste_RSSI == "Non")checked @endif>
										<label for="h3-3">non</label>
									</div>
									<hr>

									<h5>Existence officielle Comité Sécurité</h5>
									<div class="ml-5">
										<input type="radio" data-table="org" data-field="Existence_officielle_Comité_Sécurité" name="i3" id="i3-1" value="404" checked>
										<label for="i3-1">Non Mentionné</label>
										<br>
										<input type="radio" data-table="org" data-field="Existence_officielle_Comité_Sécurité" name="i3" id="i3-2" value="1">
										<label for="i3-2">oui</label>
										<br>
										<input type="radio" data-table="org" data-field="Existence_officielle_Comité_Sécurité" name="i3" id="i3-3" value="0">
										<label for="i3-3">non</label>
									</div>
									<!-- /input-group -->
								</div>
								<!-- /.col-lg-6 -->
							</div>

						</div>
					</div>
				</div>
				<div class="panel checkout-step">
					<div role="tab" id="headingTwo"> <span class="checkout-step-number">2</span>
						<h4 class="checkout-step-title"> <a class="collapsed" role="button" data-toggle="collapse"
								data-parent="#accordion" href="#collapseTwo"> PSSI </a> </h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse">
						<div class="checkout-step-body">
							<div class="checout-address-step">
								<h5>Existence formelle PSSI</h5>
								<div class="ml-5">
									<input type="radio" data-table="org" data-field="Existence_formelle_PSSI" name="j3" id="j3-1" value="404" checked>
									<label for="j3-1">Non Mentionné</label>
									<br>
									<input type="radio" data-table="org" data-field="Existence_formelle_PSSI" name="j3" id="j3-2" value="1">
									<label for="j3-2">oui</label>
									<br>
									<input type="radio"data-table="org" data-field="Existence_formelle_PSSI"  name="j3" id="j3-3" value="0">
									<label for="j3-3">non</label>
								</div>
								<hr>

								<div name="MPCA0" id="MPCA0" hidden>
									<h5>Portée</h5>
									<div class="ml-5">
										<select class="form-control" name="k3" id="k3">
											<option data-table="org" data-field="PorteePSSI" value="Non Mentionné" selected="selected">Non Mentionné</option>
											<option data-table="org" data-field="PorteePSSI" value="Partielle">Partielle</option>
											<option data-table="org" data-field="PorteePSSI" value="Totale">Totale</option>
										</select>
									</div>
									<hr>

									<h5>Communication</h5>
									<div class="ml-5">
										<input data-table="org" data-field="Communication" type="radio" name="l3" id="l3-1" value="404" checked>
										<label for="l3-1">Non Mentionné</label>
										<br>
										<input data-table="org" data-field="Communication" type="radio" name="l3" id="l3-2" value="1">
										<label for="l3-2">oui</label>
										<br>
										<input data-table="org" data-field="Communication" type="radio" name="l3" id="l3-3" value="0">
										<label for="l3-3">non</label>
									</div>
									<hr>

									<h5>Maintien de la PSSI</h5>
									<div class="ml-5">
										<input data-table="org" data-field="Maintien_de_la_PSSI" type="radio" name="m3" id="m3-1" value="404" checked>
										<label for="m3-1">Non Mentionné</label>
										<br>
										<input data-table="org" data-field="Maintien_de_la_PSSI" type="radio" name="m3" id="m3-2" value="1">
										<label for="m3-2">oui</label>
										<br>
										<input data-table="org" data-field="Maintien_de_la_PSSI" type="radio" name="m3" id="m3-3" value="0">
										<label for="m3-3">non</label>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="panel checkout-step">
					<div role="tab" id="headingThree"> <span class="checkout-step-number">3</span>
						<h4 class="checkout-step-title"> <a class="collapsed" role="button" data-toggle="collapse"
								data-parent="#accordion" href="#collapseThree"> Gestion de la continuité d&#39;activité
							</a> </h4>
					</div>
					<div id="collapseThree" class="panel-collapse collapse">
						<div class="checkout-step-body">
							<h5>Existence formelle PCA</h5>
							<div class="ml-5">
								<input data-table="org" data-field="Existence_formelle_PCA" type="radio" name="n3" id="n3-1" value="404" checked>
								<label for="n3-1">Non Mentionné</label>
								<br>
								<input data-table="org" data-field="Existence_formelle_PCA" type="radio" name="n3" id="n3-2" value="1">
								<label for="n3-2">oui</label>
								<br>
								<input data-table="org" data-field="Existence_formelle_PCA" type="radio" name="n3" id="n3-3" value="0">
								<label for="n3-3">non</label>
							</div>
							<hr>

							<div name="MPCA" id="MPCA" hidden>
								<h5>Maintien du PCA</h5>
								<div class="ml-5">
									<input data-table="org" data-field="Maintien_du_PCA" type="radio" name="p3" id="p3-1" value="404" checked>
									<label for="p3-1">Non Mentionné</label>
									<br>
									<input type="radio" name="p3" data-table="org" data-field="Maintien_du_PCA" id="p3-2" value="1">
									<label for="p3-2">oui</label>
									<br>
									<input type="radio" name="p3" data-table="org" data-field="Maintien_du_PCA" id="p3-3" value="0">
									<label for="p3-3">non</label>
								</div>
								<hr>
							</div>
							<h5>Existence formelle PRA</h5>
							<div class="ml-5">
								<input type="radio" data-table="org" data-field="Existence_formelle_PRA" name="o3" id="o3-1" value="404" checked>
								<label for="o3-1">Non Mentionné</label>
								<br>
								<input type="radio" data-table="org" data-field="Existence_formelle_PRA" name="o3" id="o3-2" value="1">
								<label for="o3-2">oui</label>
								<br>
								<input type="radio" data-table="org" data-field="Existence_formelle_PRA" name="o3" id="o3-3" value="0">
								<label for="o3-3">non</label>
							</div>
							<hr>

							<div name="MPCA2" id="MPCA2" hidden>
								<h5>Maintien du PRA</h5>
								<div class="ml-5">
									<input type="radio" data-table="org" data-field="Maintien_du_PRA" name="q3" id="q3-1" value="404" checked>
									<label for="q3-1">Non Mentionné</label>
									<br>
									<input type="radio" data-table="org" data-field="Maintien_du_PRA" name="q3" id="q3-2" value="1">
									<label for="q3-2">oui</label>
									<br>
									<input type="radio" data-table="org" data-field="Maintien_du_PRA" name="q3" id="q3-3" value="0">
									<label for="q3-3">non</label>
								</div>
								<hr>
							</div>

							<h5>Organisation de crise en cas de sinistre</h5>
							<div class="ml-5">
								<input type="radio" data-table="org" data-field="Organisation_de_crise_en_cas_de_sinistre" name="r3" id="r3-1" value="404" checked>
								<label for="r3-1">Non Mentionné</label>
								<br>
								<input type="radio" name="r3" data-table="org" data-field="Organisation_de_crise_en_cas_de_sinistre" id="r3-2" value="1">
								<label for="r3-2">oui</label>
								<br>
								<input type="radio" name="r3" data-table="org" data-field="Organisation_de_crise_en_cas_de_sinistre" id="r3-3" value="0">
								<label	for="r3-3">non</label>
							</div>
							<hr>

							<h5>Site Secours</h5>
							<div class="ml-5">
								<input data-table="org" data-field="Site_Secours" type="radio" name="s3" id="s3-1" value="404" checked>
								<label for="s3-1">Non Mentionné</label>
								<br>
								<input data-table="org" data-field="Site_Secours" type="radio" name="s3" id="s3-2" value="1">
								<label for="s3-2">oui</label>
								<br>
								<input data-table="org" data-field="Site_Secours" type="radio" name="s3" id="s3-3" value="0">
								<label for="s3-3">non</label>
							</div>
						</div>
					</div>
				</div>
				<div class="panel checkout-step">
					<div role="tab" id="headingFour"> <span class="checkout-step-number">4</span>
						<h4 class="checkout-step-title"> <a class="collapsed" role="button" data-toggle="collapse"
								data-parent="#accordion" href="#collapseFour"> Gestion des actifs </a> </h4>
					</div>
					<div id="collapseFour" class="panel-collapse collapse">
						<div class="checkout-step-body">
							<h5>Inventaire complet</h5>
							<div class="ml-5">
								<input data-table="org" data-field="Inventaire_complet" type="radio" name="t3" id="t3-1" value="404" checked>
								<label for="t3-1">Non Mentionné</label>
								<br>
								<input data-table="org" data-field="Inventaire_complet" type="radio" name="t3" id="t3-2" value="1">
								<label for="t3-2">oui</label>
								<br>
								<input data-table="org" data-field="Inventaire_complet" type="radio" name="t3" id="t3-3" value="0">
								<label for="t3-3">non</label>
							</div>
							<hr>

							<h5>Procédure formelle de classification</h5>
							<div class="ml-5">
								<input data-table="org" data-field="Procédure_formelle_de_classification" type="radio" name="u3" id="u3-1" value="404" checked>
								<label for="u3-1">Non Mentionné</label>
								<br>
								<input data-table="org" data-field="Procédure_formelle_de_classification" type="radio" name="u3" id="u3-2" value="1">
								<label for="u3-2">oui</label>
								<br>
								<input data-table="org" data-field="Procédure_formelle_de_classification" type="radio" name="u3" id="u3-3" value="0">
								<label for="u3-2">non</label>
							</div>

							<div name="MPCA3" id="MPCA3" hidden>
								<hr>
								<h5>Mise en place de la classification</h5>
								<div class="ml-5">
									<input type="radio" data-table="org" data-field="Mise_en_place_de_la_classification" name="v3" id="v3-1" value="404" checked>
									<label for="v3-1">Non Mentionné</label>
									<br>
									<input type="radio" data-table="org" data-field="Mise_en_place_de_la_classification" name="v3" id="v3-2" value="1">
									<label for="v3-2">oui</label>
									<br>
									<input type="radio" data-table="org" data-field="Mise_en_place_de_la_classification" name="v3" id="v3-3" value="0">
									<label for="v3-3">non</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="panel checkout-step">
					<div role="tab" id="headingFive"> <span class="checkout-step-number">5</span>
						<h4 class="checkout-step-title"> <a class="collapsed" role="button" data-toggle="collapse"
								data-parent="#accordion" href="#collapseFive"> Gestion des risques SI Métier </a> </h4>
					</div>
					<div id="collapseFive" class="panel-collapse collapse">
						<div class="checkout-step-body">
							<h5>Existence formelle de la gestion des risques</h5>
							<div class="ml-5">
								<input type="radio" data-table="org" data-field="Existence_formelle_de_la_gestion_des_risques" name="w3" id="w3-1" value="404" checked>
								<label for="w3-1">Non Mentionné</label>
								<br>
								<input type="radio" name="w3" data-table="org" data-field="Existence_formelle_de_la_gestion_des_risques" id="w3-2" value="1">
								<label for="w3-2">oui</label>
								<br>
								<input type="radio" name="w3" id="w3-3" data-table="org" data-field="Existence_formelle_de_la_gestion_des_risques" value="0">
								<label for="w3-3">non</label>
							</div>
							<div name="MPCA4" id="MPCA4" hidden>
								<hr>
								<h5>Couverture totale du Métier</h5>
								<div class="ml-5">
									<input data-table="org" data-field="Couverture_totale_du_Métier" type="radio" name="x3" id="x3-1" value="404" checked>
									<label for="x3-1">Non Mentionné</label>
									<br>
									<input data-table="org" data-field="Couverture_totale_du_Métier" type="radio" name="x3" id="x3-2" value="1">
									<label for="x3-2">oui</label>
									<br>
									<input data-table="org" data-field="Couverture_totale_du_Métier" type="radio" name="x3" id="x3-3" value="0">
									<label for="x3-3">non</label>
								</div>
								<hr>

								<h5>Fréquence de réalisation </h5>
								<div class="ml-5">
										<select class="form-control" name="y3" id="y3">
											<option data-table="org" data-field="Fréquence_de_réalisation" value="404" selected="selected">Non Mentionné</option>
											<option data-table="org" data-field="Fréquence_de_réalisation" value="1">Réalisée une seule fois</option>
											<option data-table="org" data-field="Fréquence_de_réalisation" value="2">Fréquence Réalisation Périodique</option>
											<option data-table="org" data-field="Fréquence_de_réalisation" value="3">En cas de changement majeur</option>
										</select>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="panel checkout-step">
					<div role="tab" id="headingSix"> <span class="checkout-step-number">6</span>
						<h4 class="checkout-step-title"> <a class="collapsed" role="button" data-toggle="collapse"
								data-parent="#accordion" href="#collapseSix"> Gestion des incidents </a> </h4>
					</div>
					<div id="collapseSix" class="panel-collapse collapse">
						<div class="checkout-step-body">
							<h5>Procédure formelle de gestion des incidents</h5>
							<div class="ml-5">
								<input data-table="org" data-field="Procédure_formelle_de_gestion_des_incidents" type="radio" name="ab3" id="ab3-1" value="404" checked>
								<label for="ab3-1">Non Mentionné</label>
								<br>
								<input type="radio" data-table="org" data-field="Procédure_formelle_de_gestion_des_incidents"  name="ab3" id="ab3-2" value="1">
								<label for="ab3-2">oui</label>
								<br>
								<input type="radio" name="ab3" data-table="org" data-field="Procédure_formelle_de_gestion_des_incidents"  id="ab3-3" value="0">
								<label for="ab3-3">non</label>
							</div>
							<hr>

							<h5>Existence d&#39;une cellule de gestion des incidents </h5>
							<div class="ml-5">
								<input data-table="org" data-field="Existence_dune_cellule_de_gestion_des_incidents" type="radio" name="ac3" id="ac3" value="404" checked>
								<label for="ac3-1">Non Mentionné</label>
								<br>
								<input type="radio" data-table="org" data-field="Existence_dune_cellule_de_gestion_des_incidents" name="ac3" id="ac3" value="1">
								<label for="ac3-2">oui</label>
								<br>
								<input type="radio" data-table="org" data-field="Existence_dune_cellule_de_gestion_des_incidents"  name="ac3" id="ac3" value="0">
								<label for="ac3-3">non</label>
							</div>
						</div>
					</div>


				</div>
				<div class="panel checkout-step">
					<div role="tab" id="headingSeven"> <span class="checkout-step-number">7</span>
						<h4 class="checkout-step-title"> <a class="collapsed" role="button" data-toggle="collapse"
								data-parent="#accordion" href="#collapseSeven"> Gestion des sauvegarde </a> </h4>
					</div>
					<div id="collapseSeven" class="panel-collapse collapse">
						<div class="checkout-step-body">

							<h5>Politique formelle de sauvegarde</h5>
							<div class="ml-5">
								<input data-table="org" data-field="Politique_formelle_de_sauvegarde" type="radio" name="ad3" id="ad3-1" value="404" checked>
								<label for="ad3-1">Non Mentionné</label>
								<br>
								<input data-table="org" data-field="Politique_formelle_de_sauvegarde" type="radio" name="ad3" id="ad3-2" value="1">
								<label for="ad3-2">oui</label>
								<br>
								<input data-table="org" data-field="Politique_formelle_de_sauvegarde" type="radio" name="ad3" id="ad3-3" value="0">
								<label for="ad3-3">non</label>
							</div>
							<hr>

							<h5>Couverture des données métier</h5>
							<div class="ml-5">
								<select class="form-control" name="ae3" id="ae3">
									<option data-table="org" data-field="Couverture_des_données_métier" value="Non Mentionné" selected="selected">Non Mentionné</option>
									<option data-table="org" data-field="Couverture_des_données_métier" value="Absence">Absence</option>
									<option data-table="org" data-field="Couverture_des_données_métier" value="Partielle">Partielle</option>
									<option data-table="org" data-field="Couverture_des_données_métier" value="Totale">Totale</option>
								</select>
							</div>
							<hr>

							<h5>couverture des données de serveurs de support</h5>
							<div class="ml-5">
								<select class="form-control" name="af3" id="af3">
									<option data-table="org" data-field="Couverture_des_données_de_serveurs_de_support" value="Non Mentionné" selected="selected">Non Mentionné</option>
									<option data-table="org" data-field="Couverture_des_données_de_serveurs_de_support" value="Absence">Absence</option>
									<option data-table="org" data-field="Couverture_des_données_de_serveurs_de_support" value="Partielle">Partielle</option>
									<option data-table="org" data-field="Couverture_des_données_de_serveurs_de_support" value="Totale">Totale</option>
								</select>
							</div>
							<hr>

							<h5>couverture des données des PCs utilisateurs sensibles</h5>
							<div class="ml-5">
								<select class="form-control" name="ag3" id="ag3">
									<option data-table="org" data-field="Couverture_des_données_des_PCs_utilisateurs_sensibles" value="Non Mentionné" selected="selected">Non Mentionné</option>
									<option data-table="org" data-field="Couverture_des_données_des_PCs_utilisateurs_sensibles" value="Absence">Absence</option>
									<option data-table="org" data-field="Couverture_des_données_des_PCs_utilisateurs_sensibles" value="Partielle">Partielle</option>
									<option data-table="org" data-field="Couverture_des_données_des_PCs_utilisateurs_sensibles" value="Totale">Totale</option>
								</select>
							</div>
							<hr>

							<h5>couverture des running-config des équip séc&rés</h5>
							<div class="ml-5">
								<select class="form-control" name="ah3" id="ah3">
									<option data-table="org" data-field="Couverture_des_running-config_des_equipes_sec&res" value="Non Mentionné" selected="selected">Non Mentionné</option>
									<option data-table="org" data-field="Couverture_des_running-config_des_equipes_sec&res" value="Absence">Absence</option>
									<option data-table="org" data-field="Couverture_des_running-config_des_equipes_sec&res" value="Partielle">Partielle</option>
									<option data-table="org" data-field="Couverture_des_running-config_des_equipes_sec&res" value="Totale">Totale</option>
								</select>
							</div>
							<hr>

							<h5>couverture Clonage OS des serveurs</h5>
							<div class="ml-5">
								<select class="form-control" name="ai3" id="ai3">
									<option data-table="org" data-field="Couverture_Clonage_OS_des_serveurs" value="Non Mentionné" selected="selected">Non Mentionné</option>
									<option data-table="org" data-field="Couverture_Clonage_OS_des_serveurs" value="Absence">Absence</option>
									<option data-table="org" data-field="Couverture_Clonage_OS_des_serveurs" value="Partielle">Partielle</option>
									<option data-table="org" data-field="Couverture_Clonage_OS_des_serveurs"  value="Totale">Totale</option>
								</select>
							</div>
							<hr>

							<h5>Couverture des codes sources et des paramètres de config des applications et des logiciels de base</h5>
							<div class="ml-5">
								<select class="form-control" name="aj3" id="aj3">
									<option data-table="org" data-field="Couverture_des_codes_sources_et_des_paramètres_de_config" value="Non Mentionné" selected="selected">Non Mentionné</option>
									<option data-table="org" data-field="Couverture_des_codes_sources_et_des_paramètres_de_config" value="Absence">Absence</option>
									<option data-table="org" data-field="Couverture_des_codes_sources_et_des_paramètres_de_config" value="Partielle">Partielle</option>
									<option data-table="org" data-field="Couverture_des_codes_sources_et_des_paramètres_de_config" value="Totale">Totale</option>
								</select>
							</div>
							<hr>

							<div name="MPCA5" id="MPCA5" hidden>
								<h5>Maintien de la pol de sauvegarde</h5>
								<div class="ml-5">
									<input data-table="org" data-field="Maintien_de_la_pol_de_sauvegarde" type="radio" name="ak3" id="ak3-1" value="404" checked>
									<label for="ak3-1">Non Mentionné</label>
									<br>
									<input data-table="org" data-field="Maintien_de_la_pol_de_sauvegarde" type="radio" name="ak3" id="ak3-2" value="1">
									<label for="ak3-2">oui</label>
									<br>
									<input data-table="org" data-field="Maintien_de_la_pol_de_sauvegarde" type="radio" name="ak3" id="ak3-3" value="0">
									<label for="ak3-3">non</label>
								</div>
								<hr>
							</div>

							<h5>Tests de restauration périodiques</h5>
							<div class="ml-5">
								<input data-table="org" data-field="Tests_de_restauration_périodiques" type="radio" name="al3" id="al3-1" value="404" checked>
								<label for="al3-1">Non Mentionné</label>
								<br>
								<input daat-field="Tests_de_restauration_périodiques" type="radio" name="al3" id="al3-2" value="1">
								<label for="al3-2">oui</label>
								<br>
								<input data-table="org" data-field="Tests_de_restauration_périodiques" type="radio" name="al3" id="al3-3" value="0">
								<label for="al3-3">non</label>
							</div>
							<hr>

							<h5>Sécurité phys des copies de sauvegarde</h5>
							<div class="ml-5">
								<input data-table="org" data-field="Sécurité_phys_des_copies_de_sauvegarde" type="radio" name="am3" id="am3-1" value="404" checked>
								<label for="am3-3">Non Mentionné</label>
								<br>
								<input data-table="org" data-field="Sécurité_phys_des_copies_de_sauvegarde" type="radio" name="am3" id="am3-2" value="1">
								<label for="am3-2">oui</label>
								<br>
								<input data-table="org" data-field="Sécurité_phys_des_copies_de_sauvegarde" type="radio" name="am3" id="am3-3" value="0">
								<label for="am3-1">non</label>
							</div>
							<hr>

							<h5>Existence des copies à un site distant </h5>
							<div class="ml-5">
								<input data-table="org" data-field="Existence_des_copies_à_un_site_distant" type="radio" name="an3" id="an3-1" value="404" checked>
								<label for="an1">Non Mentionné</label>
								<br>
								<input data-table="org" data-field="Existence_des_copies_à_un_site_distant" type="radio" name="an3" id="an3-2" value="1">
								<label for="an2">oui</label>
								<br>
								<input data-table="org" data-field="Existence_des_copies_à_un_site_distant" type="radio" name="an3" id="an3-3" value="0">
								<label for="an3-3">non</label>
							</div>
						</div>
					</div>
				</div>
				<div class="panel checkout-step">
					<div role="tab" id="headingEight"> <span class="checkout-step-number">8</span>
						<h4 class="checkout-step-title"> <a class="collapsed" role="button" data-toggle="collapse"
								data-parent="#accordion" href="#collapseEight"> TdB SSI </a> </h4>
					</div>
					<div id="collapseEight" class="panel-collapse collapse">
						<div class="checkout-step-body">
							<h5>Existence d&#39;un Tableau de bord SSI </h5>
							<div class="ml-5">
								<input data-table="org" data-field="Existence_dun_Tableau_de_bord_SSI" type="radio" name="ap3" id="ap3-1" value="404" checked>
								<label for="ap3-1">Non Mentionné</label>
								<br>
								<input data-table="org" data-field="Existence_dun_Tableau_de_bord_SSI" type="radio" name="ap3" id="ap3-2" value="1">
								<label for="ap3-2">oui</label>
								<br>
								<input data-table="org" data-field="Existence_dun_Tableau_de_bord_SSI" type="radio" name="ap3" id="ap3-3" value="0">
								<label for="ap3-3">non</label>
							</div>

							<div name="MPCA6" id="MPCA6" hidden>
								<hr>
								<h5>Contrôle d’accès au Data-Center : </h5>
								<div class="ml-5">
									<input data-table="org" data-field="Contrôle_d’accès_au_Data-Center" type="checkbox" id="aq3" name="aq3[]" value="Non Mentionné" checked>
									<label for="aq3">Non Mentionné</label>
									<br>
									<input data-table="org" data-field="Contrôle_d’accès_au_DC:Portee-IndicateursOpérationnels" type="checkbox" id="aq3" name="aq3[]" value="Cle">
									<label for="aq3">Portée : indicateurs opérationnels</label>
									<br>
									<input data-table="org" data-field="Contrôle_d’accès_au_DC:Portee-IndicateursStrategiques" type="checkbox" id="aq3" name="aq3[]" value="Carte magnétique">
									<label for="aq3">Portée : indicateurs stratégiques</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="panel checkout-step">
					<div role="tab" id="headingNine"> <span class="checkout-step-number">9</span>
						<h4 class="checkout-step-title"> <a class="collapsed" role="button" data-toggle="collapse"
								data-parent="#accordion" href="#collapseNine"> Audit interne de la sécurité </a> </h4>
					</div>
					<div id="collapseNine" class="panel-collapse collapse">
						<div class="checkout-step-body">

							<h5>Existence de l&#39;Audit interne de la sécurité </h5>
							<div class="ml-5">
								<input data-table="org" data-field="Existence_de_lAudit_interne_de_la_sécurité" type="radio" name="as3" id="as3-1" value="404" checked>
								<label for="as3-1">Non Mentionné</label>
								<br>
								<input data-table="org" data-field="Existence_de_lAudit_interne_de_la_sécurité" type="radio" name="as3" id="as3-2" value="1">
								<label for="as3-2">oui</label>
								<br>
								<input data-table="org" data-field="Existence_de_lAudit_interne_de_la_sécurité" type="radio" name="as3" id="as3-3" value="0">
								<label for="as3-3">non</label>
							</div>

							<div name="MPCA7" id="MPCA7" hidden>
								<hr>
								<h5>Réalisation : </h5>
								<div class="ml-5">
									<input data-table="org" data-field="Réalisation" type="checkbox" id="at3" name="at3[]" value="Non Mentionné" checked>
									<label for="at3">Non Mentionné</label>
									<br>
									<input data-table="org" data-field="Réalisation:Periodique" type="checkbox" id="at3" name="at3[]" value="Cle">
									<label for="at3">Réalisation périodique de l&#39;Audit interne</label>
									<br>
									<input data-table="org" data-field="Réalisation:Suite_a _un_incident" type="checkbox" id="at3" name="at3[]" value="Carte magnétique">
									<label for="at3">Réalisation suite à un incident</label>
									<br>
									<input data-table="org" data-field="Réalisation:Suite_mise_en_place_nouveau_sys" type="checkbox" id="at3" name="at3[]" value="Carte magnétique">
									<label for="at3">Réalisation suite à la mise en place d’un nouveau système</label>
								</div>
								<hr>

								<h5>Portée :</h5>
								<div class="ml-5">
									<input data-table="org" data-field="Portee" type="checkbox" id="aw3" name="aw3[]" value="Non Mentionné" checked>
									<label for="aw3">Non Mentionné</label>
									<br>
									<input data-table="org" data-field="Portee:Aspect_Tech" type="checkbox" id="aw3" name="aw3[]" value="aspects techniques">
									<label for="aw3">aspects techniques</label>
									<br>
									<input data-table="org" data-field="Portee:Aspect_tech-Org-Phy" type="checkbox" id="aw3" name="aw3[]" value="aspects tech, org et phys">
									<label for="aw3">aspects tech, org et phys</label>
									<br>
									<input data-table="org" data-field="Portee:Aspect_Org" type="checkbox" id="aw3" name="aw3[]" value="aspects tech, org et phys">
									<label for="aw3">aspects org </label>
									<br>
									<input data-table="org" data-field="Portee:Aspect_Phy" type="checkbox" id="aw3" name="aw3[]"value="aspects tech, org et phys">
									<label for="aw3">aspects phys</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="panel checkout-step">
					<div role="tab" id="headingTen"> <span class="checkout-step-number">10</span>
						<h4 class="checkout-step-title"> <a class="collapsed" role="button" data-toggle="collapse"
								data-parent="#accordion" href="#collapseTen"> Démarche de conformité </a> </h4>
					</div>
					<div id="collapseTen" class="panel-collapse collapse">
						<div class="checkout-step-body">
							<h5>Existence d&#39;une démarche de conf</h5>
							<div class="ml-5">
								<input data-table="org" data-field="Existence_dune_démarche_de_conf" type="radio" name="ay3" id="ay3-1" value="404" checked>
								<label for="ay3-1">Non Mentionné</label>
								<br>
								<input data-table="org" data-field="Existence_dune_démarche_de_conf" type="radio" name="ay3" id="ay3-2" value="1">
								<label for="ay3-2">oui</label>
								<br>
								<input data-table="org" data-field="Existence_dune_démarche_de_conf" type="radio" name="ay3" id="ay3-3" value="0">
								<label for="ay3-3">non</label>
							</div>

							<div name="MPCA8" id="MPCA8" hidden>
								<hr>
								<h5>Nature : </h5>
								<div class="ml-5">
									<input data-table="org" data-field="Nature" type="checkbox" id="az3" name="az3[]" value="Non Mentionné" checked>
									<label for="az3">Non Mentionné</label>
									<br>
									<input data-table="org" data-field="Nature" type="checkbox" id="az3" name="az3[]" value="ISO 27001">
									<label for="az3">ISO 27001</label>
									<br>
									<input data-table="org" data-field="Nature" type="checkbox" id="az3" name="az3[]" value="PCI">
									<label for="az3">PCI / DSS</label>
								</div>
								<hr>

								<h5>Etape</h5>
								<div class="ml-5">
									<select class="form-control" name="ba3" id="ba3">
										<option data-table="org" data-field="Etape" value="Non Mentionné" selected="selected">Non Mentionné</option>
										<option data-table="org" data-field="Etape" value="certifie">certifié</option>
										<option data-table="org" data-field="Etape" value="projetencours">projet en cours</option>
										<option data-table="org" data-field="Etape" value="planifie">planifié</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="panel checkout-step">
					<div role="tab" id="headingTwelve"> <span class="checkout-step-number">11</span>
						<h4 class="checkout-step-title"> <a class="collapsed" role="button" data-toggle="collapse"
								data-parent="#accordion" href="#collapseTwelve"> Contrôle d&#39;accès logique </a> </h4>
					</div>
					<div id="collapseTwelve" class="panel-collapse collapse">
						<div class="checkout-step-body">
							<h5>Politique formelle de contrôle d’accès</h5>
							<div class="ml-5">
								<input data-table="org" data-field="Politique_formelle_de_contrôle_d’accès" type="radio" name="ao3" id="ao3" value="404" checked>
								<label for="ao3">Non Mentionné</label>
								<br>
								<input  data-table="org" data-field="Politique_formelle_de_contrôle_d’accès" type="radio" name="ao3" id="ao3" value="1">
								<label for="ao3">oui</label>
								<br>
								<input  data-table="org" data-field="Politique_formelle_de_contrôle_d’accès" type="radio" name="ao3" id="ao3" value="0">
								<label for="ao3">non</label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
