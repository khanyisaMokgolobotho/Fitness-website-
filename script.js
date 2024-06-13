function toggleMenu() {
    const navMenu = document.querySelector('.nav-menu');
    navMenu.classList.toggle('active');
}

// Sample data for the charts
const stepsData = [3000, 5000, 7000, 8000, 10000, 9000, 11000];
const workoutData = [30, 45, 60, 50, 40, 55, 70];
const waterData = [2, 2.5, 3, 2.8, 3.5, 3, 4];

// Function to calculate total values
function calculateTotals() {
    document.getElementById('totalSteps').innerText = stepsData.reduce((a, b) => a + b, 0);
    document.getElementById('totalWorkouts').innerText = workoutData.reduce((a, b) => a + b, 0);
    document.getElementById('totalWater').innerText = waterData.reduce((a, b) => a + b, 0).toFixed(1);
}

// Chart configuration
function renderCharts() {
    const ctxSteps = document.getElementById('stepsChart').getContext('2d');
    const ctxWorkout = document.getElementById('workoutChart').getContext('2d');
    const ctxWater = document.getElementById('waterChart').getContext('2d');

    new Chart(ctxSteps, {
        type: 'line',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            datasets: [{
                label: 'Steps',
                data: stepsData,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        }
    });

    new Chart(ctxWorkout, {
        type: 'bar',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            datasets: [{
                label: 'Workout Sessions (minutes)',
                data: workoutData,
                backgroundColor: 'rgba(153, 102, 255, 0.2)',
                borderColor: 'rgba(153, 102, 255, 1)',
                borderWidth: 1
            }]
        }
    });

    new Chart(ctxWater, {
        type: 'bar',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            datasets: [{
                label: 'Water Drinking Amount (Liters)',
                data: waterData,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        }
    });
}

// Initialize the dashboard
document.addEventListener('DOMContentLoaded', () => {
    calculateTotals();
    renderCharts();
});

document.getElementById('waterForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const waterGoal = parseFloat(document.getElementById('waterGoal').value);
    const waterConsumed = parseFloat(document.getElementById('waterConsumed').value);

    const remainingWater = waterGoal - waterConsumed;

    let goalMessage = `Your daily water goal is ${waterGoal} liters.`;
    let remainingMessage = remainingWater > 0 
        ? `You need to drink ${remainingWater.toFixed(1)} more liters to reach your goal.` 
        : `Congratulations! You have met your daily water goal.`;

    document.getElementById('goalMessage').innerText = goalMessage;
    document.getElementById('remainingMessage').innerText = remainingMessage;
});
