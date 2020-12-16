
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
	var birthdayValue = document.getElementById("birthday").value;
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
	var activeinactiveValue = document.getElementById("activeinactive").value;
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
	var address = /^[0-9A-Za-z .,]+$/;
    var alphanum = /^([a-zA-Z@._0-9]+)$/; 	
	
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
			setErrorFor(alias, 'Alias cannot be blank');
			 return false;
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
			setErrorFor(facemarks, 'Facemarks cannot be blank');
			 return false;
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
			if (birthplace.value.match(address)){
			setSuccessFor(birthplace);			
		}
			else{
			setErrorFor(birthplace, 'Alphabet Characters only');	
			 return false;
	  }
	  }
	else {
			setErrorFor(birthplace, 'Birth Place cannot be blank');
			 return false;
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
			setErrorFor(nationality, 'Alphabet Characters only');	
			 return false;
	  }
	  }
	else {
			setErrorFor(nationality, 'Nationality cannot be blank');
			 return false;
		}	

    if (religionValue != "") 
	  {
			if (religion.value.match(letters)){
			setSuccessFor(religion);			
		}
			else{
			setErrorFor(religion, 'Alphabet Characters only');	
			 return false;
	  }
	  }
	else {
			setErrorFor(religion, 'Religion cannot be blank');
			 return false;
		}

    if (occupationValue != "") 
	  {
			if (occupation.value.match(letters)){
			setSuccessFor(occupation);			
		}
			else{
			setErrorFor(occupation, 'Alphabet Characters only');	
			 return false;
	  }
	  }
	else {
			setErrorFor(occupation, 'Occupation cannot be blank');
			 return false;
		}

	if (sectorValue == "0") 
	  {
			setErrorFor(sector, 'Sector cannot be blank');	
			return false;			
		}
	else{
			setSuccessFor(sector);	
	  }
	  
	if (spousenameValue != "") 
	  {
			if (spousename.value.match(letters)){
			setSuccessFor(spousename);			
		}
			else{
			setErrorFor(spousename, 'Alphabet Characters only');
			return false;			
	  }
	  }
	else {
			setSuccessFor(spousename);
		}
		
	if (spouseoccupationValue != "") 
	  {
			if (spouseoccupation.value.match(letters)){
			setSuccessFor(spouseoccupation);			
		}
			else{
			setErrorFor(spouseoccupation, 'Alphabet Characters only');
			return false;			
	  }
	  }
	else {
			setSuccessFor(spouseoccupation);
		}
		
	if (voterstat.disabled == false) 
	  {
		  if (voterstatValue == "0"){
			setErrorFor(voterstat, 'Voter Status cannot be blank');	
			return false;			
		}
	else{
			setSuccessFor(voterstat);	
	  }
	  }
	 else
	 {
		setSuccessFor(voterstat);	
	 }
	 
	if (activeinactive.style.display == 'block') 
	  {
		  if (activeinactiveValue == "0"){
			setErrorFor(activeinactive, 'Voter Status cannot be blank');	
			return false;			
		}
	else{
			setSuccessFor(activeinactive);	
	  }
	  }
	 else
	 {
		setSuccessFor(activeinactive);	
	 }
	 
    if (cityaddValue != "") 
	  {
			if (cityadd.value.match(address)){
			setSuccessFor(cityadd);			
		}
			else{
			setErrorFor(cityadd, 'Alphabet Characters only');	
			 return false;
	  }
	  }
	else {
			setErrorFor(cityadd, 'City Address cannot be blank');
			 return false;
		}
		
    if (provaddValue != "") 
	  {
			if (provadd.value.match(address)){
			setSuccessFor(provadd);			
		}
			else{
			setErrorFor(provadd, 'Alphabet Characters only');	
			 return false;
	  }
	  }
	else {
			setErrorFor(provadd, 'Provincial Address cannot be blank');
			 return false;
		}
		
	if (purokValue == "0") 
	  {
			setErrorFor(purok, 'Purok cannot be blank');	
			return false;			
		}
	else{
			setSuccessFor(purok);	
	  }

		
	if (homenum1Value != "") 
	{
		if(homenum1.value.length == 8){
			setSuccessFor(homenum1);		
		  }
		else{
			  setErrorFor(homenum1, 'Incorrect Home Number');
			   return false;
		}
	  }
	 else{
			setSuccessFor(homenum1);
	  }
	  
	if (homenum2Value != "") 
	{
		if(homenum2.value.length == 8){
			setSuccessFor(homenum2);		
		  }
		else{
			  setErrorFor(homenum2, 'Incorrect Home Number');
			   return false;
		}
	  }
	 else{
			setSuccessFor(homenum2);
	  }

	if (mobnum1Value != "") 
	{
		if(mobnum1.value.length == 11){
			setSuccessFor(mobnum1);		
		  }
		else{
			  setErrorFor(mobnum1, 'Incorrect Home Number');
			   return false;
		}
	  }
	 else{
			setSuccessFor(mobnum1);	
	  }
	  
	if (mobnum2Value != "") 
	{
		if(mobnum2.value.length == 11){
			setSuccessFor(mobnum2);		
		  }
		else{
			  setErrorFor(mobnum2, 'Incorrect Home Number');
			   return false;
		}
	  }
	 else{
			setSuccessFor(mobnum2);
	  }
	  
		
	if (emailValue != "") 
	  {
			if (email.value.match(alphanum)){
			setSuccessFor(email);			
		}
			else{
			setErrorFor(email, 'Incorrect Format');
			return false;			
	  }
	  }
	else {
			setSuccessFor(email);
		}

 	if (restypeValue == "0") 
	  {
			setErrorFor(restype, 'Resident Type cannot be blank');	
			return false;			
		}
	else{
			setSuccessFor(restype);	
	  }

	if (resstatValue == "0") 
	  {
			setErrorFor(resstat, 'Resident Status cannot be blank');	
			return false;			
		}
	else{
			setSuccessFor(resstat);	
	  }

     }
	  
function setErrorFor(input, message) {
	var formControl = input.parentElement;
	var small = formControl.querySelector('small');
	formControl.className = 'form-group error';
	small.innerText = message;
}

function setSuccessFor(input) {
	var formControl = input.parentElement;
	formControl.className = 'form-group success';
}
