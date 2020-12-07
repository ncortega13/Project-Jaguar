function validateAll(){
    
    if (myFunction1){
        document.form.submit();
    }
}
function myFunction1() 
 { 
    var lastnameValue = document.getElementById("lastname").value;
	var firstnameValue = document.getElementById("firstname").value;
	var middlenameValue = document.getElementById("middlename").value;
	var aliasValue = document.getElementById("alias").value;
	var facemarksValue = document.getElementById("facemarks").value;
	var birthdaydayValue = document.getElementById("birthday").value;
	var birthplaceValue = document.getElementById("birthplace").value;	 
	var sexValue = document.getElementById("sex").value;	 
	var civilstatValue = document.getElementById("civilstat").value;
	var nationalityValue = document.getElementById("nationality").value;
	var religionValue = document.getElementById("religion").value;
	var occupationValue = document.getElementById("occupation").value;
	var sectorValue = document.getElementById("sector").value;
	var spousenameValue = document.getElementById("spousename").value;
	var spouseoccupationValue = document.getElementById("spouseoccupation").value;
	var voterstatValue = document.getElementById("voterstat").value;
	var cityaddValue = document.getElementById("cityadd").value;
	var provaddValue = document.getElementById("provadd").value;
	var purokValue = document.getElementById("purok").value;
	var homenum1Value = document.getElementById("homenum1").value;
	var homenum2Value = document.getElementById("homenum2").value;
	var mobnum1Value = document.getElementById("mobnum1").value;
	var mobnum2Value = document.getElementById("mobnum2").value;
	var emailValue = document.getElementById("email").value;
	var restypeValue = document.getElementById("restype").value;
	var resstatValue = document.getElementById("resstat").value;
	
	var letters = /^[A-Za-z ]+$/;
	var numbers = /^[0-9]+$/;
	var bod = bdayValue.replace(/-/gi,"");
    var alphanum = /^([a-zA-Z@._0-9]+)$/;  
	var uname = /^([a-zA-Z-_]+)$/;
	var pass1 = /^([a-zA-Z0-9]+)$/;	
	
    if (lastnameValue != "") 
	  {
			if (lastname.value.match(letters)){
			setSuccessFor(lastname);			
		}
			else{
			setErrorFor(lastname, 'Alphabet Characters only');	
			 return false;
	  }
	  }
	else {
			setErrorFor(lastname, 'Last Name cannot be blank');
			 return false;
		}
	
    if (firstnameValue != "") 
	  {
			if (firstname.value.match(letters)){
			setSuccessFor(firstname);			
		}
			else{
			setErrorFor(firstname, 'Alphabet Characters only');	
			 return false;
	  }
	  }
	else {
			setErrorFor(firstname, 'First Name cannot be blank');
			 return false;
		}	
		
	if (middlenameValue != "") 
	  {
			if (middlename.value.match(letters)){
			setSuccessFor(middlename);			
		}
			else{
			setErrorFor(middlename, 'Alphabet Characters only');
			return false;			
	  }
	  }
	else {
			setSuccessFor(middlename);
		}
		
	if (aliasValue != "") 
	  {
			if (alias.value.match(letters)){
			setSuccessFor(alias);			
		}
			else{
			setErrorFor(alias, 'Alphabet Characters only');
			return false;			
	  }
	  }
	else {
			setSuccessFor(alias);
		}

	if (facemarksValue != "") 
	  {
			if (facemarks.value.match(letters)){
			setSuccessFor(facemarks);			
		}
			else{
			setErrorFor(facemarks, 'Alphabet Characters only');
			return false;			
	  }
	  }
	else {
			setSuccessFor(facemarks);
		}

	if (birthdayValue != "") 
	  {
		  setSuccessFor(birthday);	
		}
	  
	else {
			setErrorFor(birthday, 'Birthday cannot be blank');
			 return false;
		}
		
	if (birthplaceValue != "") 
	  {
			if (birthplace.value.match(letters)){
			setSuccessFor(birthplace);			
		}
			else{
			setErrorFor(birthplace, 'Alphabet Characters only');
			return false;			
	  }
	  }
	else {
			setSuccessFor(birthplace);
		}
		
	if (sexValue == "0") 
	  {
			setErrorFor(sex, 'Sex cannot be blank');	
			return false;			
		}
	else{
			setSuccessFor(sex);	
	  }

	if (civilstatValue == "0") 
	  {
			setErrorFor(civilstat, 'Civil Status cannot be blank');	
			return false;			
		}
	else{
			setSuccessFor(civilstat);	
	  }
	  
	if (nationalityValue != "") 
	  {
			if (nationality.value.match(letters)){
			setSuccessFor(nationality);			
		}
			else{
			setErrorFor(birthplace, 'Alphabet Characters only');
			return false;			
	  }
	  }
	else {
			setSuccessFor(birthplace);
		}

    if (studnumValue != "") 
	  {
	 if(studnum.value.match(numbers)){
		if(studnum.value.length == 11){
			setSuccessFor(studnum);		
		  }
		else{
			  setErrorFor(studnum, 'Student Number should contain 11 numbers');
			   return false;
		}
	  }
	 else{
		setErrorFor(studnum, 'Numerical Characters only');	
		 return false;
	  }
	  }
	  
	else {
			setErrorFor(studnum, 'Student Number cannot be blank');
			 return false;
		}
	 
		
	if (yearValue == "0") 
	  {
			setErrorFor(year, 'Year Level cannot be blank');	
 return false;			
		}
	else{
			setSuccessFor(year);	
	  }
	  	
	  

		
	if (mobnumValue != "") 
	{
	if(mobnum.value.match(numbers)){
		if(mobnum.value.length == 10){
			setSuccessFor(mobnum);		
		  }
		else{
			  setErrorFor(mobnum, 'Incorrect Mobile Number');
			   return false;
		}
	  }
	 else{
		setErrorFor(mobnum, 'Numerical Characters only');	
		 return false;
	  }
	  }
	  
	else {
			setErrorFor(mobnum, 'Student Number cannot be blank');
			 return false;
		}
		
	if (emailValue != "") 
	  {
	  if(emailValue.match(alphanum)){
		  if (/@ue.edu.ph\s*$/.test(emailValue)){
				setSuccessFor(email);
		}
		else{
			setErrorFor(email, 'Incorrect Email Domain');
			 return false;
		}
	  }
		else{
		setErrorFor(email,'Incorrect Email Format');
		 return false;
			}
		}
	  
	else {
			setErrorFor(email, 'Email cannot be blank');
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

		
	if (conpassValue !=""){
	if (conpass.value.match(pass.value)) 
	  {
			setSuccessFor(conpass);			
		}
	else {
			setErrorFor(conpass, 'Password Mismatch');
			 return false;
		}
	}
	else{
		setErrorFor(conpass,'Confirm Password Cannot be Blank');
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
