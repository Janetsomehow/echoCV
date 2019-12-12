@extends('layouts.empty-sidbar')
  @section('content')
{{--      
       
    
            <div class=""  style="background-color: red">
               <h3> Archive</h3>
               <div class=" text-center">
                 <img src="{{ asset('css/icons/archive.png') }}" class="mx-auto d-block" />
                  <p>Nothing in the archive yet</p>
               </div>
            </div>
      
          --}}

         <section class="archive col-md-12" style="">
            <div class="mt-4">
               <h3 style="position: relative; margin-left: -27rem;"> Archive</h3>
            </div>

            <div  class="col-md-10 mt-5 mb-5 p-5 pt-5 wrapper" >
                  {{-- <h3> Archive</h3> --}}
                  <div class=" text-center">
                    <img src="{{ asset('css/icons/archive.png') }}" class="mx-auto d-block" />
                     <p class="mt-5 text-center  lead" style="font-weight: 500"> Nothing is in your archive yet</p>
                  </div>
               </div>

         </section>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

@stop