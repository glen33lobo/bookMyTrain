$(document).ready(function(){ 
var dateToday = new Date();
var $j = jQuery.noConflict();
$j( function() {
var dates =$j("#date1").datepicker({
    defaultDate: "+1w",
    changeMonth: true,
    dateFormat: 'dd/mm/yy',
    numberOfMonths: 1,
    minDate: dateToday,
    maxDate:"+1w",
    onSelect: function(selectedDate) {
        var d=document.getElementById("date1").value;
        
    //     var option = this.id == "date1" ? "minDate" : "maxDate",
    //         instance = $(this).data("datepicker"),
    //         date = $.datepicker.parseDate(/*instance.settings.dateFormat*/ 'dd/mm/yyyy'/*|| $.datepicker._defaults.dateFormat*/,$("#date1").val()) //selectedDate, instance.settings);
    //     dates.not(this).datepicker("option", option, date);
    }
});
});
});




    var f1=document.getElementById("loginform1");
    
    f1.onsubmit=function(e){
    
    var username=document.getElementById("uname").value;
     var password=document.getElementById("psw").value;
     
         var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if(this.responseText=='"success"'){
            
            alert("Successful login this.responseText"+this.responseText);
            location.href='../PHP/webpages/first_page.php';
            }
            else{
                alert("Invalid login ");
                e.preventDefault();
            }
        }
        else
        {
            // alert("Something went wrong :- readyState:"+this.readyState+" -- status: "+this.status+"     "+this.responseText)
            e.preventDefault();
        }
    };
    

    xmlhttp.open("POST", "../PHP/login_user.php", true);
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlhttp.send("u_name="+username+"&pass="+password);
         
     }
     
     
     
     
     
     
     var form1=document.getElementById("check_form_1");
     
     form1.onsubmit=function(e){
    
    // document.getElementById("loading").style.display="block";
    var fplac=document.getElementById("from_plac").value;
    var tplac=document.getElementById("to_plac").value;
    var d=document.getElementById("date1").value;
    
    
        var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if(this.responseText!=""){
                
                alert(this.responseText);
                
                $('#sugg_sect').html(this.responseText);
                
                e.preventDefault();

            }
             else
            {
                alert("No trains available"+this.responseText);
                e.preventDefault();
                
            }
            
        }
        else
        {
            if (this.readyState == 4)
             alert("Connection TimedOut");
             e.preventDefault();
        }
    };
    

    xmlhttp.open("POST", "PHP/display_trains.php", true);
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlhttp.send("page=0&from_plac="+fplac+"&to_plac="+tplac+"&dat="+d);
           
   
    
}