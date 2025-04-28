<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3"
    id="sidenav-main" style="background-color: #d44942; color: white;">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="align-items-center d-flex m-0 navbar-brand text-wrap" href="{{ route('dashboard') }}">
            <div class="logo-container mx-auto text-center py-3">
                <img src="../assets/img/logos/logo-i.png" class="navbar-brand-img" alt="Logo" style="max-width: 250px; height: auto;">
            </div>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <!-- Espacio adicional antes de los elementos de menú -->
        <div class="pt-4"></div>
        <br>
        <br>
        <br>
        <br>

        <style>
            /* Estilo normal: texto blanco */
            .nav-link {
                color: rgba(255, 255, 255, 0.8) !important;
                transition: all 0.3s ease;
            }
            
            /* Estilo para el elemento activo: texto rojo y fondo blanco con transparencia */
            .nav-link.active {
                color: #d9251c !important;
                background-color: rgba(255, 255, 255, 0.9) !important;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                border-radius: 5px;
                font-weight: 600;
            }
            
            /* Estilo para hover: aumentar luminosidad */
            .nav-link:not(.active):hover {
                color: #ffffff !important;
                background-color: rgba(255, 255, 255, 0.1);
                border-radius: 5px;
            }
            
            /* Estilo para los iconos en elementos activos */
            .nav-link.active i {
                color: #d9251c !important;
            }
            
            /* Estilo para los iconos en elementos normales */
            .nav-link i {
                color: rgba(255, 255, 255, 0.8) !important;
            }
        </style>
        
        <ul class="navbar-nav">
            <li class="nav-item pb-3">
                <a class="nav-link {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}"
                    href="{{ route('dashboard') }}">
                    <div class="icon-container d-flex align-items-center justify-content-start">
                        <i class="fa fa-th-large me-2"></i>
                        <span class="nav-link-text">Dashboard</span>
                    </div>
                </a>
            </li>

            <li class="nav-item pb-3">
                <a class="nav-link {{ Route::currentRouteName() == 'incapacidades' ? 'active' : '' }}" 
                    href="{{ route('incapacidades') }}">
                    <div class="icon-container d-flex align-items-center justify-content-start">
                        <i class="fa fa-clipboard me-2"></i>
                        <span class="nav-link-text">Recepción de Incapacidades</span>
                    </div>
                </a>
            </li>

            <li class="nav-item pb-3">
                <a class="nav-link {{ Route::currentRouteName() == 'cartera' ? 'active' : '' }}" 
                    href="{{ route('cartera') }}">
                    <div class="icon-container d-flex align-items-center justify-content-start">
                        <i class="fa fa-money-bill me-2"></i>
                        <span class="nav-link-text">Recaudo de Cartera</span>
                    </div>
                </a>
            </li>

            <li class="nav-item pb-3">
                <a class="nav-link {{ Route::currentRouteName() == 'saldos' ? 'active' : '' }}" 
                    href="{{ route('saldos') }}">
                    <div class="icon-container d-flex align-items-center justify-content-start">
                        <i class="fa fa-chart-bar me-2"></i>
                        <span class="nav-link-text">Saldos de Entidades</span>
                    </div>
                </a>
            </li>

            <li class="nav-item pb-3">
                <a class="nav-link {{ Route::currentRouteName() == 'analisis' ? 'active' : '' }}" 
                    href="{{ route('analisis') }}">
                    <div class="icon-container d-flex align-items-center justify-content-start">
                        <i class="fa fa-chart-pie me-2"></i>
                        <span class="nav-link-text">Análisis de Gestión</span>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer mx-2">
        <div class="text-white text-center" style="font-size: 12px;">
            <div id="current-datetime"></div>
            <div>Última actualización</div>
        </div>
    </div>
</aside>

<script>
    function updateDateTime() {
        const now = new Date();
        const formattedDate = now.toLocaleDateString('es-ES', {
            day: '2-digit',
            month: '2-digit',
            year: 'numeric'
        });
        const formattedTime = now.toLocaleTimeString('es-ES', {
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit'
        });
        document.getElementById('current-datetime').textContent = formattedDate + ' ' + formattedTime;
    }
    
    // Actualizar la hora cada segundo
    setInterval(updateDateTime, 1000);
    
    // Actualizar la hora inmediatamente
    updateDateTime();
</script>
