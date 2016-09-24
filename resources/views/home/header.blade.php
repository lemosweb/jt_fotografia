<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Julio Torres Fotografia</title>

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

    <!-- font awesome -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}" />

    <!-- animate.css -->
    <link rel="stylesheet" href="{{url('assets/animate/animate.css')}}" />
    <link rel="stylesheet" href="{{url('assets/animate/set.css')}}" />

    <!-- gallery -->
    <link rel="stylesheet" href="{{url('assets/gallery/blueimp-gallery.min.css')}}">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{url('images/favicon.ico" type="image/x-icon')}}">
    <link rel="icon" href="{{url('images/favicon.ico" type="image/x-icon')}}">


    <link rel="stylesheet" href="{{url('assets/style.css')}}">

</head>

<body>
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<div class="navbar-wrapper">
    <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="top-nav">
            <div class="container">
                <div class="navbar-header">
                    <!-- Logo Starts -->
                    <a class="navbar-brand" href="#home"><img src="{{url('images/logo.jpg')}}" alt="logo"></a>
                    <!-- #Logo Ends -->


                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>


                <!-- Nav Starts -->
                <div class="navbar-collapse  collapse">
                    <ul class="nav navbar-nav navbar-right scroll">
                        <li class="active"><a href="{{route('index')}}#home">Home</a></li>
                        <li ><a href="{{route('index')}}#works">Galerias</a></li>
                        <li ><a href="{{route('index')}}#about">Release</a></li>
                        <li ><a href="{{route('index')}}#partners">Agenda</a></li>
                        <li ><a href="{{route('index')}}#videos">Filmes</a></li>
                        <li ><a href="{{route('index')}}#contact">Contato</a></li>
                    </ul>
                </div>
                <!-- #Nav Ends -->

            </div>
        </div>

    </div>
</div>
<!-- #Header Starts -->