  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          <div class="sidebar-brand-text mx-3">
              Mas Eko
              <small>Administrator</small>
          </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
          <a class="nav-link" href="{{ route('dashboard') }}">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Barang</span></a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
          <a class="nav-link" href="{{ route('pembelian') }}" aria-expanded="true" aria-controls="collapseTwo">
              <i class="fas fa-fw fa-cog"></i>
              <span>Pembelian</span>
          </a>
      </li>


      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>



  </ul>
  <!-- End of Sidebar -->
