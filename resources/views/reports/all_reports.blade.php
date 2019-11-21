<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>All Reports</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
      <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
      <!-- Styles -->
      <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
      <link href="{{ asset('css/report.css') }}" rel="stylesheet">
      <link href="{{ asset('css/dataTablesReport.bootstrap.css') }}" rel="stylesheet">
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      <link ‎href="https://fonts.googleapis.com/css?family=europa:200,600" rel="stylesheet">
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>

  </head>
  <body>
@include('layouts.sidebar')
      <main class="wholeContent">

        <section class="header searchContact">
          <div class="rep">Reports</div>
          <a href="/new" class="btn btn-primary searchContact">New Report</a>
          <!-- <input type="submit" name="" class="btn btn-primary searchContact" value="Create Contact" /> -->
        </section>

        <section class="message">

          <div class="tableHeader">

          </div>
          <!-- <div class="table"> -->


        <div class="widget-wrapper">
          <div class="section-wrap-b">

            <table id="mySearchableData" class="display table table-hover table-responsive" cellspacing="0" width="100%" style="margin-top:-0.5rem;">
            <!-- <table class="table table-responsive table-stripped table-hover"> -->
              <!-- <thead>
                <td></td>
                <td>NAME</td>
                <td>COMPANY</td>
                <td>EMAIL</td>
                <td>PHONE NUMBER</td>
                <td>TAGS</td>
              </thead> -->
              <thead class="" style="display:flex; justify-content:flex-start; margin-right:2rem">
                <td></td>
                <td><a href="#">All</a></td>
                <td><a href="#">Sent</a></td>
                <td><a href="#">Received</a></td>
                <td><a href="#">Scheduled</a></td>
                <td>TAGS</td>
              </thead>
              <div class="" style="display:flex; justify-content:flex-start; margin-right:2rem">
                <a href="#">All</a>
                <a href="#">Sent</a>
                <a href="#">Received</a>
                <a href="#">Scheduled</a>
              </div>
              <tbody>
            <tr>
              <td data-search="Tiger Nixon">T. Nixon</td>
              <td>System Architect</td>
              <td>Edinburgh</td>
              <td>61</td>
              <td data-order="1303689600">Mon 25th Apr 11</td>
              <td data-order="320800">$320,800/y</td>
            </tr>
            <tr>
              <td data-search="Garrett Winters">G. Winters</td>
              <td>Accountant</td>
              <td>Tokyo</td>
              <td>63</td>
              <td data-order="1311552000">Mon 25th Jul 11</td>
              <td data-order="170750">$170,750/y</td>
            </tr>
            <tr>
              <td data-search="Ashton Cox">A. Cox</td>
              <td>Junior Technical Author</td>
              <td>San Francisco</td>
              <td>66</td>
              <td data-order="1231718400">Mon 12th Jan 09</td>
              <td data-order="86000">$86,000/y</td>
            </tr>
            <tr>
              <td data-search="Cedric Kelly">C. Kelly</td>
              <td>Senior Javascript Developer</td>
              <td>Edinburgh</td>
              <td>22</td>
              <td data-order="1332979200">Thu 29th Mar 12</td>
              <td data-order="433060">$433,060/y</td>
            </tr>
            <tr>
              <td data-search="Tiger Nixon">T. Nixon</td>
              <td>System Architect</td>
              <td>Edinburgh</td>
              <td>61</td>
              <td data-order="1303689600">Mon 25th Apr 11</td>
              <td data-order="320800">$320,800/y</td>
            </tr>
            <tfoot>
            <tr>
              <th>Name</th>
              <th>Position</th>
              <th>Office</th>
              <th>Age</th>
              <th>Start date</th>
              <th>Salary</th>
            </tr>
          </tfoot>
              </tbody>
            </table>

          </div>
        </div>
        </section>
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
