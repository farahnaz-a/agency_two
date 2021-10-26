
    <!-- BEGIN: SideNav-->
    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible">
        <div class="brand-sidebar">
          <h1 class="logo-wrapper">
            <a class="brand-logo darken-1" href="{{ route('admin.dashboard') }}">
              <img class="hide-on-med-and-down " src="{{ asset('dashboard/images/dash-logo-color.png') }}" alt="materialize logo">
              <span class="logo-text hide-on-med-and-down">Dashboard</span>
            </a>
            <a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a>
          </h1>
        </div>
        <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="accordion">
          <li class="navigation-header">
            <a class="navigation-header-text">Public View</a>
            <i class="navigation-header-icon material-icons">more_horiz</i>
          </li>
          
          <li class="bold">
            <a class="waves-effect waves-cyan " href="{{ route('home') }}" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
              <span class="menu-title">View Website</span>
            </a>
          </li>
  
          <li class="navigation-header">
            <a class="navigation-header-text"> Apps & Pages </a>
            <i class="navigation-header-icon material-icons">more_horiz</i>
          </li>
          <li class="active bold">
            <a class="waves-effect waves-cyan @yield('dashboardIndex')" href="{{ route('admin.dashboard') }}">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
              <span class="menu-title" data-i18n="Dashboard">Dashboard</span>
            </a>
          </li>
          <li class="bold @yield('activeMenu')">
            <a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-flag"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line></svg>
              <span class="menu-title" data-i18n="Banners">Banners</span>
            </a>
            <div class="collapsible-body">
              <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li>
                  <a href="{{ route('banners.index') }}" class="@yield('bannersIndex')">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="List">List</span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('banners.create') }}" class="@yield('bannersCreate')">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="Create">Create</span>
                  </a>
                </li>
               
              </ul>
            </div>
          </li>
          <li class="bold">
            <a class="waves-effect waves-cyan" href="./about.html">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
              <span class="menu-title">About</span>
            </a>
          </li>
          <li class="bold">
            <a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
              <span class="menu-title" data-i18n="Counters">Counters</span>
            </a>
            <div class="collapsible-body">
              <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li>
                  <a href="counters-list.html">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="List">List</span>
                  </a>
                </li>
                <li>
                  <a href="counters.html" >
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="Create">Create</span>
                  </a>
                </li>
               
              </ul>
            </div>
          </li>
          <li class="bold">
            <a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-film"><rect x="2" y="2" width="20" height="20" rx="2.18" ry="2.18"></rect><line x1="7" y1="2" x2="7" y2="22"></line><line x1="17" y1="2" x2="17" y2="22"></line><line x1="2" y1="12" x2="22" y2="12"></line><line x1="2" y1="7" x2="7" y2="7"></line><line x1="2" y1="17" x2="7" y2="17"></line><line x1="17" y1="17" x2="22" y2="17"></line><line x1="17" y1="7" x2="22" y2="7"></line></svg>
              <span class="menu-title" data-i18n="Banners">Testimonial</span>
            </a>
            <div class="collapsible-body">
              <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li>
                  <a href="testimonials.html">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="List">List</span>
                  </a>
                </li>
                <li>
                  <a href="testimonials-create.html">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="Create">Create</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="bold">
            <a class="waves-effect waves-cyan " href="title-setting.html" >
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
              <span class="menu-title" data-i18n="Title">Title Setting</span>
            </a>
          </li>
          <li class="bold">
            <a class="waves-effect waves-cyan " href="general.html" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
              <span class="menu-title" data-i18n="Support">General Setting</span>
            </a>
          </li>
          <li class="bold">
            <a class="waves-effect waves-cyan " href="reservations.html">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-life-buoy"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="4"></circle><line x1="4.93" y1="4.93" x2="9.17" y2="9.17"></line><line x1="14.83" y1="14.83" x2="19.07" y2="19.07"></line><line x1="14.83" y1="9.17" x2="19.07" y2="4.93"></line><line x1="14.83" y1="9.17" x2="18.36" y2="5.64"></line><line x1="4.93" y1="19.07" x2="9.17" y2="14.83"></line></svg>
              <span class="menu-title" data-i18n="Banners">Reservations</span>
            </a>
          </li>
          <li class="navigation-header"><a class="navigation-header-text">Menues </a><i class="navigation-header-icon material-icons">more_horiz</i>
          </li>
          <li class="bold">
            <a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
              <span class="menu-title" data-i18n="Gallery">Menu Categores</span>
            </a>
            <div class="collapsible-body">
              <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li>
                  <a href="menu-cat.html">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="List">List</span>
                  </a>
                </li>
                <li>
                  <a href="menu-cat-add.html">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="Create">Create</span>
                  </a>
                </li>
               
              </ul>
            </div>
          </li>
          <li class="bold">
            <a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
              <span class="menu-title" data-i18n="Gallery">Menu List</span>
            </a>
            <div class="collapsible-body">
              <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li>
                  <a href="menu-list.html">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="List">List</span>
                  </a>
                </li>
                <li>
                  <a href="menu-list-add.html">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="Create">Create</span>
                  </a>
                </li>
               
              </ul>
            </div>
          </li>
  
          <li class="navigation-header"><a class="navigation-header-text">Galleries </a><i class="navigation-header-icon material-icons">more_horiz</i>
          </li>
          <li class="bold">
            <a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
              <span class="menu-title" data-i18n="Gallery">Gallery category</span>
            </a>
            <div class="collapsible-body">
              <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li>
                  <a href="gallery-cat.html">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="List">List</span>
                  </a>
                </li>
                <li>
                  <a href="gallery-cat-add.html">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="Create">Create</span>
                  </a>
                </li>
               
              </ul>
            </div>
          </li>
          <li class="bold">
            <a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
              <span class="menu-title" data-i18n="Gallery">Gallery item</span>
            </a>
            <div class="collapsible-body">
              <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li>
                  <a href="gallery-item.html">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="List">List</span>
                  </a>
                </li>
                <li>
                  <a href="gallery-item-add.html">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="Create">Create</span>
                  </a>
                </li>
               
              </ul>
            </div>
          </li>
  
        </ul>
        <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
      </aside>
      <!-- END: SideNav-->