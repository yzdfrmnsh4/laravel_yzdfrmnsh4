    <nav class="sidebar">
        <!-- Enhanced sidebar header with logo and better branding -->
        <div class="sidebar-header">
            <h4>
                <div class="logo-icon">
                    <i class="bi bi-hospital"></i>
                </div>
                <div>
                    <div>HMS</div>
                    <small style="font-size: 12px; font-weight: 400; opacity: 0.8;">Hospital Management</small>
                </div>
            </h4>
        </div>
        
        <!-- Improved navigation with icons and better structure -->
        <div class="sidebar-nav">
            <ul class="nav flex-column">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('rumahSakit.*') ? 'active' : '' }}" href="{{ route('rumahSakit.index') }}">
                        <i class="bi bi-building nav-icon"></i>
                        <span>Data Rumah Sakit</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('pasien.*') ? 'active' : '' }}" href="{{ route('pasien.index') }}">
                        <i class="bi bi-people nav-icon"></i>
                        <span>Data Pasien</span>
                    </a>
                </li>
            </ul>
        </div>
  
        <div class="sidebar-footer">
            <div class="user-info">
                <div class="user-avatar">
                    <i class="bi bi-person"></i>
                </div>
                <div class="user-details">
                    <p class="user-name">{{ Auth::user()->name ?? 'user' }}</p>
                    <p class="user-role">{{ Auth::user()->username ?? 'unkown' }}</p>
                </div>
            </div>
        </div>
    </nav>