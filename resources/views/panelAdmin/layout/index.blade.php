<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Panel Admin</h1>
        <h3 class="text-center">@yield('title')</h3>

        <div class="row">
            <div class="col-sm-12">
                <div class="row table-responsive">
                    <div class="card">
                        <div class="card-body">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>

