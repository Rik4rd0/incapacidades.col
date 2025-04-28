<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>incapacidades.col - Análisis de Gestión</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Contenido principal -->
        <div class="ml-64 w-full p-6">
            <!-- Encabezado y controles de filtro -->
            <div class="grid grid-cols-7 gap-4 mb-6">
                <div class="col-span-3">
                    <div class="bg-white p-4 rounded-lg shadow">
                        <p class="text-red-500 font-semibold text-lg">Reporte de Edad (Actual) de las incapacidades</p>
                    </div>
                </div>
                <div class="col-span-3">
                    <div class="bg-white p-4 rounded-lg shadow">
                        <p class="text-gray-500 text-sm">Ver</p>
                        <div class="flex items-center gap-2 mt-2">
                            <span class="px-3 py-1 rounded-md cursor-pointer hover:bg-gray-100">Valor (#)</span>
                            <span class="px-3 py-1 bg-gray-700 text-white rounded-md">Valor ($)</span>
                            <span class="px-3 py-1 rounded-md cursor-pointer hover:bg-gray-100">Valor (%)</span>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="bg-white p-4 rounded-lg shadow">
                        <p class="text-gray-500 text-sm">Estado Incapacidad</p>
                        <div class="flex items-center mt-2">
                            <span class="text-sm font-medium">2. PENDIENTES</span>
                            <i class="fas fa-chevron-down ml-2"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tabla de datos de incapacidades -->
            <div class="bg-white rounded-lg shadow mb-6 overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 text-sm">
                    <thead class="bg-gray-100">
                        <tr class="text-center">
                            <th class="px-3 py-2 text-center">Edad Inc Rango</th>
                            <th colspan="2" class="px-3 py-2 text-center">1) 0 y 90 Días</th>
                            <th colspan="2" class="px-3 py-2 text-center">2) 91 y 180 Días</th>
                            <th colspan="2" class="px-3 py-2 text-center">3) 181 y 360 Días</th>
                            <th colspan="2" class="px-3 py-2 text-center">4) Superior a 360 Días</th>
                            <th colspan="2" class="px-3 py-2 text-center">Total</th>
                        </tr>
                        <tr>
                            <th class="px-3 py-2 text-left">Nombre Entidades</th>
                            <th class="px-3 py-2 text-center"># Total Inc</th>
                            <th class="px-3 py-2 text-center">$ Total Inc</th>
                            <th class="px-3 py-2 text-center"># Total Inc</th>
                            <th class="px-3 py-2 text-center">$ Total Inc</th>
                            <th class="px-3 py-2 text-center"># Total Inc</th>
                            <th class="px-3 py-2 text-center">$ Total Inc</th>
                            <th class="px-3 py-2 text-center"># Total Inc</th>
                            <th class="px-3 py-2 text-center">$ Total Inc</th>
                            <th class="px-3 py-2 text-center"># Total Inc</th>
                            <th class="px-3 py-2 text-center">$ Total Inc</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50">
                            <td class="px-3 py-2">Salud Total S.A.</td>
                            <td class="px-3 py-2 text-center">212</td>
                            <td class="px-3 py-2 text-right">$111.216.296</td>
                            <td class="px-3 py-2 text-center">264</td>
                            <td class="px-3 py-2 text-right">$110.338.084</td>
                            <td class="px-3 py-2 text-center">287</td>
                            <td class="px-3 py-2 text-right">$150.731.181</td>
                            <td class="px-3 py-2 text-center">3128</td>
                            <td class="px-3 py-2 text-right">$1.181.948.798</td>
                            <td class="px-3 py-2 text-center font-bold">3891</td>
                            <td class="px-3 py-2 text-right font-bold">$1.554.234.359</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-3 py-2">EPS Sura</td>
                            <td class="px-3 py-2 text-center">137</td>
                            <td class="px-3 py-2 text-right">$63.061.810</td>
                            <td class="px-3 py-2 text-center">132</td>
                            <td class="px-3 py-2 text-right">$69.183.019</td>
                            <td class="px-3 py-2 text-center">252</td>
                            <td class="px-3 py-2 text-right">$134.916.009</td>
                            <td class="px-3 py-2 text-center">2356</td>
                            <td class="px-3 py-2 text-right">$965.643.538</td>
                            <td class="px-3 py-2 text-center font-bold">2877</td>
                            <td class="px-3 py-2 text-right font-bold">$1.232.804.376</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-3 py-2">E.P.S Sanitas</td>
                            <td class="px-3 py-2 text-center">79</td>
                            <td class="px-3 py-2 text-right">$43.857.472</td>
                            <td class="px-3 py-2 text-center">65</td>
                            <td class="px-3 py-2 text-right">$36.632.902</td>
                            <td class="px-3 py-2 text-center">122</td>
                            <td class="px-3 py-2 text-right">$77.522.836</td>
                            <td class="px-3 py-2 text-center">2375</td>
                            <td class="px-3 py-2 text-right">$942.692.531</td>
                            <td class="px-3 py-2 text-center font-bold">2641</td>
                            <td class="px-3 py-2 text-right font-bold">$1.100.705.741</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-3 py-2">Nueva EPS</td>
                            <td class="px-3 py-2 text-center">118</td>
                            <td class="px-3 py-2 text-right">$44.902.848</td>
                            <td class="px-3 py-2 text-center">112</td>
                            <td class="px-3 py-2 text-right">$46.781.377</td>
                            <td class="px-3 py-2 text-center">165</td>
                            <td class="px-3 py-2 text-right">$56.965.745</td>
                            <td class="px-3 py-2 text-center">2167</td>
                            <td class="px-3 py-2 text-right">$752.067.241</td>
                            <td class="px-3 py-2 text-center font-bold">2562</td>
                            <td class="px-3 py-2 text-right font-bold">$900.717.211</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-3 py-2">Famisanar</td>
                            <td class="px-3 py-2 text-center">88</td>
                            <td class="px-3 py-2 text-right">$48.348.055</td>
                            <td class="px-3 py-2 text-center">66</td>
                            <td class="px-3 py-2 text-right">$21.398.609</td>
                            <td class="px-3 py-2 text-center">89</td>
                            <td class="px-3 py-2 text-right">$55.784.339</td>
                            <td class="px-3 py-2 text-center">2066</td>
                            <td class="px-3 py-2 text-right">$693.361.601</td>
                            <td class="px-3 py-2 text-center font-bold">2309</td>
                            <td class="px-3 py-2 text-right font-bold">$818.892.604</td>
                        </tr>
                        <!-- Total en la parte inferior -->
                        <tr class="bg-gray-100 font-bold">
                            <td class="px-3 py-2">Total</td>
                            <td class="px-3 py-2 text-center">863</td>
                            <td class="px-3 py-2 text-right">$460.712.058</td>
                            <td class="px-3 py-2 text-center">839</td>
                            <td class="px-3 py-2 text-right">$355.970.993</td>
                            <td class="px-3 py-2 text-center">1316</td>
                            <td class="px-3 py-2 text-right">$701.638.619</td>
                            <td class="px-3 py-2 text-center">18116</td>
                            <td class="px-3 py-2 text-right">$6.744.429.792</td>
                            <td class="px-3 py-2 text-center">21134</td>
                            <td class="px-3 py-2 text-right">$8.262.751.462</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Gráficos y estadísticas -->
            <div class="grid grid-cols-3 gap-4 mb-6">
                <!-- Gráfico de Subestado -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <h2 class="text-gray-500 mb-4">Valor (#) por Subestado</h2>
                    <div class="space-y-4">
                        <div>
                            <div class="flex items-center mb-1">
                                <span class="w-28 text-xs text-gray-600">RADICADA</span>
                                <div class="flex-grow bg-red-500 h-6 rounded-sm" style="width: 90%"></div>
                            </div>
                            <span class="text-xs float-right">13970</span>
                        </div>
                        
                        <div>
                            <div class="flex items-center mb-1">
                                <span class="w-28 text-xs text-gray-600">RECHAZADA</span>
                                <div class="flex-grow bg-red-500 h-6 rounded-sm" style="width: 45%"></div>
                            </div>
                            <span class="text-xs float-right">6089</span>
                        </div>
                        
                        <div>
                            <div class="flex items-center mb-1">
                                <span class="w-28 text-xs text-gray-600">SOLICITUD DE PAGO</span>
                                <div class="flex-grow bg-red-500 h-6 rounded-sm" style="width: 5%"></div>
                            </div>
                            <span class="text-xs float-right">776</span>
                        </div>
                        
                        <div>
                            <div class="flex items-center mb-1">
                                <span class="w-28 text-xs text-gray-600">POR RADICAR</span>
                                <div class="flex-grow bg-red-500 h-6 rounded-sm" style="width: 2%"></div>
                            </div>
                            <span class="text-xs float-right">299</span>
                        </div>
                    </div>
                    
                    <!-- Escala de valores -->
                    <div class="flex justify-between mt-6 pt-4 border-t border-gray-200">
                        <span class="text-xs">0 mil</span>
                        <span class="text-xs">5 mil</span>
                        <span class="text-xs">10 mil</span>
                        <span class="text-xs">15 mil</span>
                    </div>
                    <div class="mt-1 text-red-500 text-right text-xs">Valor (#)</div>
                </div>

                <!-- Gráfico de Edad Actual por Rangos -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <h2 class="text-gray-500 mb-4">Valor (#) por Edad Actual (Rangos)</h2>
                    
                    <div class="space-y-4">
                        <div>
                            <div class="flex items-center mb-1">
                                <span class="w-32 text-xs text-gray-600">1) 0 y 90 Días</span>
                                <div class="flex-grow bg-red-500 h-6 rounded-sm" style="width: 5%"></div>
                            </div>
                            <span class="text-xs float-right">863</span>
                        </div>
                        
                        <div>
                            <div class="flex items-center mb-1">
                                <span class="w-32 text-xs text-gray-600">2) 91 y 180 Días</span>
                                <div class="flex-grow bg-red-500 h-6 rounded-sm" style="width: 5%"></div>
                            </div>
                            <span class="text-xs float-right">839</span>
                        </div>
                        
                        <div>
                            <div class="flex items-center mb-1">
                                <span class="w-32 text-xs text-gray-600">3) 181 y 360 Días</span>
                                <div class="flex-grow bg-red-500 h-6 rounded-sm" style="width: 7%"></div>
                            </div>
                            <span class="text-xs float-right">1316</span>
                        </div>
                        
                        <div>
                            <div class="flex items-center mb-1">
                                <span class="w-32 text-xs text-gray-600">4) Superior a 360 Días</span>
                                <div class="flex-grow bg-red-500 h-6 rounded-sm" style="width: 100%"></div>
                            </div>
                            <span class="text-xs float-right">18116</span>
                        </div>
                    </div>
                    
                    <!-- Escala de valores -->
                    <div class="flex justify-between mt-6 pt-4 border-t border-gray-200">
                        <span class="text-xs">0 mil</span>
                        <span class="text-xs">5 mil</span>
                        <span class="text-xs">10 mil</span>
                        <span class="text-xs">15 mil</span>
                        <span class="text-xs">20 mil</span>
                    </div>
                    <div class="mt-1 text-red-500 text-right text-xs">Valor (#)</div>
                </div>

                <!-- Gráfico de empresa -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <h2 class="text-gray-500 mb-4">Por Empresa</h2>
                    <div class="flex items-center justify-center h-64">
                        <div class="text-center">
                            <i class="fas fa-chart-bar text-5xl text-gray-400"></i>
                            <div class="mt-4">
                                <i class="fas fa-chart-bar text-xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Botones inferiores -->
            <div class="flex justify-between items-center">
                <div class="flex gap-4">
                    <button class="bg-red-600 text-white px-6 py-2 rounded-full">Edades</button>
                    <button class="border border-red-600 text-red-600 px-6 py-2 rounded-full">Negadas</button>
                    <button class="border border-red-600 text-red-600 px-6 py-2 rounded-full">Casos médicos</button>
                </div>
                <div>
                    <img src="../assets/img/logos/incapacidades-col-logo.png" alt="incapacidades.col" class="h-8">
                </div>
            </div>
        </div>
    </div>
</body>
</html>