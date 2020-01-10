
  <input type="checkbox" id="mobile-bars-check" />
  <label for="mobile-bars-check" id="mobile-bars">
      <div class="stix" id="stik1"></div>
      <div class="stix" id="stik2"></div>
      <div class="stix" id="stik3"></div>
  </label>

    <section class="sidebar" id="sidebar">

      <a href="#"><div class="logo"></div></a>
      <!-- <p>Full name</p> -->

      <hr>

        <!-- <input type="text" name="search" placeholder="Search" class="" /> -->



      <div id="sub-header">
        <ul class="sidebar-ul" id="menuLinks">

        <li>
        <div class="input-group p-2 search-group" style="position: relative; top: 3rem;">
            <input type="text" class="form-control " style="border-radius: 50px; width: 11rem"  placeholder="Search" aria-label="" aria-describedby="basic-addon2">
              <span class="search-icon ml-auto"> <img src="{{ asset('css/icons/search.png') }}"   alt="" /> </span>
            <!-- <span class="fas fa-search"> -->
          </div>
        </li>
        <div class="mt-n5">
          <li><a href="/home"   class="sidebar-li home"><img src="{{ asset('css/icons/homelogo.png') }}" />HOME</a></li>
          <li><a href="/dashboard"    class="sidebar-li dashboard"><img src="{{ asset('css/icons/dash.png') }}" />DASHBOARD</a></li>
          <li><a href="/new_company" class="sidebar-li port"><img src="{{ asset('css/icons/port.png') }}" />PORTIFOLIO COMPANIES</a></li>
          <li><a href="/reports" class="sidebar-li report"><img src="{{ asset('css/icons/report.png') }}" />REPORTS</a></li>
          <li><a href="/create_metrics" class="sidebar-li metric"><img src="{{ asset('css/icons/metr.png') }}" />METRICS</a></li>
          <li><a href="/contact" class="sidebar-li contact"><img src="{{ asset('css/icons/contact.png') }}" />CONTACTS</a></li>
          <li><a href="/files" class="sidebar-li file"><img src="{{ asset('css/icons/file.png') }}" />FILES</a></li>
          <li><a href="/archives" class="sidebar-li archive"><img src="{{ asset('css/icons/arch.png') }}" />ARCHIVES</a></li>

        </div>
        </ul>
      </div>
      <ul class="navbar-nav name-section
       ml-auto">


          <li class="nav-item dropdown ">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              Full Name
              {{-- <span class="caret"></span> --}}
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="background:#666; font-size:0.7rem">

            <a class="dropdown-item" href="/home">Home</a>
            <a class="dropdown-item" href="/profile">Account setting</a>
            {{-- <a class="dropdown-item" href="/home">Home</a> --}}
            {{-- <a class="dropdown-item"
               onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">

            </a> --}}

            </div>
            </li>
         </ul>


    </section>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
  function setActiveLink(setActive){
    var links = document.querySelectorAll("#menuLinks a");
    Array.prototype.map.call(links, function(e) {
        e.className = "";
        if (e.id == setActive)
            e.className = "active";
    })
    
}

</script>