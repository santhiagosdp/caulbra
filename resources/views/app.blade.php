<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <title>@yield('titulo')</title>
        <style type="text/css">
            body { font-family: Helvetica, sans-serif; }
            h2, h3 { margin-top:0; }
            form { margin-top: 15px; }
            form > input { margin-right: 15px; }
            #results { float:right; margin:20px; padding:20px; border:1px solid; background:#ccc; }
        </style>
    </head>
    <body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="/">CA ULBRA - CAULBRA</a>
				</div>
			</div>
		</nav>
        <div class="container">
                @yield('conteudo')
        </div>
		<hr noshade></hr>
		<footer class="container-fluid text-center">
			@yield('rodape')
		</footer>
		<hr noshade></hr>
      <!-- jquery -->
      <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
      <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

      <script src="./js/FileSaver.min.js"></script>
      <script src="/js/webcam.js"></script></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>
