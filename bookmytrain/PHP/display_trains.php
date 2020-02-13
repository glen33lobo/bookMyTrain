<?php
    
    include('connect.php');
    
    date_default_timezone_set("Asia/Kolkata");
    $today_date=date("Y-m-d");
    $today_time=date("H:i");
    
    if (isset($_POST["page"]))
    {
        $page=$_POST["page"];
    }
    if(isset($_POST['dat']))
    {
        $d=$_POST['dat'];
    }else
    {
        $d=$today_date;
    }
    if(isset($_POST['from_plac']))
    {
        $from_plac=$_POST['from_plac'];
    }
    if(isset($_POST['to_plac']))
    {
        $to_plac=$_POST['to_plac'];
    }
    else
    {
         $to_plac="mysore";
    }
    
    // $page=1;
    // $d="2019-12-20";
    // $from_plac="mangalore";
    // $to_plac="mysore";
    
    
    
    
    if ($conn->connect_error) 
    {
	    $response["error"] = "Connection failed: " . $conn->connect_error;
	    $response["success"] = "";
	    echo "error in connection";
    }
    else if($page==0)
    {
        if($d>$today_date)
            $today_time="00:00";
        $sql="SELECT * FROM platform_details p,time_details tm,train_details tr where tr.train_id=tm.train_id and tm.platform_id=p.platform_id and ((p.source='".$from_plac."' and p.destination='".$to_plac."' and direction='1') or (p.source='".$to_plac."' and p.destination='".$from_plac."' and direction='-1'))   ORDER BY tm.source_time";
        
        $result = $conn->query($sql);
        
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if($row['direction']=='-1'){
                    $temp=$row['source'];
                    $row['source']=$row['destination'];
                    $row['destination']=$temp;
                }
        
                $sql1="SELECT count(sd.transaction_id) as ct FROM `transaction_details` td,`seat_details` sd WHERE td.transaction_id=sd.transaction_id and td.time_id='".$row['time_id']."' and date='".$d."'";
        
                $res = $conn->query($sql1);
    
                if ($res->num_rows > 0) {
                    $r = $res->fetch_assoc();
                    $avail=$r['ct']*5;
                }else
                {
                    $avail=100;
                }
        
    
                echo "<div class='container sugg-section'>
                    <div class='row'>
                        <div class='col-sm-7 text-center' >
                            <span>
                                <label id='sugg-section-label-place-from' class='sugg-section-label-place text-center'    style='width: 35%;'>".$row['source']."</label>
                                <label class='sugg-section-label text-center' style='width: 20%;'>TO</label>
                                <label id='sugg-section-label-place-to' class='sugg-section-label-place text-center'     style='width: 35%;'>".$row['destination']."</label>
                            </span>
                        </div>
                        <div class='col-sm-5 text-center' >
                            <span>
                                <label id='sugg-section-label-place-time' class='sugg-section-label' style='width: 45%    ;padding-top: 4vh;'>".$row['source_time']."  ".$today_date."</label>
                                <label id='sugg-section-label-place-avail' class='sugg-section-label' style='width: 50%;padding-top: 4vh;'>".$avail."% full</label>
                            </span>
                        </div>
                    </div>
                </div>";
        
            }
        }
    }
    else if($page==1){
        
        if($d>$today_date)
            $today_time="00:00";
         
         $sql="SELECT * FROM platform_details p,time_details tm,train_details tr where tr.train_id=tm.train_id and tm.platform_id=p.platform_id and ((p.source='".$from_plac."' and p.destination='".$to_plac."' and direction='1') or (p.source='".$to_plac."' and p.destination='".$from_plac."' and direction='-1')) and source_time>'".$today_time."' ORDER BY tm.source_time";
        
        $result = $conn->query($sql);
        
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        
                 $sql1="SELECT count(sd.transaction_id) as ct FROM `transaction_details` td,`seat_details` sd WHERE td.transaction_id=sd.transaction_id and td.time_id='".$row['time_id']."' and date='".$d."'";
        
                $res = $conn->query($sql1);

                if ($res->num_rows > 0) {
                    $r = $res->fetch_assoc();
                    $avail=$r['ct']*5;
                }else
                {
                    $avail=100;
                }
                
                
                
                if($avail<100){
                    
                    if($row['direction']=="1"){
                    
                    echo "<div class='row'>
                    <div class='container'>
                        <div class='row'>
                            <div class='col-sm-4'>
                                <div class='row'>
                                    <label class='train_name'>
                                        ".$row['train_name']."
                                    </label>
                                </div>
                                <div class='row'>
                                    <label class='train_id'>
                                        ".$row['train_id']."
                                    </label>
                                </div>
                            </div>
    
                            <div class='col-sm-2'>
                                <div class='row'>
                                    <label class='train-time'>
                                        ".$row['source_time']."
                                    </label>
                                </div>
                                <div class='row'>
                                    <label class='train-place'>
                                        ".$row['source']."
                                    </label>
                                </div>
                            </div>
                            <div class='col-sm-2 col-sm-offset-1'>
                                <div class='row'>
                                    <label class='travel-time'>
                                        1h 00min
                                    </label>
                                </div>
                                <div class='row'>
                                    <label class='arrow'>
                                        -->
                                    </label>
                                </div>
                            </div>
                            <div class='col-sm-2'>
                                <div class='row'>
                                    <label class='train-time'>
                                        ".$row['destination_time']."
                                    </label>
                                </div>
                                <div class='row'>
                                    <label class='train-place'>
                                        ".$row['destination']."
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class='row'> <hr class='hr'> </div>
                        <div class='row'>
                            <div class='col-sm-2 col-sm-offset-10'>
                                <button class='book-but' onclick='booknow(\"".$row['time_id']."\")' value='".$row['time_id']."'>
                                    Book
                                </button>
                            </div>
                        </div>    
                    </div>
                    </div>";
                    
                }
                
                else
                {
                        
                echo "<div class='row'>
                    <div class='container'>
                        <div class='row'>
                            <div class='col-sm-4'>
                                <div class='row'>
                                    <label class='train_name'>
                                        ".$row['train_name']."
                                    </label>
                                </div>
                                <div class='row'>
                                    <label class='train_id'>
                                        ".$row['train_id']."
                                    </label>
                                </div>
                            </div>
    
                            <div class='col-sm-2'>
                                <div class='row'>
                                    <label class='train-time'>
                                        ".$row['source_time']."
                                    </label>
                                </div>
                                <div class='row'>
                                    <label class='train-place'>
                                        ".$row['destination']."
                                    </label>
                                </div>
                            </div>
                            <div class='col-sm-2 col-sm-offset-1'>
                                <div class='row'>
                                    <label class='travel-time'>
                                        1h 00min
                                    </label>
                                </div>
                                <div class='row'>
                                    <label class='arrow'>
                                        -->
                                    </label>
                                </div>
                            </div>
                            <div class='col-sm-2'>
                                <div class='row'>
                                    <label class='train-time'>
                                        ".$row['destination_time']."
                                    </label>
                                </div>
                                <div class='row'>
                                    <label class='train-place'>
                                        ".$row['source']."
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class='row'> <hr class='hr'> </div>
                        <div class='row'>
                            <div class='col-sm-2 col-sm-offset-10'>
                                <button class='book-but' onclick='booknow(\"".$row['time_id']."\")' value='".$row['time_id']."'>
                                    Book
                                </button>
                            </div>
                        </div>    
                    </div>
                    </div>";
                        
                    }
        
        
        
                   
                }
            }
        }
    }
?>