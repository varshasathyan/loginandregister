
<script> 
function Empty()                                    
{ 
var fname = document.forms["f"]["firstname"]; 
var lname = document.forms["f"]["lastname"]; 
var sex = document.forms["f"]["gender"]; 
var datofbir = document.forms["f"]["dob"]; 	
var email = document.forms["f"]["mailid"];    
var deg = document.forms["f"]["degree"];  
var phone =  document.forms["f"]["contact"];  
var place = document.forms["f"]["city"]; 
var pass = document.forms["f"]["password"];  
var conpass = document.forms["f"]["confirmpassword"];  
   
    if (fname.value == "" || lname.value == "" )                                  
    { 
        window.alert("Please enter your name."); 
        name.focus(); 
        return false; 
    } 
     
    return true; 
}</script> 