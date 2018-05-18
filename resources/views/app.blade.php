<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <title>@yield('titulo')</title>
    </head>
    <body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">CA ULBRA - CAULBRA</a>
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
		
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>