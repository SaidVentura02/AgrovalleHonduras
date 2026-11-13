<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrovalle Admin</title>
    <meta name="description" content="Spark Admin - Premium Bootstrap 5 Admin Dashboard Template">
    <meta name="author" content="Spark Admin Team">
    <link rel="icon" type="image/png" href="{{ asset('spark-admin/assets/images/favicon.ico')  }}">
    <link rel="stylesheet" href="{{ asset('spark-admin/assets/libs/bootstrap/css/bootstrap.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('spark-admin/assets/libs/bootstrap-icons/bootstrap-icons.css')  }}">
    <link rel="stylesheet" href="{{ asset('spark-admin/assets/libs/apexcharts/apexcharts.css')  }}">
    <link rel="stylesheet" href="{{ asset('spark-admin/assets/libs/flatpickr/flatpickr.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('spark-admin/assets/css/main.css')  }}">
</head>
<body>

    <!-- Barra lateral -->
    <div class="sidebar-wrapper" id="sidebar">
        <a href="index.html" class="sidebar-brand">
            <i class="bi bi-leaf-fill"></i><span>Agrovalle</span>
        </a>
        <div class="flex-grow-1 overflow-y-auto">
            <div class="sidebar-menu-section">
                <div class="sidebar-menu-title">Información gerencial</div>
                    <ul class="sidebar-menu-list">
                        <li class="sidebar-menu-item">
                            <a href="index.html" class="sidebar-menu-link active" id="menu-overview" title="Overview">
                                <i class="bi bi-bar-chart-line-fill"></i>
                                <span>Estadisticas KPIS</span>
                            </a>
                        </li>
                    </ul>
            </div>
            <div class="sidebar-menu-section">
                <div class="sidebar-menu-title">Secciones</div>
                    <ul class="sidebar-menu-list">
                        <li class="sidebar-menu-item">
                            <a href="tables-basic.html" class="sidebar-menu-link" id="menu-basictables" title="Basic Tables">
                                <i class="bi bi-basket-fill"></i>
                                <span>Insumos</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a href="ui-forms.html" class="sidebar-menu-link" id="menu-uiforms" title="Forms and Input">
                                <i class="bi bi-truck"></i>
                                <span>Proveedores</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a href="ui-buttons.html" class="sidebar-menu-link" id="menu-uibuttons" title="Buttons">
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Empleados</span>
                            </a>
                        </li>
                    </ul>
            </div>
        </div>
    </div>

    <div class="main-wrapper">

        <!-- Barra de navegación -->
        <header class="navbar-custom">
            <div class="navbar-left">
                <button class="btn-desktop-toggle d-none d-xl-flex align-items-center justify-content-center me-3"
                    id="desktop-sidebar-toggle" aria-label="Minimize Sidebar">
                    <i class="bi bi-chevron-bar-left"></i>
                </button>
                <button class="sidebar-toggle-btn me-2" id="sidebar-toggle" aria-label="Toggle Navigation">
                    <i class="bi bi-list"></i>
                </button>
            </div>

            <!-- Barra de busqueda -->
            <div class="navbar-search-wrapper">
                <input type="text" class="navbar-search-input" placeholder="Search anything in Spark..." id="main-search">
                <button class="navbar-search-btn" aria-label="Search">
                <i class="bi bi-search"></i>
                </button>
            </div>

            <!-- Sección de perfil -->
            <div class="navbar-actions">
                <div class="dropdown ms-2">
                    <button class="navbar-profile-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false" id="profile-dropdown">
                        <i class="bi bi-person-fill"></i>
                        <span class="navbar-profile-name d-none d-md-inline">Usuario</span>
                        <i class="bi bi-chevron-down navbar-profile-caret"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-profile" aria-labelledby="profile-dropdown">
                        <li>
                            <a class="dropdown-item text-danger" href="page-login.html">
                                <i class="bi bi-box-arrow-right"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <!-- Contenedor principal -->
        <main>
            <div class="contaner fluid">
                @yield('contenido')
            </div>
        </main>

        <!-- Footer -->
        <footer class="footer-custom">
            <div class="footer-left px-3">
                <span class="footer-copy">
                    &copy; 2026 Agrovalle Honduras. Todos los derechos reservado
                </span>
            </div>
            <div class="footer-right px-3">
                <ul class="footer-links">
                    <li><a href="#" class="footer-link"><i class="bi bi-instagram p-2"></i>agrovalle.hn</a></li>
                    <li><a href="#" class="footer-link"><i class="bi bi-facebook p-2"></i>agrovallehn</a></li>
                    <li><a href="#" class="footer-link"><i class="bi bi-whatsapp p-2"></i>98XX-XXXX</a></li>
                </ul>
            </div>
        </footer>

    </div>
        <script src="{{ asset('spark-admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('spark-admin/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('spark-admin/assets/libs/flatpickr/flatpickr.min.js') }}"></script>
        <script src="{{ asset('spark-admin/assets/js/dashboard.js') }}"></script>
</body>
</html>