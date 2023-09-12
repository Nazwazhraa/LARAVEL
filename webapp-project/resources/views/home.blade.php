@extends('layouts.app')

@section('content')

<head>

<!-- Styles -->
<link href="/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/app.css" rel="stylesheet">
</head>
<body>

<!-- Scripts -->

<!-- <script src="/js/app.js"></script> -->
<script src="/js/jquery-3.1.0.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
@yield('scripts')
</body>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Anda Berhasil Login!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
