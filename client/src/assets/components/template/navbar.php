<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NavBar</title>

    </head>

    <body>
        <div class="container">
            <ul class="navbar">
                <li><a href="../src/index.php">Home</a></li>
                <li><a id="requestServer">Server Request</a></li>
                <li><a id="about">About</a></li>
                <li><a>Calendar</a></li>
                <li><a>Lab Rules</a></li>
                <li><a>Clubs</a></li>
                <li><a>Resources</a></li>
            </ul>
        </div>

    </body>

</html>

<script>

    // This script allows to show and hide the different options selected from the navbar
    
        $(document).ready(function () {


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
            

        });
</script>