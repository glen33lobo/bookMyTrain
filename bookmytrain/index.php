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
        <link rel="stylesheet" href="css/index.css"/>
        
        <script src="javascript/jquery.js"></script>
        <script src="javascript/jquery2.js"></script>
        

        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" type="text/javascript"></script>
    
    </head>
    <body style="background-color: #1f2833">

            <div style="background-image: url('images/bg1.jpeg'); width: 100%;background-position: center;
            background-repeat: no-repeat;width: 100%;filter: blur(3px);
      -webkit-filter: blur(3px); background-size: cover;
      height:100%;position: absolute;top: 0%;left: 0%;position:fixed;
      z-index: -2;" >
      
    </div>

        <header class="header">
            <nav class="navbar navbar-style">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#micon">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1 id="name" >  BOOK MY TRAIN </h1> 
                    </div>
                    <div class="collapse navbar-collapse" id="micon">
                        <ul class="nav navbar-nav navbar-right"> 
                        <li>
                        <button onclick="location.href='html/register.html'">REGISTER</button></li>
                            <li><button onclick="document.getElementById('id01').style.display='block'">LOGIN</button></li>
                        </ul>


                        

                    </div>


                    <div id="id01" class="modal" >
  
                            <form id="loginform1" method="POST" class="modal-content animate" style="background-color: #1F2833 ">
                            <div class="imgcontainer">
                              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                              <img src="images/man.png" alt="Avatar" class="avatar" >
                            </div>
                        
                            <div class="container" style="width:100%">
                              <label for="uname"><b>Username</b></label><br>
                              <input class="login-form-input" type="text" placeholder="Enter Username" name="uname" id="uname" required><br>
                        
                              <label for="psw"><b>Password</b></label><br>
                              <input class="login-form-input" type="password"  placeholder="Enter Password" name="psw" id="psw" required><br>
                                
                              <input class="login-form-button" type="submit"  value="LOGIN">
                             
                            </div>
                        
                            <div class="container" style="background-color:#1F2833;color: black; width:100%;padding-top:5px;padding-bottom: 5px;" >
                                <center>
                              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="border-radius: 8px;width: 30%;">Cancel</button>
                         </center>
                            </div>
                          </form>
                        </div>


                </div>
            </nav>
        </header>
        
        <br>
        
        

        <section id="loginform" class="outer-wrapper" >
            <div class="inner-wrapper" >
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-4">
                            <h2 class="text-center" style="color: #C5C6C7;">Check Train Timings</h2>
                        </div>
                        <br><br><br><br>
                        <div class="col-sm-4 col-sm-offset-4 mychecform">
                            <form role="form" id="check_form_1">
                                <div class="form-group">
                                    <input type="text" class="form-control text-center detailsholder" placeholder="FROM" id="from_plac">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control text-center detailsholder" placeholder="TO" id="to_plac">
                                </div>
                                <div class="form-group">
                                        <input type="text" class="form-control text-center detailsholder" placeholder="dd/mm/yyyy" id="date1"/>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-default  text-center">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <br>

        
       
    <div id="sugg_sect">
        
 <?php
 
    $page=0;
    date_default_timezone_set("Asia/Kolkata");
    $today_date=date("Y-m-d");

    $d=$today_date;
    $from_plac='mangalore';
        include('PHP/display_trains.php');
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
            
            <script src="javascript/index.js"></script>
</html>