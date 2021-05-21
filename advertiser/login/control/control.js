$(document).ready(function() {
    $("#submitForm").submit(function(e) {
        e.preventDefault();
        var email = $("#email").val();
        var password = $("#password").val();

        if (email != '' && password != '') {
            $.ajax({
                type: "POST",
                url: "./control/login.php",
                data: { email: email, password: password },
                success: function(response) {
                    if (response == "Redirect Correct") {
                        window.location.href = "/advertiser/dashboard/";
                    } else if (response == "Wrong Password") {
                        alert("Email And Password Dont Match");
                    } else if (response == "Email Doesnt Exist") {
                        alert("Email And Password Dont Match");
                    } else if (response == "Email Doesnt Exist") {
                        alert("Fields Are Empty");
                    } else {
                        alert("Check Your Internet Connection");

                    }
                }
            });
        }

    });
});