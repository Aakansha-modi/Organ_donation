<!DOCTYPE html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
 crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<html>

<head>
	<title>Organ Donation</title>
</head>

<body>
	<nav class="navbar navbar-dark bg-dark justify-content-between">
		
		
	</nav>
	<div class="jumbotron">
		<center>
			<h1 class="display-4">Organ Donation </h1>
		</center>
	</div>

	<div id="accordion">
		
		<div class="card">
			<div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo">
				<h5 class="mb-0">
					<button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
						<strong>Patient</strong>
					</button>
				</h5>
			</div>

			<div id="collapseTwo" class="collapse collapse" aria-labelledby="headingTwo" data-parent="#accordion">
				<div class="card-body">
                    <center>
						<div>
							<form action="" method="POST">
                                <a class="btn btn-primary" style="width: 25%;" type="submit" href="add_patient.php">Add Patient </a>
							</form>
						</div>
					</center>
                    <br>
					<center>
                        <center>
						<div>
							<form action="" method="POST">
								<a class="btn btn-primary" style="width: 25%;" type="submit" href="add_organrequired.php">Add Organs required by a patient</a>
							</form>
						</div>
					</center>
					<br>
						
					</center>
					<br>
                    <center>
						<div>
							<form action="" method="POST">
								<a class="btn btn-primary" style="width: 25%;" type="submit" href="deletepatient_byid.php">Delete Patient by id</a>
							</form>
						</div>
					</center>
                    <br>
                    <center>
						<div>
							<form action="" method="POST">
								<a class="btn btn-primary" style="width: 25%;" type="submit" href="display_patient.php">Display patient details</a>
							</form>
						</div>
					</center>
                    <br>
					
					<center>
						<div>
							<form action="" method="POST">
                                <a class="btn btn-primary" style="width: 25%;" type="submit" href="searchpatient_byname.php">search patient by name</a>
							</form>
						</div>
					</center>
					<br>		
					<center>
						<div>
							<form action="" method="POST">
								<a class="btn btn-primary" style="width: 25%;" type="submit" href="searchpatient_byid.php">search patient by id</a>
							</form>
						</div>
					</center>
					
					
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree">
				<h5 class="mb-0">
					<a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
					 aria-controls="collapseThree">
						<strong>Donar</strong>
					</a>
				</h5>
			</div>
			<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
				<div class="card-body">
					<center>
						<div>
							<form action="" method="POST">
								<a class="btn btn-primary" style="width:25%" type="submit" href="add_donor.php">Add Donor</a>
							</form>
						</div>
					</center>
					<br>
                   
                    <center>
						<div>
							<form action="" method="POST">
								<a class="btn btn-primary" style="width:25%" type="submit" href="add_organavailable.php">Add organ available</a>
							</form>
						</div>
					</center>
					<br>
                    <center>
						<div>
							<form action="" method="POST">
								<a class="btn btn-primary" style="width:25%" type="submit" href="add_nextofkin_indonor.php">Add nextofkin_details</a>
							</form>
						</div>
					</center>
					<br>
         
                    <center>
						<div>
							<form action="" method="POST">
								<a class="btn btn-primary" style="width:25%" type="submit" href="deletedonor_byid.php">Delete Donor</a>
							</form>
						</div>
					</center>
					<br>
                    <center>
						<div>
							<form action="" method="POST">
								<a class="btn btn-primary" style="width:25%" type="submit" href="display_donor.php">Display Donor</a>
							</form>
						</div>
					</center>
                    
					<br>
                    
                    <center>
						<div>
							<form action="" method="POST">
								<a class="btn btn-primary" style="width:25%" type="submit" href="searchdonor_byid.php">Search donor by id</a>
							</form>
						</div>
					</center>
                    <br>
                     <center>
						<div>
							<form action="" method="POST">
								<a class="btn btn-primary" style="width:25%" type="submit" href="searchdonor_byname.php">Search donor by name</a>
							</form>
						</div>
					</center>
					<br>
					
					
				</div>
			</div>
		</div>
        <div class='card'>
      <div class="card-header" id="headingFour" data-toggle="collapse" data-target="#collapseFour">
				<h5 class="mb-0">
					<a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
					 aria-controls="collapseFour">
						<strong>Transplants </strong>
					</a>
				</h5>
			</div>
      <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
				<div class="card-body">
					<center>
						<div>
							<form action="" method="POST">
								<a class="btn btn-primary" style="width: 25%;" type="submit" href="add_organdonated.php">Add transplants</a>
							</form>
						</div>
					</center>
					<br>``
                   
          
        </div>
      </div>
    </div>
		
		
    <div class='card'>
      <div class="card-header" id="headingFour" data-toggle="collapse" data-target="#collapseFour">
				<h5 class="mb-0">
					<a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
					 aria-controls="collapseFour">
						<strong>Hospital </strong>
					</a>
				</h5>
			</div>
      <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
				<div class="card-body">
					
                    <center>
						<div>
							<form action="" method="POST">
								<a class="btn btn-primary" style="width: 25%;" type="submit" href="adddoctor.php">Add Doctor</a>
							</form>
						</div>
					</center>
					<br>
          <center>
						<div>
							<form action="" method="POST">
								<a class="btn btn-primary" style="width: 25%;" type="submit" href="add_hospital.php">Add Hospital</a>
							</form>
						</div>
					</center>
                    <br>
          <center>
						<div>
							<form action="" method="POST">
								<a class="btn btn-primary" style="width: 25%;" type="submit" href="display_doctor.php">Display Doctor Details</a>
							</form>
						</div>
					</center>
					<br>
                     <center>
						<div>
							<form action="" method="POST">
								<a class="btn btn-primary" style="width: 25%;" type="submit" href="display_hospital.php">Display hospital Details</a>
							</form>
						</div>
					</center>
                    <br>
                    <center>
						<div>
							<form action="" method="POST">
								<a class="btn btn-primary" style="width: 25%;" type="submit" href="searchdoctor_byname.php">
                                    Search Doctor by name</a >
							</form>
						</div>
					</center>
					
					
					<br>
                     <center>
						<div>
							<form action="" method="POST">
								<a class="btn btn-primary" style="width: 25%;" type="submit" href="searchdoctor_byid.php">
                                    Search Doctor by id</a >
							</form>
						</div>
					</center>
					
					
					<br>
                    <center>
						<div>
							<form action="" method="POST">
								<a class="btn btn-primary" style="width: 25%;" type="submit" href="searchhospital_byname.php">
                                    Search Hospital by name</a >
							</form>
						</div>
					</center>
					
					
					<br>
                    <center>
						<div>
							<form action="" method="POST">
								<a class="btn btn-primary" style="width: 25%;" type="submit" href="searchhospital_byid.php">
                                    Search Hospital by id</a >
							</form>
						</div>
					</center>
					
					
					<br>
                    <center>
						<div>
							<form action="" method="POST">
								<a class="btn btn-primary" style="width: 25%;" type="submit" href="deletedoctor_byid.php">
                                    Delete doctor by id</a >
							</form>
						</div>
					</center>
					
					<br>
                    
          <center>
						<div>
							<form action="" method="POST">
								<a class="btn btn-primary" style="width: 25%;" type="submit" href="deletehospital_byid.php">
                                    Delete Hospital by id</a >
							</form>
						</div>
					</center>
					
					<br>
                    
        </div>
      </div>
    </div>
		
		
</div>
</body>

</html>
