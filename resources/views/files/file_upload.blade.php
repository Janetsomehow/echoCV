@extends('layouts.sidbar')
@section('styles')
<link rel=stylesheet href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
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

  @media(max-width: 320px){
    .search-form{
      width: 13rem !important;
    }
  }


</style>      

    {{-- <link ‎href="https://fonts.adobe.com/fonts/europa" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/report.css') }}"> --}}
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/files.css') }}">
    {{-- <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">   --}}

@stop
@section('content')


@livewire('document')


@stop

 @section('modal')
       <!-- Modal HTML -->
<div id="computer-modal" class="modal fade" tabindex="-1">
                <div class="modal-dialog " role="document">
                       <div class="modal-content">
                         <div class="modal-header">
                           <h5 class="modal-title">File Upload</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                           </button>
                         </div>
                         <div class="modal-body">
                           <div class="form">
                              <form   method="POST" action="{{ route('file.upload') }}" enctype="multipart/form-data">
                                   @csrf

                                 <div>
                                    <label for="" aria-label> Name: </label>
                                    <input name="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Name">
                                     @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                 </div>

                                 <div class="mt-4">
                                    <label for="select_file"> Select File: </label>
                                    <input name="file" type="file" class="form-control {{ $errors->has('file') ? ' is-invalid' : '' }}">
                                     @if ($errors->has('file'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                @endif
                                 </div>
                             
                           </div>
                         </div>
                                 <div class="modal-footer">
                                   <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                   <button type="submit" class="btn btn-primary">Upload</button>
                                 </div>
                          </form>
                       </div>
                </div>
</div>




<!-- Modal -->
<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <form action="{{route('file.delete')}}" method="post">
          {{method_field('delete')}}
          {{csrf_field()}}
        <div class="modal-body">
        <p class="text-center">
          Are you sure you want to delete this?
        </p>
            <input type="hidden" name="category_id" id="cat_id" value="">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
          <button type="submit" class="btn btn-warning">Yes, Delete</button>
        </div>
      </form>
    </div>
  </div>
</div>

@stop


@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>

<script>
$(document).ready(function(){
    $("#computer").click(function(){
        $("#computer-modal").modal("show");
    });
});

// function docdelete() {
//   event.preventDefault();
//   var delete_id = $(this).attr('data-value');
//   // $('button[name="delete_dividend"]').val(delete_id);

//   bootbox.confirm({
//     title: "Delete Document?",
//     message: "Are you sure? This cannot be undone.",
//      centerVertical: true,
//       className: 'rubberBand animated',
//     buttons: {
//       confirm: {
//             label: '<i class="fa fa-check"></i> Confirm',
//              className: 'btn-danger'
//         },
//         cancel: {
//             label: '<i class="fa fa-times"></i> Cancel',
//              className: 'btn-default'
//         }
        
//     },
//     callback: function (result) {
//         // console.log('This was logged in the callback: ' + result);
//         if (result) {
//           console.log("user confirmed");
//         } else {
//             console.log("user declined");
//         }
//     }
// });

   
// }

// onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"

//select all checkboxes
$("#select_all").change(function(){  //"select all" change 
  var status = this.checked; // "select all" checked status
  $('.checkbox').each(function(){ //iterate all listed checkbox items
    this.checked = status; //change ".checkbox" checked status
  });
  var countCheckedCheckboxes = $('.checkbox:checked').length;

    $('#count-checked-checkboxes').text(countCheckedCheckboxes);

    if($('.checkbox:checked').length){
       $('#headtile').show();
       $('#headcount').show();
       $('#headshare').show();
    }
    else{
       $('#headtile').hide();
       $('#headcount').hide();
       $('#headshare').hide();
    }
});

$('.checkbox').change(function(){ //".checkbox" change 
  //uncheck "select all", if one of the listed checkbox item is unchecked
  if(this.checked == false){ //if this item is unchecked
    $("#select_all")[0].checked = false; //change "select all" checked status to false
    var countCheckedCheckboxes = $('.checkbox:checked').length;

    $('#count-checked-checkboxes').text(countCheckedCheckboxes);

    if($('.checkbox:checked').length){
       $('#headtile').show();
       $('#headcount').show();
       $('#headshare').show();
    }
    else{
       $('#headtile').hide();
       $('#headcount').hide();
       $('#headshare').hide();
    }
  }
  
  //check "select all" if all checkbox items are checked
  if ($('.checkbox:checked').length == $('.checkbox').length ){ 
    $("#select_all")[0].checked = true; //change "select all" checked status to true

    var countCheckedCheckboxes = $('.checkbox:checked').length;

    $('#count-checked-checkboxes').text(countCheckedCheckboxes);

    if($('.checkbox:checked').length){
       $('#headtile').show();
       $('#headcount').show();
       $('#headshare').show();
    }
    else{
       $('#headtile').hide();
       $('#headcount').hide();
       $('#headshare').hide();
    }
  }
  // Count

    var countCheckedCheckboxes = $('.checkbox:checked').length;

    $('#count-checked-checkboxes').text(countCheckedCheckboxes);

    if($('.checkbox:checked').length){
       $('#headtile').show();
       $('#headcount').show();
       $('#headshare').show();
    }
    else{
       $('#headtile').hide();
       $('#headcount').hide();
       $('#headshare').hide();
    }
  

   
});



function docdelete(id) {
 $('#delete').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      // var cat_id = button.data('catid') 
      var cat_id = id;
      console.log(cat_id)
      var modal = $(this)
      modal.find('.modal-body #cat_id').val(cat_id);
})
}
</script>
@stop



 