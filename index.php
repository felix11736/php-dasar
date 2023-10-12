<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title> 
    <link rel="stylesheet" type="text/css" href="asset/login.css">
</head>
<body>
    <div class="login-container">
        <h2>Selamat datang! Silakan login.</h2>
        
        <form action="cek_login.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>

    </div>
    
  
  
   
      <p class="error-message"> </p>
      
    
</body>
</html>
