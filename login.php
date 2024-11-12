<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="style.css">
    <script src="fontawesome/all.js"></script>
</head>

<body>
    <div class="container">
        <h1>apkikasi pengaduan masyarakat</h1>
         <form method="post" action="ceklogin.php">
            <label>Username</label><br>
            <input type="text" name="username"><br>
            <label>Password</label><br>
            <input type="password" name="password"><br>
            <button type="submit">Log in</button>
        </form>
        <div class="col">
            <p>OR</p>
            
        <select name="level">
            <option value="admin">Admin</option>
            <option value="operator">Operator</option>
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
        </div>
    </div>
</body>

</html>
