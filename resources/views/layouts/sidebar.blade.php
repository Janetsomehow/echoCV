

    <main class="sidebar">
      <a href="#"><div class="logo"></div></a>
      <!-- <p>Full name</p> -->
      <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              Full Name <span class="caret"></span>
          </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="background:#666; font-size:0.7rem">

            <a class="dropdown-item" href="/home">Home</a>
            <a class="dropdown-item" href="/home">Account setting</a>
            <a class="dropdown-item" href="/home">Home</a>
            <a class="dropdown-item"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">

            </a>

          </div>
        </li>
      </ul>
      <hr>
      <div class="fa fa-search">
        <input type="text" name="search" placeholder="Search" class="search" />
        <img src="{{ asset('css/icons/search.png') }}" alt="" />
      </div>
      <a href="/index" class="sidebar-li home"><img src="{{ asset('css/icons/homelogo.png') }}" />HOME</a>
      <a href="/dashboard" class="sidebar-li dashboard"><img src="{{ asset('css/icons/dash.png') }}" />DASHBOARD</a>
      <a href="/new_company" class="sidebar-li port"><img src="{{ asset('css/icons/port.png') }}" />PORTIFOLIO COMPANIES</a>
      <a href="/reports" class="sidebar-li report"><img src="{{ asset('css/icons/report.png') }}" />REPORTS</a>
      <a href="/create_metrics" class="sidebar-li metric"><img src="{{ asset('css/icons/metr.png') }}" />METRICS</a>
      <a href="/contacts" class="sidebar-li contact"><img src="{{ asset('css/icons/contact.png') }}" />CONTACT</a>
      <a href="/files" class="sidebar-li file"><img src="{{ asset('css/icons/file.png') }}" />FILES</a>
      <a href="/archives" class="sidebar-li archive"><img src="{{ asset('css/icons/arch.png') }}" />ARCHIVES</a>

    </main>
