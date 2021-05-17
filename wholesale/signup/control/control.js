$(document).ready(function () {
    $("#submitForm").submit(function (e) { 
        e.preventDefault();
        var email=$("#email").val();
        var password=$("#password").val();
        var username=$("#username").val();

        if(email != '' && password != '' && username !=''){
            $.ajax({
                type: "POST",
                url: "./control/add.php",
                data: {email:email,username:username,password:password},
                success: function (response) {
                    if(response=="Fields Are Empty"){
                        alert("Some Fields Are Missing");
                    }else if(response=="Email Already Exists"){
                        alert("Email Already Exists");
                    }else if(response == "Query Failed"){
                        alert("Internal Error Occured");
                    }else if(response == "Query Executed"){
                        window.location.href = "/wholesale/login/";
                        return false;
                    }else{
                        alert("Check Your Internet Connection");
                    }
                }
            });
        }

    });
});