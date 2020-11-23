function validateAll(){

   if (myFunction) {
        document.form.submit();
    }
}
function myFunction()
 {

  	var lnameValue = document.getElementById("lname").value;
	var fnameValue = document.getElementById("fname").value;
	var mnameValue = document.getElementById("mname").value;
  	var positionValue = document.getElementById("position").value;
	var userValue = document.getElementById("user").value;
	var passValue = document.getElementById("pass").value;
	var cbValue = document.getElementById("cb").value;

	var letters = /^[A-Za-z ]+$/;
	var uname = /^([a-zA-Z-_]+)$/;
	var pass1 = /^([a-zA-Z0-9]+)$/;
	
    if (lnameValue != "")
	  {
			if (lname.value.match(letters)){
			setSuccessFor(lname);
		}
			else{
			setErrorFor(lname, 'Alphabet Characters only');
			 return false;
	  }
	  }
	else {
			setErrorFor(lname, 'Last Name cannot be blank');
			 return false;
		}

    if (fnameValue != "")
	  {
			if (fname.value.match(letters)){
			setSuccessFor(lname);
		}
			else{
			setErrorFor(fname, 'Alphabet Characters only');
			 return false;
	  }
	  }
	else {
			setErrorFor(fname, 'First Name cannot be blank');
			 return false;
		}

	if (mnameValue != "") 
	  {
			if (mname.value.match(letters)){
			setSuccessFor(mname);			
		}
			else{
			setErrorFor(mname, 'Alphabet Characters only');
			return false;			
	  }
	  }
	else {
			setSuccessFor(mname);
		}

    if (positionValue != "")
	  {
			if (position.value.match(letters)){
			setSuccessFor(position);
		}
			else{
			setErrorFor(position, 'Alphabet Characters only');
			 return false;
	  }
	  }
	else {
			setErrorFor(position, 'Position cannot be blank');
			 return false;
		}
		
    if (userValue != "")
	  {
	  if(user.value.match(uname)){
		  if(user.value.length >=8 && user.value.length <=15){
			setSuccessFor(user);
		}
			else{
			setErrorFor(user, 'Incorrect Username');
 			return false;
	  }
	  }
	  else{
	  setErrorFor(user, 'Incorrect Format');
	   return false;
	  }

	  }
	else {
			setErrorFor(user, 'Username cannot be blank');
			 return false;
		}

    if (passValue != "")
	  {
	  if(pass.value.match(pass1))
			{
		  if(pass.value.length >=8 && pass.value.length <=20){
			setSuccessFor(pass);
		}
			else{
			setErrorFor(pass, 'Incorrect Password');
			 return false;
	  }
		}
			else{
			setErrorFor(pass, 'Incorrect Format');
			 return false;
	  }
	  }
	else {
			setErrorFor(pass, 'Password cannot be blank');
			 return false;
		}

	if (document.getElementById('cb').checked == true){
		setSuccessFor(cb);
	}
	else{
		setErrorFor(cb, 'Accept the Terms & Condition');
			 return false;
	}
     }


function setErrorFor(input, message) {
	var formControl = input.parentElement;
	var small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	var formControl = input.parentElement;
	formControl.className = 'form-control success';
}
