window.addEventListener('DOMContentLoaded', function() {
    var ctx = document.getElementById('myChart').getContext('2d');
    
    // Make an AJAX request to fetch data from the server
    fetch('/getChartData') // Use the Laravel route URL
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            // Use the fetched data to update the chart
            var chart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['Borrowed Books', 'Returned Books', 'Pending Books', 'Student Fined'],
                    datasets: [{
                        label: 'Books Status',
                        data: data, // Use the fetched data values
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.7)',
                            'rgba(54, 162, 235, 0.7)',
                            'rgba(255, 205, 86, 0.7)',
                            'rgba(75, 192, 192, 0.7)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true
                }
            });
        })
        .catch(function(error) {
            console.error('Error:', error);
        });
});
