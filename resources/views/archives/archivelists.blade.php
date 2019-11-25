@extends('layouts.sidbar')
@section('styles')
<style type="text/css" media="screen">
    .selected-text{
        font-family: Europa;
        font-size: 14px;
        line-height: 18px;
        color: #717171;
    }

    .table-head{
        font-family: Europa;
        font-size: 12px;
        line-height: 16px;
        /* identical to box height */

        text-transform: uppercase;

        color: #666666;

    }


    .table-items{
        font-family: Europa;
        font-size: 14px;
        line-height: 20px;
        /* identical to box height, or 143% */


        color: #333333;

    }
    .table-items > tr >td > span > img {
    margin-top: -5px;
    }

</style>        

@stop
@section('content')
<div class="container-fluid">
<div class="header">
<div class="d-flex">
  <div class="p-2"><h2>Files</h2></div>
  <div class="ml-auto p-2"><a class="btn btn-primary text-white  mb-1"> Upload file </a></div>
</div>
</div>

<div>
<form class="form-inline">
  <label class="sr-only" for="inlineFormInputName2"></label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Search files">

  <button type="submit" class="btn btn-primary btn-sm mb-2">
    <svg class="svg" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M15.0833 13.3333H14.1617L13.835 13.0183C15.0179 11.6464 15.668 9.89481 15.6667 8.08334C15.6667 6.58349 15.2219 5.11734 14.3886 3.87026C13.5554 2.62319 12.371 1.65121 10.9854 1.07725C9.59968 0.503286 8.07492 0.35311 6.6039 0.645715C5.13288 0.93832 3.78166 1.66056 2.72111 2.72111C1.66056 3.78166 0.93832 5.13288 0.645715 6.6039C0.35311 8.07492 0.503286 9.59968 1.07725 10.9854C1.65121 12.371 2.62319 13.5554 3.87026 14.3886C5.11734 15.2219 6.58349 15.6667 8.08334 15.6667C9.96167 15.6667 11.6883 14.9783 13.0183 13.835L13.3333 14.1617V15.0833L19.1667 20.905L20.905 19.1667L15.0833 13.3333ZM8.08334 13.3333C5.17834 13.3333 2.83334 10.9883 2.83334 8.08334C2.83334 5.17834 5.17834 2.83334 8.08334 2.83334C10.9883 2.83334 13.3333 5.17834 13.3333 8.08334C13.3333 10.9883 10.9883 13.3333 8.08334 13.3333Z" fill="white"/>
    </svg>
  </button>
</form>
<div>
</div>


<div class="d-flex selected-text">
  
    <div class="p-2 bd-highlight ml-2">
        <input style="margin-top: 5px;" type="checkbox" />
    </div>
    <div class="p-2 bd-highlight ml-1">
     <img src="{{ asset('css/icons/trash.svg') }}" style="height: 18px; width: 14px; color:#717171; " />
    </div>


    <div class="p-2 bd-highlight ml-1">
     <img src="{{ asset('css/icons/share.png') }}" style="height: 14px; width: 14px; color:#717171; " />
    </div>


    <div class="mr-auto p-2 bd-highlight ml-2 "> <span  style="border-left: 2px solid #C4C4C4;
transform: rotate(-90deg);">  
<span class="ml-3">
    2 selected
</span>
</span></div>
  <div class="p-2 bd-highlight text-right">
    <span>1-5 of 5</span></div>
</div>

<table class="table">
              <thead class="thead-light table-head">
                <th>{{--  --}}</th>
                <th>NAME</th>
                <th>OWNER</th>
                <th>FILE SIZE</th>
                <th>LAST MODIFIED</th>
              </thead>
              <tbody class="table-items">
               <tr>
                <td><input type="checkbox" /></td>
                <td><span> <img src="{{ asset('css/icons/xls.png') }}" />  Form1.xls </span> </td>
                <td>Me</td>
                <td>88KB</td>
                <td>Aug 19</td>
               </tr>
                <tr>
                <td><input type="checkbox" /></td>
                <td><span> <img src="{{ asset('css/icons/docx.png') }}" />  DocumentUltra.docx </span> </td>
                <td>Me</td>
                <td>1MB</td>
                <td>Aug 19</td>
               </tr>

                <tr>
                <td><input type="checkbox" /></td>
                <td><span> <img src="{{ asset('css/icons/pdf.png') }}" />  Gillette </span> </td>
                <td>Gillette</td>
                <td>25KB</td>
                <td>Aug 19</td>
               </tr>

                <tr>
                <td><input type="checkbox" /></td>
                <td><span> <img src="{{ asset('css/icons/pdf.png') }}" />  CreditBin </span> </td>
                <td>Bank of America</td>
                <td>1.1GB</td>
                <td>Aug 19</td>
               </tr>
              </tbody>
            </table>
</div>
@stop

