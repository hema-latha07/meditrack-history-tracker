<!DOCTYPE html>
<html lang="en">
  <head>
      <title>MEDITRACK</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width,initial-scale=1.0">
	  <link rel="stylesheet" type="text/css" href="medi.css">
  </head>
  <body>
	<div id=signin>
	     <h2>SIGN IN</h2> <br>
		 <table id="form" cellspacing="10px" cellpadding="10px">
		 <form action="welcome.php" method="POST">
		 
		  <tr>
		   <th><label for="UserName">USERNAME : </label></th><br><br>
		   <td><input type="text" id="UserName" onchange="namecheck()" pattern="^[A-Za-z]+$" 
		        name="usname" required></td>
		  </tr> 
		  
		  <tr> 
		   <th><label for="pwd">PASSWORD : </label></th>
		   <td> <input type="password" id="pwd" name="password"required></td> <br><br><br>
		  </tr>
		  
          <tr>		  
           <th><label for="conpwd">CONFIRM PASSWORD : </label></th>
		   <td><input type="password" id="conpwd" name="confirmpwd"required></td>
		   </tr>
		   
		   <tr>
		     <td><button id="sbutton" type="submit">SUBMIT</button></td>
		   </tr>
         </form>
		 </table>
      </div>
	  <script type="text/javascript">
		  function namecheck()
		  {
		     var namefield=document.getElementById("UserName");
		     if(!namefield.checkValidity())
			{
			    alert(namefield.validationMessage);
		    }
		  }
	 </script>
	</body>
</html>