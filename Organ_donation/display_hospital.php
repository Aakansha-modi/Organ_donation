<html>
<head>
    <title> Display Data </title>
</head>
<body>
    <table border=1 cellpadding=1 cellspacing=1>
        <tr>
            <th> Hospital_ID </th>
            <th> Hospital_name </th>
            <th> City </th>
            <th> State </th>
            
            
        </tr>
<?php
    //Create Connection with MySQL Database
    $con = mysqli_connect('localhost','root','');

    //Select Database
    if(!mysqli_select_db($con,'javatpoint'))
    {
        echo "Database Not Selected";
    }
    //Select Query
    $sql = "SELECT * FROM hospital";

    //Execute the SQL query
    $records = mysqli_query($con,$sql);

    while($row = mysqli_fetch_assoc($records))
    {
        echo "<tr>";
        echo "<td>".$row['Hospital_ID']."</td>";
        echo "<td>".$row['Hospital_name']."</td>";
        echo "<td>".$row['City']."</td>";
        echo "<td>".$row['State']."</td>";
        
        
    }
?>
    </table>
</body>
</html>
