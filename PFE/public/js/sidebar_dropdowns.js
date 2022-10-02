//initialization isUserHidden
var isHiddenUsers=localStorage.getItem('isHiddenUsers');
if(isHiddenUsers === null){
    isHiddenUsers = true;
}
isHiddenUsers = (isHiddenUsers === 'true');
$("#dropdownItemsUsers").attr('hidden',isHiddenUsers);

//initialization isHiddenCorps
var isHiddenCorps=localStorage.getItem('isHiddenCorps');
if(isHiddenCorps === null){
    isHiddenCorps = true;
}
isHiddenCorps = (isHiddenCorps === 'true');
$("#dropdownItemsCorps").attr('hidden',isHiddenCorps);
//add listeners
$("#dropdownMenuUsers").click(function(){
    isHiddenUsers = !isHiddenUsers;
    $("#dropdownItemsUsers").attr('hidden',isHiddenUsers);
    if(isHiddenUsers){
        $("#dropdownIconUsers").html("keyboard_arrow_down")
    }
    else{
        $("#dropdownIconUsers").html("keyboard_arrow_up")
    }
    localStorage.setItem('isHiddenUsers',isHiddenUsers);
});

$("#dropdownMenuCorps").click(function(){
    isHiddenCorps = !isHiddenCorps;
    $("#dropdownItemsCorps").attr('hidden',isHiddenCorps);
    if(isHiddenCorps){
        $("#dropdownIconCorps").html("keyboard_arrow_down")
    }
    else{
        $("#dropdownIconCorps").html("keyboard_arrow_up")
    }
    localStorage.setItem('isHiddenCorps',isHiddenCorps);
});