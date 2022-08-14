<div class="title">
    <i class="uil uil-chart-bar"></i>
    <span class="text">Chart</span>
</div>
<section class="charts mt-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="chart-container rounded-2 p-3">
                <h3 class="fs-6 mb-3">Turnover</h3>
                <canvas id="myChart"></canvas>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="chart-container rounded-2 p-3">
                <h3 class="fs-6 mb-3">Chart title number two</h3>
                <canvas id="myChart2"></canvas>
            </div>
        </div>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js"></script>
<script>
    // The bar chart
    var myChart = new Chart(document.getElementById('myChart'), {
        type: 'bar',
        data: {
            labels: ["January", "February", "March", "April", 'May', 'June', 'August', 'September'],
            datasets: [{
                label: "Lost",
                data: [45, 25, 40, 20, 60, 20, 35, 25],
                backgroundColor: "#0d6efd",
                borderColor: 'transparent',
                borderWidth: 2.5,
                barPercentage: 0.4,
            }, {
                label: "Succes",
                startAngle: 2,
                data: [20, 40, 20, 50, 25, 40, 25, 10],
                backgroundColor: "#dc3545",
                borderColor: 'transparent',
                borderWidth: 2.5,
                barPercentage: 0.4,
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    gridLines: {},
                    ticks: {
                        stepSize: 15,
                    },
                }],
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }
    })

    // The line chart
    var chart = new Chart(document.getElementById('myChart2'), {
        type: 'line',
        data: {
            labels: ["January", "February", "March", "April", 'May', 'June', 'August', 'September'],
            datasets: [{
                label: "My First dataset",
                data: [4, 20, 5, 20, 5, 25, 9, 18],
                backgroundColor: 'transparent',
                borderColor: '#0d6efd',
                lineTension: .4,
                borderWidth: 1.5,
            }, {
                label: "Month",
                data: [11, 25, 10, 25, 10, 30, 14, 23],
                backgroundColor: 'transparent',
                borderColor: '#dc3545',
                lineTension: .4,
                borderWidth: 1.5,
            }, {
                label: "Month",
                data: [16, 30, 16, 30, 16, 36, 21, 35],
                backgroundColor: 'transparent',
                borderColor: '#f0ad4e',
                lineTension: .4,
                borderWidth: 1.5,
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    gridLines: {
                        drawBorder: false
                    },
                    ticks: {
                        stepSize: 12,
                    }
                }],
                xAxes: [{
                    gridLines: {
                        display: false,
                    },
                }]
            }
        }
    })

    var chart = document.getElementById('chart3');
    var myChart = new Chart(chart, {
        type: 'line',
        data: {
            labels: ["One", "Two", "Three", "Four", "Five", 'Six', "Seven", "Eight"],
            datasets: [{
                    label: "Lost",
                    lineTension: 0.2,
                    borderColor: '#d9534f',
                    borderWidth: 1.5,
                    showLine: true,
                    data: [3, 30, 16, 30, 16, 36, 21, 40, 20, 30],
                    backgroundColor: 'transparent'
                }, {
                    label: "Lost",
                    lineTension: 0.2,
                    borderColor: '#5cb85c',
                    borderWidth: 1.5,
                    data: [6, 20, 5, 20, 5, 25, 9, 18, 20, 15],
                    backgroundColor: 'transparent'
                },
                {
                    label: "Lost",
                    lineTension: 0.2,
                    borderColor: '#f0ad4e',
                    borderWidth: 1.5,
                    data: [12, 20, 15, 20, 5, 35, 10, 15, 35, 25],
                    backgroundColor: 'transparent'
                },
                {
                    label: "Lost",
                    lineTension: 0.2,
                    borderColor: '#337ab7',
                    borderWidth: 1.5,
                    data: [16, 25, 10, 25, 10, 30, 14, 23, 14, 29],
                    backgroundColor: 'transparent'
                }
            ]
        },
        options: {
            scales: {
                yAxes: [{
                    gridLines: {
                        drawBorder: false
                    },
                    ticks: {
                        stepSize: 12
                    }
                }],
                xAxes: [{
                    gridLines: {
                        display: false,
                    },
                }],
            }
        }
    });
</script>