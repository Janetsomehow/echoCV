<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>New Report</title>
      <link href="{{ asset('css/contactTable.css') }}" rel="stylesheet">
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <!-- Styles -->
      <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
      <link href="{{ asset('css/sample.css') }}" rel="stylesheet">
      <link href="{{ asset('css/report.css') }}" rel="stylesheet">
      
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      <link ‎href="https://fonts.googleapis.com/css?family=europa:200,600" rel="stylesheet">

      <!-- Scripts -->
      <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
      <script src="{{ asset('js/app.js') }}" defer></script>
  </head>
  <style>
  .ck.ck-editor{
    width: 70%;
    margin-left: 17%;
    margin-top: 6%;

  }
  .ck.ck-editor__main>.ck-editor__editable:not(.ck-focused) {
     height: 60vh;
  }
  .btn-secondary:hover{
    color: #000000;
  }
  </style>
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
    
          </form>
               
        <div id="editor" class="fomm-control">
          <h1> Add Some Text</h1>
        </div>
        <div class="container d-flex justify-content-center mt-3 pt-1  " >
          <button type="button" name="button" class="btn btn-secondary" id="textRequest" data-toggle="modal" data-target="#addText" id="open">Add text request</button>
          <button type="button" name="button" class="btn btn-secondary ml-3" id="metricRequest" data-toggle="modal" data-target="#myModal" id="open">Add metrics request</button>
          <button type="button" name="button" class="btn btn-secondary ml-3" data-toggle="modal" data-target="#uploadModal">Add file request</button>
        </div>
        </main> 

           <!-- add file request -->
      <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Upload File </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <label for=""> Name: </label>
              <input type="text" class="form-control mb-4" placeholder="Name of file">
              <input type="file" class="form-control">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal"  class="close" data-dismiss="modal"> Cancel </button>
              <button type="button" class="btn btn-primary ">Upload</button>
            </div>
          </div>
        </div>
      </div>
   
      <!-- add text request -->
      <div class="modal fade" id="addText" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> Add Text</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <label for=""> Message: </label>
            <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"  class="close" data-dismiss="modal"> Cancel </button>
            <button type="button" class="btn btn-primary ">Upload</button>
          </div>
        </div>
      </div>
    </div>

        <script>
                ClassicEditor
                  .create( document.querySelector( '#editor' ) )
                  .then( editor => {
                          console.log( editor );
                  } )
                  .catch( error => {
                          console.error( error );
                  } );
                  image: {
                      toolbar: [ 'imageTextAlternative' ]
                  }
                    
        </script>
  </body>
</html>
