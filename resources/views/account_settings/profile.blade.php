<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account Settings</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- <link ‎href="https://fonts.adobe.com/fonts/europa" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/report.css') }}">
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/account.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="location/to/intl-tel-input/css/intlTelInput.css">
<script src="location/to/intl-tel-input/js/intlTelInput.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <section class =" onboard">
        <div class="header">
            <h3 class="account_header font-weight-bolder"> Account settings</h3>
        </div>

        <div class="row" style="">
            <div class="col  side">
                <aside>
                    <div class="list-group list-group-flush border-ri">
                         <a href="#" class="list-group-item list-group-item-action permission " style="color: #333333"> My profile</a></li>
                         <a href="/permissions" class="list-group-item list-group-item-action border-none permission" style="color: #333333"> Permissions</a></li>
                    </ul>
                </aside>
            </div>

            <div class="profile-form">
                <h4 class="font-weight-bold"> My profile</h4>

                <form action="" >
                        <div class="form-group ml-n3 col-md-12 input-style" >
                            <label for="">    First name</label>
                            <input type="text" placeholder="Bosun " class="form-control" value="{{$user->fname}}">
                        </div>

                        <div class="form-group ml-n3 col-md-12 input-style" >
                                <label for="">    Last name</label>
                                <input type="text" placeholder="Osamudiamen" class="form-control" value="{{$user->lname}}">
                        </div>

                        <div class="form-group ml-n3 col-md-12 input-style">
                                <label for="">   Phone number</label>
                                <input type="tel" placeholder="" id="phone" class="form-control">
                        </div>

                        <div class="form-group ml-n3 col-md-12 input-style"  >
                                <label for="">   Email 
                                    <a href="" class="changeEmail" style="position: relative; left: 22rem"> Change email</a>
                                </label>
                                <input type="email" placeholder="bosunosas@something.com " class="form-control">
                        </div>

                        <div class="form-group ml-n3 col-md-12 input-style" >
                                <label for=""> Current Password
                                        <a href=""  class="changePass"  style="position: relative; left: 15.2rem"> Change password</a>    
                                </label>
                                <input type="password" placeholder="******echo " class="form-control">
                        </div>

                        <button class="btn btn-primary btn-profile"> Save</button>

                </form>
            </div>

            <div class="upload ">
                <p> Profile picture</p>
                <div class="box">
                    {{-- <img src="{{ Avatar::create('Joko Widodo')->toBase64() }}" /> --}}
                    <img  id="preview_image" class="box-img" src="{{asset('storage/avatars/'.$user->id.'/'.$user->avatar)}}" alt="">
                    <i id="loading" class="fa fa-spinner fa-spin fa-3x fa-fw" style="position: absolute;left: 40%;top: 40%;display: none"></i>
                </div>
                <div class="upload-btn">
                    <button Onclick="javascript:changeProfile()" class="btn btn-default btn-upload" > Upload Picture </button>
                    {{-- href="javascript:changeProfile()" --}}
                    <input type="file" id="file"  accept="image/png, image/jpeg" name="file" title="Upload an image" style="display: none">
                </div>
            </div>
            
        </div>

    </section>

    <div class="wrapper">

        @include('layouts.sidebar')
    </div>

   

<script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

   <script src="https://use.fontawesome.com/2c7a93b259.js"></script>
<script>
    function changeProfile() {
        $('#file').click();
    }
    $('#file').change(function () {
        if ($(this).val() != '') {
            upload(this);

        }
    });
    function upload(img) {
        var form_data = new FormData();
        form_data.append('file', img.files[0]);
        form_data.append('_token', '{{csrf_token()}}');
        $('#loading').css('display', 'block');
        $.ajax({
            url: "{{url('ajax-profile-upload')}}",
            data: form_data,
            type: 'POST',
            contentType: false,
            processData: false,
            success: function (data) {
                if (data.fail) {
                    $('#preview_image').attr('src', '{{asset('storage/avatars/'.$user->id.'/'.$user->avatar)}}');
                    alert(data.errors['file']);
                }
                else {
                    $('#file_name').val(data);
                    $('#preview_image').attr('src', '{{asset('storage/avatars/'.$user->id)}}/' + data);
                }
                $('#loading').css('display', 'none');
            },
            error: function (xhr, status, error) {
                alert(xhr.responseText);
                $('#preview_image').attr('src', '{{asset('storage/avatars/'.$user->id.'/'.$user->avatar)}}');
            }
        });
    }
    function removeFile() {
        if ($('#file_name').val() != '')
            if (confirm('Are you sure want to remove profile picture?')) {
                $('#loading').css('display', 'block');
                var form_data = new FormData();
                form_data.append('_method', 'DELETE');
                form_data.append('_token', '{{csrf_token()}}');
                $.ajax({
                    url: "ajax-remove-image/" + $('#file_name').val(),
                    data: form_data,
                    type: 'POST',
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        $('#preview_image').attr('src', '{{asset('images/noimage.jpg')}}');
                        $('#file_name').val('');
                        $('#loading').css('display', 'none');
                    },
                    error: function (xhr, status, error) {
                        alert(xhr.responseText);
                    }
                });
            }
    }
</script>
</body>
</html>