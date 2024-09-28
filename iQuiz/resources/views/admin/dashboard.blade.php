@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="flex w-full">
        <!-- problem here -->
        <div class="w-1/3">
            <div class="container mx-auto p-6">
                <div class="grid grid-cols-1 md:grid-cols-1 gap-6 w-full">
                    <!-- Categories Section -->
                    <div class="bg-softwhite p-4 rounded-lg shadow-md w-full">
                        <div class="flex items-center mb-4">
                            <i class="fa-solid fa-folder-open text-lg mr-1"></i>
                            <h2 class="text-lg font-semibold">Categories</h2>
                        </div>
                        <div class="flex items-center justify-between bg-gray-200 p-4 rounded-lg mb-2 hover:bg-gray-300 transition duration-300 ease-in-out">
                            <a href="#" class="flex-grow block text-black">
                                <i class="fa-solid fa-list mr-1"></i>
                                All Categories
                            </a>
                            <a href="#" class="p-2 bg-gray-300 rounded hover:bg-gray-400 transition duration-300 ease-in-out">
                                <i class="fas fa-plus text-custombg-gray text-lg"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Questionnaires Section -->
                    <div class="bg-softwhite p-4 rounded-lg shadow-md">
                        <div class="flex items-center mb-4">
                            <i class="fa-solid fa-file-lines text-lg mr-1"></i>
                            <h2 class="text-lg font-semibold">Questionnaires</h2>
                        </div>
                        <div class="flex items-center justify-between bg-gray-200 p-4 rounded-lg mb-2 hover:bg-gray-300 transition duration-300 ease-in-out">
                            <a href="#" class="flex-grow block text-black">
                                <i class="fa-solid fa-rectangle-list mr-1"></i>
                                All Questionnaires
                            </a>
                            <a href="#" class="p-2 bg-gray-300 rounded hover:bg-gray-400 transition duration-300 ease-in-out">
                                <i class="fas fa-plus text-custombg-gray text-lg"></i>
                            </a>
                        </div>
                        
                        
                        <div class="flex items-center justify-between bg-gray-200 p-4 rounded-lg mb-2 hover:bg-gray-300 transition duration-300 ease-in-out">
                            <a href="#" class="flex-grow block text-black"> 
                                <i class="fa-solid fa-user-group mr-1"></i> 
                                All Students Exam
                            </a>
                            <div class="relative">
                            
                                <a href="#" class="p-2 bg-gray-300 rounded hover:bg-gray-400 transition duration-300 ease-in-out">
                                    <i class="fa-solid fa-bell text-custombg-gray text-lg"></i>
                                </a>
                                    <span class="absolute top-0 right-0 transform translate-x-1/2 -translate-y-1/2 w-4 h-4 bg-red-600 text-white text-xs rounded-full flex items-center justify-center">
                                        1
                                    </span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-softwhite p-4 rounded-lg shadow-md">
                        <div class="flex items-center mb-4">
                            <i class="fa-solid fa-gear text-lg mr-1"></i>
                            <h2 class="text-lg font-semibold">Manage Users</h2>
                        </div>
                        <div class="flex items-center justify-between bg-gray-200 p-4 rounded-lg mb-2 hover:bg-gray-300 transition duration-300 ease-in-out">
                            <a href="#" class="flex-grow block text-black"> 
                                <i class="fas fa-users mr-1"></i> 
                                All Trainers
                            </a>
                            <a href="#" class="p-2 bg-gray-300 rounded hover:bg-gray-400 transition duration-300 ease-in-out">
                                <i class="fas fa-plus text-custombg-gray text-lg"></i>
                            </a>
                        </div>
                        <div class="flex items-center justify-between bg-gray-200 p-4 rounded-lg mb-2 hover:bg-gray-300 transition duration-300 ease-in-out">
                            <a href="#" class="flex-grow block text-black"> 
                                <i class="fa-solid fa-user-group mr-1"></i> 
                                All Students
                            </a>
                            <div class="relative">
                            
                                <a href="#" class="p-2 bg-gray-300 rounded hover:bg-gray-400 transition duration-300 ease-in-out">
                                    <i class="fa-solid fa-bell text-custombg-gray text-lg"></i>
                                </a>
                    
                                    <span class="absolute top-0 right-0 transform translate-x-1/2 -translate-y-1/2 w-4 h-4 bg-red-600 text-white text-xs rounded-full flex items-center justify-center">
                                        1
                                    </span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="flex flex-wrap w-2/3">

            <div class="w-full p-4">
                <div class="bg-gray-200 p-8">
                    <h2 class="text-xl font-semibold mb-4">Line Chart</h2>
                    <div>
                        <canvas id="styledLineChart"></canvas>
                    </div>
                </div>
            </div>

            <div class="w-full p-4">
                <div class="bg-gray-200 p-8">
                    <h2 class="text-xl font-semibold mb-4">Line Chart with Two Datasets :>></h2>
                    <div>
                        <canvas id="myLineChart"></canvas>
                    </div>
                </div>
            </div>

            <div class="w-full p-4">
                <div class="bg-gray-200 p-8">
                    <h2 class="text-xl font-semibold mb-4">Bar Chart</h2>
                    <div>
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>

            <div class="w-full p-4">
                <div class="bg-gray-200 p-8">
                    <h2 class="text-xl font-semibold mb-4">Pie Chart</h2>
                    <div class="chart-container">
                        <canvas id="myPieChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // Bar chart
        const ctx = document.getElementById('myChart');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
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

        // Line graph
        const line = document.getElementById('styledLineChart').getContext('2d');
        new Chart(line, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Dataset with Point Style',
                    data: [3, 1, 4, 5, 2, 7, 6],
                    fill: false,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    tension: 0.1,
                    pointStyle: 'rectRounded',
                    pointRadius: 7,
                    pointHoverRadius: 10,
                    pointBackgroundColor: 'rgba(75, 192, 192, 0.8)',
                    pointBorderColor: 'rgba(220, 220, 220, 1)',
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top'
                    }
                },
                scales: {
                    x: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Months'
                        }
                    },
                    y: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Value'
                        },
                        beginAtZero: true
                    }
                }
            }
        });


        // Pie Chart 
        const pie = document.getElementById('myPieChart').getContext('2d');
        const myPieChart = new Chart(pie, {
            type: 'pie',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.label + ': ' + tooltipItem.raw;
                            }
                        }
                    }
                }
            }
        });

        //Line Chart with Two Datasets
        const linewithtwo = document.getElementById('myLineChart').getContext('2d');
        const myLineChart = new Chart(linewithtwo, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [
                    {
                        label: 'Dataset 1',
                        data: [3, 1, 4, 5, 2, 7, 6],
                        borderColor: 'rgba(75, 192, 192, 1)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        fill: true, // Fill area under the line
                        pointStyle: 'circle',
                        pointRadius: 5,
                        pointHoverRadius: 8,
                    },
                    {
                        label: 'Dataset 2',
                        data: [1, 3, 2, 5, 7, 3, 4],
                        borderColor: 'rgba(255, 99, 132, 1)',
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        fill: true, // Fill area under the line
                        pointStyle: 'rectRounded',
                        pointRadius: 5,
                        pointHoverRadius: 8,
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    title: {
                        display: true,
                        text: 'Line Chart with Point Styling',
                        font: {
                            size: 18
                        }
                    },
                    legend: {
                        position: 'top',
                    }
                },
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Months'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Values',
                            // You can customize the title and appearance here
                        },
                        beginAtZero: true,
                    }
                }
            }
        });
    </script>
@endsection
