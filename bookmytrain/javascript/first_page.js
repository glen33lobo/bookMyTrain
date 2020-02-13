
function open_searchbar()
{
    var bg=document.getElementById("bg-container");
    var topsearch=document.getElementById("top-search");
    var s_bar=document.getElementById("searchbar");
    s_bar.style.display="block";
    topsearch.style.display="none";
    bg.style.display="none";
}

    function checktrains(){
    
    document.getElementById("loading").style.display="block";
    var fplac=document.getElementById("from_plac").value;
    var tplac=document.getElementById("to_plac").value;
    var d=document.getElementById("dat").value;
    
    
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            r=this.responseText.split("<<<");
            if(d<r[0])
            {
                alert('invalid date');
                document.getElementById("loading").style.display="none";
                return;
            }
            else{
        var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if(this.responseText!=""){
                var tlist=document.getElementById("train_list1");
                tlist.style.display="block";
                $('#train_list1').html(this.responseText);
                alert("Trains Available");
                // e.preventDefault();
                document.getElementById("loading").style.display="none";
               
            }
             else
            {
                alert("No trains available"+this.responseText);
                document.getElementById("loading").style.display="none";
            }
            
        }
        else
        {
            if (this.readyState == 4){
             alert("Connection TimedOut");
             document.getElementById("loading").style.display="none";
            }
        }
    };
    

    xmlhttp.open("POST", "../display_trains.php", true);
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlhttp.send("page=1&from_plac="+fplac+"&to_plac="+tplac+"&dat="+d);
                
                
                
                
            }
            
        }
    };
    xhttp.open("GET", "../get_today_date.php", true);
    xhttp.send();
    
    
    
    
    
    
    
    
}


function booknow(tmid)
{
    d1=document.getElementById('dat').value;
    alert(tmid+","+d1);
    var p=document.getElementById('empty_p');
    p.innerHTML='<form id="emptyform1" style="display: hidden" action="second_page.php" method="POST" id="form"> <input type="hidden" id="var1" name="date1" value="'+d1+'"/><input type="hidden" id="var2" name="timeid" value="'+tmid+'"/></form>';
    var f=document.getElementById('emptyform1');
    f.submit();
    
    
}



function logout_fxn(){
    alert("working");
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            location.href="../../index.php";
        }
    };
    

    xhttp.open("GET", "../logout_user.php", true);
    xhttp.send();
    
}



function goto(x)
{
    if(x=="true")
    {
        location.href="first_page.php";
    }
    else
    {
        location.href="../../../index.php";
    }
}












function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = ["mangalore","mysore","bangalore","shivamogga"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("from_plac"), countries);

autocomplete(document.getElementById("to_plac"), countries);
