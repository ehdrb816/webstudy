<?php
    include './db_connect.php';
    $user_id=$_POST["id"];
    $user_pw=$_POST['pw'];
    
    $sql = "select id from userinfo where id='".$user_id."' and pw='".$user_pw."'";
    $ret = mysqli_query($con,$sql);
    $num_rows = mysqli_num_rows($ret);
    $rows = mysqli_fetch_array($ret);
    if($num_rows){
        $_SESSION["userid"]=$rows['id'];
        ?>
        <script> 
            alert("Success");
            location.href="./index.php";
        </script>
<?php
    }
    else{
        ?>
        <script> 
            alert("Login Fail");
            history.back();
        </script>
<?php
    }
?>