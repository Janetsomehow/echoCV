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
               
                <input class="form-control border mb-3" style="font-size: 2.3em" type="text" name="report_title" placeholder="| Add a subject title" required>
                <input type="text" name="content" value="" class="border p-4" placeholder="Content" required>
                <input type="text" class="border mt-3" name="receiver" value="" required>
                <div class="repFiles d-flex justify-content-center">
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
              <div class="container d-flex justify-content-center  " >
                <button type="button" name="button" class="btn " data-toggle="modal" data-target="#myModal" id="open">Add text request</button>
                <button type="button" name="button" class="btn" >Add metrics request</button>
                <button type="button" name="button" class="btn" >Add file request</button>
              </div>
              <div class="d-flex justify-content-center no-display container-fluid mt-5 mb-5">
                <button type="button" name="button" class="mr-2" data-toggle="tooltip" data-placement="top" title="Chart" style="border:0">
                  <img src="{{ asset('css/icons/newRep1.png') }}">
                  <input type="file" name="" value="">
                </button>
  
                <button type="button" name="button" class="btn" >
                  <input type="file" name="" value="">
                </button>
                <button type="button" name="button" class="btn" >
                  <input type="file" name="" value="">
                </button>
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
  