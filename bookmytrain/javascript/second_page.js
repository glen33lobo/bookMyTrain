window.onload=function() {
    
    tmid = document.getElementById('time_id').value;
    d = document.getElementById('date1').innerHTML;
    total_seats_b=0;
    s=0;
    // seats=all_booked_seats[t];
	t=document.getElementById('seat_type').value;
    if(t==="sleeper")
    {
        t='SL';
        // disp_cost=total_seats_b*50;
    }
    else
    {
        t='AC';
        // disp_cost=total_seats_b*100;
    }
    
    
    alert(tmid+","+d);
     var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if(this.responseText!=""){
             alert(this.responseText);
            //   var obj = JSON.parse("'"+this.responseText+"'");
            //   alert(obj);
            
            all_booked_seats=this.responseText;
            all_booked_seats=JSON.parse(all_booked_seats);
            alert("hiii"+all_booked_seats);
               
            //   seat1=['s_01','s_02','s_06','s_15','s_32'];
            seat1=all_booked_seats[t];
	 seats=seat1;
	 alert(t+"  "+seats);
	 
	 document.getElementById('add_p').disabled=false;
               
            }
             else
            {
                alert("er");
            }
            
        }
        else
        {
            if(this.readyState == 4)
           alert("errrr"+this.responseText);
        }
    };
    

    xmlhttp.open("POST", "../get_seats.php", true);
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlhttp.send("time_id="+tmid+"&date1="+d);
    
    
    document.getElementById('s_01').addEventListener("click",click_seats);
    document.getElementById('s_02').addEventListener("click",click_seats);
    document.getElementById('s_03').addEventListener("click",click_seats);
    document.getElementById('s_04').addEventListener("click",click_seats);
    document.getElementById('s_05').addEventListener("click",click_seats);
    document.getElementById('s_06').addEventListener("click",click_seats);
    document.getElementById('s_07').addEventListener("click",click_seats);
    document.getElementById('s_08').addEventListener("click",click_seats);
    document.getElementById('s_09').addEventListener("click",click_seats);
    document.getElementById('s_10').addEventListener("click",click_seats);
    document.getElementById('s_11').addEventListener("click",click_seats);
    document.getElementById('s_12').addEventListener("click",click_seats);
    document.getElementById('s_13').addEventListener("click",click_seats);
    document.getElementById('s_14').addEventListener("click",click_seats);
    document.getElementById('s_15').addEventListener("click",click_seats);
    document.getElementById('s_16').addEventListener("click",click_seats);
    document.getElementById('s_17').addEventListener("click",click_seats);
    document.getElementById('s_18').addEventListener("click",click_seats);
    document.getElementById('s_19').addEventListener("click",click_seats);
    document.getElementById('s_20').addEventListener("click",click_seats);
    document.getElementById('s_21').addEventListener("click",click_seats);
    document.getElementById('s_22').addEventListener("click",click_seats);
    document.getElementById('s_23').addEventListener("click",click_seats);
    document.getElementById('s_24').addEventListener("click",click_seats);
    document.getElementById('s_25').addEventListener("click",click_seats);
    document.getElementById('s_26').addEventListener("click",click_seats);
    document.getElementById('s_27').addEventListener("click",click_seats);
    document.getElementById('s_28').addEventListener("click",click_seats);
    document.getElementById('s_29').addEventListener("click",click_seats);
    document.getElementById('s_30').addEventListener("click",click_seats);
    document.getElementById('s_31').addEventListener("click",click_seats);
    document.getElementById('s_32').addEventListener("click",click_seats);
    document.getElementById('s_33').addEventListener("click",click_seats);
    
    
    reset_seats();
    
    
    
//     for(var j=0;j<14;j++)
// 	{
// 		bt[j].addEventListener("click",addSeat);
// 	}
    
    
    
    
};


function reset_seats(){
    
    document.getElementById('s_01').setAttribute("src","../../../images/seat_grey_right.png");
    document.getElementById('s_02').setAttribute("src","../../../images/seat_grey_right.png");
    document.getElementById('s_03').setAttribute("src","../../../images/seat_grey_right.png");
    document.getElementById('s_04').setAttribute("src","../../../images/seat_grey_right.png");
    document.getElementById('s_05').setAttribute("src","../../../images/seat_grey_left.png");
    document.getElementById('s_06').setAttribute("src","../../../images/seat_grey_left.png");
    document.getElementById('s_07').setAttribute("src","../../../images/seat_grey_left.png");
    document.getElementById('s_08').setAttribute("src","../../../images/seat_grey_left.png");
    document.getElementById('s_09').setAttribute("src","../../../images/seat_grey_up.png");
    document.getElementById('s_10').setAttribute("src","../../../images/seat_grey_up.png");
    document.getElementById('s_11').setAttribute("src","../../../images/seat_grey_up.png");
    document.getElementById('s_12').setAttribute("src","../../../images/seat_grey_up.png");
    document.getElementById('s_13').setAttribute("src","../../../images/seat_grey_up.png");
    document.getElementById('s_14').setAttribute("src","../../../images/seat_grey_down.png");
    document.getElementById('s_15').setAttribute("src","../../../images/seat_grey_down.png");
    document.getElementById('s_16').setAttribute("src","../../../images/seat_grey_down.png");
    document.getElementById('s_17').setAttribute("src","../../../images/seat_grey_down.png");
    document.getElementById('s_18').setAttribute("src","../../../images/seat_grey_down.png");
    document.getElementById('s_19').setAttribute("src","../../../images/seat_grey_up.png");
    document.getElementById('s_20').setAttribute("src","../../../images/seat_grey_up.png");
    document.getElementById('s_21').setAttribute("src","../../../images/seat_grey_up.png");
    document.getElementById('s_22').setAttribute("src","../../../images/seat_grey_up.png");
    document.getElementById('s_23').setAttribute("src","../../../images/seat_grey_up.png");
    document.getElementById('s_24').setAttribute("src","../../../images/seat_grey_down.png");
    document.getElementById('s_25').setAttribute("src","../../../images/seat_grey_down.png");
    document.getElementById('s_26').setAttribute("src","../../../images/seat_grey_down.png");
    document.getElementById('s_27').setAttribute("src","../../../images/seat_grey_down.png");
    document.getElementById('s_28').setAttribute("src","../../../images/seat_grey_down.png");
    document.getElementById('s_29').setAttribute("src","../../../images/seat_grey_up.png");
    document.getElementById('s_30').setAttribute("src","../../../images/seat_grey_up.png");
    document.getElementById('s_31').setAttribute("src","../../../images/seat_grey_up.png");
    document.getElementById('s_32').setAttribute("src","../../../images/seat_grey_up.png");
    document.getElementById('s_33').setAttribute("src","../../../images/seat_grey_up.png");
    
}



$('#seat_type').change(function()
{
    $('#table1').html("<tr><th><u>NAME</u></th><th><u>AGE</u></th><th><u>GENDER</u></th><th><u>SEAT NO</u></th></tr>");
    alert("working");
    total_seats_b=0;
    s=0;
    t=document.getElementById('seat_type').value;
    if(t==="sleeper")
    {
        t='SL';
        
    }
    else
    {
        t='AC';
    }
    document.getElementById('cost').innerHTML=0;
    seat1=all_booked_seats[t];
// 	seat1=['s_01','s_02','s_06','s_15','s_32'];
	 seats=seat1;
	 alert(seats);
	 reset_seats();
})





function book_details(u_id){
    
    if(total_seats_b==0)
    {
        alert("No seats selected");
        return;
    }
    
    else if(document.getElementById("cname").value==="")
    {
        alert("Enter Name on Card");
        return;
    }
    else if(document.getElementById("ccnum").value==="")
    {
        alert("Enter Card Number");
        return;
    }
    else if(document.getElementById("expyear").value==="")
    {
        alert("Enter Expiry Details");
        return;
    }
    else if(document.getElementById("cvv").value==="")
    {
        alert("Enter CVV");
        return;
    }
    
    // alert("almost booking");
    // return;
    
    
    
    var uid=u_id;
    var time_id=tmid;
    var stype="SL";
    // alert(uid+" "+time_id+" "+stype);
    // var s=$('#table1').html;
    //("<tr><th><u>NAME</u></th><th><u>AGE</u></th><th><u>GENDER</u></th><th><u>SEAT NO</u></th></tr>");
    
    pers_name=[];
    pers_age=[];
    pers_gen=[];
    pers_seat=[];
    ob1=[];
    
    $('#table1 .tr1').each(function() {
        var obj=new Object();
        // alert($(this).find(".pers_name").html());
        obj.name=$(this).find(".pers_name").html();
        obj.age=$(this).find(".pers_age").html()
        obj.gender=$(this).find(".pers_gen").html();
        obj.seat_no=$(this).find(".pers_seat").html();
        ob1.push(obj);
        // pers_name.push($(this).find(".pers_name").html()); 
        // pers_age.push($(this).find(".pers_age").html());
        // pers_gen.push($(this).find(".pers_gen").html());
        // pers_seat.push($(this).find(".pers_seat").html());
    });
    
    ob1=JSON.stringify(ob1);
    // alert(ob1);
    // return;
    
    // var ob1=[{'name':'asd','age':25,'gender':'male','seat_no':'S01'},{'name':'qwe','age':75,'gender':'female','seat_no':'S02'},{'name':'fyrt','age':85,'gender':'male','seat_no':'S03'}];
    
    // var myarr = JSON.stringify( ob1 );
    
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if(this.responseText=="success"){
                alert('booking succcessful');
                location.href='first_page.php';
                
                // var tlist=document.getElementById("train_list1");
                // tlist.style.display="block";
                // $('#train_list1').html(this.responseText);
                // alert("Trains Available");
                // // e.preventDefault();
                // document.getElementById("loading").style.display="none";
               
            }
             else
            {
                alert("Booking failed"+this.responseText);
            }
            
        }
        else
        {
            if (this.readyState == 4)
             alert("Connection TimedOut");
        }
    };
    

    xmlhttp.open("POST", "../book_seats.php", true);
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlhttp.send("user_id="+uid+"&time_id="+time_id+"&date="+d+"&seat_type="+stype+"&myarr="+ob1);
                
                
                
                
            }
            
            
            
            
            
            
    function addSeat() ////red seats gets set
	{
	    
	   // s_id="";
	    
	    for(i=0;i<seats.length;i++)
	    {
	        s1=document.getElementById(seats[i]);
	        ss=s1.getAttribute("src");
	        if(ss.endsWith("right.png"))
	        {
	            s1.setAttribute("src","../../../images/seat_red_right.png");
	        }
	        else if(ss.endsWith("left.png"))
	        {
	            s1.setAttribute("src","../../../images/seat_red_left.png");
	        }
	        else if(ss.endsWith("up.png"))
	        {
	            s1.setAttribute("src","../../../images/seat_red_up.png");
	        }
	        else if(ss.endsWith("down.png"))
	        {
	            s1.setAttribute("src","../../../images/seat_red_down.png");
	        }
	        
	        
	    }
	}
	
	function click_seats()
	{
	    
	    if(s==0 || s==1){
		    var att=this.getAttribute("src");
		    if(att!="../../../images/seat_red_down.png" && att!="../../../images/seat_red_up.png" && 
		    att!="../../../images/seat_red_left.png" && att!="../../../images/seat_red_right.png")
		    {
		        // 1
			    if(att=="../../../images/seat_grey_right.png" && s==0)
	    		{
		            this.setAttribute("src","../../../images/seat_green_right.png");
		            s++;
    	    	    total_seats_b++;
    	    	    s_id=this.getAttribute("id");
    	        }
        		else if(att=="../../../images/seat_green_right.png" && s==1)
	        	{
			        this.setAttribute("src","../../../images/seat_grey_right.png");
	        		s--;
			        total_seats_b--;
    		    }
    		    // 2
    		    else if(att=="../../../images/seat_grey_left.png" && s==0)
	    		{
		            this.setAttribute("src","../../../images/seat_green_left.png");
		            s++;
    	    	    total_seats_b++;
    	    	    s_id=this.getAttribute("id");
    	        }
        		else if(att=="../../../images/seat_green_left.png" && s==1)
	        	{
			        this.setAttribute("src","../../../images/seat_grey_left.png");
	        		s--;
			        total_seats_b--;
    		    }
    		    // 3
    		    else if(att=="../../../images/seat_grey_up.png" && s==0)
	    		{
		            this.setAttribute("src","../../../images/seat_green_up.png");
		            s++;
    	    	    total_seats_b++;
    	    	    s_id=this.getAttribute("id");
    	        }
        		else if(att=="../../../images/seat_green_up.png" && s==1)
	        	{
			        this.setAttribute("src","../../../images/seat_grey_up.png");
	        		s--;
			        total_seats_b--;
    		    } // 4
    		    else if(att=="../../../images/seat_grey_down.png" && s==0)
	    		{
		            this.setAttribute("src","../../../images/seat_green_down.png");
		            s++;
    	    	    total_seats_b++;
    	    	    s_id=this.getAttribute("id");
    	        }
        		else if(att=="../../../images/seat_green_down.png" && s==1)
	        	{
			        this.setAttribute("src","../../../images/seat_grey_down.png");
	        		s--;
			        total_seats_b--;
    		    }
	        }
	    }
    }
    
    
    function store()
    {
         p_name=document.getElementById('p_name').value;
        p_age=document.getElementById('p_age').value;
        if(p_name=="")
        {
            alert("Please, enter name!!!");
            return;
        }else
        if(p_age=="")
        {
            alert("Please, enter age!!!");
            return;
        }else if(isNaN(p_age) || p_age>100 || p_age<=0)
        {
            alert("Please, enter a valid age!!!");
            return;
        }
        
        else if(s_id=="")
        {
            alert("Please, select seat!!!");
            return;
        }else{
            
           
        if (document.getElementById('p_g_m').checked) {
          gen = document.getElementById('p_g_m').value;
        }
        else 
        if (document.getElementById('p_g_f').checked) {
          gen = document.getElementById('p_g_f').value;
        }
        else 
        if (document.getElementById('p_g_o').checked) {
          gen = document.getElementById('p_g_o').value;
        }else 
        {
            alert("Please, select gender!!!");
            return;
        }
            
        
        t1=document.getElementById("table1");
        str1=t1.innerHTML;
        str1+="<tr class='tr1'><td class='pers_name'>"+p_name+"</td><td class='pers_age'>"+p_age+"</td><td class='pers_gen'>"+gen+"</td><td><u class='pers_seat'>"+s_id+"</u></td></tr>";
        t1.innerHTML=str1;
        
        t=document.getElementById('seat_type').value;
        if(t==="sleeper")
        {
            disp_cost=total_seats_b*50;
        }
        else
        {
            disp_cost=total_seats_b*100;
        }
        document.getElementById('cost').innerHTML=disp_cost;
        if(s===1)
	    {
	        seats.push(s_id);
	    }
	    s=0;
        
        var modal = document.getElementById("myModal");
        modal.style.display = "none";
        }
        
    }