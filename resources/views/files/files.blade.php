@extends('layouts.empty-sidbar')



  @section('content')

            <div class="col-md-10 mt-5 mb-5 p-5">

               <div class="empty text-center">
                 <img src="{{ asset('css/icons/files.png') }}" class="mx-auto d-block" />
                  <h3>No files</h3>
                   <p >No files have been uploaded yet</p>
                  {{-- <a class="btn btn-primary" href="/file_upload">Upload file</a> --}}
                  <div class="dropdown">
	  <button class="btn btn-primary upload-btn text-white  mb-1 dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    Upload File
	  </button>
	  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
	    <small class="ml-1 text-secondary">Upload a file from</small>
	    <div class="dropdown-divider"></div>
	    <button class="dropdown-item" data-toggle="modal" role="button" style="font-size: 14px;" type="button"><img src="{{ asset('css/icons/fromdrive.png') }}" style="height: 16px; width: 16px; color:#717171; " /> Google Drive</button>
	     <button class="dropdown-item " style="font-size: 14px;" id="computer" data-target="#modalCenter"><img src="{{ asset('css/icons/laptop.png') }}" style="height: 16px; width: 16px; color:#717171;"/> Your computer</button>
    {{-- <button class="dropdown-item" type="button">Something else here</button> --}}
			  </div>
			</div>
           </div>
        </div>


@stop

@section('script')

<script>
$(document).ready(function(){
    $("#computer").click(function(){
        $("#computer-modal").modal("show");
    });
});
</script>
@stop

        <!-- Modal HTML -->
 <div id="computer-modal" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">File Upload</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form">
                              <form action="" class="form-group">
                                 <div>
                                    <label for="" aria-label=""> Name: </label>
                                    <input type="text" class="form-control" placeholder="Name">
                                 </div>

                                 <div class="mt-4">
                                    <label for="select_file"> Select File: </label>
                                    <input type="file" class="form-control">
                                 </div>
                              </form>
                           </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">OK, Got it!</button>
                </div>
            </div>
        </div>
    </div>
<!-- Modal HTML -->

