<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: index.html"); // Redirect to login page if not logged in
    exit();
}

$username = $_SESSION['username'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-container">
            <a href="#" class="navbar-logo">Better Health Dashboard</a>
            <ul class="nav-menu">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="dashboard.php" class="nav-link">Dashboard</a></li>
                    <li class="nav-item"><a href="workout.php" class="nav-link">Workout</a></li>
                    <li class="nav-item"><a href="water.php" class="nav-link">Water</a></li>
                    <li class="nav-item"><a href="steps.php" class="nav-link">Steps</a></li>
                    
            </ul>
        </div>
    </nav>

    <div class="welcome-message">
        <h1>Welcome to your dashboard, <?php echo $username; ?>!</h1>
        <p>Here is how healthy you have been this past week</p>

    </div>

    <div class="dashboard">
        <div class="card" id="steps">
            <h2>Steps</h2>
            <canvas id="stepsChart"></canvas>
        </div>
        <div class="card" id="workout">
            <h2>Workout Sessions</h2>
            <canvas id="workoutChart"></canvas>
        </div>
        <div class="card" id="water">
            <h2>Water Drinking Amount</h2>
            <canvas id="waterChart"></canvas>
        </div>
        <div class="card" id="stats">
            <h2>Overall Stats</h2>
            <div class="stats-container">
                <div class="stat">
                    <h3>Total Steps</h3>
                    <p id="totalSteps">0</p>
                </div>
                <div class="stat">
                    <h3>Total Workouts</h3>
                    <p id="totalWorkouts">0</p>
                </div>
                <div class="stat">
                    <h3>Total Water Drunk (L)</h3>
                    <p id="totalWater">0</p>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
