<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title', 'Desktop') | Dashboard</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="/css/adminLTE.css" rel="stylesheet">
	<link href="/css/skin-blue.css" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		@include('admin.template.partials.header')
        @include('admin.template.partials.aside')
        @include('admin.template.partials.content')
        @include('admin.template.partials.footer')
	</div>
	<script src="/js/jquery.min.js"></script>
	<script src="/js/bootstrap.js"></script>
	<script src="/js/vendor.js"></script>
    <script src="/js/adminLTE.js"></script>
    @yield('js')
</body>
</html>