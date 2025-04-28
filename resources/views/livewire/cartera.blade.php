<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>incapacidades.col - Recaudo de Cartera</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Contenido principal -->
        <div class="ml-64 w-full p-6">
            <!-- Indicadores superiores -->
            <div class="grid grid-cols-5 gap-4 mb-6 text-xs">
            <div class="bg-white p-2 rounded-lg shadow text-center my-3">
                    <p class="text-red-500 font-medium text-xs">$ Valor Total Recepción</p>
                    <p class="text-lg font-semibold text-gray-800">$42.514.544.265</p>
                </div>
                <div class="bg-white p-2 rounded-lg shadow text-center my-3">
                    <p class="text-red-500 font-medium text-xs">$ Valor Total Recaudado</p>
                    <p class="text-lg font-semibold text-gray-800">$27.206.567.565</p>
                </div>
                <div class="bg-white p-2 rounded-lg shadow text-center flex items-center justify-center my-4">
                    <p class="text-red-500 font-medium text-xs">Por Empresa</p>
                    <i class="fas fa-chart-bar text-gray-600 text-lg ml-2"></i>
                </div>
                <div class="col-span-2">
                    <div class="bg-white p-4 rounded-lg shadow w-3/4 mx-auto">
                        <p class="text-red-500 text-sm mb-2 text-center">Ver</p>
                        <div class="flex items-center justify-center gap-4">
                            <button class="px-3 py-1 rounded-md cursor-pointer bg-gray-700 text-white" onclick="selectOption(this)">Valor (#)</button>
                            <button class="px-3 py-1 rounded-md cursor-pointer hover:bg-gray-100" onclick="selectOption(this)">Valor ($)</button>
                            <button class="px-3 py-1 rounded-md cursor-pointer hover:bg-gray-100" onclick="selectOption(this)">Valor (%)</button>
                        </div>
                    </div>
                </div>

                <script>
                    function selectOption(button) {
                        // Remove active state from all buttons
                        const buttons = button.parentElement.querySelectorAll('button');
                        buttons.forEach(btn => {
                            btn.classList.remove('bg-gray-700', 'text-white');
                            btn.classList.add('hover:bg-gray-100');
                        });

                        // Add active state to the clicked button
                        button.classList.add('bg-gray-700', 'text-white');
                        button.classList.remove('hover:bg-gray-100');
                    }
                </script>
            </div>

            <!-- Gráficos -->
            <div class="grid grid-cols-2 gap-6">
                <!-- Gráfico de barras apiladas con línea -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <canvas id="stackedBarChartWithLine"></canvas>
                </div>

                <!-- Gráfico de barras horizontales -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <canvas id="horizontalBarChart"></canvas>
                </div>
            </div>

            <script>
                // Gráfico de barras apiladas con línea
                const stackedBarWithLineCtx = document.getElementById('stackedBarChartWithLine').getContext('2d');
                new Chart(stackedBarWithLineCtx, {
                    type: 'bar',
                    data: {
                        labels: ['2018', '2019', '2020', '2021', '2022', '2023', '2024'],
                        datasets: [
                            { 
                                label: 'Categoría 1', 
                                data: [0, 415.73, 1728.29, 4923.5, 7259.26, 4481.87, 5248.48], 
                                backgroundColor: '#f87171' 
                            },
                            { 
                                label: 'Categoría 2', 
                                data: [0, 0, 0, 0, 0, 0, 0], 
                                backgroundColor: '#60a5fa' 
                            },
                            { 
                                label: 'Categoría 3', 
                                data: [0, 0, 0, 0, 0, 0, 0], 
                                backgroundColor: '#fbbf24' 
                            },
                            { 
                                label: 'Valor Incapacidad Depurado', 
                                data: [0, 0, 0, 0, 7259.26, 4481.87, 5248.48], 
                                type: 'line', 
                                borderColor: '#e11d48', 
                                backgroundColor: 'rgba(225, 29, 72, 0.2)', 
                                borderWidth: 2, 
                                tension: 0.4, 
                                fill: true 
                            }
                        ]
                    },
                    options: {
                        plugins: { 
                            legend: { position: 'top' } 
                        },
                        responsive: true,
                        scales: {
                            x: { stacked: true },
                            y: { 
                                stacked: true, 
                                beginAtZero: true,
                                ticks: {
                                    callback: function(value) {
                                        return value + ' mil'; // Formato de los valores en el eje Y
                                    }
                                }
                            }
                        }
                    }
                });

                // Gráfico de barras horizontales
                const horizontalBarCtx = document.getElementById('horizontalBarChart').getContext('2d');
                new Chart(horizontalBarCtx, {
                    type: 'bar',
                    data: {
                        labels: ['Enfermedad General', 'Accidente Laboral', 'Accidente Tránsito', 'Licencia de Maternidad', 'Licencia de Paternidad', '(En blanco)'],
                        datasets: [
                            { label: 'Valor (#)', data: [73599, 3786, 3149, 1764, 1682, 14], backgroundColor: '#f87171' }
                        ]
                    },
                    options: {
                        indexAxis: 'y',
                        plugins: { legend: { display: false } },
                        responsive: true,
                        scales: {
                            x: { beginAtZero: true },
                            y: { beginAtZero: true }
                        }
                    }
                });
            </script>
            <!-- Gráficos adicionales -->
            <div class="grid grid-cols-3 gap-6 mt-6">
                <!-- Gráfico de barras horizontales por rango de días -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <canvas id="horizontalBarChartDaysRange"></canvas>
                </div>

                <!-- Gráfico de barras horizontales por estado trámite -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <canvas id="horizontalBarChartStatus"></canvas>
                </div>

                <!-- Gráfico de barras horizontales por entidad responsable -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <canvas id="horizontalBarChartEntity"></canvas>
                </div>
            </div>

            <!-- Botones inferiores -->
            <div class="flex justify-between items-center mt-6">
                <div class="flex gap-4">
                    <button class="bg-red-600 text-white px-6 py-2 rounded-full">Fecha Recepción</button>
                    <button class="border border-red-600 text-red-600 px-6 py-2 rounded-full">Fecha Inicio</button>
                </div>
                <div>
                    <img src="../assets/img/logos/logo-i.png" alt="incapacidades.col" class="h-8">
                </div>
            </div>

            <script>
                // Gráfico de barras horizontales por rango de días
                const horizontalBarDaysRangeCtx = document.getElementById('horizontalBarChartDaysRange').getContext('2d');
                new Chart(horizontalBarDaysRangeCtx, {
                    type: 'bar',
                    data: {
                        labels: ['(En blanco)', '0 y 90 Días', '91 y 120 Días', '121 y 150 Días', '151 y 180 Días', 'Más de 210 Días'],
                        datasets: [
                            { label: 'Valor (#)', data: [0, 38461, 1569, 1004, 809, 3273], backgroundColor: '#f87171' }
                        ]
                    },
                    options: {
                        indexAxis: 'y',
                        plugins: { legend: { display: false } },
                        responsive: true,
                        scales: {
                            x: { beginAtZero: true },
                            y: { beginAtZero: true }
                        }
                    }
                });

                // Gráfico de barras horizontales por estado trámite
                const horizontalBarStatusCtx = document.getElementById('horizontalBarChartStatus').getContext('2d');
                new Chart(horizontalBarStatusCtx, {
                    type: 'bar',
                    data: {
                        labels: ['PAGADA', 'NEGADA', 'RADICADA', 'RECHAZADA', 'SOLICITUD DE PAGO', 'POR RADICAR', 'PAGO DIRECTO'],
                        datasets: [
                            { label: 'Valor (#)', data: [45869, 16874, 13970, 6089, 776, 299, 117], backgroundColor: '#f87171' }
                        ]
                    },
                    options: {
                        indexAxis: 'y',
                        plugins: { legend: { display: false } },
                        responsive: true,
                        scales: {
                            x: { beginAtZero: true },
                            y: { beginAtZero: true }
                        }
                    }
                });

                // Gráfico de barras horizontales por entidad responsable
                const horizontalBarEntityCtx = document.getElementById('horizontalBarChartEntity').getContext('2d');
                new Chart(horizontalBarEntityCtx, {
                    type: 'bar',
                    data: {
                        labels: ['Salud Total S.A.', 'EPS Sura', 'Nueva EPS', 'E.P.S Sanitas', 'Famisanar', 'Compensar', 'Mutual Ser', 'Coomeva EPS', 'ARL Sura', 'Coosalud E.S.S.', 'S.O.S. S.A. EPS'],
                        datasets: [
                            { label: 'Valor (#)', data: [14403, 14283, 11285, 11030, 8658, 3902, 3855, 2309, 1890, 1866, 1759], backgroundColor: '#f87171' }
                        ]
                    },
                    options: {
                        indexAxis: 'y',
                        plugins: { legend: { display: false } },
                        responsive: true,
                        scales: {
                            x: { beginAtZero: true },
                            y: { beginAtZero: true }
                        }
                    }
                });
            </script>

    <script>
        // Podemos añadir scripts adicionales para interactividad si es necesario
    </script>
</body>
</html>