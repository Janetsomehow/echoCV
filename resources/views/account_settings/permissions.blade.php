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
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" rel="stylesheet">
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
                            <a href="#" class="list-group-item list-group-item-action border-none permission p-2" style="color: #333333"> Users and Permissions</a></li>
                    </ul>
                </aside>
            </div>
            <div class="profile-form">
                    <h4 class="font-weight-bold">Users and Permissions</h4>

                    <form class="form-inline form-search mt-4" style="border-radius: 4px"  >
                        <label class="sr-only" for="inlineFormInputName2"></label>
                        <input type="search" class="form-control search-form mb-2   mr-sm-2" style="width: 24rem"="inlineFormInputName2" placeholder="Search for a user">
                      
                        <button type="submit" class="btn btn-primary search-btn btn-sm mb-2 p-2">
                          <svg class="svg" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M15.0833 13.3333H14.1617L13.835 13.0183C15.0179 11.6464 15.668 9.89481 15.6667 8.08334C15.6667 6.58349 15.2219 5.11734 14.3886 3.87026C13.5554 2.62319 12.371 1.65121 10.9854 1.07725C9.59968 0.503286 8.07492 0.35311 6.6039 0.645715C5.13288 0.93832 3.78166 1.66056 2.72111 2.72111C1.66056 3.78166 0.93832 5.13288 0.645715 6.6039C0.35311 8.07492 0.503286 9.59968 1.07725 10.9854C1.65121 12.371 2.62319 13.5554 3.87026 14.3886C5.11734 15.2219 6.58349 15.6667 8.08334 15.6667C9.96167 15.6667 11.6883 14.9783 13.0183 13.835L13.3333 14.1617V15.0833L19.1667 20.905L20.905 19.1667L15.0833 13.3333ZM8.08334 13.3333C5.17834 13.3333 2.83334 10.9883 2.83334 8.08334C2.83334 5.17834 5.17834 2.83334 8.08334 2.83334C10.9883 2.83334 13.3333 5.17834 13.3333 8.08334C13.3333 10.9883 10.9883 13.3333 8.08334 13.3333Z" fill="white"/>
                          </svg>
                        </button>
                
                    </form>
                        <div class="manage">
                            <div class="table ml-1">
                                <table class=" table-responsive table-borderless table-hover"  style="margin-top: -4rem;">
                                    
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
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default">can view</button>
                                                        <button type="button" class="btn btn-default dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                          {{-- <span class="sr-only">Toggle Dropdown</span> --}}
                                                        </button>
                                                        <div class="dropdown-menu text-left" aria-labelledby="dropdownMenuReference">
                                                          <a class="dropdown-item" href="#">can view</a>
                                                          <a class="dropdown-item" href="#">can edit</a>
                                                          <a class="dropdown-item" href="#">admin</a>
                                                          <div class="dropdown-divider"></div>
                                                          <a class="dropdown-item text-danger" href="#">remove</a>
                                                        </div>
                                                      </div>
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
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default">can view</button>
                                                        <button type="button" class="btn btn-default dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                          {{-- <span class="sr-only">Toggle Dropdown</span> --}}
                                                        </button>
                                                        <div class="dropdown-menu text-left" aria-labelledby="dropdownMenuReference">
                                                          <a class="dropdown-item" href="#">can view</a>
                                                          <a class="dropdown-item" href="#">can edit</a>
                                                          <a class="dropdown-item" href="#">admin</a>
                                                          <div class="dropdown-divider"></div>
                                                          <a class="dropdown-item text-danger" href="#">remove</a>
                                                        </div>
                                                      </div>
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
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default">can view</button>
                                                        <button type="button" class="btn btn-default dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                          {{-- <span class="sr-only">Toggle Dropdown</span> --}}
                                                        </button>
                                                        <div class="dropdown-menu text-left" aria-labelledby="dropdownMenuReference">
                                                          <a class="dropdown-item" href="#">can view</a>
                                                          <a class="dropdown-item" href="#">can edit</a>
                                                          <a class="dropdown-item" href="#">admin</a>
                                                          <div class="dropdown-divider"></div>
                                                          <a class="dropdown-item text-danger" href="#">remove</a>
                                                        </div>
                                                      </div>
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
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default">can view</button>
                                                        <button type="button" class="btn btn-default dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                          {{-- <span class="sr-only">Toggle Dropdown</span> --}}
                                                        </button>
                                                        <div class="dropdown-menu text-left" aria-labelledby="dropdownMenuReference">
                                                          <a class="dropdown-item" href="#">can view</a>
                                                          <a class="dropdown-item" href="#">can edit</a>
                                                          <a class="dropdown-item" href="#">admin</a>
                                                          <div class="dropdown-divider"></div>
                                                          <a class="dropdown-item text-danger" href="#">remove</a>
                                                        </div>
                                                      </div>
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
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default">can view</button>
                                                        <button type="button" class="btn btn-default dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                          {{-- <span class="sr-only">Toggle Dropdown</span> --}}
                                                        </button>
                                                        <div class="dropdown-menu text-left" aria-labelledby="dropdownMenuReference">
                                                          <a class="dropdown-item" href="#">can view</a>
                                                          <a class="dropdown-item" href="#">can edit</a>
                                                          <a class="dropdown-item" href="#">admin</a>
                                                          <div class="dropdown-divider"></div>
                                                          <a class="dropdown-item text-danger" href="#">remove</a>
                                                        </div>
                                                      </div>
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