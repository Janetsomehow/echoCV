@extends('layouts.empty-sidbar')
  @section('content')

            <div class="col-md-10 mt-5 mb-5 p-5">

               <div class="empty text-center">
          <img src="{{ asset('css/icons/company.png') }}" />
          <h3>Build your Dashboard</h3>
          <p>Your latest activity and report will automatically
          be shown here. Click the button below to create a chart</p>
         <a href="/add_company"> <button type="button" name="button" class="btn btn-primary">New Company</button></a>
          </div>
</div>
@stop
