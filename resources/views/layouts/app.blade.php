<!DOCTYPE html>
<html lang="en">

<head>

	 <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>

	<meta charset="utf-8">
	<title>IIC | College Management System</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<!-- Custom Stylesheet -->
	<!-- <link rel="stylesheet" href="css/style.css"> -->

	<script src="{{ asset('/assets/js-core/jquery-3.1.0.min.js') }}"></script>
	<link rel="icon" type="{{ asset('/assets/image-resources/iic.png') }}" href="favicon-32x32.png"/>
	<link rel="stylesheet" href="{{ asset('/assets/helpers/style-index.css') }}">
	<link rel="stylesheet" href="{{ asset('/assets/helpers/animate.css') }}">

	<script type="text/javascript">
        $(window).load(function(){
            setTimeout(function() {
                $('#loading').fadeOut( 400, "linear" );
            }, 300);
        });
    </script>
</head>

<body class="bg-image">
	<div class="container">
		<header id="header">
			<img src="{{ asset('/assets/image-resources/iic.png') }}">
			<h1 id="title" class="hidden">International Islamic College</h1>
			<h2 id="description" class="hidden">College Management System</h2>
			
		</header>
        @yield('content')
	</div>
</body>

<script>
	$(document).ready(function () {
    	$('#header').addClass('animated fadeInDown');
    
    	$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>

</html>