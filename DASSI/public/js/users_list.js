function deactivateUser(user,checked){
    if(checked){
        user.active=0;
    }
    else{
        user.active=1;
    }
    jQuery.ajax({
        url: "http://localhost:8000/api/users",
        method: 'put',
        data: {
            id: user.id,
            _token: $("#token").val(),
            name: user.name,
            lastname: user.lastname,
            firstname: user.firstname,
            email: user.email,
            displayname: user.displayname,
            role: user.role,
            active: user.active,
            deleted: user.deleted,
        }
    });
}

function deleteUser(user,deleted){
    if(deleted){
        user.deleted=0;
    }
    else{
        user.deleted=1;
    }
    jQuery.ajax({
        url: "http://localhost:8000/api/users",
        method: 'put',
        data: {
            id: user.id,
            _token: $("#token").val(),
            name: user.name,
            lastname: user.lastname,
            firstname: user.firstname,
            email: user.email,
            displayname: user.displayname,
            role: user.role,
            active: user.active,
            deleted: user.deleted,
        }
    });
}

function updateUser(user){
    jQuery.ajax({
        url: "http://localhost:8000/api/users",
        method: 'put',
        data: {
            id: user.id,
            _token: $("#token").val(),
            name: user.name,
            lastname: user.lastname,
            firstname: user.firstname,
            email: user.email,
            displayname: user.displayname,
            role: user.role,
            active: user.active,
            deleted: user.deleted,
        }
    });
}
if (top.location.pathname === '/users/list')
{
    var users;
    
    jQuery.ajax({
        url: "http://localhost:8000/api/users",
        method: 'get',
        
        success: function(result){
           users = result;
    }});
    
    $(document).ready(function() {
        $("#search").on('input',function() {
            //hide all elements
            users.forEach(function(user){
                var id = "#user-"+user.id;
                $(id).hide();
            });
            //get search value
            var search = $("#search").val();
            search = search.toUpperCase();
            //filter found users
            var filtered = users.filter(function(user){
                if(user.email.toUpperCase().includes(search))
                    return true;
                if(user.name.toUpperCase().includes(search))
                    return true;
                if(user.firstname.toUpperCase().includes(search))
                    return true;
                if(user.lastname.toUpperCase().includes(search))
                    return true;
                if(user.displayname.toUpperCase().includes(search))
                    return true;
                return false;
            });
            //show only found elements
            filtered.forEach(function(user){
                var id = "#user-"+user.id;
                $(id).show();
            });
        });
        users.forEach(user=> {
            //get buttons
            var activateButton = $("#activate-"+user.id);
            var deleteButton = $("#delete-"+user.id);
            //get checkboxes
            var checkBoxActivation = $("#active-check-"+user.id);
            var checkBoxDeletion = $("#deleted-check-"+user.id);
            //add listener to activate button
            activateButton.click(function(){
                var checked = checkBoxActivation.prop("checked");
                if(checked){
                    activateButton.html("Réactiver");
                    checkBoxActivation.attr("checked",false);
                }
                else
                {
                    activateButton.html("Désactiver");
                    checkBoxActivation.attr("checked",true);
                }
                deactivateUser(user,checked);
            });
            //add listener to delete button
            deleteButton.click(function(){
                var checked = checkBoxDeletion.prop("checked");
                if(checked){
                    deleteButton.html("Supprimer");
                    checkBoxDeletion.attr("checked",false);
                }
                else
                {
                    deleteButton.html("Restaurer");
                    checkBoxDeletion.attr("checked",true);
                }
                deleteUser(user,checked);
            });
            //get update button
            var updateButton = $("#submit-"+user.id);
            //get inputs
            var firstnameInput = $("#firstname-"+user.id);
            var lastnameInput = $("#lastname-"+user.id);
            var nameInput = $("#name-"+user.id);
            var emailInput = $("#email-"+user.id);
            var displaynameInput = $("#displayname-"+user.id);
            var roleInput = $("#role-"+user.id);
            //add listener
            updateButton.click(function(){
                user.firstname = firstnameInput.val();
                user.lastname = lastnameInput.val();
                user.name = nameInput.val();
                user.email = emailInput.val();
                user.displayname = displaynameInput.val();
                user.role = roleInput.find(":selected").text().trim();
                updateUser(user);
            });
        });
    });
}