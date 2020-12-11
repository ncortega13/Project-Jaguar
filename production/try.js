 function changetextbox() {  
if (document.getElementById("civilstat").value === "Married")  
  
{      
    document.getElementById("spousename").disabled = 'true';  
  
 } else {  
  
       document.getElementById("spousename").disabled = ''; }  
  
 }