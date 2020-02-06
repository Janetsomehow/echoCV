<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Modal with Swal</title>
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</head>
<body>
   <!--

    Copy the swal cdn and the javascript code.
    I think swal makes modal like this easier 

    -->


     <script> 
     Swal.fire({
        title: "<p> Delete File</p>", 
        html: "Are you sure you want to delete this file?</b>",  
        confirmButtonText: "Yes, Delete this file",
        confirmButtonColor: '#AD0C0C ',
        cancelButtonText: "No, keep file",
        showCancelButton: true,
       
    });
     </script>
    
</body>
</html>