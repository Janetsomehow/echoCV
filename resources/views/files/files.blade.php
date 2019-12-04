@extends('layouts.empty-sidbar')



  @section('content')

            <div class="col-md-10 mt-5 mb-5 p-5">

               <div class="empty text-center">
                 <img src="{{ asset('css/icons/files.png') }}" class="mx-auto d-block" />
                  <h3>No files</h3>
                   <p >No files have been uploaded yet</p>
                  <a class="btn btn-primary" href="/file_upload">Upload file</a>
               </div>
            </div>

@stop

