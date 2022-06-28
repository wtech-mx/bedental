  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand text-center" href="{{ route('dashboard') }}">
          <img src="{{ asset('assets/img/brand/cropped-LOGOS-BEDTL-1.png') }}" class="navbar-brand-img"style="max-height: 8rem;top: 2%;left:20%;position: absolute">
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner mt-5">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link {{ (Request::is('dashboard*') ? 'active' : '') }}" href="{{ route('dashboard') }}">
                    <i class="ni ni-shop text-blue"></i>
                    <span class="nav-link-text">Inicio</span>
                </a>

                <a class="nav-link {{ (Request::is('clients*') ? 'active' : '') }}" href="{{ route('clients.index') }}">
                    <i class="ni ni-circle-08 text-blue"></i>
                    <span class="nav-link-text">Pacientes</span>
                </a>

              <a class="nav-link {{ (Request::is('antecedentes*') ? 'active' : '') }}" href="{{ route('antecedentes.index') }}">
                <i class="fa fa-address-book text-blue"></i>
                <span class="nav-link-text">Historial clinico</span>
              </a>

              <a class="nav-link {{ (Request::is('especialists*') ? 'active' : '') }}" href="{{ route('especialists.index') }}">
                <i class="fa fa-user-md text-blue"></i>
                <span class="nav-link-text">Doctores</span>
              </a>

              <a class="nav-link {{ (Request::is('recordatorios*') ? 'active' : '') }}" href="{{ route('recordatorios.index') }}">
                <i class="ni ni-calendar-grid-58 text-blue"></i>
                <span class="nav-link-text">Recordatorios</span>
              </a>

                <a class="nav-link {{ (Request::is('facturas*') ? 'active' : '') }}" href="{{ route('facturas.index') }}">
                    <i class="ni ni-single-copy-04 text-blue"></i>
                    <span class="nav-link-text">Facturas</span>
                </a>

                <a class="nav-link {{ (Request::is('control_pagos*') ? 'active' : '') }}" href="{{ route('control_pagos.index') }}">
                    <i class="ni ni-money-coins text-blue"></i>
                    <span class="nav-link-text">Control pago</span>
                </a>

            </li>

            <li class="nav-item">
              <a href="#navbar-maps" class="nav-link {{ (Request::is('users*') ? 'active' : '') }}{{ (Request::is('roles*') ? 'active' : '') }}" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-maps">
                <i class="ni ni-settings text-primary"></i>
                <span class="nav-link-text">Roles y Permisos</span>
              </a>
              <div class="collapse{{ (Request::is('users*') ? 'show' : '') }}{{ (Request::is('roles*') ? 'show' : '') }}" id="navbar-maps">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="{{ route('users.index') }}" class="nav-link {{ (Request::is('users*') ? 'show' : '') }}">Users</a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ route('roles.index') }}" class="nav-link {{ (Request::is('roles*') ? 'show' : '') }}">Role</a>
                  </li>

                </ul>
              </div>
            </li>


          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">Confuracion</h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">

            <li class="nav-item">
              <a href="{{ route('email') }}" class="nav-link {{ (Request::is('email*') ? 'show' : '') }}">
                <i class="fa fa-envelope text-blue"></i>
                <span class="nav-link-text">Correo</span>
              </a>
            </li>

          </ul>

        </div>
      </div>
    </div>
  </nav>
