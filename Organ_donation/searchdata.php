<html>
    <head>
        <title>Organ Donation</title>
        
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
        <div class="container">
            <form action="" method="post">
                <input type="text" name="id" placeholder="Id"/>
                <input type="submit" name="search" value="search by id"/>
                
            </form>
            <table>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Father Name</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    
                </tr><br>
                <?php
                   $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,'three38inc');
                
                if(isset($_POST['search']))
                {
                    $id = $_POST['id'];
                    $query = "SELECT *from employee where id='$id'";
                    $query_run = mysqli_query($connection,$query);
                    
                    while($row=mysqli_fetch_array($query_run)){
                        ?>
                             <tr>
                                 <td> <?php echo $row['fname'];?></td>
                                  <td> <?php echo $row['lname'];?></td>
                                  <td> <?php echo $row['email'];?></td>
                                  <td> <?php echo $row['password'];?></td>
                                  <td> <?php echo $row['fathername'];?></td>
                                  <td> <?php echo $row['address'];?></td>
                                  <td> <?php echo $row['phone'];?></td>
                                 
                </tr>
                           <?php
                    }
                }
                       ?>
                
            </table>
        </div>
    </body>
</html>