<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./assets/css/template/navbar.css">
        <title>NavBar</title>
    </head>

    <body>
        <div class="container">
            <ul class="navbar">
                <li><a href="https://hydra.newpaltz.edu/~rodolfo/SUNY_NP_HydraServer/client/src/">Home</a></li>
                <li><a id="requestServer">Server Request</a></li>
                <li><a id="about">About</a></li>
                <li><a id="calendar">Calendar</a></li>
                <li><a id="rules">Lab Rules</a></li>
                <li><a id="clubs">Clubs</a></li>
                <li><a id="resources">Resources</a></li>
            </ul>
        </div>

    </body>

</html>

<script>

    // This script allows to show and hide the different options selected from the navbar
    
        $(document).ready(function () {

            $('#submit-btn').click(function(){



            });

            $("#requestServer").click(function (e) { 
                
                e.preventDefault();
                var modalEnabled = sessionStorage.getItem("modalEnabled");

                if(modalEnabled == null){
                    modalEnabled = false;
                }

                $.ajax({
                    type: "GET",
                    url: "assets/components/serverRequest/serverRequest.php",
                    data: {modalEnabled},
                    dataType: "json",
                    success: function (response) {

                        if(response.modalEnabled == true){
                            sessionStorage.setItem("modalEnabled", response.modalEnabled);
                            $(".displayArea").append(response.content).slideDown().show('slow'); 
                        }
                        else{
                            sessionStorage.setItem("modalEnabled", response.modalEnabled);
                            $(".displayArea").slideUp().hide('slow');
                            $(".displayArea").fadeOut(300, function(){
                                $(".displayArea").empty();
                            });
                        } 

                        if(response.serverRequested == true){
                            document.getElementById("noRefreshForm").addEventListener("submit", function(event){
                                event.preventDefault()

                                var studentid = document.getElementById("studentid").value;
                                var name = document.getElementById("name").value;
                                var email = document.getElementById("email").value;
                                var msg = "Incoming server access request, information below. \n\n Student ID: " + studentid + "\n" + "Name: " + name + "\n" + "Email: " + email;

                                $.ajax({
                                    type: "GET",
                                    url: "./assets/components/serverRequest/sendMail.php",
                                    data: {msg},
                                    dataType: "json",
                                    success: function (response) {
                                        console.log(response.response);
                                    }
                                });
                                
                                $(".modalContent").fadeOut(300);
                                $(".mainModalWindow").append("<img style='width:10rem; margin-left:33%; margin-top:20%' src=./assets/images/sent.png>").fadeIn(300);
                                $(".displayArea").delay(1300).slideUp(300).hide('slow');
                            });
                        }

                    }
                });
            });




            $("#about").click(function (e) { 
                e.preventDefault();

                var modalEnabled = sessionStorage.getItem("modalEnabled");

                if(modalEnabled == null){
                    modalEnabled = false;
                }

                $.ajax({
                    type: "GET",
                    url: "assets/components/about/about.php",
                    data: {modalEnabled},
                    dataType: "json",
                    success: function (response) {
                        if(response.modalEnabled == true){
                            sessionStorage.setItem("modalEnabled", response.modalEnabled);
                            $(".displayArea").append(response.content).slideDown().show('slow'); 
                        }
                        else{
                            sessionStorage.setItem("modalEnabled", response.modalEnabled);
                            $(".displayArea").slideUp().hide('slow');
                            $(".displayArea").fadeOut(300, function(){
                                $(".displayArea").empty();
                            });
                        }  
                    }
                });
            });
            

        
            $("#calendar").click(function (e) { 
                e.preventDefault();

                var modalEnabled = sessionStorage.getItem("modalEnabled");

                if(modalEnabled == null){
                    modalEnabled = false;
                }

                $.ajax({
                    type: "GET",
                    url: "assets/components/calendar/calendar.php",
                    data: {modalEnabled},
                    dataType: "json",
                    success: function (response) {
                        if(response.modalEnabled == true){
                            sessionStorage.setItem("modalEnabled", response.modalEnabled);
                            $(".displayArea").append(response.content).slideDown().show('slow'); 
                        }
                        else{
                            sessionStorage.setItem("modalEnabled", response.modalEnabled);
                            $(".displayArea").slideUp().hide('slow');
                            $(".displayArea").fadeOut(300, function(){
                                $(".displayArea").empty();
                            });
                        }  
                    }
                });
            });


            $("#rules").click(function (e) { 
                e.preventDefault();
                var modalEnabled = sessionStorage.getItem("modalEnabled");

                if(modalEnabled == null){
                    modalEnabled = false;
                }

                $.ajax({
                    type: "GET",
                    url: "assets/components/rules/rules.php",
                    data: {modalEnabled},
                    dataType: "json",
                    success: function (response) {
                        if(response.modalEnabled == true){
                            sessionStorage.setItem("modalEnabled", response.modalEnabled);
                            $(".displayArea").append(response.content).slideDown().show('slow'); 
                        }
                        else{
                            sessionStorage.setItem("modalEnabled", response.modalEnabled);
                            $(".displayArea").slideUp().hide('slow');
                            $(".displayArea").fadeOut(300, function(){
                                $(".displayArea").empty();
                            });
                        }  
                    }
                });
            });


            $("#clubs").click(function (e) { 
                e.preventDefault();
                var modalEnabled = sessionStorage.getItem("modalEnabled");

                if(modalEnabled == null){
                    modalEnabled = false;
                }

                $.ajax({
                    type: "GET",
                    url: "assets/components/clubs/clubs.php",
                    data: {modalEnabled},
                    dataType: "json",
                    success: function (response) {
                        if(response.modalEnabled == true){
                            sessionStorage.setItem("modalEnabled", response.modalEnabled);
                            $(".displayArea").append(response.content).slideDown().show('slow'); 
                        }
                        else{
                            sessionStorage.setItem("modalEnabled", response.modalEnabled);
                            $(".displayArea").slideUp().hide('slow');
                            $(".displayArea").fadeOut(300, function(){
                                $(".displayArea").empty();
                            });
                        }  
                    }
                });
            });


            $("#resources").click(function (e) { 
                e.preventDefault();
                var modalEnabled = sessionStorage.getItem("modalEnabled");

                if(modalEnabled == null){
                    modalEnabled = false;
                }

                $.ajax({
                    type: "GET",
                    url: "assets/components/resources/resources.php",
                    data: {modalEnabled},
                    dataType: "json",
                    success: function (response) {
                        if(response.modalEnabled == true){
                            sessionStorage.setItem("modalEnabled", response.modalEnabled);
                            $(".displayArea").append(response.content).slideDown().show('slow'); 
                        }
                        else{
                            sessionStorage.setItem("modalEnabled", response.modalEnabled);
                            $(".displayArea").slideUp().hide('slow');
                            $(".displayArea").fadeOut(300, function(){
                                $(".displayArea").empty();
                            });
                        }  
                    }
                });
            });

        });
        
</script>