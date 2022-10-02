if (top.location.pathname === '/corps/' || top.location.pathname === '/corps')
{
    $(document).ready( function () {
        $('#corps_table').DataTable({
            "language": 
            {
                "decimal":        "",
                "emptyTable":     "Tableau vide",
                "info":           "Page _START_ sur _PAGES_",
                "infoEmpty":      "Page 0 sur 0",
                "infoFiltered":   "(resultat filtrés parmi _MAX_ lignes)",
                "infoPostFix":    "",
                "thousands":      ",",
                "lengthMenu":     "Nombre de lignes par page _MENU_",
                "loadingRecords": "Chargement...",
                "processing":     "Traitement en cours...",
                "search":         "Rechercher:",
                "zeroRecords":    "Aucun résultat trouvé",
                "paginate": {
                    "first":      "Prémiere page",
                    "last":       "Dérnière page",
                    "next":       "Suivant",
                    "previous":   "Précédant"
                },
                "aria": {
                    "sortAscending":  ": Activer pour trier le tableau dans l'ordre ascendant",
                    "sortDescending": ": Activer pour trier le tableau dans l'ordre descendant"
                }
            }
        });
    });
}
