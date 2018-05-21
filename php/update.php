<?php
    $conn=mysqli_connect("127.0.0.1","root","qwerty","student");
    
    if(!$conn)
        die("Connection Failed");
        
    //echo ("Connection Establised");
    
    $id=$_POST['id'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $college_name=$_POST['college_name'];
    
    $sql="UPDATE student SET first_name='$first_name',last_name='$last_name',college_name='$college_name' WHERE id='$id'";
    
    $result=(mysqli_query($conn,$sql));
    
    if(!$result)
        die(mysqli_error($conn));
        
    echo ("<h1>Updation Successfull</h1>");
?>
