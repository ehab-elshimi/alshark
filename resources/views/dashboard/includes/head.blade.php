<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

<title>OneUI - Bootstrap 4 Admin Template &amp; UI Framework</title>

<meta name="description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
<meta name="author" content="pixelcave">
<meta name="robots" content="noindex, nofollow">

<!-- Open Graph Meta -->
<meta property="og:title" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework">
<meta property="og:site_name" content="OneUI">
<meta property="og:description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
<meta property="og:type" content="website">
<meta property="og:url" content="">
<meta property="og:image" content="">

<!-- Icons -->
<!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
<link rel="shortcut icon" href="{{ asset('dashboard/media/favicons/favicon.png') }}">
<link rel="icon" type="image/png" sizes="192x192" href="{{ asset('dashboard/media/favicons/favicon-192x192.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('dashboard/media/favicons/apple-touch-icon-180x180.png') }}">
<!-- END Icons -->

<!-- Stylesheets -->
<!-- Fonts and OneUI framework -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
<link rel="stylesheet" id="css-main" href="{{ asset('dashboard/css/oneui.min.css') }}">
<link rel="stylesheet" id="css-main" href="{{ asset('dashboard/css/stylecustomizedcss.css') }}">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<style>

    .box{
    width:400px;
    margin:0;
    background-color: #eee;
   }

   .box label{
    /* font-size: 18px;
    color: #000; */
   }
   #customer_name:focus{
        border: 2px solid rgb(58, 135, 224);
   }
   #customer_name{

   }
   .container-a{
    height:100px;
    width:700px;
    margin-left:2.5%;
    margin-bottom: 0px;
   }
   .container-a .grid-container{
    display: grid;
    grid-template-columns: auto auto auto;
   }
   .container-a .grid-container .dollar{
        width:200px;
   }
   .container-a .grid-container .customer>label{
        margin-left:150px;
   }
   .container-a .grid-container .customer>input{
        width:400px;
        margin-left:150px;
   }
   .container-a .grid-container .date>label{
        width:300px;
        margin-left:109px;
        text-align: center;
   }
   .container-a .grid-container .date .datadate{
    margin-top: 20px;
    color:green;

   }
   hr{
    padding: 0;
    margin: 0;
    margin-left:2.5%;
    margin-top:0px;
   }
   .container-b{
    height:90px;
    width:1100px;
    background-color: rgb(203, 201, 201);
    padding: 0;
    padding-left: 100px;
    margin-left:2.5%;
   }
   .container-b select{
    height:45px;
   }
   .container-c{
    height: 40px;
    width:1100px;
    background-color: #b7b7b7;
    margin-left: 29px;
   }
   .container-c .print{
    float: right;
    margin-top: 8px;
    margin-right: 30%;
    color:#000;
    font-weight: bold;
    border-bottom: 1px solid #000;
    padding-bottom:3px;
   }
   .container-c .print:hover{
    text-decoration: none;
   }
   .container-c .save{
    float: right;
    margin-top: 8px;
    margin-right: 3%;
    color:#000;
    font-weight: bold;
    border-bottom: 1px solid #000;
   }
   .container-c .save:hover{
    text-decoration: none;
   }
   .container-c .print span{
    padding-left:8px;

    position: relative;
    top:-1px;

   }
   .container-c .save span{
    padding-left:8px;
    position: relative;
    top:-3px;
   }
   .container-d{
    width:1100px;
    margin-left:29px;
   }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    @if(request()->routeIs('dashboard.home'))
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow" style="background-color: #EDF0F2">
    @elseif (request()->routeIs('team.index'))
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow" style="background-color: #EDF0F2">
    @else
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
    @endif
