<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Registrasi</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
	/*-----Background-----*/

body{
	 background-image:url(<?php echo URL; ?>assets/assetslogin/primag.jpg);
	 background-repeat:no-repeat;
	 background-size:cover;
	 width:100%;
	 height:100vh;
	 overflow:auto;
	 
}

/*-----for border----*/
.container{
	font-family:Roboto,sans-serif;
	  background-image:url(<?php echo URL; ?>assets/assetslogin/dark-blue-blurred-background_1034-589.jpg) ;
    
     border-style: 1px solid grey;
     margin: 0 auto;
     text-align: center;
     opacity: 0.8;
     margin-top: 67px;
   box-shadow: 2px 5px 5px 0px #eee;
     max-width: 500px;
     padding-top: 10px;
     height: 523px;
     margin-top: 166px;
}
/*--- for label of first and last name---*/
.lastname{
	 margin-left: 1px;
     font-family: sans-serif;
     font-size: 14px;
     color: white;
     margin-top: 10px;
}
.firstname{
	 margin-left: 1px;
     font-family: sans-serif;
     font-size: 14px;
     color: white;
     margin-top: 5px;
}
#lname{
	 margin-top:5px;
}
	  

/*---for heading-----*/
.heading{
	 text-decoration:bold;
	 text-align : center;
	 font-size:30px;
	 color:#F96;
	 padding-top:10px;
}
/*-------for email----------*/
  /*------label----*/
#email{
	  margin-top: 5px;
}
/*-----------for Password--------*/
     /*-------label-----*/
.mail{
	 margin-left: 44px;
     font-family: sans-serif;
     color: white;
     font-size: 14px;
     margin-top: 13px;
}
.pass{
	 color: white;
     margin-top: 9px;
     font-size: 14px;
     font-family: sans-serif;
     margin-left: 6px;
     margin-top: 9px;
}
#password{
 margin-top: 6px;
}
/*------------for phone Number--------*/
      /*----------label--------*/
.pno{
	 font-size: 18px;
     margin-left: -13px;
     margin-top: 10px;
     color: #ff9;
	
}	

/*--------------for Gender---------------*/
     /*--------------label---------*/
.gender {
	 color: white;
     font-family: sans-serif;
     font-size: 14px;
     margin-left: 28px;
     margin-top: 8px;
}

     /*---------- for Input type--------*/
.col-xs-4.male{
	 color: white;
     font-size: 13px;
     margin-top: 9px;
     padding-bottom: 16px;
}
.col-xs-4.female {
     color: white;
     font-size: 13px;
     margin-top: 0px;
     padding-bottom: 26px;
	 padding-right: 0px;
}	
/*------------For submit button---------*/
.sbutton{
	 color: white;
     font-size: 20px;
     border: 1px solid white;
     background-color: #080808;
     width: 32%;
     margin-left: 41%;
     margin-top: 16px;
	 box-shadow: 0px 2px 2px 0px white;
  	   
   }
.btn.btn-warning:hover {
    box-shadow: 2px 1px 2px 3px #99ccff;
	background:#5900a6;
	color:#fff;
	transition: background-color 1.15s ease-in-out,border-color 1.15s ease-in-out,box-shadow 1.15s ease-in-out;
	
}	 
	  
</style>
</head>
<body>
 <div class="container">
 <!---heading---->
     <header class="heading"> Registration-Form</header><hr></hr>
	<!---Form starting----> 
	<form action="<?php echo URL; ?>login/registerToSystem" method="post">
	<div class="row ">
	 <!--- For Name---->
         <div class="col-sm-12">
             <div class="row">
			     <div class="col-xs-4">
          	         <label class="firstname">Username :</label> </div>
		         <div class="col-xs-8">
		             <input type="text" name="username" id="fname" placeholder="Masukkan Username Untuk Login" class="form-control ">
             </div>
		      </div>
		 </div>
		 
		 
     <!-----For email---->
		 <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
		             <label class="mail" >Email :</label></div>
			     <div class="col-xs-8"	>	 
			          <input type="email" name="email"  id="email"placeholder="Masukkan Email" class="form-control" >
		         </div>
		     </div>
		 </div>
	 <!-----For Password and confirm password---->
          <div class="col-sm-12">
		         <div class="row">
				     <div class="col-xs-4">
		 	              <label class="pass">Password :</label></div>
				  <div class="col-xs-8">
			             <input type="password" name="password" id="password" placeholder="Masukkan Password" class="form-control">
				 </div>
          </div>
		  </div>
		  <div class="col-sm-12">
             <div class="row">
			     <div class="col-xs-4">
          	         <label class="firstname">Nama Lengkap :</label> </div>
		         <div class="col-xs-8">
		             <input type="text" name="namalengkap" id="namalengkap" placeholder="Masukkan Nama Lengkap Anda" class="form-control ">
             </div>
		      </div>
		 </div>

		 <div class="col-sm-12">
             <div class="row">
			     <div class="col-xs-4">
          	         <label class="firstname">Alamat :</label> </div>
		         <div class="col-xs-8">
		         	<textarea type="text" name="alamat" placeholder="Alamat*" class="form-control"></textarea>
		             
             </div>
		      </div>
		 </div>

		  <div class="col-sm-12">
             <div class="row">
			     <div class="col-xs-4">
          	         <label class="firstname">Mobile Phone :</label> </div>
		         <div class="col-xs-8">
		             <input type="text" name="phone" id="phone" placeholder="Masukkan Nomor Telp/Hp" class="form-control ">
             </div>
		      </div>
		 </div>
     <!-----------For Phone number-------->
         <div class="col-sm-12">
		     <div class ="row">
                 <div class="col-xs-4 ">
			       <label class="gender">Jenis Kelamin:</label>
				 </div>
			 
			     <div class="col-xs-4 male">	 
				     <input type="radio" name="gender"  id="gender" value="Laki-laki">Laki-laki</input>
				 </div>
				 
				 <div class="col-xs-4 female">
				     <input type="radio"  name="gender" id="gender" value="Perempuan" >Perempuan</input>
			     </div>
			
		  	 </div>
		     <div class="col-sm-12">
		     	
		     	</br>
		         <div class="btn btn-warning">Submit</div>
		         <div class="d-flex justify-content-center links">
					<font color="white">Sudah memiliki akun ?</font> <a href="<?php echo URL; ?>login">Login Sekarang</a>
				</div>
		   </div>
		 </div>
	 </div>	 
	</form>	 		 
		 
</div>

</body>		
</html>
	 
	 
</body>
</html>