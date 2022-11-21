<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">

        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">PPDB</a>
        </div>

        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">PPDB</a>
        </div>

        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>

            <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="fas fa-fire"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="menu-header">Master</li>
            
            <li class="{{ request()->is('jurusan') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('jurusan.index') }}">
                    <i class="fas fa-books"></i>
                    <span>Jurusan</span>
                </a>
            </li>

            <li class="{{ request()->is('siswa') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('siswa.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Siswa</span>
                </a>
            </li>

        </ul>
    </aside>
</div>



</div>