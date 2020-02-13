<?php
session_start();

if ( isset( $_SESSION['user_id'] ) ) {
    
} else {
    header("Location: ../../../index.php");
    exit;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Railway Book
        </title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<link href=" https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="Stylesheet" type="text/css" />
        <link rel="stylesheet" href="../../css/first_page.css"/>
        
        

        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" type="text/javascript"></script>
    
    </head>
    <body style="background-color: #1f2833">




            
            <div style="background-image: url('../../../images/bg.jpeg'); width: 100%;background-position: center;
            background-repeat: no-repeat;width: 100%;filter: blur(3px);
      -webkit-filter: blur(3px); background-size: cover;
      height:100%;position: absolute;top: 0%;left: 0%;position:fixed;
      z-index: -2;" ></div>
      
    
    <header class="header fixed-top">
            <nav class="navbar navbar-style">
                <div class="container" style="width:90%;">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#micon">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1 id="name" >  BOOK MY TRAIN</h1> 
                    </div>
                    <div class="collapse navbar-collapse" id="micon">
                        <ul class="nav navbar-nav navbar-right"> 
                        <li>
                        <button onclick="location.href='page3.php'">HISTORY</button></li>
                            <li><button onclick="logout_fxn()">LOG OUT</button></li>
                        </ul>


                        

                    </div>

                </div>
            </nav>
        </header>

        <!--<header class="header fixed-top">-->
        <!--    <nav class="navbar navbar-style">-->
        <!--        <div class="container">-->
        <!--            <div class="navbar-header">-->
        <!--                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#micon">-->
        <!--                    <span class="icon-bar"></span>-->
        <!--                    <span class="icon-bar"></span>-->
        <!--                    <span class="icon-bar"></span>-->
        <!--                </button>-->
        <!--                <h1 id="name" >  RAILWAY BOOKING PORTAL</h1> -->
        <!--            </div>-->
        <!--            <div class="collapse navbar-collapse" id="micon">-->
        <!--                <ul class="nav navbar-nav navbar-right"> -->
        <!--                <li>-->
        <!--                <button onclick="logout_fxn()">LOG OUT</button></li>-->
        <!--                </ul>-->


                        

        <!--            </div>-->

        <!--        </div>-->
        <!--    </nav>-->
        <!--</header>-->
        
        
        
        <br>
        
        <div id="loading"></div>
        
        
        <p id='empty_p'></p>
        
        <div class="container bg-container" id="bg-container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <h1 class="bg-text">WELCOME TO RAILWAY BOOKING PORTAL</h1>
                </div>
            </div>
        </div>

        <div class="container" id="top-search">
            <div class="row">
                <div class="col-sm-2 col-sm-offset-5 text-center">
                    <button id="search" onclick="open_searchbar()">Search</button>
                </div>
            </div>
        </div>

    <section class="searchbar" id="searchbar">
        <div class="container">
            <!--<form id="search_form" method='POST' onsubmit="checktrains()">-->
                <div class="row">
                <div class="col-sm-4 text-center">
                    <div class="row autocomplete">
                        <input type="text" class="text-center detailsholder" id="from_plac" placeholder="FROM" style="width:300px;" required>
                    </div>
                    <div class="row ">
                        TO
                    </div>
                    <div class="row autocomplete">
                        <input type="text" class="text-center detailsholder" id="to_plac" placeholder="TO" style="width:300px;" required>
                    </div>
                </div>
                
                <div class="col-sm-4 text-center">
                    <div class="row">
                        <br><br>
                    </div>
                    <div class="row">
                        <input type="date" class="text-center detailsholder" id="dat" required>
                    </div>
                    <div class="row">
                        <br><br>
                    </div>
                </div>
                
                <div class="col-sm-4">
                   <div class="row">
                        <br><br>
                    </div>
                    <div class="row">
                        <input type="button" id="searcher" onclick="checktrains()" class="text-center detailsholder-button" value="search" required>
                    </div>
                    <div class="row">
                        <br><br>
                    </div>
                </div>
                    
                    
            </div>
        </div>
</section>

<?php
$page="1";
?>


    <div class="container train_list" id="train_list1">

            <?php

?>
        
        
        
    </div>





    </body>






    <script>
            // Get the modal
            var modal = document.getElementById('id01');
            
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }




           
            </script>
            
            <script src="../../javascript/first_page.js"></script>
</html>