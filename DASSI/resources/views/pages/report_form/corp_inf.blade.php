<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h4 class="font-weight-bold">
                    Entreprise: 
                </h4>
                <h4 class="ml-5">
                    {{$corp->name}}
                </h4>
            </div>
            <div>
                <h4 class="font-weight-bold">
                    Annéee: 
                </h4>
                <h4 class="ml-5">
                    {{$year}}
                </h4>
            </div>
            <div>
                <h4 class="font-weight-bold">
                    Secteur d&#39;activité: 
                </h4>
                <h4 class="ml-5">
                    {{$corp->activity_sector}}
                </h4>
            </div>
            <div>
                <h4 class="font-weight-bold">
                    Catégorie: 
                </h4>
                <h4 class="ml-5">
                    {{$corp->category}}
                </h4>
            </div>
            <div>
                <h4 class="font-weight-bold">
                    Classe de criticité: 
                </h4>
                <h4 class="ml-5">
                    {{$corp->criticality_class}}
                </h4>
            </div>
            <div>
                <h4 class="font-weight-bold">
                    Type: 
                </h4>
                <h4 class="ml-5">
                    {{$corp->type}}
                </h4>
            </div>
        </div>
    </div>
</div>