<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('index') }}" class="brand-link">
        <img src="{{ asset('img/logo.jpg') }}"
             alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">Voitures</span>
    </a>
    <div class="sidebar">
        <!-- Menu latéral --> 
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{ route('index') }}" class="nav-link">
                        <i class="nav-icon fas fa-car"></i>
                        <p>
                            Voitures
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
</aside>
