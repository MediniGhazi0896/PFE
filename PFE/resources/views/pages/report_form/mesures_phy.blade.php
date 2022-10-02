<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="accordion" class="checkout">
                <div class="panel checkout-step">
                    <div> <span class="checkout-step-number">1</span>
                        <h4 class="checkout-step-title"> <a role="button" data-toggle="collapse"
                                data-parent="#accordion" href="#collapseOne4">Local Data-center</a></h4>
                    </div>
                    <div id="collapseOne4" class="collapse in">
                        <div class="checkout-step-body">
                            <h5>Existence</h5>
                            <div class="ml-5">
                                <input type="radio" name="ct3" id="ct3-1" data-table="phy" data-field="Local_Data_Center:Existence" value="404" checked>
                                <label for="ct3">Non  Mentionné</label>
                                <br>
                                <input type="radio" name="ct3" id="ct3-2" data-table="phy" data-field="Local_Data_Center:Existence" value="0">
                                <label for="ct3">0</label>
                                <br>
                                <input type="radio" name="ct3" id="ct3-3" data-table="phy" data-field="Local_Data_Center:Existence" value="1">
                                <label for="ct3">1</label>
                                <br>
                                <input type="radio" name="ct3" id="ct3-4" data-table="phy" data-field="Local_Data_Center:Existence" value="2" >
                                <label for="ct3">2</label>
                                <br>
                                <input type="radio" name="ct3" id="ct3-5" data-table="phy" data-field="Local_Data_Center:Existence" value="3+" >
                                <label for="ct3">3+</label>
                            </div>
                            <div name="MPCA16" id="MPCA16" hidden>
                                <hr>
                                <h5>Classification</h5>
                                <select class="form-control ml-5" name="cu3" id="cu3">
                                    <option value="Non Mentionné" data-table="phy" data-field="Classification" selected="selected">Non Mentionné</option>
                                    <option data-table="phy" data-field="Classification" value="non-classé">Non-classé</option>
                                    <option data-table="phy" data-field="Classification" value="Tier1">Tier1</option>
                                    <option data-table="phy" data-field="Classification" value="Tier2">Tier2</option>
                                    <option data-table="phy" data-field="Classification" value="Tier3">Tier3</option>
                                </select>
                                <hr>

                                <h5>Zones d&#39;emplacement</h5>
                                <select class="form-control ml-5" name="cv3" id="cv3">
                                    <option data-table="phy" data-field="Zone_d_emplacement" value="Non Mentionné" selected="selected">Non Mentionné</option>
                                    <option data-table="phy" data-field="Zone_d_emplacement" value="fortsrisques" selected="selected">Forts Risques</option>
                                    <option data-table="phy" data-field="Zone_d_emplacement" value="faiblesrisques">Faibles Risques</option>
                                </select>
                                <hr>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="panel checkout-step">
                    <div role="tab" id="headingTwo4"> <span class="checkout-step-number">2</span>
                        <h4 class="checkout-step-title"> <a class="collapsed" role="button" data-toggle="collapse"
                                data-parent="#accordion" href="#collapseTwo4"> Secours électrique </a> </h4>
                    </div>
                    <div id="collapseTwo4" class="panel-collapse collapse">
                        <div class="checkout-step-body">
                            <div class="checout-address-step">
                                <h5>Couverture onduleurs Serveurs </h5>
                                <select class="form-control ml-5" name="cw3" id="cw3">
                                    <option data-table="phy" data-field="Couverture_onduleurs_Serveurs" value="Non Mentionné" selected="selected">Non Mentionné</option>
                                    <option data-table="phy" data-field="Couverture_onduleurs_Serveurs" value="Absence">Absence</option>
                                    <option data-table="phy" data-field="Couverture_onduleurs_Serveurs" value="Partielle">Partielle</option>
                                    <option data-table="phy" data-field="Couverture_onduleurs_Serveurs" value="Totale">Totale</option>
                                </select>
                                <hr>

                                <h5>Couverture onduleurs Equips rés & séc </h5>
                                <select class="form-control ml-5" name="cx3" id="cx3">
                                    <option data-table="phy" data-field="Couverture_onduleurs_Equips_rés_&_séc" value="Non Mentionné" selected="selected">Non Mentionné</option>
                                    <option data-table="phy" data-field="Couverture_onduleurs_Equips_rés_&_séc" value="Absence">Absence</option>
                                    <option data-table="phy" data-field="Couverture_onduleurs_Equips_rés_&_séc" value="Partielle">Partielle</option>
                                    <option data-table="phy" data-field="Couverture_onduleurs_Equips_rés_&_séc" value="Totale">Totale</option>
                                </select>
                                <hr>

                                <h5>Couverture onduleurs PCs </h5>
                                <select class="form-control ml-5" name="cy3" id="cy3">
                                    <option data-table="phy" data-field="Couverture_onduleurs_PCs" value="Non Mentionné" selected="selected">Non Mentionné</option>
                                    <option data-table="phy" data-field="Couverture_onduleurs_PCs" value="Absence">Absence</option>
                                    <option data-table="phy" data-field="Couverture_onduleurs_PCs" value="Partielle">Partielle</option>
                                    <option data-table="phy" data-field="Couverture_onduleurs_PCs" value="Totale">Totale</option>
                                </select>
                                <hr>

                                <h5>Existence Groupe électrogène </h5>
                                <div class="ml-5">
                                    <input type="radio" data-table="phy" data-field="Existence_Groupe_électrogène" name="cz3" id="cz3-1" value="404" checked>
                                    <label for="cz3">Non Mentionné</label>
                                    <br>
                                    <input type="radio" data-table="phy" data-field="Existence_Groupe_électrogène" name="cz3" id="cz3-2" value="1">
                                    <label for="cz3">oui</label>
                                    <br>
                                    <input type="radio" data-table="phy" data-field="Existence_Groupe_électrogène" name="cz3" id="cz3-3" value="0">
                                    <label for="cz3">non</label>
                                </div>

                                <div name="MPCA17" id="MPCA17" hidden>
                                    <hr>
                                    <h5>Test régulier du groupe électrogène</h5>
                                    <div class="ml-5">
                                        <input data-table="phy" data-field="Test_régulier_du_groupe_électrogène" type="radio" name="da3" id="da3-1" value="404" checked>
                                        <label for="da3">Non Mentionné</label>
                                        <br>
                                        <input  data-table="phy" data-field="Test_régulier_du_groupe_électrogène" type="radio" name="da3" id="da3-2" value="1">
                                        <label for="da3">oui</label>
                                        <br>
                                        <input  data-table="phy" data-field="Test_régulier_du_groupe_électrogène" type="radio" name="da3" id="da3-3" value="0">
                                        <label for="da3">non</label>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="panel checkout-step">
                    <div role="tab" id="headingThree4"> <span class="checkout-step-number">3</span>
                        <h4 class="checkout-step-title"> <a class="collapsed" role="button" data-toggle="collapse"
                                data-parent="#accordion" href="#collapseThree4"> Sécurité de la climatisation DC </a>
                        </h4>
                    </div>
                    <div id="collapseThree4" class="panel-collapse collapse">
                        <div class="checkout-step-body">
                            <h5>Système de climatisation adéquate</h5>
                            <div class="ml-5">
                                <input data-table="phy" data-field="Système_de_climatisation_adéquate" type="radio" name="db3" id="db3-1" value="404" checked>
                                <label for="db3">Non Mentionné</label>
                                <br>
                                <input data-table="phy" data-field="Système_de_climatisation_adéquate" type="radio" name="db3" id="db3-2" value="1">
                                <label for="db3">oui</label>
                                <br>
                                <input data-table="phy" data-field="Système_de_climatisation_adéquate" type="radio" name="db3" id="db3-3" value="0">
                                <label for="db3">non</label>
                            </div>
                            <hr>

                            <h5>Redondance</h5>
                            <div class="ml-5">
                                <input type="radio" data-table="phy" data-field="Redondance" name="dc3" id="dc3-1" value="404" checked>
                                <label for="dc3">Non  Mentionné</label>
                                <br>
                                <input type="radio" data-table="phy" data-field="Redondance" name="dc3" id="dc3-2" value="1">
                                <label for="dc3">oui</label>
                                <br>
                                <input type="radio" data-table="phy" data-field="Redondance" name="dc3" id="dc3-3" value="0">
                                <label for="dc3">non</label>
                            </div>
                            <hr>

                            <h5>Contrat de maintenance</h5>
                            <div class="ml-5">
                                <input type="radio" data-table="phy" data-field="Contrat_de_maintenance" name="dd3" id="dd3-1" value="404" checked>
                                <label for="dd3">Non  Mentionné</label>
                                <br>
                                <input type="radio" data-table="phy" data-field="Contrat_de_maintenance" name="dd3" id="dd3-2" value="1">
                                <label for="dd3">oui</label>
                                <br>
                                <input type="radio" data-table="phy" data-field="Contrat_de_maintenance" name="dd3" id="dd3-3" value="0">
                                <label for="dd3">non</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel checkout-step">
                    <div role="tab" id="headingFour4"> <span class="checkout-step-number">4</span>
                        <h4 class="checkout-step-title"> <a class="collapsed" role="button" data-toggle="collapse"
                                data-parent="#accordion" href="#collapseFour4"> Sécurité Câblage </a> </h4>
                    </div>
                    <div id="collapseFour4" class="panel-collapse collapse">
                        <div class="checkout-step-body">
                            <h5>Chemins de câbles dédiés et séparés </h5>
                            <div class="ml-5">
                                <input type="radio" data-table="phy" data-field="Chemins_de_câbles_dédiés_et_séparés" name="de3" id="de3-1" value="404" checked>
                                <label for="de3">Non Mentionné</label>
                                <br>
                                <input type="radio" data-table="phy" data-field="Chemins_de_câbles_dédiés_et_séparés" name="de3" id="de3-2" value="1">
                                <label for="de3">oui</label>
                                <br>
                                <input type="radio" ndata-table="phy" data-field="Chemins_de_câbles_dédiés_et_séparés" ame="de3" id="de3-3" value="0">
                                <label for="de3">non</label>
                            </div>
                            <hr>

                            <h5>Etiquetage</h5>
                            <div class="ml-5">
                                <input type="radio" data-table="phy" data-field="Etiquetage" name="df3" id="df3-1" value="404" checked>
                                <label for="df3">Non Mentionné</label>
                                <br>
                                <input type="radio" data-table="phy" data-field="Etiquetage" name="df3" id="df3-2" value="1">
                                <label for="df3">oui</label>
                                <br>
                                <input type="radio" data-table="phy" data-field="Etiquetage" name="df3" id="df3-3" value="0">
                                <label for="df3">non</label>
                            </div>
                            <hr>

                            <h5>Plans de chemins de câblage</h5>
                            <div class="ml-5">
                                <input data-table="phy" data-field="Plans_de_chemins_de_câblage" type="radio" name="dg3" id="dg3-1" value="404" checked>
                                <label for="dg3">Non Mentionné</label>
                                <br>
                                <input data-table="phy" data-field="Plans_de_chemins_de_câblage" type="radio" name="dg3" id="dg3-2" value="1">
                                <label for="dg3">oui</label>
                                <br>
                                <input data-table="phy" data-field="Plans_de_chemins_de_câblage" type="radio" name="dg3" id="dg3-3" value="0">
                                <label for="dg3">non</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel checkout-step">
                    <div role="tab" id="headingFive4"> <span class="checkout-step-number">5</span>
                        <h4 class="checkout-step-title"> <a class="collapsed" role="button" data-toggle="collapse"
                                data-parent="#accordion" href="#collapseFive4"> Sécurité périmétrique DC </a> </h4>
                    </div>
                    <div id="collapseFive4" class="panel-collapse collapse">
                        <div class="checkout-step-body">

                            <h5>Contrôle d’accès au Data-Center </h5>
                            <div class="ml-5">
                                <input type="checkbox" id="dh3" name="dh3[]" value="Non Mentionné" checked>
                                <label for="dh3">Non Mentionné</label>
                                <br>
                                <input type="checkbox" id="dh3" name="dh3[]" data-table="phy" data-field="Contrôle_d’accès_au_Data-Center:cle" value="Cle">
                                <label for="dh3">Cle</label>
                                <br>
                                <input type="checkbox" id="dh3" name="dh3[]" data-table="phy" data-field="Contrôle_d’accès_au_Data-Center:carte" value="Carte magnétique">
                                <label for="dh3">Carte magnétique</label>
                                <br>
                                <input type="checkbox" id="dh3" name="dh3[]" data-table="phy" data-field="Contrôle_d’accès_au_Data-Center:bio" value="Biométrie">
                                <label for="dh3">Biométrie</label>
                            </div>
                            <hr>

                            <h5>Solution de détection d’intrusion</h5>
                            <div class="ml-5">
                                <input type="radio" data-table="phy" data-field="Solution_de_détection_d’intrusion" name="di3" id="di3-1" value="404" checked>
                                <label for="di3">Non  Mentionné</label>
                                <br>
                                <input type="radio" name="di3" data-table="phy" data-field="Solution_de_détection_d’intrusion" id="di3-2" value="1">
                                <label for="di3">oui</label>
                                <br>
                                <input type="radio" name="di3" data-table="phy" data-field="Solution_de_détection_d’intrusion" id="di3-3" value="0">
                                <label for="di3">non</label>
                            </div>
                            <hr>

                            <h5>Système de vidéo-surveillance</h5>
                            <div class="ml-5">
                                <input type="radio" data-table="phy" data-field="Système_de_vidéo-surveillance" name="dj3" id="dj3-1" value="404" checked>
                                <label for="dj3">Non Mentionné</label>
                                <br>
                                <input type="radio" data-table="phy" data-field="Système_de_vidéo-surveillance" name="dj3" id="dj3-2" value="1">
                                <label for="dj3">oui</label>
                                <br>
                                <input type="radio" data-table="phy" data-field="Système_de_vidéo-surveillance" name="dj3" id="dj3-3" value="0">
                                <label for="dj3">non</label>
                            </div>
                            <hr>

                            <h5>Murs résistants aux intrusions physiques et aux incendies et dépourvus de fenêtres</h5>
                            <div class="ml-5">
                                <input type="radio" data-table="phy" data-field="Murs_résistants" name="dk3" id="dk3-1" value="404" checked>
                                <label for="dk3">Non Mentionné</label>
                                <br>
                                <input type="radio" data-table="phy" data-field="Murs_résistants" name="dk3" id="dk3-2" value="1">
                                <label for="dk3">oui</label>
                                <br>
                                <input type="radio" data-table="phy" data-field="Murs_résistants" name="dk3" id="dk3-3" value="0">
                                <label for="dk3">non</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel checkout-step">
                    <div role="tab" id="headingSix4"> <span class="checkout-step-number">6</span>
                        <h4 class="checkout-step-title"> <a class="collapsed" role="button" data-toggle="collapse"
                                data-parent="#accordion" href="#collapseSix4"> Sécurité Incendie DC </a> </h4>
                    </div>
                    <div id="collapseSix4" class="panel-collapse collapse">
                        <h5>Détecteurs de fumée </h5>
                        <div class="ml-5">
                            <input type="radio" data-table="phy" data-field="Détecteurs_de_fumée" name="dl3" id="dl3-1" value="404" checked>
                            <label for="dl3">Non Mentionné</label>
                            <br>
                            <input type="radio" data-table="phy" data-field="Détecteurs_de_fumée" name="dl3" id="dl3-2" value="1">
                            <label for="dl3">oui</label>
                            <br>
                            <input type="radio" data-table="phy" data-field="Détecteurs_de_fumée" name="dl3" id="dl3-3" value="0">
                            <label for="dl3">non</label>
                        </div>
                        <hr>

                        <h5>Extincteurs automatiques </h5>
                        <div class="ml-5">
                            <input type="radio" data-table="phy" data-field="Extincteurs_automatiques" name="dm3" id="dm3-1" value="404" checked>
                            <label for="dm3">Non Mentionné</label>
                            <br>
                            <input type="radio" data-table="phy" data-field="Extincteurs_automatiques" name="dm3" id="dm3-2" value="1">
                            <label for="dm3">oui</label>
                            <br>
                            <input type="radio" data-table="phy" data-field="Extincteurs_automatiques" name="dm3" id="dm3-3" value="0">
                            <label for="dm3">non</label>
                        </div>
                        <hr>

                        <h5>Porte Data Center Coupe-feu</h5>
                        <div class="ml-5">
                            <input type="radio" data-table="phy" data-field="Porte_Data_Center_Coupe-feu" name="dn3" id="dn3-1" value="404" checked>
                            <label for="dn3">Non Mentionné</label>
                            <br>
                            <input type="radio" data-table="phy" data-field="Porte_Data_Center_Coupe-feu" name="dn3" id="dn3-2" value="1">
                            <label for="dn3">oui</label>
                            <br>
                            <input type="radio" data-table="phy" data-field="Porte_Data_Center_Coupe-feu" name="dn3" id="dn3-3" value="0">
                            <label for="dn3">non</label>
                        </div>
                    </div>
                </div>
                <div class="panel checkout-step">
                    <div role="tab" id="headingSeven4"> <span class="checkout-step-number">7</span>
                        <h4 class="checkout-step-title"> <a class="collapsed" role="button" data-toggle="collapse"
                                data-parent="#accordion" href="#collapseSeven4"> Sécurité contre les dégâts des eaux
                            </a> </h4>
                    </div>
                    <div id="collapseSeven4" class="panel-collapse collapse">
                        <div class="checkout-step-body">
                            <h5>Détecteurs d’humidité </h5>
                            <div class="ml-5">
                                <input type="radio" data-table="phy" data-field="Détecteurs_d’humidité" name="dp3" id="do3-1" value="404" checked>
                                <label for="dp3">Non Mentionné</label>
                                <br>
                                <input type="radio" data-table="phy" data-field="Détecteurs_d’humidité" name="dp3" id="do3-2" value="1" >
                                <label for="do3">oui</label>
                                <br>
                                <input type="radio" data-table="phy" data-field="Détecteurs_d’humidité" name="dp3" id="do3-3" value="0">
                                <label for="do3">non</label>
                            </div>
                            <hr>

                            <div name="MPCA18" id="MPCA18" hidden>
                                <h5>Système d’alerte</h5>
                                <div class="ml-5">
                                    <input type="radio" data-table="phy" data-field="Système_d’alerte" name="do3" id="dp3-1" value="404" checked>
                                    <label for="do3">Non Mentionné</label>
                                    <br>
                                    <input type="radio" data-table="phy" data-field="Système_d’alerte" name="do3" id="dp3-2" value="1">
                                    <label for="dp3">oui</label>
                                    <br>
                                    <input type="radio" data-table="phy" data-field="Système_d’alerte" name="do3" id="dp3-3" value="0">
                                    <label for="dp3">non</label>
                                </div>
                                <hr>
                            </div>

                            <h5>Dispositif Anti-foudre</h5>
                            <div class="ml-5">
                                <input type="radio" data-table="phy" data-field="Dispositif_Anti-foudre" name="dq3" id="dq3-1" value="404" checked>
                                <label for="dq3">Non Mentionné</label>
                                <br>
                                <input type="radio" data-table="phy" data-field="Dispositif_Anti-foudre" name="dq3" id="dq3-2" value="1">
                                <label for="dq3">oui</label>
                                <br>
                                <input type="radio" data-table="phy" data-field="Dispositif_Anti-foudre" name="dq3" id="dq3-3" value="0">
                                <label for="dq3">non</label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
