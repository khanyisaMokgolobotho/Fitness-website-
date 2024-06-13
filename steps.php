<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Step Tracker</title>
    <link rel="stylesheet" href="steps.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-container">
            <a href="#" class="navbar-logo">Better Health Dashboard</a>
            <ul class="nav-menu">
                <li class="nav-item"><a href="dashboard.php" class="nav-link">Dashboard</a></li>
                
                <li class="nav-item"><a href="workout.php" class="nav-link">Workouts</a></li>
                <li class="nav-item"><a href="water.php" class="nav-link">Water</a></li>
                <li class="nav-item"><a href="steps.php" class="nav-link">Steps</a></li>
                
            </ul>
        </div>
    </nav>

    <div class="welcome-message">
        <h1>Lets See Your Step Count</h1>
        <P>Lets Keep Going</p>
        
    </div>

    <div class="step-tracker">
        <h2>Steps Tracker</h2>
        <div class="ring-chart-container">
            <canvas id="stepsRingChart"></canvas>
            <div class="steps-info">
                <p id="stepsTaken">0</p>
                <p>of</p>
                <p id="stepsGoal">10000</p>
                <p>steps</p>
            </div>
        </div>
        <div class="encouraging-message" id="encouragingMessage"></div>
    </div>

    <script src="steps.js"></script>
</body>
</html>
