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
                <li><a>Home</a></li>
                <li><a id="requestServer">Server Request</a></li>
                <li><a>About</a></li>
                <li><a>Calendar</a></li>
                <li><a>Lab Rules</a></li>
                <li><a>Clubs</a></li>
                <li><a>Resources</a></li>
            </ul>
        </div>

    </body>

</html>

<script>
        $(document).ready(function () {
            $("#requestServer").click(function (e) { 
                e.preventDefault();
                console.log("Request Server Clicked");
            });
        });
</script>