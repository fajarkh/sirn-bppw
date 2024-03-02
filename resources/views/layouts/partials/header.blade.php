<header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="/" class=" d-flex align-items-center">
    <span class="d-none d-lg-block">Sistem Informasi Rumah Negara</span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->

<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">


    <li class="nav-item dropdown pe-3">

      @php
          $id = Auth::user()->id;
          $adminData = App\Models\User::find($id);
      @endphp

      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-person-circle"></i>
        <span class="d-none d-md-block dropdown-toggle ps-2">{{ $adminData->name }}</span>
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6>{{$adminData->name}}</h6>
          <span>{{$adminData->jabatan}}</span>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="{{ route('users.edit',$adminData->id) }}">
            <i class="bi bi-person"></i>
            <span>My Profile</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <form action="{{ route('logout') }}" method="POST" id="logout-form">
          @csrf
            <button class="dropdown-item d-flex align-items-center" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
              <i class="bi bi-box-arrow-right"></i>
              <span>Sign Out</span>
            </button>
          </form>
        </li>

      </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation -->

</header>