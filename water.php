<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Water Intake Tracker</title>
    <link rel="stylesheet" href="water.css">
</head>
<body>
    <nav class="navbar">
        <div class="navbar-container">
            <a href="#" class="navbar-logo">Better Health Water Tracker</a>
            <ul class="nav-menu">
                <li class="nav-item"><a href="dashboard.php" class="nav-link">Dashboard</a></li>
                <li class="nav-item"><a href="workout.php" class="nav-link">Workout</a></li>
                <li class="nav-item"><a href="water.php" class="nav-link">Water</a></li>
                <li class="nav-item"><a href="steps.php" class="nav-link">Steps</a></li>
                
            </ul>
        </div>
    </nav>
    <div class="welcome-message">
        <h1>Its Water Time!</h1>
        <P>Lets mearsure your water intake for the day</p>
        
    </div>

    <div class="water-container">
        <h1>Water Intake Tracker</h1>
        <form id="waterForm">
            <label for="waterGoal">Daily Water Goal (liters):</label>
            <input type="number" id="waterGoal" name="waterGoal" step="0.1" required>
            
            <label for="waterConsumed">Water Consumed (liters):</label>
            <input type="number" id="waterConsumed" name="waterConsumed" step="0.1" required>

            <button type="submit">Update</button>
        </form>
        
        <div class="results">
            <h2>Results</h2>
            <p id="goalMessage"></p>
            <p id="remainingMessage"></p>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
