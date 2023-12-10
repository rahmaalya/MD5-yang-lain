<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login MD5</title>
    <link rel = "stylesheet" href  = "style.css">
</head>
<body>
    
<br>
<br>
<h1 class= "text-center">LOGIN MD5</h1>
<br>
<div class="login">
    <br>
    <form action="login.php" method="POST" onSubmit="return validasi()">
        <div>
            <label >username</label>
            <input type="text"name="username" id="username" class="form-control">
        </div>
        <div>
            <label >password</label>
            <input type="text"name="password" id="password" class= "form-control">
        </div>
        <div>
            <input type="Submit" value="Login" class= "btn-login">
        </div>
        
    </form>
</div>
</body>
<script>
    function validasi()
    var username= document.getElementById("username")
    var password= document.getElementById("password")
    if (username !="" && password !="") {
        return true;
    } else {
        alert(username dan passwprd tidak boleh kosong!)
        return false;
    }

</script>
</html>