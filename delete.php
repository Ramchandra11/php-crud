<?php include 'header.php';
if(isset($_POST['deletebtn'])){
    $con = mysqli_connect("localhost","root","","crud") or die("connection Failed");
    $s_id = $_POST['sid'];
    $sql = "Delete from studentt where sid={$s_id}";
$result = mysqli_query($con,$sql) or die("Query unsuccessful");
header("location: index.php");
mysqli_close($con);
}

?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
