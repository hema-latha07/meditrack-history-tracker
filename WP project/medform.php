<!DOCTYPE html>
<html lang="en">
  <head>
      <title>MEDITRACK</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width,initial-scale=1.0">
	  <link rel="stylesheet" type="text/css" href="medi.css">
  </head>
  <body>
	<div id="medform">
          <h2>MEDICAL FORM</h2>		  
          <div id="container">
		  <form action="calculate.php" method="post">
		  <table id="tab" align="center" cellpadding="8" cellspacing="8">
		  <tr>
		        <div id="mediform">
				<td>
			    <label for="name">NAME : </label>
				</td>
				<td>
		        <input type="text" id="name" name="name" pattern="^[A-Za-z]+$" required>
				</td>
			</tr>
			<tr>
				<td>
			    <label for="add">ADDRESS : </label>
				</td>
				<td>
		        <input type="text" id="add" name="address"required>
				</td>
			</tr>
			<tr>
			   <td>
				<label for="age">AGE : </label>
				</td>
				<td>
		        <input type="number" id="age" min=18 max=120 name="age"required>
				</td>
			</tr>
			<tr>
			    <td>
				<label for="ht">HEIGHT(in cm): </label>
				</td>
				<td>
		        <input type="text" id="ht" name="height" required>
				</td>
			</tr>
			<tr>
				<td>
				<label for="wt">WEIGHT(in kg): </label>
				</td>
				<td>
		        <input type="text" id="wt" name="weight" required>
				</td>
			</tr>
			<tr>
				<td>
				<label for="id">ID# : </label>
				</td>
				<td>
		        <input type="text" id="id" name="idd"required>
				</td>
			</tr>
			<tr>
				<td>
				<label for="mail">E-MAIL : </label>
				</td>
				<td>
		        <input type="email" id="mail" name="email"required>
				</td>
			</tr>
			<tr>
				<td>
				<label for="ph">PHONE : </label>
				</td>
				<td>
		        <input type="text" id="ph" name="phnumber" pattern="^[1-9]{10}"required>
				</td>
			</tr>
			<tr>
				<td>
				<label for="dob">DATEOFBIRTH : </label>
				</td>
				<td>
		        <input type="date" id="dob" name="birth" required>
				</td>
			</tr>
			<tr>
				<td>
		        <label for="den">DENTAL APPLIANCES: </label>
				</td>
				<td>
		        <input type="text" id="den" name="dental"required>
				</td>
			</tr>
			<tr>
				<td>
				<label for="cmd">CURRENT MEDICALCONDITIONS: </label>
				</td>
				<td>
		        <input type="text" id="cmd" name="conditions"required>
				</td>
			</tr>
			<tr>
			   <td><label for="appointment_type">APPOINTMENT TYPE :</label></td>
                <td><select id="appointment_type" name="appointment_type">
                        <option value="basic">Basic Appointment</option>
                        <option value="consultation">Consultation</option>
                        <option value="emergency">Emergency Appointment</option>
                    </select>
                </td>
			</tr>
			<tr>
				<td>	
				<label for="disability">DISABILITIES : </label>
				</td>
				<td>
		        <input type="text" id="disability" name="disabilities"required>
				</td>
			</tr>
			<tr>
				<td>
				<label for="allr">ALLERGIES : </label>
				</td>
				<td>
		        <input type="text" id="allr" name="allergies"required>
				</td>
			</tr>
			<tr>
				<td>
				<label for="phy">PERSONAL PHYSICIAN : </label>
				</td>
				<td>
		        <input type="text" id="phy" name="physician" pattern="^[A-Za-z]+$" required>
				</td>
			</tr>
			<tr>
				<td>
				<label for="emr">EMERGENCY CONTACT : </label>
				</td>
				<td>
		        <input type="text" id="emr" name="emergencycnt" pattern="^[1-9]{10}"required>
				</td>
			</tr>
			<tr>
				<td>
				<button type="submit">SUBMIT</button>
			    <button type="reset">CLEAR</button>
				</td>
			</tr>
			</table>
			</form>
            </div>
		  </div>	
		  <script type="text/javascript">
	      
			function calculation()
		  {
		    var baseCost = 300; // Base cost of appointment
            var appointmentType = document.getElementById("appointment_type").value; // Get selected appointment type
            var agevise = document.getElementById("age").value; // Get user age

            // Additional charge based on appointment type
            var additionalCharge = 0;

            if (appointmentType === "consultation") 
			{
			   additionalCharge = 100; // Extra charge for consultation
            } 
			else if (appointmentType === "emergency") 
			{
                additionalCharge = 200; // Emergency appointment extra charge
            }

            // Discount based on age
            var discount = 0;
            if (agevise >= 60) 
			{
                discount = 0.1; // 10% discount for seniors
            }

            // Calculate the total cost
            var totalCost = baseCost + additionalCharge;
			if (discount > 0)
			{
                totalCost -= totalCost * discount; // Apply discount
            }

            // Display the calculated total cost
			  alert("Total cost for the Appointment :"+totalCost);
        }

	  </script>
  </body>
</html>