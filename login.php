
<?php
if(isset($_POST['email'])){



$servername="localhost";
$username="root";
$password="";
$dbname="rc";
$conn= mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
die("connect to this database failed due to". mysqli_connect_error());
}
$email=$_POST['email'];
$password =$_POST['password'];
$select= "SELECT * FROM `user_detail` where email='$email' && password ='$password'";
$result = mysqli_query($conn,$select);
if(mysqli_num_rows($result)>0){
   
    header('location:login.php');
}   else {
    echo "Invalid Email or password";
}




$conn->close();
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <div class="container">
        <div class="container2">
            <form action="" method="POst" name="myform">
                <h1>Login</h1>
                <input type="email" name="email" placeholder="Enter Email " id="email">
                <input type="password" name="password" placeholder="Enter Password" id="password">
                <button>login</button>
            </form>
    
        </div>
    
        </div>
        <script>

            const btn =document.getElementById("button");
            btn.addEventListener('click',chacked);
            function checked(){
                if(document.myform.email.value==""){
                    alert("please Enter email address");
                    document.myform.email.focus();
                    return false;
                }
                if(document.myform.password.value==""){
                    alert("please Enter Password");
                    document.myform.password.focus();
                    return false; }
                   
            
            else {
                document.myform.submit();
                return true;
            }
        }
        </script>
</body>
</html>