
@extends('layouts.sidbar')

@section('content')
<div class="container-fluid">
<div class="header">
<div class="d-flex">
  <div class="p-2"><h2>Portfolio Company</h2></div>
  <div class="ml-auto p-2"><a href="#" class="btn btn-primary text-white  mb-1"> New Company </a></div>
</div>
</div>

<div>
<form class="form-inline">
  <label class="sr-only" for="inlineFormInputName2"></label>
  <input type="text" class="form-group mb-2" id="inlineFormInputName2" placeholder="Search for a company">

  <button type="submit" class=" btn-primary btn-sm mb-2">
    <svg class="svg" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M15.0833 13.3333H14.1617L13.835 13.0183C15.0179 11.6464 15.668 9.89481 15.6667 8.08334C15.6667 6.58349 15.2219 5.11734 14.3886 3.87026C13.5554 2.62319 12.371 1.65121 10.9854 1.07725C9.59968 0.503286 8.07492 0.35311 6.6039 0.645715C5.13288 0.93832 3.78166 1.66056 2.72111 2.72111C1.66056 3.78166 0.93832 5.13288 0.645715 6.6039C0.35311 8.07492 0.503286 9.59968 1.07725 10.9854C1.65121 12.371 2.62319 13.5554 3.87026 14.3886C5.11734 15.2219 6.58349 15.6667 8.08334 15.6667C9.96167 15.6667 11.6883 14.9783 13.0183 13.835L13.3333 14.1617V15.0833L19.1667 20.905L20.905 19.1667L15.0833 13.3333ZM8.08334 13.3333C5.17834 13.3333 2.83334 10.9883 2.83334 8.08334C2.83334 5.17834 5.17834 2.83334 8.08334 2.83334C10.9883 2.83334 13.3333 5.17834 13.3333 8.08334C13.3333 10.9883 10.9883 13.3333 8.08334 13.3333Z" fill="white"/>
    </svg>
  </button>
  filter
<select type="text">
  <option></option>
</select>
</form>
<div class="grid-container">
  <div><div><img src="{{ asset('css/icons/sony.png') }}" class="img-fluid"></div>
<p>Lead:Maria</p>  
<p>Analyst:Bimpe</p>  
</div>
  <div><div><img src="{{ asset('css/icons/netflix.png') }}" class="img-fluid"></div>
  <p>sony </p><br>
<p>Lead:Maria</p>  
<p>Analyst:Bimpe</p>  

</div>
  <div><div><img src="{{ asset('css/icons/macd.png') }}" class="img-fluid"></div>
  <p>sony </p><br>
<p>Lead:Maria</p>  
<p>Analyst:Bimpe</p>  

</div>
  <div><div><img src="{{ asset('css/icons/ninten.png') }}" class="img-fluid"></div>
  <p>sony </p><br>
<p>Lead:Maria</p>  
<p>Analyst:Bimpe</p>  

</div>
  <div><div><img src="{{ asset('css/icons/sony.png') }}" class="img-fluid"></div>
  <p>sony </p><br>
<p>Lead:Maria</p>  
<p>Analyst:Bimpe</p>  

</div>  
  <div><div><img src="{{ asset('css/icons/mit.png') }}" class="img-fluid"></div>
  <p>sony </p><br>
<p>Lead:Maria</p>  
<p>Analyst:Bimpe</p>  

</div>
  <div><div><img src="{{ asset('css/icons/sony.png') }}" class="img-fluid"></div>
  <p>sony </p><br>
<p>Lead:Maria</p>  
<p>Analyst:Bimpe</p>  

</div>
  <div><div><img src="{{ asset('css/icons/sony.png') }}" class="img-fluid"></div>
  <p>sony </p><br>
<p>Lead:Maria</p>  
<p>Analyst:Bimpe</p>  

</div>
  <div><div><img src="{{ asset('css/icons/sony.png') }}" class="img-fluid"></div>
  <p>sony </p><br>
<p>Lead:Maria</p>  
<p>Analyst:Bimpe</p>  
</div>
  <div><div><img src="{{ asset('css/icons/sony.png') }}" class="img-fluid"></div>
  <p>sony </p><br>
<p>Lead:Maria</p>  
<p>Analyst:Bimpe</p>  
</div>
</div>
@stop
