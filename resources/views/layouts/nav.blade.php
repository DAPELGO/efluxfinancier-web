<nav class="navbar navbar-vertical navbar-expand-lg">
    <script>
      var navbarStyle = window.config.config.phoenixNavbarStyle;
      if (navbarStyle && navbarStyle !== 'transparent') {
        document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
      }
    </script>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
      <!-- scrollbar removed-->
      <div class="navbar-vertical-content">
        <ul class="navbar-nav flex-column" id="navbarVerticalNav">
          <li class="nav-item">
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link label-1" href="{{ route('app.home') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="pie-chart"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Tableau de bord</span></span>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item">
            <!-- label-->
            <p class="navbar-vertical-label">Application
            </p>
            <hr class="navbar-vertical-line" />
            <!-- parent pages-->
            @can('livres.view', Auth::user())
            <div class="nav-item-wrapper"><a class="nav-link label-1 @yield('structure')" href="{{ route('livres.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-hospital-symbol"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Trésorerie</span></span>
                </div>
              </a>
            </div>
            @endcan
            <!-- parent pages-->
            @can('creance-dettes.view', Auth::user())
            <div class="nav-item-wrapper"><a class="nav-link label-1 @yield('structure')" href="{{ route('creance-dettes.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-hospital-symbol"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Créance-Dette</span></span>
                </div>
              </a>
            </div>
            @endcan
            <!-- parent pages-->
            @can('structures.view', Auth::user())
            <div class="nav-item-wrapper"><a class="nav-link label-1 @yield('structure')" href="{{ route('structures.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-hospital-symbol"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Structures</span></span>
                </div>
              </a>
            </div>
            @endcan
          </li>
          <li class="nav-item">
            <!-- label-->
            <p class="navbar-vertical-label">Administration
            </p>
            <hr class="navbar-vertical-line" />
            <!-- parent pages-->
            @can('users.view', Auth::user())
            <div class="nav-item-wrapper"><a class="nav-link label-1 @yield('user')" href="{{ route('users.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="user"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Users</span></span>
                </div>
              </a>
            </div>
            @endcan
            <!-- parent pages-->
            @can('roles.view', Auth::user())
            <div class="nav-item-wrapper"><a class="nav-link label-1 @yield('role')" href="{{ route('roles.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="users"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Rôles</span></span>
                </div>
              </a>
            </div>
            @endcan
            <!-- parent pages-->
            @can('permissions.view', Auth::user())
            <div class="nav-item-wrapper"><a class="nav-link label-1 @yield('permission')" href="{{ route('permissions.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="lock"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Permissions</span></span>
                </div>
              </a>
            </div>
            @endcan
            <!-- parent pages-->
            @can('parametres.view', Auth::user())
            <div class="nav-item-wrapper"><a class="nav-link label-1 @yield('setting')" href="{{ route('parametres.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="settings"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Paramètres</span></span>
                </div>
              </a>
            </div>
            @endcan
            <!-- parent pages-->
            @can('valeurs.view', Auth::user())
            <div class="nav-item-wrapper"><a class="nav-link label-1 @yield('valeur')" href="{{ route('valeurs.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="settings"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Valeurs</span></span>
                </div>
              </a>
            </div>
            @endcan
          </li>
          <li class="nav-item">
            <!-- label-->
            <p class="navbar-vertical-label">Documentation
            </p>
            <hr class="navbar-vertical-line" />
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link label-1 @yield('help')" href="documentation/getting-started.html" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="help-circle"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Aide</span></span>
                </div>
              </a>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link label-1 @yield('doc')" href="documentation/getting-started.html" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="book"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Manuel</span></span>
                </div>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="navbar-vertical-footer">
      <button class="btn navbar-vertical-toggle border-0 fw-semi-bold w-100 white-space-nowrap d-flex align-items-center"><span class="uil uil-left-arrow-to-left fs-0"></span><span class="uil uil-arrow-from-right fs-0"></span><span class="navbar-vertical-footer-text ms-2">Reduire</span></button>
    </div>
  </nav>
