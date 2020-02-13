window.onload=function(){
document.getElementById("form1").addEventListener("submit", function(e){
  
// var f1=document.getElementById("form1");
// f1.onsubmit=function(e) {
    
    chkbox=document.getElementById("agree");
    
    
    
    if(chkbox.checked === true){
        
        
try{
    var u_name=document.getElementById("uname").value;
    var pass=document.getElementById("password").value;
    var cpass=document.getElementById("cpassword").value;
    var lang=document.getElementById("lang").value;
    
    
    
    var e1=document.getElementById("sec_ques");
    var sec_ques=e1.options[e1.selectedIndex].value;
    

    var sec_ans=document.getElementById("sec_ans").value;
    var fname=document.getElementById("f_name").value;
    var midname=document.getElementById("m_name").value;
    var lname=document.getElementById("l_name").value;
    var dob=document.getElementById("dob").value;
    var d=dob.split("-");
    dob=d.join("-");
    
    e1=document.getElementById("gender");
    var gender=e1.options[e1.selectedIndex].value;
    
    e1=document.getElementById("nation");
    var nationality=e1.options[e1.selectedIndex].value;
    

    if(cpass=== pass){
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            
            
            document.getElementById("uname").value="";
            document.getElementById("password").value="";
            document.getElementById("cpassword").value="";
            // document.getElementById("lang").value="";

            document.getElementById("sec_ans").value="";
            document.getElementById("f_name").value="";
            document.getElementById("m_name").value="";
            document.getElementById("l_name").value="";
            document.getElementById("dob").value="dd-mm-yyyy";
            chkbox.checked=false;

            alert("Successful registraion");
            location.href='../index.php';
        }
        else
        {
            // alert("Something went wrong :- readyState:"+this.readyState+" -- status: "+this.status)
            e.preventDefault();
        }
    };
    

    xmlhttp.open("POST", "../PHP/register_user.php", true);
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlhttp.send("u_name="+u_name+"&pass="+pass+"&lang="+lang+"&sec_ques="+sec_ques+"&sec_ans="+sec_ans+"&fname="+fname+"&midname="+midname+"&lname="+lname+"&dob="+dob+"&gender="+gender+"&nationality="+nationality);
    
    }else
    {
        alert("Passwords do not match")
        e.preventDefault();
    }
    
}
    catch(err)
    {
        alert(err)
    }
    
    
    }else
    {
        alert("u need to agree to terms and conditions");
        e.preventDefault();
    }
})
}

function goback()
{
    location.href='../index.php'
}