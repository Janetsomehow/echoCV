<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>All Reports</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
  <div class="wrapper">
    @include('layouts.sidebar')
  </div>

      <main class="wholeContent">

        <section class="header searchContact">
          <div class="rep">Reports</div>
          <a href="/new_report" class="btn btn-primary searchContact repTopBtn">New Report</a>
        </section>

        <section class="message">

          <div class="container-fluid reportStatus">
            <div class="row">
              <div class="col-sm-1 ml-3 reportAction">
                <a href="#">ALL</a>
              </div>
              <div class="col-sm-2 reportAction">
                <a href="#">
                  <img src="{{ asset('css/icons/repSent.png') }}" style="margin-right:0.3rem;">SENT
                </a>
              </div>
              <div class="col-sm-2 reportAction">
                <a href="#">
                  <img src="{{ asset('css/icons/repRec.png') }}" style="margin-right:0.3rem;">RECEIVED
                </a>
              </div>
              <div class="col-sm-2 reportAction">
                <a href="#">
                  <img src="{{ asset('css/icons/repSch.png') }}" style="margin-right:0.3rem;">SCHEDULED
                </a>
              </div>
              <div class="col-sm-2 reportAction">
                <a href="#">
                  <img src="{{ asset('css/icons/repDra.png') }}" style="margin-right:0.3rem;">DRAFT
                </a>
              </div>
            </div>
          </div>



        <div class="widget-wrapper container-fluid" style="padding:0; margin:0">
          <div class="section-wrap-b table-responsive">

            <table id="mySearchableData" class="display table table-hover table-responsive" cellspacing="0">
            <!-- <table class="table table-responsive table-stripped table-hover"> -->
              <!-- <thead>
                <td></td>
                <td>NAME</td>
                <td>COMPANY</td>
                <td>EMAIL</td>
                <td>PHONE NUMBER</td>
                <td>TAGS</td>
              </thead> -->
              <thead style="background:transparent; color:transparent">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </thead>

              <tbody>
            <tr>
              <td><input type="checkbox" name="" value=""></td>
              <td data-search="Tiger Nixon">T. Nixon</td>
              <td>System Architect</td>
              <td>Edinburgh</td>
              <td>61</td>
            </tr>
            <tr>
              <td><input type="checkbox" name="" value=""></td>
              <td data-search="Garrett Winters">G. Winters</td>
              <td>Accountant</td>
              <td>Tokyo</td>
              <td>63</td>
            </tr>
            <tr>
              <td><input type="checkbox" name="" value=""></td>
              <td data-search="Ashton Cox">A. Cox</td>
              <td>Junior Technical Author</td>
              <td>San Francisco</td>
              <td>66</td>
            </tr>
            <tr>
              <td><input type="checkbox" name="" value=""></td>
              <td data-search="Cedric Kelly">C. Kelly</td>
              <td>Senior Javascript Developer</td>
              <td>Edinburgh</td>
              <td>22</td>
            </tr>
            <tr>
              <td><input type="checkbox" name="" value=""></td>
              <td data-search="Tiger Nixon">T. Nixon</td>
              <td>System Architect</td>
              <td>Edinburgh</td>
              <td>61</td>
            </tr>
            <tr>
              <td><input type="checkbox" name="" value=""></td>
              <td data-search="Tiger Nixon">T. Nixon</td>
              <td>System Architect</td>
              <td>Edinburgh</td>
              <td>61</td>
            </tr>
            <tr>
              <td><input type="checkbox" name="" value=""></td>
              <td data-search="Garrett Winters">G. Winters</td>
              <td>Accountant</td>
              <td>Tokyo</td>
              <td>63</td>
            </tr>
            <tr>
              <td><input type="checkbox" name="" value=""></td>
              <td data-search="Ashton Cox">A. Cox</td>
              <td>Junior Technical Author</td>
              <td>San Francisco</td>
              <td>66</td>
            </tr>
            <tr>
              <td><input type="checkbox" name="" value=""></td>
              <td data-search="Cedric Kelly">C. Kelly</td>
              <td>Senior Javascript Developer</td>
              <td>Edinburgh</td>
              <td>22</td>
            </tr>
            <tr>
              <td><input type="checkbox" name="" value=""></td>
              <td data-search="Tiger Nixon">T. Nixon</td>
              <td>System Architect</td>
              <td>Edinburgh</td>
              <td>61</td>
            </tr>
            <tr>
              <td><input type="checkbox" name="" value=""></td>
              <td data-search="Tiger Nixon">T. Nixon</td>
              <td>System Architect</td>
              <td>Edinburgh</td>
              <td>61</td>
            </tr>
            <tr>
              <td><input type="checkbox" name="" value=""></td>
              <td data-search="Garrett Winters">G. Winters</td>
              <td>Accountant</td>
              <td>Tokyo</td>
              <td>63</td>
            </tr>
            <tr>
              <td><input type="checkbox" name="" value=""></td>
              <td data-search="Ashton Cox">A. Cox</td>
              <td>Junior Technical Author</td>
              <td>San Francisco</td>
              <td>66</td>
            </tr>
            <tr>
              <td><input type="checkbox" name="" value=""></td>
              <td data-search="Cedric Kelly">C. Kelly</td>
              <td>Senior Javascript Developer</td>
              <td>Edinburgh</td>
              <td>22</td>
            </tr>
            <tr>
              <td><input type="checkbox" name="" value=""></td>
              <td data-search="Tiger Nixon">T. Nixon</td>
              <td>System Architect</td>
              <td>Edinburgh</td>
              <td>61</td>
            </tr>
            <tfoot>
            <tr>
              <th>N</th>
              <th>P</th>
              <th>O</th>
              <th>A</th>
              <th>A</th>
            </tr>
          </tfoot>
              </tbody>
            </table>

          </div>
        </div>
        </section>
      </main>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<!-- EVERYTHING BELOW THIS YOU WILL NEED -->
<script src="{{ asset('js/jquery.dataTablesReport.js') }}" defer></script>
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
