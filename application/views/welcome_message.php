<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Company details</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
   body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #f4511e;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #f4511e;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #f4511e;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
 
  .login-container{
    margin-top: 5%;
    margin-bottom: 5%;
}
.login-form-1{
    padding: 5%;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-1 h3{
    text-align: center;
    color: #333;
}
.login-form-2{
    padding: 5%;
    background: #0062cc;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-2 h3{
    text-align: center;
    color: #fff;
}
.login-container form{
    padding: 10%;
}
.btnSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    border: none;
    cursor: pointer;
}
.login-form-1 .btnSubmit{
    font-weight: 600;
    color: #fff;
    background-color: #0062cc;
}
.login-form-2 .btnSubmit{
    font-weight: 600;
    color: #0062cc;
    background-color: #fff;
}
.login-form-2 .ForgetPwd{
    color: #fff;
    font-weight: 600;
    text-decoration: none;
}
.login-form-1 .ForgetPwd{
    color: #0062cc;
    font-weight: 600;
    text-decoration: none;
}

  </style>
    </head>
    
    <body>
<input type="hidden" id="base_url" name="base_url" value="<?php echo base_url();?>"/>

<div class="container">
  <h2>Logo</h2>
  <p>Keep Supporting Us.</p>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1" onclick="showdata()">Add Company/View/Edit/Delete</a></li>
    <li><a data-toggle="tab" href="#menu2" onclick="showdata1()">Add Employee/View/Edit/Delete</a></li>
    <li><a data-toggle="tab" href="#menu3">Extra Activity</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>WEL COME</h3>
      <p>Pleasure To Meet You</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3></h3>
      <p>
		<div class="row well">
    <div class="col-sm-6 col-xs-12 col-lg-4 col-md-6">
              <div class="row">
                <div class="col-md-10 col-sm-10 col-xs-12 col-lg-10  login-form-1">
                    <h3>Add Company</h3>
                    <form enctype="multipart/form-data" id="fupForm" >
					
					
					 <input type="hidden" class="form-control" placeholder="Your Company Name *" id="updateid" name="updateid" value="0" />
					  <input type="hidden" class="form-control" placeholder="Your Company Name *" id="logos" name="logos" value="" />
					 <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Company Name *" id="cmpnyname" name="cmpnyname" value="" />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your Email *" id="email" name="email" value="" />
                        </div>
						<div class="form-group">
						
                            <input type="file" class="form-control"  id="file" name="file" value="" />
                        </div>
						
						<div class="form-group">
                                                       <input type="text" class="form-control" placeholder="Your Comapny Website *"  id="website" name="website" value="" />
                        </div>
                       
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Register" id="add">
						</div>
                        
                    </form>
                </div>
    </div>
   
  </div>
  
  <div class="col-sm-6 col-xs-12 col-lg-6 col-md-6">
  <input type="hidden" id="flag" name="flag" value="1"/>
	<div id="showcompany" style="width:"></div>
  </div>
  
  
  </div>
	  
	  
	  </p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3></h3>
      <p>
		<div class="row">
  <div class="col-sm-6 col-xs-12 col-lg-6 col-md-6">
              <div class="row">
                <div class="col-md-10 col-sm-10 col-xs-12 col-lg-10 login-form-1">
                    <h3>Add Employee</h3>
                    <form>
					<input type="hidden" id="updateid1" name="updateid1" />
					<div class="form-group">
                            <input type="text" class="form-control" placeholder="Your First Name *" id="fname" name="fname" value="" />
                        </div>
						
					<div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Last Name *" id="lname" name="lname" value="" />
                        </div>
					
					
					 <div class="form-group">
                         <?php
						 $row=$this->db->query("select cmpny_name from cmpny_dtls");
						 $row1=$row->result();
						 if(!empty($row1))
						 {
							 ?>
							 Select Company:<select class="form-control" id="cname" name="cname">
							 <option value="Select" >Select</option>
							 <?php
							 foreach($row1 as $row2)
							 {
								 
								 ?>
								 
									<option value="<?php echo $row2->cmpny_name?>"><?php echo $row2->cmpny_name?></option>
								 
								 
								 
								 
								 <?php
								 
							 }
							 ?>
							 
							 </select>
							 <?php
							 
						 }
						 else
						 {
							 echo "Add Company";
						 }
						 
						 ?>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your Email *" value="" id="eemail" name="eemail" />
                        </div>
						
						<div class="form-group">
                            <input type="number" class="form-control" placeholder="Your Mobile Name *" value="" id="mnumber" name="mnumber" />
                        </div>
					
                       
                        <div class="form-group">
                            <button class="btn btn-success" onclick="addemp()" id="addemp">Register</button>
							 <button class="btn btn-success" onclick="updateemp()" id="addemp1" style="display:none" >Update</button>
                        </div>
                        
                    </form>
                </div>
    </div>
   
  </div>
	 
<div class="col-sm-6 col-xs-12 col-lg-6 col-md-6">
 <div id="showcompany1"></div>
  </div>	 
	 </div> 
	  
	  </p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Extra Activity</h3>
      <p>For Office Use</p>
    </div>
  </div>
</div>
</body>
</html>
<script>
   baseUrl=document.getElementById('base_url').value;
  
 
/*function update()
{
	var itname=$("#itname1").val();
	var qty=$("#qty1").val();
	var status=$("#status1").val();
	var dates=$("#dates1").val();
	var id=$("#id").val();
	
$.ajax({
							url: baseUrl + "index.php/Welcome/update",
							async: true,
							type: "POST",
							data: "itname="+itname+"&qty="+qty+"&status="+status+"&dates="+dates+"&id="+id,
							dataType: "text",
							success: function(result) {
								alert(result);
								location.reload();
							}
});
}
*/


$("#fupForm").on('submit', function(e){
	
        e.preventDefault();
        $.ajax({
            type: 'POST',
           url: baseUrl + "index.php/Welcome/add_items",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
               
                $('#fupForm').css("opacity",".5");
            },
            success: function(msg){
				
                if(msg == 'ok'){
					alert('company add successfully');
                    $('#fupForm')[0].reset();
					readdata();
			   }
			   else if(msg == 'yes')
			   {
				   
				   alert('company Update successfully');
                    $('#fupForm')[0].reset();
						$("#add").prop('value', 'Register');
					readdata();
			   }else{
                   alert("Error in save");
                }
                $('#fupForm').css("opacity","");
               
            }
        });
    });
function readdata()
{
	var id='1';
	 $.ajax({
						url: baseUrl + "index.php/Welcome/viewdata",
							async: true,
							type: "POST",
							data: "id="+id,
							dataType: "text",
							success: function(result) {
								$("#showcompany").html(result);
							}
							
	
	 });
	
}
function showdata()
{
	
	readdata();
	
}
function showdata1()
{
	
	readdata1();
	
}


function deletecompany(id)
{
	
	
	var result = confirm("Want To Delete-Company?");
				if (result) {
$.ajax({
							url: baseUrl + "index.php/Welcome/deleteitem",
							async: true,
							type: "POST",
							data: "id="+id,
							dataType: "text",
							success: function(result) {
								alert(result);
								readdata();
								//location.reload();
							}
							
});
}
}

function edit(id)
{
	
	
	var result = confirm("Want To Edit-Company?");
				if (result) {
					//$("#add").html("Update");
					$("#add").prop('value', 'Update');
					
$.ajax({
							url: baseUrl + "index.php/Welcome/editcompany",
							async: true,
							type: "POST",
							data: "id="+id,
							dataType: "text",
							success: function(result) {
								var str=result;
							var str1=str.split("|");
								$("#updateid").val(str1[0]);
								$("#cmpnyname").val(str1[1]);
								$("#email").val(str1[2]);
								$("#website").val(str1[3]);
								$("#logos").val(str1[4]);
								//location.reload();
							}
							
});
}
}
 function addemp()
{
	
	var fname=$("#fname").val();
	var lname=$("#lname").val();
	var cname=$("#cname").val();
	var eemail=$("#eemail").val();
	var mnumber=$("#mnumber").val();
	
$.ajax({
							url: baseUrl + "index.php/Welcome/addemp",
							async: true,
							type: "POST",
							data: "fname="+fname+"&lname="+lname+"&cname="+cname+"&eemail="+eemail+"&mnumber="+mnumber,
							dataType: "text",
							success: function(result) {
								alert(result);
								
							}
});
}


function readdata1()
{
	var id='2';
	 $.ajax({
						url: baseUrl + "index.php/Welcome/viewdataemp",
							async: true,
							type: "POST",
							data: "id="+id,
							dataType: "text",
							success: function(result) {
								$("#showcompany1").html(result);
							}
							
	
	 });
	
}
function deleteemp(id)
{
	
	
	var result = confirm("Want To Delete-Employee?");
				if (result) {
$.ajax({
							url: baseUrl + "index.php/Welcome/deleteemp",
							async: true,
							type: "POST",
							data: "id="+id,
							dataType: "text",
							success: function(result) {
								alert(result);
								readdata1();
								//location.reload();
							}
							
});
}
}

function edit1(id)
{
	
	
	var result = confirm("Want To Edit-Employee?");
				if (result) {
					//$("#add").html("Update");
					$("#addemp").hide();
					$("#addemp1").show();
					
$.ajax({
							url: baseUrl + "index.php/Welcome/editcompany1",
							async: true,
							type: "POST",
							data: "id="+id,
							dataType: "text",
							success: function(result) {
								var str=result;
							var str1=str.split("|");
								$("#updateid1").val(str1[0]);
								$("#fname").val(str1[1]);
								$("#lname").val(str1[2]);
								$("#cname").val(str1[3]);
								$("#eemail").val(str1[4]);
								$("#mnumber").val(str1[5]);
								
								//location.reload();
							}
							
});
}
}

 function updateemp()
{
	
	var fname=$("#fname").val();
	var lname=$("#lname").val();
	var cname=$("#cname").val();
	var eemail=$("#eemail").val();
	var mnumber=$("#mnumber").val();
	var updateid1=$("#updateid1").val();
	
$.ajax({
							url: baseUrl + "index.php/Welcome/updateemp",
							async: true,
							type: "POST",
							data: "fname="+fname+"&lname="+lname+"&cname="+cname+"&eemail="+eemail+"&mnumber="+mnumber+"&updateid1="+updateid1,
							dataType: "text",
							success: function(result) {
								alert(result);
								$("#addemp").show();
								$("#addemp1").hide();
								location.reload();
								
							}
});
}

</script>
