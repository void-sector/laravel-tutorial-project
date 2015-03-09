<!DOCTYPE html>
<html>
<head>
    <title>Laravel test project</title>
    <meta charset="utf-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">

        @yield('content')


        <footer>
            @yield('footer')
        </footer>
    
    </div>

    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>  
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    
</body>
</html>