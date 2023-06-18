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
            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#layouts" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="layouts">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span class="nav-link-icon"><span data-feather="book-open"></span></span><span class="nav-link-text">Finances</span>
                </div>
              </a>
              <div class="parent-wrapper label-1">
                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="layouts">
                  <li class="collapsed-nav-item-title d-none">Layouts
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../../../demo/vertical-sidenav.html" data-bs-toggle="" aria-expanded="false">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Livre de tresorerie CSPS</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../../../demo/dark-mode.html" data-bs-toggle="" aria-expanded="false">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Créances/Dettes</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../../../demo/sidenav-collapse.html" data-bs-toggle="" aria-expanded="false">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Sidenav collapse</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../../../demo/darknav.html" data-bs-toggle="" aria-expanded="false">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Darknav</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../../../demo/topnav-slim.html" data-bs-toggle="" aria-expanded="false">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Topnav slim</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../../../demo/navbar-top-slim.html" data-bs-toggle="" aria-expanded="false">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Navbar top slim</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../../../demo/navbar-top.html" data-bs-toggle="" aria-expanded="false">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Navbar top</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../../../demo/horizontal-slim.html" data-bs-toggle="" aria-expanded="false">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Horizontal slim</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../../../demo/combo-nav.html" data-bs-toggle="" aria-expanded="false">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Combo nav</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../../../demo/combo-nav-slim.html" data-bs-toggle="" aria-expanded="false">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Combo nav slim</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                </ul>
              </div>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link label-1 @yield('structure')" href="{{ route('structures.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-hospital-symbol"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Structures</span></span>
                </div>
              </a>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link label-1 @yield('product')" href="{{ route('app.home') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="package"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Transactions</span></span>
                </div>
              </a>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link label-1 @yield('vendor')" href="{{ route('app.home') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="users"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Comptes</span></span>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item">
            <!-- label-->
            <p class="navbar-vertical-label">Administration
            </p>
            <hr class="navbar-vertical-line" />
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link label-1 @yield('user')" href="{{ route('users.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="user"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Users</span></span>
                </div>
              </a>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link label-1 @yield('role')" href="{{ route('app.home') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="users"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Rôles</span></span>
                </div>
              </a>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link label-1 @yield('permission')" href="{{ route('app.home') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="lock"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Permissions</span></span>
                </div>
              </a>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link label-1 @yield('setting')" href="{{ route('parametres.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="settings"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Paramètres</span></span>
                </div>
              </a>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link label-1 @yield('valeur')" href="{{ route('valeurs.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="settings"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Valeurs</span></span>
                </div>
              </a>
            </div>
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
