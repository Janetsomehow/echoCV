<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>New Report</title>
      <link href="{{ asset('css/contactTable.css') }}" rel="stylesheet">
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
      <!-- Styles -->
      <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
      <link href="{{ asset('css/report.css') }}" rel="stylesheet">
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
      <h3 class="newRepNav">Reports</h3>
      <form action="{{ route('reports.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <section class="newReport">
          <a href="/reports" class="btn btn-default">Back</a>
          <a href="/reports" class="btn btnClose">Close</a>
          <div class="newRepNavBtns">
            <button type="submit" name="button" class="btn btn-default">Save & Close</button>
            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
              <button type="submit" class="btn btn-primary btnNow" data-toggle="tooltip" data-placement="left" title="Send report now">Send now</button>
              <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" aria-haspopup="true"
                aria-expanded="false" data-toggle="tooltip" data-placement="top" title="Schedule report"></button>
              </div>
            </div>
          </div>
        </section>
          <div class="repSec">
            <article class="repSec">
            <div class="d-flex justify-content-end">
              <Select class="form-control" style="width:15vw">
                <option value="">Receiver</option>
            @if(count($usersmail) > 0)
              @foreach ($usersmail as $usermail)
                <option value="{{ $usermail->email}}">{{ $usermail->email }}</option>
              @endforeach
            @endif
              </Select>
            </div>
              <input class="form-control" type="text" name="report_title" placeholder="|Add a subject title" required>
              <input type="text" name="content" value="" placeholder="Content" required>
              <input type="text" name="receiver" value="aa" required>
              <div class="repFiles">
                <button type="button" name="button" class="mr-2" data-toggle="tooltip" data-placement="top" title="Chart" style="border:0">
                  <img src="{{ asset('css/icons/newRep1.png') }}">
                </button>
                <button type="button" name="button" class="mr-2" data-toggle="tooltip" data-placement="top" title="Image" style="border:0">
                  <img src="{{ asset('css/icons/newRep2.png') }}">
                </button>
                <button type="button" name="button" class="mr-2" data-toggle="tooltip" data-placement="top" title="file" style="border:0">
                  <img src="{{ asset('css/icons/newRep3.png') }}">
                </button>
                <button type="button" name="button" class="mr-2" data-toggle="tooltip" data-placement="top" title="Table" style="border:0">
                  <img src="{{ asset('css/icons/newRep4.png') }}">
                </button>
                <button type="button" name="button" class="mr-2" data-toggle="tooltip" data-placement="top" title="Chart" style="border:0">
                  <img src="{{ asset('css/icons/newRep5.png') }}">
                </button>
              </div>
            </article>
            <div class="container repMobNewbtn">
              <button type="button" name="button" class="btn" data-toggle="modal" data-target="#myModal" id="open">Add text request</button>
              <button type="button" name="button" class="btn" >Add metrics request</button>
              <button type="button" name="button" class="btn" >Add file request</button>
            </div>
          </div>
        </form>

        <!-- <article class="breaditor ember-view">
          <form action="">
            Select images: <input type="file" name="img" multiple>
            <input type="submit">
          </form>
        </article> -->
    </main>




    <!-- Modal to add text request -->
        <div class="modal" tabindex="-1" role="dialog" id="myModal" aria-labelledby="details-l" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <form method="post" action="">
              @csrf
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Add Text for Report</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="container">
                    <div class="row">
                       <div class="form-group col-md-12 mr-2 ml-2">
                         <textarea name="name" rows="5" cols="55" placeholder="Enter Text" class="repTextarea"></textarea>
                        </div>
                    </div>
                  </div>

                </div>
                <div class="modal-footer" style="justify-content:flex-start!important; padding:1.5rem!important">
                  <button type="submit" class="btn btn-save" style="background:#ddd; float:left!important">Save</button>
                  <button type="button" class="btn btn-cancel" data-dismiss="modal">Cancel</button>
                </div>
              </div>
            </form>
          </div>
        </div>


<script type="text/javascript">
// ***************Script for the tooltip*************
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
</script>

    </body>
</html>
