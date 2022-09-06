<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" />
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.6.0/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/date-1.1.2/fh-3.2.4/r-2.3.0/rg-1.2.0/sb-1.3.4/sp-2.0.2/sr-1.1.1/datatables.min.css" />-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.12.1/b-2.2.3/b-html5-2.2.3/cr-1.5.6/fc-4.1.0/fh-3.2.4/r-2.3.0/sc-2.0.7/sb-1.3.4/sp-2.0.2/sl-1.4.0/sr-1.1.1/datatables.min.css"/>
 
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <script src="https://kit.fontawesome.com/d9258185bc.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  


 
    <title>Soporte</title>
    <style>
        table thead {
            background-color: #a0daff;
        }
    </style>
</head>

<body>

    <?php
    echo (isset($_GET['success'])) ? "
            <script>
            Swal.fire(
                      '" . $_GET['success'] . "!',
                      'El registro fue " . $_GET['success'] . ".',
                      'success'
                    );
            </script>
        " : "";
    ?>
    <div class="wrapper">

        <div style="width:100%;">
            <div id="content" style="background-color: white">