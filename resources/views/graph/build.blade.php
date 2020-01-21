<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Metrics</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
    <!-- Styles -->
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/report.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link ‎href="https://fonts.googleapis.com/css?family=europa:200600" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <style>
      thead {
        background: #fff;
      }

      td {
        padding: 0
      }

      input {
        border: 0;
      }

      tr {
        line-height: 1rem;
      }
    </style>
  </head>
  <body>

      <main class="wholeContent">
        <section class="header">
          <div class="rep">Metrics</div>
        </section>
        <form class="searchReport" action="" method="post">
          @csrf
          <input type="text" class="form-control form-group" placeholder="Search for metric">
          <button type="button" name="button" style="border:none"><img src="{{ asset('css/icons/grsearch.png') }}" /></button>
        </form>
        <section class="newMetr">
          <!-- <ul class="nav nav-tabs nav-lg newData" role="tablist">
            <li class="active" role="presentation">
              <a href="/add_metrics" class="">+ New data source</a>
            </li>
          </ul> -->
          <div class="newData">
            <a href="/add_metrics" class="">+ New data source</a>
            <!-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#excelModal" id="open">Import Excel</button> -->
          </div><hr>
          <label for="">Custom</label>
          <div class="formMett custom">
            User provided metric
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal" id="open">Create</button>
          </div>
          <label for="">Link</label>
          <div class="formG">
            <div class="formMett ">
              <img src="{{ asset('css/icons/sheet.png') }}" />
              Google Sheets
              <a href="https://docs.google.com/spreadsheets/d/16u3yZw1eoOy9COCwcOmXm0536liRLjTj1Fbw_eXdjj0/"class="btn btn-default">Link</a>
            </div>
            <div class="formMett ">
              <img src="{{ asset('css/icons/xero.png') }}" />
              Xero
              <a href="https://login.xero.com/identity/user/login"class="btn btn-default">Link</a>
            </div>
            <div class="formMett ">
              <img src="{{ asset('css/icons/airtable.png') }}" />
              Airtable
              <a href="https://airtable.com/login"class="btn btn-default">Link</a>
            </div>
            <div class="formMett ">
              <img src="{{ asset('css/icons/trello.png') }}" />
              Trello
              <a href="https://trello.com/en/login"class="btn btn-default">Link</a>
            </div>
          </div>
        </section>
      </main>

      <!-- Modal to create new metrics -->
          <div class="modal" tabindex="-1" role="dialog" id="myModal" aria-labelledby="details-l" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <form method="post" action="{{ route('graph.store') }}">
                @csrf
                <div class="modal-content">
                  <div class="modal-header modalHeader">
                    <h5 class="modal-title">Create Metric</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="container">
                      <div class="row mr-2">
                        <div class="form-group col-md-12 ml-2">
                          <label for="name">Name</label>
                          <input type="text" class="form-control" name="name" required>
                        </div>
                      </div>
                      <div class="row mr-2">
                        <div class="form-group col-md-12 ml-2">
                          <label for="desc">Description</label>
                          <input type="text" class="form-control" name="desc" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <table class="table table-bordered table-responsive" style="margin-top:-5rem">
                            <thead>
                              <tr>
                                <th></th>
                                <th>Date</th>
                                <th>Value</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <th><input type="text" name="aaa" value=""></th>
                                <th><input type="number" name="aaa1" value=""></th>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <th><input type="text" name="bbb" value=""></th>
                                <th><input type="number" name="bbb1" value=""></th>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <th><input type="text" name="ccc" value=""></th>
                                <th><input type="number" name="ccc1" value=""></th>
                              </tr>
                              <tr>
                                <th scope="row">4</th>
                                <th><input type="text" name="ddd" value=""></th>
                                <th><input type="number" name="ddd1" value=""></th>
                              </tr>
                              <tr>
                                <th scope="row">5</th>
                                <th><input type="text" name="eee" value=""></th>
                                <th><input type="number" name="eee1" value=""></th>
                              </tr>
                              <tr>
                                <th scope="row">6</th>
                                <th><input type="text" name="fff" value=""></th>
                                <th><input type="number" name="fff1" value=""></th>
                              </tr>
                              <tr>
                                <th scope="row">7</th>
                                <th><input type="text" name="ggg" value=""></th>
                                <th><input type="number" name="ggg1" value=""></th>
                              </tr>
                              <tr>
                                <th scope="row">8</th>
                                <th><input type="text" name="hhh" value=""></th>
                                <th><input type="number" name="hhh1" value=""></th>
                              </tr>
                              <tr>
                                <th scope="row">9</th>
                                <th><input type="text" name="iii" value=""></th>
                                <th><input type="number" name="iii1" value=""></th>
                              </tr>
                              <tr>
                                <th scope="row">10</th>
                                <th><input type="text" name="jjj" value=""></th>
                                <th><input type="number" name="jjj1" value=""></th>
                              </tr>
                              <tr>
                                <th scope="row">11</th>
                                <th><input type="text" name="kkk" value=""></th>
                                <th><input type="number" name="kkk1" value=""></th>
                              </tr>
                              <tr>
                                <th scope="row">12</th>
                                <th><input type="text" name="lll" value=""></th>
                                <th><input type="number" name="lll1" value=""></th>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="row mt-5">
                        <div class="d-flex col-md-12 mr-2 ml-2 mt-3 btnModalme">
                          <div class="mt-2">Unit:</div>
                          <input type="" name="percent" value="percent" class="btn btnModalmetr" placeholder="Percent"/>
                          <button type="button" value="percent" class="btn btnModalmetr ml-4 mr-2">Percent</button>
                          <button type="submit" class="btn btnModalmetr">Number</button>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="modal-footer modalFooter">
                    <button type="submit" class="btn btn-save" style="background:#ddd; float:left!important">Save</button>
                    <button type="button" class="btn btn-cancel" data-dismiss="modal">Cancel</button>
                  </div>
                </div>
              </form>
            </div>
          </div>



                <!-- Excel modal -->
                <div class="modal" tabindex="-1" role="dialog" id="excelModal" aria-labelledby="details-l" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <form action="{{ route('import') }}" method="POST" name="importform" enctype="multipart/form-data">
                      @csrf
                      <div class="modal-content">
                        <div class="modal-header modalHeader">
                          <h5 class="modal-title">Create Metric</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="container">
                            <div class="row mr-2">
                              <div class="form-group col-md-12 ml-2">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" required>
                              </div>
                            </div>
                            <div class="row">
                               <div class="form-group col-md-12 ml-2">
                                 <label for="desc">Description</label>
                                 <textarea name="desc" rows="4" cols="56" style="border:1px solid #ccc; border-radius:3px" required></textarea>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 ml-2 mb-2 d-flex btnModalme">
                                <label for="">Upload Source:</label>
                                <!-- <input type="file" class="ml-4" name="tags"> -->
                                <input type="file" id="myFile" class="ml-4" style="width: 85px;" onchange="this.style.width = '100%';" />
                              </div>
                            </div>
                            <div class="row">
                              <div class="d-flex col-md-12 mr-2 ml-2 mt-3 btnModalme">
                                <div class="mt-2">Unit:</div>
                                <button type="button" value="percent1" class="btn btnModalmetr ml-4 mr-2">Percent</button>
                                <button type="submit" class="btn btnModalmetr">Number</button>
                                <input type="" name="percent" value="percent" class="btn btnModalmetr" placeholder="Percent"/>
                              </div>
                            </div>
                          </div>

                        </div>
                        <div class="modal-footer modalFooter">
                          <button class="btn btn-save" style="background:#ddd; float:left!important">Save</button>
                          <button type="button" class="btn btn-cancel" data-dismiss="modal">Cancel</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>



      <div class="wrapper">

    @include('layouts.sidebar')
      </div>
  </body>
</html>
