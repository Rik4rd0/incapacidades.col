<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>incapacidades.col - Saldos de Entidades</title>
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
                    <p class="text-red-500 font-medium text-xs">$ Valor Total</p>
                    <p class="text-lg font-semibold text-gray-800">$42.514.544.265s</p>
                </div>
                <div class="bg-white p-2 rounded-lg shadow text-center my-4">
                    <p class="text-red-500 font-medium text-xs">Año</p>
                    <select class="text-gray-800 font-medium text-xs border-none focus:outline-none">
                        <option>2023</option>
                        <option>2024</option>
                        <option>2025</option>
                        <option>2026</option>
                        <option>2027</option>
                    </select>
                </div>
                <div class="bg-white p-2 rounded-lg shadow text-center my-4">
                    <p class="text-red-500 font-medium text-xs">Mes</p>
                    <select class="text-gray-800 font-medium text-xs border-none focus:outline-none">
                        <option>enero</option>
                        <option>febrero</option>
                        <option>marzo</option>
                        <option>abril</option>
                        <option>mayo</option>
                        <option>junio</option>
                        <option>julio</option>
                        <option>agosto</option>
                        <option>septiembre</option>
                        <option>octubre</option>
                        <option>noviembre</option>
                        <option>diciembre</option>
                    </select>
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
                <div class="bg-white p-2 rounded-lg shadow text-center flex items-center justify-center my-4">
                    <p class="text-red-500 font-medium text-xs">Por Empresa</p>
                    <i class="fas fa-chart-bar text-gray-600 text-lg ml-2"></i>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-6">
                <!-- Gráfica 1: Valor ($) por Año y Estado Incapacidad -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <canvas id="chartByYearAndState"></canvas>
                </div>

                <!-- Gráfica 2: Valor ($) por Rango Días Pago -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <canvas id="chartByPaymentRange"></canvas>
                </div>

                <!-- Gráfica 3: Valor ($) por Entidad Responsable y Estado Incapacidad -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <canvas id="chartByEntityAndState"></canvas>
                </div>
            </div>

            <script>
                // Gráfica 1: Valor ($) por Año y Estado Incapacidad
                const ctx1 = document.getElementById('chartByYearAndState').getContext('2d');
                new Chart(ctx1, {
                    type: 'bar',
                    data: {
                        labels: ['2018', '2019', '2020', '2021', '2022', '2023', '2024'],
                        datasets: [
                            { label: 'Pagadas', data: [463780746, 913317141, 3049354079, 7495161385, 10916388805, 10031502916, 6806624728], backgroundColor: '#f87171' },
                            { label: 'Pendientes', data: [0, 0, 0, 0, 0, 0, 0], backgroundColor: '#34d399' },
                            { label: 'Sin Reconocimiento', data: [0, 0, 0, 0, 0, 0, 0], backgroundColor: '#fbbf24' }
                        ]
                    },
                    options: {
                        responsive: true,
                        plugins: { legend: { position: 'top' } },
                        scales: { y: { beginAtZero: true } }
                    }
                });

                // Gráfica 2: Valor ($) por Rango Días Pago
                const ctx2 = document.getElementById('chartByPaymentRange').getContext('2d');
                new Chart(ctx2, {
                    type: 'bar',
                    data: {
                        labels: ['0 y 90 Días', '91 y 120 Días', '121 y 150 Días', '151 y 180 Días', '181 y 210 Días', 'Más de 210 Días'],
                        datasets: [
                            { label: 'Valor ($)', data: [22009556299, 1018884282, 644003759, 484775243, 336700469, 2181067523], backgroundColor: '#f87171' }
                        ]
                    },
                    options: {
                        responsive: true,
                        plugins: { legend: { display: false } },
                        scales: { y: { beginAtZero: true } }
                    }
                });

                // Gráfica 3: Valor ($) por Entidad Responsable y Estado Incapacidad
                const ctx3 = document.getElementById('chartByEntityAndState').getContext('2d');
                new Chart(ctx3, {
                    type: 'bar',
                    data: {
                        labels: ['EPS Sura', 'Salud Total S.A.', 'E.P.S Sanitas', 'Nueva EPS', 'Famisanar', 'Mutual Ser', 'Aliansalud EPS', 'Coomeva EPS', 'Seguros Bolívar S.A.'],
                        datasets: [
                            { label: 'Pagadas', data: [6960526069, 6878601892, 6734571125, 4890391875, 3356383824, 2084277759, 1860363953, 1153736202, 1070313833], backgroundColor: '#f87171' },
                            { label: 'Pendientes', data: [0, 0, 0, 0, 0, 0, 0, 0, 0], backgroundColor: '#34d399' },
                            { label: 'Sin Reconocimiento', data: [0, 0, 0, 0, 0, 0, 0, 0, 0], backgroundColor: '#fbbf24' }
                        ]
                    },
                    options: {
                        responsive: true,
                        plugins: { legend: { position: 'top' } },
                        scales: { y: { beginAtZero: true } }
                    }
                });
            </script>

            <!-- Botones inferiores -->
            <div class="flex justify-between items-center">
                <div class="flex gap-4">
                    <button class="bg-red-600 text-white px-6 py-2 rounded-full">Fecha Recepción</button>
                    <button class="border border-red-600 text-red-600 px-6 py-2 rounded-full">Fecha Inicio</button>
                </div>
                <div>
                    <img src="../assets/img/logos/incapacidades-col-logo.png" alt="incapacidades.col" class="h-8">
                </div>
            </div>
        </div>
    </div>

    <script>
        // Podemos añadir scripts adicionales para interactividad si es necesario
    </script>
</body>
</html>
