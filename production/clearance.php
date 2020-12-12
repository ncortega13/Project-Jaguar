<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    h4{
      margin-top: -1px;
      margin-bottom: -1px;
      }
    h3{
        margin-top: -1px;
        margin-bottom: -1px;
      }
    h5{
      margin-top: -1px;
      margin-bottom: -1px;
    }
    p{
      margin-top: -1px;
      margin-bottom: -1px;
      }
      .main{
        float:right;
        width:60%;
        height: 100%;
      }
    .text{
      float: left;
      text-align: left;
      font-size: 14px;
    }
    .lcont{
      float:left;
      width:20%;
      height:100%;
    }
    .rcont{
      float:right;
      width:80%;
    }
    .container{
      width:100%;
    }
    .tright{
      margin-top: 100px;
      text-align: right;
    }
    .sig{
      font-weight: 400;
      margin-right: 50px;
    }
    .indent{
      text-indent: 50px;
      font-size: 14px;
    }
    .sigcont{
      font-weight: 400;
    }
    .sig2{
      font-weight: 400;
    }
    .sig3{
      font-weight: 400;
      text-indent: 100;
    }
    .right{
      text-align: right;
    }
    .left{
      text-align: left;
    }
    .button{
      padding: 9px 24px;
      font-size: 16px;
      width: 100px;
      align-self: center;
    }
    .topnav{
      display: flex;
      flex-direction: column;
      width: 100%;
      height: 60px;
      background-color: #2A3F54;
      justify-content: center;
      position:fixed;
      top: 0;
      left: 0;
    }
    .top{
      padding-top: 20px;
    }
    .paper{
      height: 842px;
      width: 595px;
      margin-left: auto;
      margin-right: auto;
      background-color: white;
      padding-left: 10px;
      padding-right: 10px;
      padding-bottom: 70px;
    }
    .background{
      top: 60px;
      left: 0;
      position: fixed;
      background-color:#73879C;
      height: 100%;
      width: 100%;
      overflow: auto;
    }
    @page {margin:0 -1cm}
    html {margin:0 1cm}
    </style>
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<script>
function printDiv() {
   var printContents = document.getElementById("printthis").innerHTML;
   var originalContents = document.body.innerHTML;

   document.body.innerHTML = printContents;
   window.print();
   document.body.innerHTML = originalContents;
}
</script>
  </head>
  </head>
  <body>
    <?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mname = $_POST['mname'];
    $address = $_POST['address'];
    $date = $_POST['date'];
    $purpose = $_POST['purpose'];

     ?>
     <div class=topnav>
         <button  onclick="printDiv()" class="button"><i class="fa fa-print"></i>Print</button>
     </div>
     <div class=background>
     <div class=paper id=printthis>
     <div class=top>
       <center>
         <h4>Republic of the Philippines</h4>
         <h4>Barangay XYZ</h4>
         <h4>Address</h4>
         <h4>Phone Number</h4>
         <hr>
       </center>
     </div>
     <div class=lcont>
       <div>
     <h4>Name</h4>
     <p>Barangay Chairman</p>
     <br>
     <h4>KAGAWAD:</h4>
     <br>
     <h4>Name</h4>
     <p>Chairman:</p>
     <p>Comittee</p>
     <br>
     <h4>Name</h4>
     <p>Chairman:</p>
     <p>Comittee</p>
     <br>
     <h4>Name</h4>
     <p>Chairman:</p>
     <p>Comittee</p>
     <br>
     <h4>Name</h4>
     <p>Chairman:</p>
     <p>Comittee</p>
     <br>
     <h4>Name</h4>
     <p>Chairman:</p>
     <p>Comittee</p>
     <br>
     <h4>Name</h4>
     <p>Chairman:</p>
     <p>Comittee</p>
     <br>
     <h4>Name</h4>
     <p>Chairman:</p>
     <p>Comittee</p>
     <br>
     <h4>Name</h4>
     <p>Barangay Treasurer</p>
     <br>
     <h4>Name</h4>
     <p>Barangay Secretary</p>
   </div>
   </div>
   <div class=rcont>
     <center>
       <br><br><br>
       <h2>BARANGAY CLEARANCE</h2>
     </center>
    <div class=container>
     <h4>To Whom It May Concern:</h4><br>
     <p class=indent>This is to certify that Ms./Mr./Mrs.<u><?php echo $fname; echo " "; echo $mname; echo " "; echo $lname; ?></u> is of legal age, Filipino and a bonafied resident of Barangay XYZ and that has no derogatory records in the Barangay prior to the date of issuance of this certificate.</p>
     <br>
     <p class=indent>This certificate is issued on <?php echo$date?> his/her request for: <?php echo $purpose; echo " ";?>.
    </div>
   <div class=tright>
     <div class=sigcont>
       <h2 class=sig>Name</h2>
       <h3 class=sig2>Barangay Captain</h3>
     </div>
   </div>
   <div>
     <h3 class=sig2>_________________</h3>
     <h3 class=sig2>Recipient's Signature</h3>
   </div>
   <div class=right>
     <h7>Res. Cert. No.</h7>
     <br>
     <h7>Cedula No.:</h7>
   </div>
   <div><br><br><br>
     <center>
       <h2>Not Valid Without BARANGAY SEAL</h2>
       <br><br><br>
     </center>
   </div>
   </div>
 </div>
</div>
  </body>
</html>
