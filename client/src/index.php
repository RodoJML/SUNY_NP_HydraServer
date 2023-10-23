<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUNY New Paltz | Hydra Lab - Computer Science</title>
    
    <!-- Loading CSS  -->
    <link rel="stylesheet" href="./assets/css/index.css">
</head>

<body>    
    <div>
        <div class="Logo">
            <img class="HydraLabLogo" src="./assets/images/HydraLabLogo.png" alt="HydraLabLogo">
        </div>

        <?php include './assets/components/navbar.php'; ?>

        <!-- This should be on a separate component, will be added once PHP is installed -->
        <ul class="topnav">
                <li> <a>Home</a> </li>
                <li> <a>Server Request</a> </li>
                <li> <a>Calendar</a> </li>
                <li> <a>About</a> </li>
                <li> <a>Lab Rules</a> </li>
                <li> <a>Clubs</a> </li>
                <li> <a>Resources</a> </li>
        </ul>
        <!-- ------------------------------------------- -->
    </div>


    <div class="indexMainPic">
        <img src="./assets/images/Hydralabpic.png" alt="Hydralabpic">
    </div>


    <div class="indexLabHoursSection">
        
        <br/><br/> 
        <h1>Lab Hours</h1>

        <div class="grid-container">
            <div class="grid-item">Monday: </div>
            <div class="grid-item">11AM - 03PM</div>

            <div class="grid-item">Thursday: </div>
            <div class="grid-item">11AM - 03PM</div>
            
            <div class="grid-item">Tuesday: </div>
            <div class="grid-item">11AM - 02PM</div>

            <div class="grid-item">Friday: </div>
            <div class="grid-item">01PM - 06PM</div>

            <div class="grid-item">Wednesday: </div>
            <div class="grid-item">12AM - 05PM</div>

            <div class="grid-item">Sat/Sun: </div>
            <div class="grid-item">Closed</div>
        </div>
        <br/><br/><br/> 

    </div>

    <div class="indexAnnouncementsSection">
        
        <br/><br/>
        <h1 class="Heading">Announcements</h1>

        <div class="grid-container">
            <div class="grid-item1">
                <img src="https://blog.purelyhr.com/wp-content/uploads/2017/06/BauBnb-e1506104164697.jpg" alt="Avatar" style="width:100%">
            </div>
            <div class="grid-item2">
                <h1 class="announcementTitle"> Example Announcement</h1>
                <p class="announcementText">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>

    </div>

    <br/><br/>

    <div class="indexFooter">

        <div class="grid-container">

            <div class="grid-container1">
                <div class="grid-item1"><a href="/~rodolfo/SUNY_NP_HydraServer/client/src/">Home</a></div>
                <div class="grid-item1"><a onclick="window.location.href='./test.php'">Server Request</a></div>
                <div class="grid-item1"><a>About</a></div>
                <div class="grid-item1"><a>Calendar</a></div>
                <div class="grid-item1"><a>Facilities</a></div>
                <div class="grid-item1"><a>Clubs</a></div>
            </div>
            
            <div class="grid-container2">
                <div class="grid-item2">Computer Science</div>
                <div class="grid-item2">Hydra Lab</div>
                <div class="grid-item2">SUNY New Paltz</div>
                <div class="grid-item2">Science Hall 260</div>
                <div class="grid-item2">&nbsp</div>
                <div class="grid-item2">&nbsp</div>
            </div>

            <div class="grid-item3">DISCLAIMER: <br/> The view and opinions expressed by the authors and other contributors to this website are theirs alone, and do not necessarily reflect the official policies or positions of SUNY New Paltz or any employee thereof.</div>


        </div>
        
        <br/> <br/>

    </div>

</body>

</html>
