<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="loginform">
        <h2>Username: <span style="color: red;">rock</span> Password: <span style="color: red;">rock123</span></h2>
        <hr>
    <form action="login.php" method="post">
        <table >

    
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" placeholder="Username" required></td>
            </tr>

            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" placeholder="Password" required></td>
            </tr>

            <tr>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>

        </table>
    </form>
    </div style>

    <?php 
    if(isset($_POST['submit'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        if($user == "rock" && $pass = "rock123")
        {
            header("location:index.php");
            exit();
        }
        else 
        {
            echo "<div class=\"wrong\">Please check the Username or Password</div>";
        }


    }

?>
</body>
</html>