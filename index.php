<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <body>
        <nav class="navbar">
            <div class="navbar-container">
                <a href="#" class="navbar-logo">Better Health</a>
                <div class="menu-icon" onclick="toggleMenu()">
                    <i class="fa fa-bars"></i>
                </div>
                <ul class="nav-menu">
                    <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                
                    
                    <li class="nav-item"><a href="signup.html" class="nav-link">Login</a></li>
                </ul>
            </div>
        </nav>
        <section class="hero">
            <div class="hero-content">
                <h1>Welcome to Better Health</h1>
                <p>Where Monitoring Your Health Is Made Simple.</p>
                <a href="signup.html" class="btn">Get Started</a>
            </div>
        </section>
        <!----------------------------------------------------pop-up--------------------------------------------------------------->
        
   </div>
   <div class="popup" id="signupPopup">
    <div class="popup-content">
        <label for="chk" aria-hidden="true" class="close-btn" onclick="closePopup()">&times;</label>
        <div class="main">  	
            <div class="signup">
                <form method="POST" action="signup.php">
                    <h2>Sign up</h2>
                    <input type="text" name="txt" placeholder="User name" required="">
                    <input type="email" name="email" placeholder="Email" required="">
                    <input type="number" name="broj" placeholder="Age" required="">
                    <input type="password" name="pswd" placeholder="Password" required="">
                    <button type="submit">Sign up</button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
/* Popup container */
.popup {
display: none;
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
z-index: 9999;
overflow: auto; /* Enable scrolling if content exceeds viewport */
}

/* Popup content */
.popup-content {
position: relative;
background-color: #333; /* Popup background color */
margin: 10% auto; /* Center the popup vertically and horizontally */
padding: 20px;
max-width: 350px; /* Maximum width of the popup */
height: 500px; /* Height of the popup */
overflow: hidden; /* Hide overflowing content */
border-radius: 10px;
box-shadow: 5px 20px 50px #000; /* Box shadow for depth */
}

/* Close button */
.popup-content .close-btn {
position: absolute;
top: 10px;
right: 10px;
cursor: pointer;
font-size: 24px;
color: #fff; /* Close button color */
}

/* Sign up form */
.popup-content .signup form {
text-align: center;
}
.popup-content .signup form h2{
color: #ff6b6b;
}

.popup-content .signup form label {
color: #fff;
font-size: 2.3em;
font-weight: bold;
display: flex;
justify-content: center;
margin: 50px;
cursor: pointer;
transition: .5s ease-in-out;
}

.popup-content .signup form input {
width: 60%;
margin: 20px auto;
padding: 12px;
border: none;
outline: none;
border-radius: 5px;
background: #e0dede; /* Input background color */
}

.popup-content .signup form button {
width: 60%;
height: 40px;
margin: 10px auto 30px;
color: #fff;
background: #ff6b6b;;
font-size: 1em;
font-weight: bold;
border: none;
border-radius: 5px;
transition: .2s ease-in;
cursor: pointer;
}

.popup-content .signup form button:hover {
background: #1b8aba;
}




/* Media query for screens smaller than 768px (tablets and smaller) */
@media only screen and (max-width: 767px) {
.popup-content .signup form label {
   font-size: 1.5em; /* Adjust label font size for smaller screens */
   margin: 30px; /* Adjust margin for smaller screens */
}

.popup-content .signup form input,
.popup-content .signup form button {
   width: 80%; /* Adjust input and button width for smaller screens */
}
}

/* Media query for screens between 768px and 991px (tablets in landscape mode) */
@media only screen and (min-width: 768px) and (max-width: 991px) {
.popup-content .signup form label {
   margin: 40px; /* Adjust margin for tablets in landscape mode */
}
}

/* Media query for screens between 992px and 1199px (desktops and laptops) */
@media only screen and (min-width: 992px) and (max-width: 1199px) {
.popup-content .signup form label {
   margin: 60px; /* Adjust margin for desktops and laptops */
}
}

/* Media query for screens 1200px and larger (large desktops) */
@media only screen and (min-width: 1200px) {
.popup-content .signup form label {
   margin: 80px; /* Adjust margin for large desktops */
}
}


</style>
<script>
    function openPopup() {
        document.getElementById("signupPopup").style.display = "block";
    }

    function closePopup() {
        document.getElementById("signupPopup").style.display = "none";
    }
</script>

 
    <script src="script.js"></script>   
</body>
</html>