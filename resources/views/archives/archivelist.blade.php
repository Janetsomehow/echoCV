@extends('layouts.sidbar')
@section('styles')
<style type="text/css" media="screen">
 /* @import('https://fonts.googleapis.com/css?family=Nunito:400,600'); */
    .selected-text{
        font-family: 'Nunito', sans-serif;
        font-weight: 300;
        font-size: 14px;
        line-height: 18px;
        color: #717171;
    }

    .table-head{
        font-family: 'Nunito', sans-serif;
        font-weight: bolder;
        font-size: 12px;
        line-height: 16px;
        /* identical to box height */

        text-transform: uppercase;

        color: #666666;

    }


    .table-items{
        font-family: 'Nunito', sans-serif;
        font-size: 14px;
        font-weight: 900;
        line-height: 20px;
        /* identical to box height, or 143% */


        color: #333333;

    }
    .table-items > tr >td > span > img {
    margin-top: -5px;
    /* padding-top: 1rem; */
    }

    @media (max-width: 1440px){
        .mobileOnly{
            display: none;
        }
    }
    @media(max-width: 425px){
    .search-form{
      width: 17rem !important;
 
    }
    .upload-btn{
      display: none;
    }
    .selected-text{
      display: none;
      visibility: hidden;
    }
    thead{
      display: none;
    }
    td.mobileHide{
      display: none;
      border: none;
    }
    .table-mobile{
      margin-top: -1rem;
      font-size: 4rem !important;
    }
    .table-items{
      font-size: 1.4rem;
      padding: 0;
    }
    .table-items > tr >td > span > img {
      height: 1.6rem;
      margin-left: -1.2rem;
    }
    .header_file{
      margin-left: 1.7rem;
      margin-top: -1.3rem;
    }
    .search-btn{
      margin-left: 1rem;
    }
 
  }
    
  
  @media(max-width: 375px){
    .search-form{
      width: 17rem !important;
 
    }
    .upload-btn{
      display: none;
    }
    .selected-text{
      display: none;
      visibility: hidden;
    }
    thead{
      display: none;
    }
    td.mobileHide{
      display: none;
      border: none;
      /* margin-top: 5rem !important; */
    }
    .table-mobile{
      margin-top: -1.1rem;
      font-size: 4rem !important;

    }
    hr{
        margin-top: -2rem;
    }
    .table-items{
      font-size: 1.4rem;
      padding: 0;
    }
    .table-items > tr >td > span > img {
      height: 1.6rem;
      margin-left: -1.2rem;
    }
    .header_file{
      margin-left: 1.7rem;
      margin-top: -1.3rem;
    }
    .search-btn{
      margin-left: 1rem;
    }

 
  }

  @media(max-width: 320px){
    .search-form{
      width: 13rem !important;
    }
  }


</style>        

@stop
@section('content')
<div class="container-fluid">
<div class="header">
<div class="d-flex mt-4">
  <div class="p-2 header_file"><h2 > Archive</h2></div>
  {{-- <div class="ml-auto p-2"><a class="btn btn-primary upload-btn text-white  mb-1"> Upload file </a></div> --}}
</div>
</div>

<div>
<form class="form-inline">
  <label class="sr-only" for="inlineFormInputName2"></label>
  <input type="search" class="form-control search-form mb-2  mr-sm-2" style="width: 24rem"="inlineFormInputName2" placeholder="Search archive">

  <button type="submit" class="btn btn-primary search-btn btn-sm mb-2 p-2">
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
<hr class="shadow">

<table class="table table-hover table-mobile table-borderless">
              
              <tbody class="table-items">
               <tr class="">
                  <td><input type="checkbox" /></td>
                  <td > August Investor Update </td>
                  <p class="text-wrap mobileOnly"> 
                        Hello All, I hope your month is off to a good start! Last month was a big month for...
                  </p>
                  <td class="mobileHide"> </td>
                  <td class="text-wrap mobileHide">Hello All, I hope your month is off to a good start! Last month was a big month for... </td>
                
                  <td class="mobileHide">2 hours Ago</td>
               </tr>

               <tr>
                  <td><input type="checkbox" /></td>
                  <td> Sales KPI </td>
                  <td class="mobileHide"> Jane from Magnesys </td>
                  <td class="mobileHide">
                        Hi Deji, please find the Sales KPI attached in this message. Thank you 
                  </td>
                  <td class="mobileHide">Aug 19</td>
               </tr>


                <tr>
                <td><input type="checkbox" checked aria-checked="true" /></td>
                <td> August Team Update</td>
                <td class="mobileHide"></td>
                <td class="mobileHide">
                        Hi guys, we’ve had a tremendous month and i recall i saw lots of smiles more than...
                </td>
                <td class="mobileHide">Aug 21</td>
               </tr>

               <tr>
                    <td><input type="checkbox" /></td>
                    <td> Sales KPI </td>
                    <td class="mobileHide"> Yemi from Arla </td>
                    <td class="mobileHide">
                          Hi Deji, please find the Sales KPI attached in this message. Thank you 
                    </td>
                    <td class="mobileHide">Aug 19</td>
                 </tr>
  

                 <tr>
                        <td><input type="checkbox" checked /></td>
                        <td> August Investor Update </td>
                        <td class="mobileHide"> </td>
                        <td class="mobileHide text-wrap">Hello All, I hope your month is off to a good start! Last month was a big month for... </td>
                        <td class="mobileHide">2 hours Ago</td>
                </tr>

                <tr>
                        <td><input type="checkbox" /></td>
                        <td> Sales KPI </td>
                        <td class="mobileHide"> Cindy from AOL </td>
                        <td class="mobileHide">
                              Hi Deji, please find the Sales KPI attached in this message. Thank you 
                        </td>
                        <td class="mobileHide">Aug 19</td>
                </tr>
      

           </tbody>
            </table>
</div>
@stop
