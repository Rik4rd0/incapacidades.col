<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>incapacidades.col - Recepción de Incapacidades</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Contenido principal -->
        <div class="ml-64 w-full p-6">
            <!-- Indicadores superiores -->
            <div class="grid grid-cols-6 gap-4 mb-4 text-xs">
                <div class="bg-white p-2 rounded-lg shadow text-center my-4">
                    <p class="text-red-500 font-medium text-xs">No. Total Incapacidades Recibidas</p>
                    <p class="text-lg font-semibold text-gray-800">927</p>
                </div>
                <div class="bg-white p-2 rounded-lg shadow text-center my-4">
                    <p class="text-red-500 font-medium text-xs">($) Valor Total Incapacidades Recibidas</p>
                    <p class="text-lg font-semibold text-gray-800">$307.694.777</p>
                </div>
                <div class="bg-white p-2 rounded-lg shadow text-center flex items-center justify-center my-4">
                    <p class="text-red-500 font-medium text-xs">Por Empresa</p>
                    <i class="fas fa-chart-bar text-gray-600 text-lg ml-2"></i>
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

                <div class="bg-white p-2 rounded-lg shadow text-center my-4">
                    <p class="text-red-500 font-medium text-xs">Ver</p>
                    <select class="text-gray-800 font-medium text-xs border-none focus:outline-none">
                        <option>Valor (#)</option>
                        <option>Valor ($)</option>
                        <option>Valor (%)</option>
                    </select>
                </div>

            </div>

            
            <!-- Gráficos principales - 2 columnas -->
            <div class="grid grid-cols-2 gap-4 mb-6">
                <!-- Calendario de recepción de incapacidades -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <h2 class="text-red-500 font-semibold mb-4 text-center">Calendario de recepción de Incapacidades</h2>
                    <div class="mb-2 text-center text-gray-700 font-medium" id="calendar-header"></div>
                    <div class="grid grid-cols-7 gap-1 text-center text-sm">
                        <div class="font-semibold">Sun</div>
                        <div class="font-semibold">Mon</div>
                        <div class="font-semibold">Tue</div>
                        <div class="font-semibold">Wed</div>
                        <div class="font-semibold">Thu</div>
                        <div class="font-semibold">Fri</div>
                        <div class="font-semibold">Sat</div>
                        <div id="calendar-days" class="col-span-7 grid grid-cols-7 gap-1"></div>
                    </div>
                </div>
                <script>
                    const calendarHeader = document.getElementById('calendar-header');
                    const calendarDays = document.getElementById('calendar-days');
                    const today = new Date();
                    let currentMonth = today.getMonth();
                    let currentYear = today.getFullYear();

                    function renderCalendar(month, year) {
                        calendarDays.innerHTML = '';
                        const firstDay = new Date(year, month, 1).getDay();
                        const daysInMonth = new Date(year, month + 1, 0).getDate();

                        calendarHeader.textContent = new Date(year, month).toLocaleString('default', { month: 'long', year: 'numeric' });

                        // Empty cells for previous month
                        for (let i = 0; i < firstDay; i++) {
                            const emptyCell = document.createElement('div');
                            calendarDays.appendChild(emptyCell);
                        }

                        // Days with data
                        for (let day = 1; day <= daysInMonth; day++) {
                            const dayCell = document.createElement('div');
                            dayCell.className = 'p-2 border';
                            dayCell.textContent = day;

                            // Example: Add random data for demonstration
                            const randomValue = Math.floor(Math.random() * 100);
                            if (randomValue > 70) {
                                dayCell.classList.add('bg-red-300');
                                dayCell.innerHTML += `<div class="text-xs">${randomValue}</div>`;
                            } else if (randomValue > 40) {
                                dayCell.classList.add('bg-orange-300');
                                dayCell.innerHTML += `<div class="text-xs">${randomValue}</div>`;
                            } else if (randomValue > 10) {
                                dayCell.classList.add('bg-yellow-200');
                                dayCell.innerHTML += `<div class="text-xs">${randomValue}</div>`;
                            } else {
                                dayCell.classList.add('bg-green-200');
                                dayCell.innerHTML += `<div class="text-xs">${randomValue}</div>`;
                            }

                            calendarDays.appendChild(dayCell);
                        }
                    }

                    renderCalendar(currentMonth, currentYear);
                </script>

                <div class="bg-white p-4 rounded-lg shadow">
                    <h2 class="text-red-500 font-semibold mb-4 text-center">Valor (#) por Estado Actual</h2>
                    <div class="relative h-96">
                        <canvas id="estadoActualChart"></canvas>
                    </div>
                </div>
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const ctx = document.getElementById('estadoActualChart').getContext('2d');
                        const estadoActualChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: ['EMPRESA', 'RADICADA', 'POR RADICAR', 'SOLICITUD DE PAGO', 'PAGADA', 'POR RADICAR / INCOMPLETAS', 'RECHAZADA', 'NEGADA', 'EMPRESA-RADICADA', 'PAGO DIRECTO'],
                                datasets: [{
                                    label: 'Valor (#)',
                                    data: [515, 352, 18, 12, 9, 9, 9, 3, 0, 0],
                                    backgroundColor: [
                                        '#f87171', '#fb923c', '#facc15', '#4ade80', '#60a5fa', '#818cf8', '#a78bfa', '#f472b6', '#94a3b8', '#cbd5e1'
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                indexAxis: 'y',
                                responsive: true,
                                maintainAspectRatio: false,
                                scales: {
                                    x: {
                                        beginAtZero: true,
                                        title: {
                                            display: true,
                                            text: 'Valor (#)',
                                            color: '#ef4444',
                                            font: {
                                                size: 12,
                                                weight: 'bold'
                                            }
                                        },
                                        ticks: {
                                            color: '#374151'
                                        }
                                    },
                                    y: {
                                        title: {
                                            display: true,
                                            text: 'Estado Actual',
                                            color: '#ef4444',
                                            font: {
                                                size: 12,
                                                weight: 'bold'
                                            }
                                        },
                                        ticks: {
                                            color: '#374151'
                                        }
                                    }
                                },
                                plugins: {
                                    legend: {
                                        display: false
                                    }
                                }
                            }
                        });
                    });
                </script>

            <div class="bg-white p-4 rounded-lg shadow">
                <h2 class="text-red-500 font-semibold mb-4 text-center">Valor (#) por Entidad Responsable</h2>
                <div class="relative h-96">
                    <canvas id="entidadResponsableChart"></canvas>
                </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const ctxEntidad = document.getElementById('entidadResponsableChart').getContext('2d');
                    const entidadResponsableChart = new Chart(ctxEntidad, {
                        type: 'bar',
                        data: {
                            labels: ['Salud Total S.A.', 'EPS Sura', 'Nueva EPS', 'E.P.S Sanitas', 'Mutual Ser', 'Famisanar', 'Compensar', 'Coosalud E.S.S.', 'S.O.S. S.A. EPS', 'Cajacopi Atl. EPS', 'ARL BOLIVAR', 'ARL Sura', 'Aliansalud EPS'],
                            datasets: [{
                                label: 'Valor (#)',
                                data: [225, 171, 145, 92, 82, 72, 43, 27, 20, 14, 9, 7, 5],
                                backgroundColor: [
                                    '#f87171', '#fb923c', '#facc15', '#4ade80', '#60a5fa', '#818cf8', '#a78bfa', '#f472b6', '#94a3b8', '#cbd5e1', '#fca5a5', '#fdba74', '#fde047'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            indexAxis: 'y',
                            responsive: true,
                            maintainAspectRatio: false,
                            scales: {
                                x: {
                                    beginAtZero: true,
                                    title: {
                                        display: true,
                                        text: 'Valor (#)',
                                        color: '#ef4444',
                                        font: {
                                            size: 12,
                                            weight: 'bold'
                                        }
                                    },
                                    ticks: {
                                        color: '#374151'
                                    }
                                },
                                y: {
                                    title: {
                                        display: true,
                                        text: 'Entidad Responsable',
                                        color: '#ef4444',
                                        font: {
                                            size: 12,
                                            weight: 'bold'
                                        }
                                    },
                                    ticks: {
                                        color: '#374151'
                                    }
                                }
                            },
                            plugins: {
                                legend: {
                                    display: false
                                }
                            }
                        }
                    });
                });
            </script>
            <div class="bg-white p-4 rounded-lg shadow">
                <h2 class="text-red-500 font-semibold mb-4 text-center">Valor (#) por Edad al Recibir Rango</h2>
                <div class="relative h-96">
                    <canvas id="edadRangoChart"></canvas>
                </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const ctxEdadRango = document.getElementById('edadRangoChart').getContext('2d');
                    const edadRangoChart = new Chart(ctxEdadRango, {
                        type: 'bar',
                        data: {
                            labels: ['0 a 5 Días', '6 a 15 Días', '16 a 30 Días', 'Más de 30 Días'],
                            datasets: [{
                                label: 'Valor (#)',
                                data: [361, 394, 115, 57],
                                backgroundColor: '#f87171',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            indexAxis: 'y',
                            responsive: true,
                            maintainAspectRatio: false,
                            scales: {
                                x: {
                                    beginAtZero: true,
                                    title: {
                                        display: true,
                                        text: 'Valor (#)',
                                        color: '#ef4444',
                                        font: {
                                            size: 12,
                                            weight: 'bold'
                                        }
                                    },
                                    ticks: {
                                        color: '#374151'
                                    }
                                },
                                y: {
                                    title: {
                                        display: true,
                                        text: 'Edad al Recibir Rango',
                                        color: '#ef4444',
                                        font: {
                                            size: 12,
                                            weight: 'bold'
                                        }
                                    },
                                    ticks: {
                                        color: '#374151'
                                    }
                                }
                            },
                            plugins: {
                                legend: {
                                    display: false
                                }
                            }
                        }
                    });
                });
            </script>

            <div class="bg-white p-4 rounded-lg shadow">
                <h2 class="text-red-500 font-semibold mb-4 text-center">Valor (#) por Origen</h2>
                <div class="relative h-96">
                    <canvas id="origenChart"></canvas>
                </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const ctxOrigen = document.getElementById('origenChart').getContext('2d');
                    const origenChart = new Chart(ctxOrigen, {
                        type: 'bar',
                        data: {
                            labels: ['Enfermedad General', 'Accidente Transito', 'Accidente Laboral', 'Licencia de Maternidad', 'Licencia de Paternidad'],
                            datasets: [{
                                label: 'Valor (#)',
                                data: [841, 49, 16, 12, 9],
                                backgroundColor: '#f87171',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            indexAxis: 'y',
                            responsive: true,
                            maintainAspectRatio: false,
                            scales: {
                                x: {
                                    beginAtZero: true,
                                    title: {
                                        display: true,
                                        text: 'Valor (#)',
                                        color: '#ef4444',
                                        font: {
                                            size: 12,
                                            weight: 'bold'
                                        }
                                    },
                                    ticks: {
                                        color: '#374151'
                                    }
                                },
                                y: {
                                    title: {
                                        display: true,
                                        text: 'Origen',
                                        color: '#ef4444',
                                        font: {
                                            size: 12,
                                            weight: 'bold'
                                        }
                                    },
                                    ticks: {
                                        color: '#374151'
                                    }
                                }
                            },
                            plugins: {
                                legend: {
                                    display: false
                                }
                            }
                        }
                    });
                });
            </script>

            <div class="bg-white p-4 rounded-lg shadow">
                <h2 class="text-red-500 font-semibold mb-4 text-center">Valor (#) por Vía de Atención</h2>
                <div class="relative h-96">
                    <canvas id="viaAtencionChart"></canvas>
                </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const ctxViaAtencion = document.getElementById('viaAtencionChart').getContext('2d');
                    const viaAtencionChart = new Chart(ctxViaAtencion, {
                        type: 'bar',
                        data: {
                            labels: ['Red de EPS', 'Poliza de Salud'],
                            datasets: [{
                                label: 'Valor (#)',
                                data: [805, 122],
                                backgroundColor: '#f87171',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            indexAxis: 'y',
                            responsive: true,
                            maintainAspectRatio: false,
                            scales: {
                                x: {
                                    beginAtZero: true,
                                    title: {
                                        display: true,
                                        text: 'Valor (#)',
                                        color: '#ef4444',
                                        font: {
                                            size: 12,
                                            weight: 'bold'
                                        }
                                    },
                                    ticks: {
                                        color: '#374151'
                                    }
                                },
                                y: {
                                    title: {
                                        display: true,
                                        text: 'Vía de Atención',
                                        color: '#ef4444',
                                        font: {
                                            size: 12,
                                            weight: 'bold'
                                        }
                                    },
                                    ticks: {
                                        color: '#374151'
                                    }
                                }
                            },
                            plugins: {
                                legend: {
                                    display: false
                                }
                            }
                        }
                    });
                });
            </script>
    
    <div class="flex justify-start space-x-2 mt-4">
        <button class="bg-red-500 text-white px-4 py-2 rounded-full hover:bg-red-600 focus:outline-none">
            Vista Calendario
        </button>
        <button class="border border-red-500 text-red-500 px-4 py-2 rounded-full hover:bg-red-100 focus:outline-none">
            Vista Mensual
        </button>
    </div>
</body>
</html>
