  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="{{ route('dashboard') }}">
          <img src="{{ asset('assets/img/brand/blue.png') }}" class="navbar-brand-img" alt="...">
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
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link {{ (Request::is('clients*') ? 'active' : '') }}" href="{{ route('clients.index') }}">
                    <i class="ni ni-circle-08 text-blue"></i>
                    <span class="nav-link-text">Pacientes</span>
                </a>

              <a class="nav-link {{ (Request::is('especialists*') ? 'active' : '') }}" href="{{ route('especialists.index') }}">
                <i class="fa fa-user-md text-orange"></i>
                <span class="nav-link-text">Doctores</span>
              </a>

              <a class="nav-link {{ (Request::is('antecedentes*') ? 'active' : '') }}" href="{{ route('antecedentes.index') }}">
                <i class="fa fa-address-book text-light"></i>
                <span class="nav-link-text">Historial clinico</span>
              </a>

              <a class="nav-link {{ (Request::is('calendar*') ? 'active' : '') }}" href="{{ route('calendar.index_calendar') }}">
                <i class="fa fa-calendar text-red"></i>
                <span class="nav-link-text">Calendario</span>
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

{{--            <li class="nav-item">--}}
{{--              <a class="nav-link" href="../../pages/widgets.html">--}}
{{--                <i class="ni ni-archive-2 text-green"></i>--}}
{{--                <span class="nav-link-text">Widgets</span>--}}
{{--              </a>--}}
{{--            </li>--}}

          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">Confuracion</h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">

            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html" target="_blank">
                <i class="ni ni-spaceship"></i>
                <span class="nav-link-text">Getting started</span>
              </a>
            </li>

          </ul>

        </div>
      </div>
    </div>
  </nav>
