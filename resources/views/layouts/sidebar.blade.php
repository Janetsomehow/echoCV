

    <main class="sidebar">
      <a href="#"><div class="logo"></div></a>
      <!-- <p>Full name</p> -->
      <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              Full Name <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/home">Home</a>
            <a class="dropdown-item" href="/home">Account setting</a>
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
      <div class="sidebar-li home"><img src="{{ asset('css/icons/Vector.png') }}" />HOME</div>
      <div class="sidebar-li dashboard"><img src="{{ asset('css/icons/dash.png') }}" />DASHBOARD</div>
      <div class="sidebar-li port"><img src="{{ asset('css/icons/port.png') }}" />PORTIFOLIO COMPANIES</div>
      <div class="sidebar-li report"><img src="{{ asset('css/icons/report.png') }}" />REPORTS</div>
      <div class="sidebar-li metric"><img src="{{ asset('css/icons/metr.png') }}" />METRICS</div>
      <div class="sidebar-li contact"><img src="{{ asset('css/icons/contact.png') }}" />CONTACT</div>
      <div class="sidebar-li file"><img src="{{ asset('css/icons/file.png') }}" />FILES</div>
      <div class="sidebar-li archive"><img src="{{ asset('css/icons/arch.png') }}" />ARCHIVES</div>

    </main>
