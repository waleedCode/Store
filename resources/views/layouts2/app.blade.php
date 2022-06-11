<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Car</title>
    <link href="https:cdnjs.cloudflare.com/ajax/lib/mdb-ui-kit/3.3.0/mdb.min.css" rel="styelsheet" />
    <link type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/lib/mdb-ui-kit/3.3.0/mdb.min.js"/>
</head>
<body>
    <div class="container w-50 mt-5"></div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="{{ route('cars.index')}}">home</a></li>
            <li class="breadcrumb-item"> <a href="{{ route('cars.create')}}">create</a></li>

        </ol>

    </nav>
    @yield('content')
    
</body>
</html>