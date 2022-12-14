<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">

        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">PPDB</a>
        </div>

        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">PPDB</a>
        </div>

        @if(auth()->user()->role_id == '1')
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
                    <i class="fas fa-book"></i>
                    <span>Jurusan</span>
                </a>
            </li>

            <li class="{{ request()->is('siswa') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('siswa.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Siswa</span>
                </a>
            </li>

            <li class="menu-header">Setting</li>

            <li class="{{ request()->is('user') ? 'active' : '' }}">
                <a class="nav-link" href="">
                    <i class="fas fa-check-to-slot"></i>
                    <span>Approve Siswa</span>
                </a>
            </li>
        </ul>
        @endif

        @if(auth()->user()->role_id == '2')
        <ul class="sidebar-menu">

            <li class="menu-header">Main</li>

            <li class="{{ request()->is('profile') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('profile.index') }}">
                    <i class="fas fa-address-card"></i>
                    <span>Profil</span>
                </a>
            </li>

            <li class="{{ request()->is('pesertadidik') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('pesertadidik.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Peserta Didik</span>
                </a>
            </li>
        </ul>
        @endif
    </aside>
</div>



</div>