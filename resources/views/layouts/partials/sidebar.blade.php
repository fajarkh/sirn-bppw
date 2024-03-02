<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link collapsed" href="/">
            <i class="bi bi-grid "></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="nav-heading">Pages</li>

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-house-fill"></i><span>Rumah Negara</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="/berkas-rn" class="">
                    <i class="bi bi-caret-right-fill"></i><span>Berkas</span>
                </a>
            </li>
            <li>
                <a href="/kegiatan" class="">
                    <i class="bi bi-caret-right-fill"></i><span>Dokumentasi Kegiatan</span>
                </a>
            </li>
        </ul>
    </li>
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="/wasdal">
            <i class="bi bi-clipboard-data"></i>
            <span>Wasdal</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="/tamu">
            <i class="bi bi-layers-fill"></i>
            <span>Tamu / Pengunjung</span>
        </a>
    </li>

    <li class="nav-heading">Data Master</li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="/penghuni">
            <i class="bi bi-file-person"></i>
            <span>Penghuni</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="/lembaga">
            <i class="bi bi-building"></i>
            <span>Kementerian / Lembaga</span>
        </a>
    </li>
    
    @if (Auth::check() && Auth::user()->role  == "superadmin")

    <li class="nav-item">
        <a class="nav-link collapsed" href="/users">
            <i class="bi bi-person-circle"></i>
            <span>Users</span>
        </a>
    </li>
    
    @endif


    </ul>
</aside>