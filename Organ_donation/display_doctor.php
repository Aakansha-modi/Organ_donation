<html>
<head>
    <title> Display Data </title>
</head>
<body>
    <table border=1 cellpadding=1 cellspacing=1>
        <tr>
            <th> Doctor_ID </th>
            <th> first_name </th>
            <th> last_name </th>
            <th> department_name </th>
            <th> hospital_id </th>
            <th> phone_number </th>
            
            
        </tr>
<?php
    //Create Connection with MySQL Database
    $con = mysqli_connect('localhost','root','');

    //Select Database
    if(!mysqli_select_db($con,'organ_donation'))
    {
        echo "Database Not Selected";
    }
    //Select Query
    $sql = "SELECT * FROM doctor";

    //Execute the SQL query
    $records = mysqli_query($con,$sql);

    while($row = mysqli_fetch_assoc($records))
    {
        echo "<tr>";
        echo "<td>".$row['Doctor_ID']."</td>";
        echo "<td>".$row['first_name']."</td>";
        echo "<td>".$row['last_name']."</td>";
        echo "<td>".$row['department_name']."</td>";
        echo "<td>".$row['hospital_id']."</td>";
        echo "<td>".$row['phone_number']."</td>";
       
    }
?>
    </table>
</body>
</html>
