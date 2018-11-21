 <!DOCTYPE html>
 <html>
 <head>
 	<title>Event brote</title>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 	<meta name="csrf-token" content="{{csrf_token()}}">
 	<link rel="stylesheet" type="text/css" href="/css/main.css">
 </head>
 <body>
 	
 @yield('content')
<script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
<script type="text/javascript" src="/js/lairails.js"></script>
 </body>
 </html>