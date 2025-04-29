<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Only</title>
    <link rel="stylesheet" href="src/css/landing.css">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
</head>
<body>
    <div class="wrapper">
        <aside id="sidebar">
            <button class="toggle-btn" type="button">
                <i class="lni lni-grid-alt"></i>
                <span class="toggle-label">Barangay Request</span>
            </button>
            <ul class="sidebar-nav">
            <li><a href="#" class="active"><i class="lni lni-home"></i><span>Home</span></a></li>
                <li><a href="#"><i class="lni lni-pencil"></i><span>Request</span></a></li>
                <li><a href="#"><i class="lni lni-comments"></i><span>About Us</span></a></li>
                <li><a href="#"><i class="lni lni-phone"></i><span>Contact Us</span></a></li>
                <li><a href="#"><i class="lni lni-question-circle"></i><span>Help Us</span></a></li>
                <li><a href="#"><i class="lni lni-user"></i><span>Profile</span></a></li>
                <li><a href="#"><i class="lni lni-exit"></i><span>Logout</span></a></li>
            </ul>

        </aside>
        
        <div class="main-content">
            <img src="src/img/logobarangay.png" alt="Barangay Calangain Logo" class="logo">
            <h1>WELCOME <span class="small-text">TO</span></h1>
            <h2>BARANGAY<br>CALANGAIN, LUBAO PAMPANGA</h2>
            <p class="hashtag">#MiyangkatkapaCalangain</p>
        </div>
    </div>

    <script>
        const toggleBtn = document.querySelector(".toggle-btn");
        const sidebar = document.getElementById("sidebar");

        toggleBtn.addEventListener("click", () => {
            sidebar.classList.toggle("collapsed");
        });
    </script>
</body>
</html>
