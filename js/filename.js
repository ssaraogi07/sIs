function allLetter1()
 {
	var firstname=document.myForm.fname;
	var letters = /^[A-Za-z]+$/;
	if(firstname.value.match(letters))
	{
		return true;
	}
	else
	{
		alert('Firstname must have alphabet characters only');
		firstname.focus();
		return false;
	}
};
function allLetter()
 {
	var lastname=document.myForm.lname;
	var letters = /^[A-Za-z]+$/;
	if(lastname.value.match(letters))
	{
		return true;
	}
	else
	{
		alert('Lastname must have alphabet characters only');
		lastname.focus();
		return false;
	}
};
function validsex()
 {
	var umsex=document.myForm.mgender;
	var ufsex=document.myForm.fgender;
	x=0;

	if(umsex.checked)
	{
	x++;
	} if(ufsex.checked)
	{
	x++;
	}
	if(x==0)
	{
	alert('Select Male/Female');
	umsex.focus();
	return false;
	}
	else
	{

		window.location.reload();
		return true;

	}
};
function branchselect()
{
	var branch1=document.myForm.department;
	if(branch1.value == "Default")
	{
	alert('Select your branch from the list');

	branch1.focus();
	return false;
	}
	else
	{
	return true;
	}
};
function semselect()
{
	var semester=document.myForm.sem;
	if(semester.value == "Default")
	{
	alert('Select your semester from the list');

	semester.focus();
	return false;
	}
	else
	{
	return true;
	}
};
function progselect()
{
	var programme=document.myForm.prog;
	if(programme.value == "Default")
	{
	alert('Select your programme from the list');

	programme.focus();
	return false;
	}
	else
	{
	return true;
	}
};
function regselect()
{
   var r =document.myForm.regn;
   var regn_len=r.value.length;
	  if(regn_len == 0 || regn_len != 8)
	            {
                alert("Registration number must be filled out.");
				r.focus();
                 return false;
				 }
		return true;

};



 function ValidateEmail()
 {
	var email=document.myForm.email;
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(email.value.match(mailformat))
	{
		return true;
	}
	else
	{
		alert("You have entered an invalid email address!");
		email.focus();
		return false;
	}
};
function valmob(mobile)
{

  var phone_len=mobile.value.length;
  if(phone_len == 0 || phone_len < 10)
			{
                alert("Phone number must be filled out.");
				phone.focus();
                return false;
      }
     return true;
};

function generateAge(){
	    var today = new Date();
	   var x=document.forms["myForm"]["dobyear"].value;
	   var y=today.getFullYear()-x;
	   x=document.forms["myForm"]["month"].value;
	  var m=today.getMonth()+1-x;
	x=document.forms["myForm"]["day"].value;
	  var d=today.getDate()-x;


    if (m < 0 || (m === 0 && d<0)) {
        y--;
    }
	if (m<0 ) {
        if(d<0)
		{
		m=11+m;
		}
		else
		m=12+m;
    	}
	if (d<0)
	{
		d = 30+d;
	}

	document.forms["myForm"]["d"].value=d.toString();
	document.forms["myForm"]["m"].value=m.toString();
	document.forms["myForm"]["y"].value=y.toString();


};
function hobbieschk(){
    if (document.getElementById("hb4").checked)
  {
      document.getElementById("others").style.display = 'block';
  } else {
      document.getElementById("others").style.display = 'none';
  }
};
function passwd_validation()
 {
	var passwd=document.myForm.pwd;
	var passwd_len = passwd.value.length;
	if (passwd_len == 0 ||passwd_len >= 10 || passwd_len < 6)
		{
			alert("Password should not be empty / length be between 6 to 10");
			passwd.focus();
			return false;
		}
   return true;
 };
function passwordcheck(){
var a = document.getElementById("pwd");
var b = document.getElementById("pwd1");
if(a.value!=b.value)
alert("password do not match")
};

function validateForm()

{
  if(progselect())
  {
    if(semselect())
    {
      if(branchselect())
      {
        return true;
      }
    }
  }
  var x = document.forms["myForm"]["fname"].value;
			var x = document.forms["myForm"]["lname"].value;
			if (x == null || x == "")
			{
				alert("Name must be filled out");
				return false;
			}
			var x = document.forms["myForm"]["gender"].value;
			if (x == null || x == "")
			{
				alert("Gender must be mentioned");
				return false;
			}
			var x = document.forms["myForm"]["mobile"].value;
			if (x == null || x == "")
			{
				alert("Mobile Number must be mentioned");
				return false;
			}

			var x = document.forms["myForm"]["dob"].value;
			if (x == null || x == "" || x== "Default")
			{
				alert("Date of Birth must be mentioned");
				return false;
			}
			var x = document.forms["myForm"]["prog"].value;
			if (x == null || x == "" || x== "Default")
			{
				alert("Please select your Programme");
				return false;
			}
			var x = document.forms["myForm"]["department"].value;
			if (x == null || x == "" || x== "Default")
			{
				alert("Department must be mentioned");
				return false;
			}
			var x = document.forms["myForm"]["sem"].value;
			if (x == null || x == "" || x== "Default")
			{
				alert("Semester must be mentioned");
				return false;
			}
      var x = document.forms["myForm"]["r_no"].value;
			if (x == null || x == "")
			{
				alert("Registration Number must be mentioned");
				return false;
			}
			var x = document.forms["myForm"]["uid"].value;
			if (x == null || x == "")
			{
				alert("User Id must be mentioned");
				return false;
			}
			var x = document.forms["myForm"]["email"].value;
			if (x == null || x == "")
			{
				alert("Email must be mentioned");
				return false;
			}
			var x = document.forms["myForm"]["pwd"].value;
			if (x == null || x == "")
			{
				alert("Please provide a password");
				return false;
			}
};

function addTextbox(btn)
{
  var element = document.createElement("input");
    element.setAttribute("type", "text");
    element.setAttribute("value", "");
    element.setAttribute("name", "newvalue");
    element.setAttribute("id", "newvalue");
    btn.parentNode.insertBefore(element, btn);
    var ele=document.createElement("input");
    ele.setAttribute("type", "submit");
    ele.setAttribute("value", "Save");
    ele.setAttribute("name", "submit");
    ele.setAttribute("id", "submit");
    btn.parentNode.insertBefore(ele, btn);
    element.onchange= function() {valmob(element);};
    ele.onclick= function() {valmob(element);};
};
function addTextbox1(btn)
{
  var element = document.createElement("input");
    element.setAttribute("type", "text");
    element.setAttribute("value", "");
    element.setAttribute("name", "newvalue");
    element.setAttribute("id", "newvalue");
    btn.parentNode.insertBefore(element, btn);
    var ele=document.createElement("input");
    ele.setAttribute("type", "submit");
    ele.setAttribute("value", "Save");
    ele.setAttribute("name", "submit");
    ele.setAttribute("id", "submit");
    btn.parentNode.insertBefore(ele, btn);

};
