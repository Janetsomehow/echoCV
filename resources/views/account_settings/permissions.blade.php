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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/account.css') }}" rel="stylesheet">

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
                    <div class="list-group list-group-flush permission-right">
                            <a href="/profile" class="list-group-item list-group-item-action permission " style="color: #333333"> My profile</a></li>
                            <a href="#" class="list-group-item list-group-item-action border-none permission" style="color: #333333"> Permissions</a></li>
                    </ul>
                </aside>
            </div>
            <div class="profile-form">
                    <h4 class="font-weight-bold"> Permissions</h4>

                    <h5 class="mt-4 font-weight-bold"> New Users </h5>

                    <div class="selecting"> 
                      
                        <h6> Edit </h6>
                        <div class="row">
                            <p class="col-9">
                                    Can view dashboards, portfolio company data, upload files and cannot manage users
                            </p>
                            <label for="checkbox"> </label>
                            <input type="checkbox" class="m-1 mb-2 d-inline regular-checkbox "  name=""  checked id="">
                            <span class="checkmark">
                            </span>
                        
                        </div>

                        <h6> Collaborate </h6>
                        <div class="row">
                            <p class="col-9">
                                    Can create and edit shared assets like dashboards and portfolio company data
                            </p>
                            <label for="checkbox"> </label>
                                <input type="checkbox" class="m-1 mb-2 d-inline regular-checkbox "  name="" disabled checked id="">
                                <span class="checkmark">
                                </span>
                            
                        </div>
                        
                        <h6> Manage Users </h6>
                        <div class="row">
                            <p class="col-9">
                                    Can create and edit shared assets like dashboards and portfolio company data
                            </p>
                            <label for="checkbox"> </label>
                            <input type="checkbox" class="m-1 mb-2 d-inline regular-checkbox "  name="" disabled checked id="">
                            <span class="checkmark">
                            </span>
                        </div>

                        <div class="manage mt-5">
                            <h4 class="font-weight-bold"> Manage users </h4>
                            <div class="table ">
                                <table class=" table-responsive table-borderless table-hover" width="700" style="margin-top: -4rem;">
                                    
                                    <thead >
                                        <tr>
                                            <th colspan="3"> Name </th>
                                            <th></th>
                                            <th colspan="3"> Email </th>
                                            <th></th>
                                            <th> Permissions </th>
                                        </tr>

                                    </thead>

                                    <tbody> 
                                        <tr >
                                            {{-- <th scope="row">1</th> --}}
                                            
                                            <td colspan="3">Anne Thompson</td>
                                            <td colspan=""></td>
                                            
                                            <td colspan="3">annethompson@echocv.com</td>
                                            <td></td>
                                            <td>
                                                <div class="form-group">
                                                        <select class="form-control" id="exampleFormControlSelect1">
                                                            <option>can view</option>
                                                            <option>can edit</option>
                                                        </select>
                                                </div>    
                                            </td>
                                        </tr>

                                        <tr >
                                            {{-- <th scope="row">1</th> --}}
                                            <td colspan="3">John Samuel</td>
                                            <td></td>
                                            <td colspan="3">john.samuel@echocv.com</td>
                                            <td></td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                        <option>can view</option>
                                                        <option>can edit</option>
                                                    </select>
                                                </div>       
                                            </td>
                                        </tr>

                                        <tr >
                                            {{-- <th scope="row">1</th> --}}
                                            <td colspan="3">Anne Thompson</td>
                                            <td></td>
                                            <td colspan="3">annethompson@echocv.com</td>
                                            <td></td>
                                            <td> 
                                                <div class="form-group">
                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                        <option>can view</option>
                                                        <option>can edit</option>
                                                    </select>
                                                </div>    
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
            </div>
        </div>
    
    </section>


    <div class="wrapper">

        @include('layouts.sidebar')
    </div>
</body>
</html>