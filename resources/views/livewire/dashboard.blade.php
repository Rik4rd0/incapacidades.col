<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>incapacidades.col - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            overflow: hidden; /* Deshabilita el scroll */
            height: 100%; /* Asegura que el cuerpo ocupe toda la altura */
            width: 100%; /* Asegura que el cuerpo ocupe toda la anchura */
            background-color: white;
        }
        
        .dashboard-wrapper {
            display: flex;
            height: 100vh; /* 100% del viewport height */
            width: 100%;
            position: fixed; /* Fija la posición */
            top: 0;
            left: 0;
        }
        
        .content-area {
            height: 100%;
            overflow: hidden; /* Previene scroll interno */
            position: relative;
        }
        
        .phone-container {
            position: relative;
            width: 100%;
            max-width: 280px; 
            height: 500px; 
            background: #000;
            border-radius: 40px;
            padding: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            margin: 0 auto;
            top: -90px;
        }
        
        @media (max-height: 700px) {
            .phone-container {
                height: 400px;
                max-width: 220px;
            }
            
            .text-sizing-dynamic {
                font-size: 90%; /* Reducir tamaño de texto en pantallas cortas */
            }
        }
        
        @media (max-width: 768px) {
            .dashboard-content {
                flex-direction: column;
            }
            
            .left-content, .right-content {
                width: 100%;
            }
            
            .left-content {
                height: 45%; /* Asignar menos espacio en móviles */
            }
            
            .right-content {
                height: 55%; /* Asignar más espacio en móviles */
            }
            
            .phone-container {
              margin: 0 auto;
              height: 450px;
              max-width: 190px;
            }
            
            .action-buttons {
                position: absolute; 
                top: 10px;
                right: 10px;
                z-index: 20;
            }
        }
        
        .phone-screen {
            width: 100%;
            height: 100%;
            background: white;
            border-radius: 32px;
            overflow: hidden;
            position: relative;
        }
        
        /* Ajuste de la curva roja para que coincida con la imagen */
        .red-curve {
            position: absolute;
            bottom: 0;
            left: 45%; /* Ajuste para curvar más hacia la izquierda */
            width: 95%; /* Incremento del ancho para mayor curvatura */
            height: 100%; /* Incremento de la altura para mayor curvatura */
            z-index: 0;
            pointer-events: none;
        }
        
        .button-rounded {
            border-radius: 40px;
            padding: 8px 16px;
            white-space: nowrap;
            font-size: 14px;
        }
        
        /* Media query para pantallas muy pequeñas */
        @media (max-height: 600px) {
            .vertical-spacing {
                margin-top: 0.5rem !important;
                margin-bottom: 0.5rem !important;
            }
            
            h2.text-2xl {
                font-size: 1.25rem;
            }
            
            .phone-container {
                height: 320px;
                max-width: 170px;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard-wrapper">
        <!-- Sidebar space -->
        <div class="w-64 h-full"></div>
        
        <!-- Contenido principal -->
        <div class="ml-0 flex-1 relative content-area">
            <!-- Curva roja SVG -->
            <svg class="red-curve" viewBox="0 0 1000 1000" preserveAspectRatio="none">
                <path d="M1000,500 L1000,1000 L0,1000 C300,800 500,600 500,400 C500,200 800,200 1000,500 Z" fill="#b91c1c" />
            </svg>
            
            <!-- Main content area -->
            <div class="w-full h-full p-4 relative">
                <!-- Botones superiores -->
                <div class="flex justify-end mb-2 sm:mb-4 relative z-10 action-buttons">
                  <button class="button-rounded bg-gray-400 text-white px-4 sm:px-6 py-2 sm:py-3 mr-3 text-sm sm:text-base shadow-lg">Gestión Auditoría Interna</button>
                  <button class="button-rounded bg-red-700 text-white px-4 sm:px-6 py-2 sm:py-3 text-sm sm:text-base shadow-lg">Actualización Manual</button>
                </div>
                
                <!-- Contenido principal -->
                <div class="flex flex-col md:flex-row items-center justify-between h-full pt-12 md:pt-0 dashboard-content">
                    <div class="left-content w-full md:w-1/2 relative z-10 text-sizing-dynamic">
                        <div class="mb-8 md:mb-12 lg:mb-16 text-left">
                          <div class="text-5xl md:text-6xl lg:text-7xl text-gray-700 font-light">
                          incapacidades<span class="text-red-600">.col</span>
                          <span class="text-red-600 text-lg md:text-xl lg:text-2xl align-top">®</span>
                          </div>
                        </div>
                        
                        <div class="mt-8 md:mt-12 lg:mt-12 vertical-spacing text-left">
                          <h2 class="text-xl md:text-2xl lg:text-3xl font-bold text-gray-800 uppercase">DASHBOARD DE GESTIÓN EN</h2>
                          <h2 class="text-xl md:text-2xl lg:text-3xl font-bold text-gray-800 uppercase">TIEMPO REAL</h2>
                          
                          <p class="text-gray-500 mt-2 md:mt-3 text-sm md:text-base">
                          Verifique los indicadores de nuestra gestión y<br class="hidden md:block">
                          cumplimiento de los procesos
                          </p>
                        </div>
                    </div>
                    
                    <div class="right-content w-full md:w-1/2 flex justify-center md:justify-end items-center relative z-10">
                        <div class="phone-container">
                            <div class="phone-screen">
                                <canvas id="barChart" style="padding: 20px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        // Configuración del gráfico
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('barChart').getContext('2d');
            const barChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['ENE', 'FEB', 'MAR', 'ABR', 'MAY'],
                    datasets: [{
                        data: [4.3, 5.0, 4.0, 3.5, 2.3],
                        backgroundColor: Array(5).fill('#b91c1c'),
                        borderWidth: 0,
                        barThickness: 15,
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return context.parsed.y + 'M';
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 6,
                            ticks: {
                                stepSize: 1,
                                callback: function(value) {
                                    return value + 'M';
                                }
                            },
                            grid: {
                                color: '#e5e7eb'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>