<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
 <?php
$con = mysqli_connect("localhost","root","","crud") or die("Connection Failed");
$sql ="select * from studentt";
$result = mysqli_query($con,$sql);

 ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
        <?php
    if(mysqli_num_rows($result)>0){
        while($row= mysqli_fetch_assoc($result)){
     
    
        ?>
            <tr>
                <td><?php echo $row['sid'] ?></td>
                <td><?php echo $row['sname'] ?></td>
                <td><?php echo $row['saddress']?></td>
                <td><?php echo $row['cname']  ?></td>
                <td><?php echo $row['sphone'] ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['sid'] ?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['sid'] ?>'>Delete</a>
                </td>
            </tr>
           <?php
        }
        
?>
        </tbody>
    </table>
<?php
    } 
    else{
        echo "<h2>No record Found</h2>";
    }

    mysqli_close($con);
    ?>
</div>
</div>
</body>
</html>
