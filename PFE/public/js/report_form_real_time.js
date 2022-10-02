function sendBackEnd(key, value,table){
    var id = $('#report-id').val();
    var token = $("#token").val();
    var body = {
        id: id,
        table: table,
        _token: token,
        key: key,
        value: value
    }
    jQuery.ajax({
        url: "http://localhost:8000/api/report/"+id,
        method: 'put',
        data: body
    });
}
var windowLoc = $(location).attr('pathname');
if(windowLoc.startsWith("/missions")){
    $(document).ready(function() {
        $('input').each(function () {
            var type=$(this).attr("type");
            switch (type) {
                case "radio":
                    $(this).change(function(){
                        var value ="NonMentionne";
                        var field = $(this).data('field');
                        var table = $(this).data('table');
                        var valueNumber = $(this).val();
                        if($(this).attr('name')==="ct3"){
                            switch(valueNumber) {
                                case "404": value = "NonMentionne"; break;
                                case "0": value = "0"; break;
                                case "1": value = "1"; break;
                                case "2": value = "2"; break;
                                case "3+": value = "3+"; break;
                            }
                        }
                        else {
                            switch(valueNumber) {
                                case "404": value = "NonMentionne"; break;
                                case "0": value = "Non"; break;
                                case "1": value = "Oui"; break;
                            }
                        }
                        sendBackEnd(field,value,table);
                    })
                    break;
            
                case "checkbox": 
                    $(this).change(function(){
                    var field = $(this).data('field');
                    var table = $(this).data('table');
                    var value = $(this).prop("checked") == true;
                    if(value && $(this).val()==="Non Mentionné"){
                        value = "NonMentionne";
                    }
                    if(!value && $(this).val()==="Non Mentionné"){
                        value = "Mentionne";
                    }
                    sendBackEnd(field,value,table);
                })
                    break;
                default:
                    break;
            }
        });
        $("select").each(function () {
            $(this).change(function(){
                var value="NonMentionne";
                var table = $(this).children(":first").data('table');
                var field=$(this).children(":first").data('field');
                value = $(this).val();
                if(value=== "Non Mentionné"){
                    value ="NonMentionne"
                }
                sendBackEnd(field,value,table);
            });
        })
    });
}