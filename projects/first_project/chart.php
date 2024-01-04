<?php include('header.php'); ?>

<section>
    <h2>Sample Chart</h2>
    <canvas id="myChart" width="400" height="200"></canvas>

    <script>
        // Get the canvas element
        var ctx = document.getElementById('myChart').getContext('2d');

        // Create a sample chart
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May'],
                datasets: [{
                    label: 'Sample Data',
                    data: [12, 19, 3, 5, 2],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</section>

<?php include('footer.php'); ?>
