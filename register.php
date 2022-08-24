<?php
include "nav.php";
?>

<?php
if(isset($_POST['submit'])){
include "database.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $rnum=$_POST['rnumber'];
    $name=$_POST['name'];
    $class=$_POST['class'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];
    // echo "check";
    if($pass==$cpass){
        // $insert = "INSERT INTO `register2` (`register_id`, `rollnumber`, `name`, `class`, `email`, `password`, `time`) 
        // VALUES (NULL, '$rnum', '$name', '$class', '$email', '$pass', current_timestamp())";
        $insert = "INSERT INTO `register` (`roll number`, `name`, `class`, `email`, `password`)
         VALUES ('$rnum', '$name', '$class', '$email','$pass')";
        $run = mysqli_query($con,$insert);
        if(isset($run)){
            echo "data enter in database";
        }
        else{
            echo "enter correct data";
        }
    }
     else{
         echo "password is not correct";
     }
}
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div style="margin:50px;">
        <form method="post">
            <div class="form-group" style="width:50%;float: left;padding-left: 20px;">
                <label for="exampleInputEmail1">ROLLNUMBER</label>
                <input type="number" name="rnumber" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="ROLLNUMBER">
            </div>
            <div class="form-group" style="width:50%;float: left;padding-left: 20px; ">
                <label for="exampleInputPassword1">NAME</label>
                <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="NAME">
            </div>
            <div class="form-group" style="width:50%;float: left;padding-left: 20px;">
                <label for="exampleInputPassword1">CLASS</label>
                <input type="text" name="class" class="form-control" id="exampleInputPassword1" placeholder="CLASS">
            </div>
            <div class="form-group" style="width:50%;float: left;padding-left: 20px;">
                <label for="exampleInputPassword1">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
              </div>
              <div class="form-group" style="width:50%;float: left;padding-left: 20px;">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
            <div class="form-group" style="width:50%;float: left;padding-left: 20px;">
                <label for="exampleInputPassword1">ComfirmPassword</label>
                <input type="password" name="cpass" class="form-control" id="exampleInputPassword1" placeholder="ComfirmPassword">
            </div>
            <div>
                <button style="margin-left:40%;width: 250px;height: 60px;float: left;" name="submit"  type="submit" class="btn btn-primary"><h3>Register</h3></button>
            </div>
           
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>