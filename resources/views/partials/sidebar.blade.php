<nav class="col-md-2 d-none d-md-block bg-light sidebar mt-5 pt-4 px-0">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'dashboard' ? 'active bg-primary text-light' : '' }}" href="{{ route('dashboard') }}">
                    <i class="bi bi-house-door"></i> Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'product' ? 'active bg-primary text-light' : '' }}" href="{{ route('product') }}">
                    <i class="bi bi-cart"></i> Orders
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'owner' ? 'active bg-primary text-light' : '' }}" href="{{ route('owner') }}">
                    <i class="bi bi-people"></i> Customers
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'layanan' ? 'active bg-primary text-light' : '' }}" href="{{ route('layanan') }}">
                    <i class="bi bi-tools"></i> Service
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'jenis' ? 'active bg-primary text-light' : '' }}" href="{{ route('jenis') }}">
                    <i class="bi bi-tools"></i> Items
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'report' ? 'active bg-primary text-light' : '' }}" href="{{ route('report') }}">
                    <i class="bi bi-file-earmark-bar-graph"></i> Reports
                </a>
            </li>
        </ul>
    </div>
</nav>
