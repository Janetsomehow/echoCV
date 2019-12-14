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
          <ul class="nav nav-tabs nav-lg repStatus" role="tablist">
<!--                <ul class="nav nav-tabs nav-line nav-white nav-lg nav-mob-inline" role="tablist">-->
            <li class="active" role="presentation">
              <a class="repTitle" aria-controls="SearchAreaTabs-1" role="tab" data-toggle="tab" href="#SearchAreaTabs-1">
                ALL</a>
            </li>
            <li role="presentation">
              <a class="repTitle" aria-controls="SearchAreaTabs-2" role="tab" data-toggle="tab" href="#SearchAreaTabs-2">
                <img src="{{ asset('css/icons/repSent.png') }}" style="margin-right:0.3rem;">SENT</a>
            </li>
            <li role="presentation">
              <a class="repTitle" aria-controls="SearchAreaTabs-3" role="tab" data-toggle="tab" href="#SearchAreaTabs-3">
                <img src="{{ asset('css/icons/repRec.png') }}" style="margin-right:0.3rem;">RECEIVED</a>
            </li>
            <li role="presentation">
              <a class="repTitle" aria-controls="SearchAreaTabs-4" role="tab" data-toggle="tab" href="#SearchAreaTabs-4">
                <img src="{{ asset('css/icons/repSch.png') }}" style="margin-right:0.3rem;">SCHEDULED</a>
            </li>
            <li role="presentation">
              <a class="repTitle" aria-controls="SearchAreaTabs-5" role="tab" data-toggle="tab" href="#SearchAreaTabs-5">
                <img src="{{ asset('css/icons/repDra.png') }}" style="margin-right:0.3rem;">DRAFT</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="SearchAreaTabs-1" role="tab-panel">
              <div class="widget-wrapper container-fluid table-responsive">
                <table id="mySearchableData" class="display table table-hover table-responsive" cellspacing="0">
                  <thead style="background:transparent; color:transparent">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </thead>
                  <tbody>
                    <tr style="width:100%">
                      <td><input type="checkbox" name="" value=""></td>
                      <td data-search="Tiger Nixon" class="tdDept">T. Nixon</td>
                      <td class="tdName">System Architect</td>
                      <td class="tdMsg">Message.... Message.... Message.... Message.... Message....</td>
                      <td class="tdTime">Timestamp</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="tab-pane" id="SearchAreaTabs-2" role="tab-panel">
              <div class="widget-wrapper container-fluid table-responsive">
                <table id="mySearchableData" class="display table table-hover table-responsive" cellspacing="0">
                  <thead style="background:transparent; color:transparent">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </thead>
                  <tbody>
                    <tr style="width:100%">
                      <td><input type="checkbox" name="" value=""></td>
                      <td data-search="Tiger Nixon" class="tdDept">T. Nixon</td>
                      <td class="tdName">System Architect</td>
                      <td class="tdMsg">Message.... Message.... Message.... Message.... Message....</td>
                      <td class="tdTime">Timestamp</td>
                    </tr>
                    <tr style="width:100%">
                      <td><input type="checkbox" name="" value=""></td>
                      <td data-search="Tiger Nixon" class="tdDept">T. Nixon</td>
                      <td class="tdName">Power Architect</td>
                      <td class="tdMsg">Message.... Message.... Message.... Message.... Message....</td>
                      <td class="tdTime">Timestamp</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="tab-pane" id="SearchAreaTabs-3" role="tab-panel">
              <table class="display table table-hover table-responsive" cellspacing="0">
                <thead style="background:transparent; color:transparent">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </thead>
                <tbody>
                  <tr style="width:100%">
                    <td><input type="checkbox" name="" value=""></td>
                    <td data-search="Tiger Nixon" class="tdDept">T. Nixon</td>
                    <td class="tdName">System Architect</td>
                    <td class="tdMsg">Message.... Message.... Message.... Message.... Message....</td>
                    <td class="tdTime">Timestamp</td>
                  </tr>
                  <tr style="width:100%">
                    <td><input type="checkbox" name="" value=""></td>
                    <td data-search="Tiger Nixon" class="tdDept">T. Nixon</td>
                    <td class="tdName">System Architect</td>
                    <td class="tdMsg">Message.... Message.... Message.... Message.... Message....</td>
                    <td class="tdTime">Timestamp</td>
                  </tr>
                  <tr style="width:100%">
                    <td><input type="checkbox" name="" value=""></td>
                    <td data-search="Tiger Nixon" class="tdDept">T. Nixon</td>
                    <td class="tdName">System Architect</td>
                    <td class="tdMsg">Message.... Message.... Message.... Message.... Message....</td>
                    <td class="tdTime">Timestamp</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="tab-pane" id="SearchAreaTabs-4" role="tab-panel">
              <table class="display table table-hover table-responsive" cellspacing="0">
                <thead style="background:transparent; color:transparent">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </thead>
                <tbody>
                  <tr style="width:100%">
                    <td><input type="checkbox" name="" value=""></td>
                    <td data-search="Tiger Nixon" class="tdDept">T. Nixon</td>
                    <td class="tdName">System Architect</td>
                    <td class="tdMsg">Message.... Message.... Message.... Message.... Message....</td>
                    <td class="tdTime">Timestamp</td>
                  </tr>
                  <tr style="width:100%">
                    <td><input type="checkbox" name="" value=""></td>
                    <td data-search="Tiger Nixon" class="tdDept">T. Nixon</td>
                    <td class="tdName">System Architect</td>
                    <td class="tdMsg">Message.... Message.... Message.... Message.... Message....</td>
                    <td class="tdTime">Timestamp</td>
                  </tr>
                  <tr style="width:100%">
                    <td><input type="checkbox" name="" value=""></td>
                    <td data-search="Tiger Nixon" class="tdDept">T. Nixon</td>
                    <td class="tdName">System Architect</td>
                    <td class="tdMsg">Message.... Message.... Message.... Message.... Message....</td>
                    <td class="tdTime">Timestamp</td>
                  </tr>
                  <tr style="width:100%">
                    <td><input type="checkbox" name="" value=""></td>
                    <td data-search="Tiger Nixon" class="tdDept">T. Nixon</td>
                    <td class="tdName">System Architect</td>
                    <td class="tdMsg">Message.... Message.... Message.... Message.... Message....</td>
                    <td class="tdTime">Timestamp</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="tab-pane" id="SearchAreaTabs-5" role="tab-panel">
              <table class="display table table-hover table-responsive" cellspacing="0">
                <thead style="background:transparent; color:transparent">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </thead>
                <tbody>
                  <tr style="width:100%">
                    <td><input type="checkbox" name="" value=""></td>
                    <td data-search="Tiger Nixon" class="tdDept">T. Nixon</td>
                    <td class="tdName">System Architect</td>
                    <td class="tdMsg">Message.... Message.... Message.... Message.... Message....</td>
                    <td class="tdTime">Timestamp</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>




        </section>
      </main>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{ asset('js/jquery.dataTablesReport.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>





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
