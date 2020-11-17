<?php
    include ('./db_connect.php');

    $user_id = $_POST["id"];
    $user_pw = $_POST['pw'];
    $sql = "select id from userinfo where id='".$user_id."'";

    $ret = mysqli_query($con,$sql);
    $num = mysqli_num_rows($ret);

    if($num>0||$user_id==NULL||$user_pw==NULL){
?>
        <script> 
            alert("Invaild id or pw");
            history.back(); 
        </script>
<?php
    }
    else{
    $sql = "insert into userinfo(id,pw) values ('".$user_id."','".$user_pw."')";
    $ret = mysqli_query($con,$sql);
    
?>

        <script> 
            alert("Success");
            location.href="./login.html";

        </script>
<?php
    }
?>
