<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    
    <title>Organ Donation</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    
    <style>
table, th, td {
  border: 1px solid black;
  padding: 5px;
}
table {
  border-spacing: 15px;
}
</style>
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w790">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Search Data</h2>
                    <form method="POST" action="">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Enter First Name</label>
                                    <input class="input--style-4" type="text" name="first_name">
                                </div>
                            </div>
                            
                        </div>
                       
                       
                       
                       
                        <div class="p-t-15">
                            <input type="submit" name="search" value="search by id">
                        </div>
                    </form>
                    <table>
                <tr>
                    <th>First Name  </th><br>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Medical history</th>
                    <th>Doctor</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Phone Number</th>
                    <th>BLood Group</th>
                    
                    
                    
                </tr><br>
                <?php
                   $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,'organ_donation');
                
                if(isset($_POST['search']))
                {
                    $first_name = $_POST['first_name'];
                    $query = "SELECT *from donor where first_name='$first_name'";
                    $query_run = mysqli_query($connection,$query);
                    
                    while($row=mysqli_fetch_array($query_run)){
                        ?>
                             <tr>
                                 <td> <?php echo $row['first_name'];?></td>
                                  <td> <?php echo $row['last_name'];?></td>
                                  <td> <?php echo $row['age'];?></td>
                                  <td> <?php echo $row['medical_history'];?></td>
                                  <td> <?php echo $row['doctor'];?></td>
                                  <td> <?php echo $row
                            ['address'];?></td>
                                  <td> <?php echo $row['address2'];?></td>
                                 <td> <?php echo $row['address3'];?></td>
                                 <td> <?php echo $row['phone'];?></td>
                                 <td> <?php echo $row['Blood_group'];?></td>
                                 
                </tr>
                           <?php
                    }
                }
                       ?>
                
            </table>
                </div>
            </div>
        </div>
    </div>

    

</body>
</html>
<!-- end document-->