document.addEventListener('DOMContentLoaded', () => {
    const stepsTaken = 5000; // Example data, replace with actual data
    const stepsGoal = 10000;

    document.getElementById('stepsTaken').innerText = stepsTaken;
    document.getElementById('stepsGoal').innerText = stepsGoal;

    const ctx = document.getElementById('stepsRingChart').getContext('2d');
    const stepsRingChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [stepsTaken, stepsGoal - stepsTaken],
                backgroundColor: ['#4CAF50', '#e0e0e0'],
                borderWidth: 0
            }]
        },
        options: {
            cutoutPercentage: 80,
            rotation: -Math.PI / 2,
            animation: {
                animateRotate: true,
                animateScale: true
            },
            tooltips: { enabled: false },
            hover: { mode: null }
        }
    });

    const encouragingMessage = document.getElementById('encouragingMessage');
    const percentage = (stepsTaken / stepsGoal) * 100;

    if (percentage >= 100) {
        encouragingMessage.innerText = "Congratulations! You've reached your goal!";
    } else if (percentage >= 75) {
        encouragingMessage.innerText = "Great job! You're almost there!";
    } else if (percentage >= 50) {
        encouragingMessage.innerText = "Keep going! You're halfway there!";
    } else {
        encouragingMessage.innerText = "You can do it! Keep moving!";
    }
});
