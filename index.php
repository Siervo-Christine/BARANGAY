<?php
include_once 'config/settings-configuration.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Calangain | Login & Signup</title>
    <link rel="stylesheet" href="src/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>

<div class="background-img">
    <img src="src/img/newbg.png" alt="Barangay Background">
</div>

<div class="container">
    <header>
        <img src="src/img/logo.png" alt="Barangay Logo" class="logo">
        <nav>
            <a href="#" id="loginBtn">LOG IN</a>
            <a href="#" id="signupBtn">SIGN UP</a>
        </nav>
    </header>

    <main>
        <div class="welcome-text">
            <h1>WELCOME <span>TO</span></h1>
            <h2>BARANGAY</h2>
            <h3>CALANGAIN, LUBAO PAMPANGA</h3>
            <p class="hashtag">#MiyangakatkapaCalangain</p>
        </div>
    </main>
</div>

<!-- LOGIN MODAL -->
<div id="loginModal" class="modal">
    <div class="modal-content">
        <img src="src/img/logo.png" alt="Barangay Logo" class="modal-logo">
        <span class="close" id="closeLogin">&times;</span>
        <h2>Login</h2>
        <form action="landingpage.html" method="POST">
            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
            <input type="email" name="email" placeholder="Enter Email" required><br>
            <input type="password" name="password" placeholder="Enter Password" required><br>
            <button type="submit" name="btn-signin">LOG IN</button>
        </form>
    </div>
</div>

<!-- SIGNUP MODAL -->
<div id="signupModal" class="modal">
    <div class="modal-content">
        <img src="src/img/logo.png" alt="Barangay Logo" class="modal-logo">
        <span class="close" id="closeSignup">&times;</span>
        <h2>Sign Up</h2>
        <form action="dashboard/admin/authentication/admin-class.php" method="POST">
            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
            <input type="text" name="username" placeholder="Enter Username" required><br>
            <input type="email" name="email" placeholder="Enter Email" required><br>
            <input type="password" name="password" placeholder="Enter Password" required><br>
            <button type="submit" name="btn-signup">SIGN UP</button>
        </form>
    </div>
</div>

<script>
    // Modal scripts (open, close, click outside)
    document.getElementById('loginBtn').onclick = function() {
        document.getElementById('loginModal').style.display = 'block';
    }
    document.getElementById('signupBtn').onclick = function() {
        document.getElementById('signupModal').style.display = 'block';
    }

    document.getElementById('closeLogin').onclick = function() {
        document.getElementById('loginModal').style.display = 'none';
    }
    document.getElementById('closeSignup').onclick = function() {
        document.getElementById('signupModal').style.display = 'none';
    }

    window.onclick = function(event) {
        if (event.target == document.getElementById('loginModal')) {
            document.getElementById('loginModal').style.display = 'none';
        }
        if (event.target == document.getElementById('signupModal')) {
            document.getElementById('signupModal').style.display = 'none';
        }
    }
</script>

</body>
</html>
