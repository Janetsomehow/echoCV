@extends('layouts.empty-sidbar')
  @section('content')

            <div class="col-md-10 mt-5 mb-5 p-5 wrapper">

               <div class="empty text-center">
                 <img src="{{ asset('css/icons/Vector.png') }}" class="mx-auto d-block" />
                  <h3 class="text-wrap">Build your Dashboard</h3>
                    <p class="text-wrap">Put together a personal dashboard consisting of metrics that matter to you</p>
                     <button type="button" class="btn btn-primary" href="/add_chart">Create dashboard</button>
               </div>
            </div>

@stop
