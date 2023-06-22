<nav class="navbar navbar-vertical navbar-expand-lg" style="top: 2rem; background-color: #ededec; height: 100vh; border-right:0;">
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
            <!-- label-->
            <p class="navbar-vertical-label" style="margin-top:0.5rem;">Application
            </p>
            <hr class="navbar-vertical-line" />
            <!-- parent pages-->
            @can('livres.view', Auth::user())
            <div class="nav-item-wrapper @yield('livre')"><a class="nav-link label-1 @yield('livre')" href="{{ route('livres.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="book-open"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Livre Trésorerie</span></span>
                </div>
              </a>
            </div>
            @endcan
            <!-- parent pages-->
            @can('creancedettes.view', Auth::user())
            <div class="nav-item-wrapper @yield('creancedette')"><a class="nav-link label-1 @yield('creancedette')" href="{{ route('creancedettes.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="dollar-sign"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Créance-Dette</span></span>
                </div>
              </a>
            </div>
            @endcan
            <!-- parent pages-->
            @can('exercices.view', Auth::user())
            <div class="nav-item-wrapper @yield('exercice')"><a class="nav-link label-1 @yield('exercice')" href="{{ route('exercices.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="calendar"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Exercice</span></span>
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
            @can('structures.view', Auth::user())
            <div class="nav-item-wrapper @yield('structure')"><a class="nav-link label-1 @yield('structure')" href="{{ route('structures.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="grid"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Structures</span></span>
                </div>
              </a>
            </div>
            @endcan
            <!-- parent pages-->
            @can('users.view', Auth::user())
            <div class="nav-item-wrapper @yield('user')"><a class="nav-link label-1 @yield('user')" href="{{ route('users.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="user"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Users</span></span>
                </div>
              </a>
            </div>
            @endcan
            <!-- parent pages-->
            @can('roles.view', Auth::user())
            <div class="nav-item-wrapper @yield('role')"><a class="nav-link label-1 @yield('role')" href="{{ route('roles.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="users"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Rôles</span></span>
                </div>
              </a>
            </div>
            @endcan
            <!-- parent pages-->
            @can('permissions.view', Auth::user())
            <div class="nav-item-wrapper @yield('permission')"><a class="nav-link label-1 @yield('permission')" href="{{ route('permissions.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="lock"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Permissions</span></span>
                </div>
              </a>
            </div>
            @endcan
            <!-- parent pages-->
            @can('parametres.view', Auth::user())
            <div class="nav-item-wrapper @yield('setting')"><a class="nav-link label-1 @yield('setting')" href="{{ route('parametres.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="settings"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Paramètres</span></span>
                </div>
              </a>
            </div>
            @endcan
            <!-- parent pages-->
            @can('valeurs.view', Auth::user())
            <div class="nav-item-wrapper @yield('valeur')"><a class="nav-link label-1 @yield('valeur')" href="{{ route('valeurs.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
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
            <div class="nav-item-wrapper @yield('help')"><a class="nav-link label-1 @yield('help')" href="documentation/getting-started.html" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="help-circle"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Aide</span></span>
                </div>
              </a>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper @yield('doc')"><a class="nav-link label-1 @yield('doc')" href="documentation/getting-started.html" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="book"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Manuel</span></span>
                </div>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
