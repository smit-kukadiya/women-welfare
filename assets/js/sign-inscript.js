$(document).ready(function(){
    $("#emailcheck").hide();
    let emailError = true;
    $("#email").keyup(function () {
        validateEmail();
    });

    function validateEmail() {
        let emailValue = $("#email").val();
        if(emailValue.length == '') {
            $('#emailcheck').html('**Email is missing')
            $("#emailcheck").show();
            emailError = true;
            return false;
        } else if (emailValue.length < 10) {
            $('#emailcheck').html('**Email maybe incorrect');
            $('#emailcheck').show();
            emailError = true;
            return false;
        } else {
            $('#emailcheck').hide();
        }
    }

    $("#passcheck").hide();
    let passError = true;
    $("#pass").keyup(function () {
        validatePassword();
    });

    function validatePassword() {
        let passValue = $("#pass").val();
        if(passValue.length == "") {
            $('#passcheck').html("**Password is missing");
            $('#passcheck').show();
            passError = true;
            return false;
        } else if (passValue.length < 8) {
            $('#passcheck').html("**Password should have at least 8 character or number");
            $('#passcheck').show();
            passError = true;
            return false;
        } else {
            $('#passcheck').hide();
        }
    }

    $("#but_submit").click(function(){
        validateEmail();
        validatePassword();
        if(emailError == true && passError == true) {
            return true;
        } else {
            var email = $("#email").val();
            var pass = $("#pass").val();
            if( email != "" && pass != "" ){
                $.ajax({
                    url:'newGetDetails.php',
                    type:'POST',
                    data:{email:email,pass:pass},
                    success:function(response){
                        var msg = "";
                        if(response == 1){
                            //window.location = "home.php";
                            $("#txtHint").show();
                            var xmlhttp = new XMLHttpRequest();
                            xmlhttp.onreadystatechange = function() {
                                if (this.readyState == 4 && this.status == 200) {
                                    document.getElementById("txtHint").innerHTML = this.responseText;
                                }
                            };
                            xmlhttp.open("GET","getUserDetail.php?a="+pass,true);
                            xmlhttp.send();
                        }else{
                            $("#txtHint").hide();
                            msg = "Invalid email or password";
                        }
                        $("#message").html(msg);
                    }
                });
            }
        }    
    });
});