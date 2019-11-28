<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Contacts</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
      <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
      <!-- Styles -->
      <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
      <link href="{{ asset('css/report.css') }}" rel="stylesheet">
      <link href="{{ asset('css/dataTables.bootstrap.css') }}" rel="stylesheet">
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      <link ‎href="https://fonts.googleapis.com/css?family=europa:200,600" rel="stylesheet">
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>

  </head>
  <body>
    <div class="wrapper">

  @include('layouts.sidebar')
    </div>
      <main class="wholeContent">

        <section class="header searchContact">
          <div class="rep">Contacts</div>
          <a href="/add_contact" class="btn btn-primary searchContact">Create Contact</a>
          <!-- <input type="submit" name="" class="btn btn-primary searchContact" value="Create Contact" /> -->
        </section>
        <section class="message">

        <div class="widget-wrapper container-fluid" style="padding:0; margin:0">
          <div class="section-wrap-b table-responsive">

            <table id="mySearchableData" class="display table table-hover table-responsive" cellspacing="0" style="margin-top:-0.5rem; padding: 0 0.6rem;">
            <!-- <table class="table table-responsive table-stripped table-hover"> -->
              <thead>
                <tr>
                  <td></td>
                  <td>NAME</td>
                  <td>COMPANY</td>
                  <td>EMAIL</td>
                  <td>PHONE NUMBER</td>
                  <td>TAGS</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input type="checkbox" name="" value=""></td>
                  <td data-search="Abram Paul">Abram Paul</td>
                  <td data-search="EchoCV">EchoCV</td>
                  <td>abc.gthh@gmail.com</td>
                  <td data-order="">2348056976975</td>
                  <td></td>
                </tr>
                <tr>
                  <td><input type="checkbox" name="" value=""></td>
                  <td data-search="Abbey Lawal">Abbey Lawal</td>
                  <td data-search="HNG Tech">HNG Tech</td>
                  <td>abbey@hng.com</td>
                  <td data-order="">234092287377</td>
                  <td></td>
                </tr>
                <tr>
                  <td><input type="checkbox" name="" value=""></td>
                  <td data-search="James Obi">James Obi</td>
                  <td data-search="HNG Internship">HNG Internship</td>
                  <td>careers@hngi.io</td>
                  <td data-order="">234092287377</td>
                  <td></td>
                </tr>
                <tr>
                  <td><input type="checkbox" name="" value=""></td>
                  <td data-search="Tom Hary">Tom Hary</td>
                  <td data-search="Zenith Pillars">Zenith Pillars</td>
                  <td>teepay@yahoo.com</td>
                  <td data-order="">234098575757</td>
                  <td></td>
                </tr>
                <tr>
                  <td><input type="checkbox" name="" value=""></td>
                  <td data-search="Wale Olusegun">Wale Olusegun</td>
                  <td data-search="Jingo & Sabainah">Jingo & Sabainah</td>
                  <td>jingo@jns.com</td>
                  <td data-order="">234092287377</td>
                  <td></td>
                </tr>
                <tr>
                  <td><input type="checkbox" name="" value=""></td>
                  <td data-search="Wole Chukwunen">Wole Chukwunen</td>
                  <td data-search="Oando Gadgets">Oando Gadgets</td>
                  <td>wole.chukws@oando.xyz</td>
                  <td data-order="">234092295862</td>
                  <td></td>
                </tr>
                <tr>
                  <td><input type="checkbox" name="" value=""></td>
                  <td data-search="Janet Hassan">Janet Hassan</td>
                  <td data-search="House of Whoops">House of Whoops</td>
                  <td>beau.queen@aa.com</td>
                  <td data-order="">234090123377</td>
                  <td></td>
                </tr>
                <tr>
                  <td><input type="checkbox" name="" value=""></td>
                  <td data-search="Wale Olusegun">Wale Olusegun</td>
                  <td data-search="Jingo & Sabainah">Jingo & Sabainah</td>
                  <td>jingo@jns.com</td>
                  <td data-order="">234092287377</td>
                  <td></td>
                </tr>
                <tr>
                  <td><input type="checkbox" name="" value=""></td>
                  <td data-search="Abdul John">Abdul John</td>
                  <td data-search="Nuture">Nuture</td>
                  <td>hr@nutns.com</td>
                  <td data-order="">234075487377</td>
                  <td></td>
                </tr>
                <tr>
                  <td><input type="checkbox" name="" value=""></td>
                  <td data-search="Wale Olusegun">Wale Olusegun</td>
                  <td data-search="Jingo & Sabainah">Jingo & Sabainah</td>
                  <td>jingo@jns.com</td>
                  <td data-order="">234092287377</td>
                  <td></td>
                </tr>
                <tr>
                  <td><input type="checkbox" name="" value=""></td>
                  <td data-search="Wale Olusegun">Wale Olusegun</td>
                  <td data-search="Jingo & Sabainah">Jingo & Sabainah</td>
                  <td>jingo@jns.com</td>
                  <td data-order="">234092287377</td>
                  <td></td>
                </tr>
                <tr>
                  <td><input type="checkbox" name="" value=""></td>
                  <td data-search="Wale Olusegun">Wale Olusegun</td>
                  <td data-search="Jingo & Sabainah">Jingo & Sabainah</td>
                  <td>jingo@jns.com</td>
                  <td data-order="">234092287377</td>
                  <td></td>
                </tr>
                <tr>
                  <td><input type="checkbox" name="" value=""></td>
                  <td data-search="Wale Olusegun">Wale Olusegun</td>
                  <td data-search="Jingo & Sabainah">Jingo & Sabainah</td>
                  <td>jingo@jns.com</td>
                  <td data-order="">234092287377</td>
                  <td></td>
                </tr>
                <tr>
                  <td><input type="checkbox" name="" value=""></td>
                  <td data-search="Wale Olusegun">Wale Olusegun</td>
                  <td data-search="Jingo & Sabainah">Jingo & Sabainah</td>
                  <td>jingo@jns.com</td>
                  <td data-order="">234092287377</td>
                  <td></td>
                </tr>
                <tr>
                  <td><input type="checkbox" name="" value=""></td>
                  <td data-search="Wale Olusegun">Wale Olusegun</td>
                  <td data-search="Jingo & Sabainah">Jingo & Sabainah</td>
                  <td>jingo@jns.com</td>
                  <td data-order="">234092287377</td>
                  <td></td>
                </tr>
                <tr>
                  <td><input type="checkbox" name="" value=""></td>
                  <td data-search="Wale Olusegun">Wale Olusegun</td>
                  <td data-search="Jingo & Sabainah">Jingo & Sabainah</td>
                  <td>jingo@jns.com</td>
                  <td data-order="">234092287377</td>
                  <td></td>
                </tr>
            <!-- <tr>
              <td data-search="Tiger Nixon">T. Nixon</td>
              <td>System Architect</td>
              <td>Edinburgh</td>
              <td>61</td>
              <td data-order="1303689600">Mon 25th Apr 11</td>
              <td data-order="320800">$320,800/y</td>
            </tr> -->
            <tfoot>
              <tr>
                <td></td>
                <td>NAME</td>
                <td>COMPANY</td>
                <td>EMAIL</td>
                <td>PHONE NUMBER</td>
                <td>TAGS</td>
              </tr>
            </tfoot>
          </tbody>
        </table>

          </div>
        </div>
        </section>
        <br><br><br><br>
      </main>
  <!-- </body>
</html> -->



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<!-- EVERYTHING BELOW THIS YOU WILL NEED -->
<script src="{{ asset('js/jquery.dataTables.js') }}" defer></script>
  </script>



  <!--searchable table start -->
  <script type="text/javascript" language="javascript" class="init">
  //	$('#mydata').dataTable();
  $(document).ready(function() {
      $('#mySearchableData').DataTable();
  } );
  </script>
  <!--able table END -->

  <script>

    $(document).ready(function() {
    $('#filterOptions li').click(function() {
      // fetch the class of the clicked item
      var ourClass = $(this).attr('class');

      // reset the active class on all the buttons
      $('#filterOptions li').removeClass('active');
      // update the active state on our clicked button
      $(this).parent().addClass('active');

      if(ourClass == 'all') {
        // show all our items
        $('#ourHolder').children('div').show();
      }
      else {
        // hide all elements that don't share ourClass
        $('#ourHolder').children('div:not(.' + ourClass + ')').hide();
        // show all elements that do share ourClass
        $('#ourHolder').children('div.' + ourClass).show();
      }
      return false;
    });
  });


  function validateForm()
  {
  formObj = document.login;
      if (formObj.eml.value == "") {
      alert("You have not filled in the User Name field.");
  formObj.eml.focus();
      return false;
      }
      else if (formObj.pwd.value == "") {
      alert("You have not filled in the Password field.");
  formObj.pwd.focus();
      return false;
      }
  formObj.btnLogin.innerHTML='Wait..';
  formObj.btnLogin.disabled=true;
  }


  function Iforgot()
  {
  str = "lg.pw.php?eml=" + login.eml.value;
  document.location=str;
  }


  function FilterClear() {
  ShipmentFilter.txtRefOt.value="";
  ShipmentFilter.ddStatus.value=null;
  ShipmentFilter.ddMode.value=null;
  ShipmentFilter.ddCountryOrig.value=null;
  ShipmentFilter.ddCountryDest.value=null;
  ShipmentFilter.txtCityOrig.value="";
  ShipmentFilter.txtCityDest.value="";
  ShipmentFilter.txtPortLoad.value="";
  ShipmentFilter.txtPortDischarge.value="";
  ShipmentFilter.txtClient.value=null;
  ShipmentFilter.txtShipper.value=null;
  ShipmentFilter.txtConsignee.value=null;

  }


  function FilterReset() {
  FilterClear();
  ShipmentFilter.ddStatus.value=99;
  }
</script>


  </body>
  </html>
