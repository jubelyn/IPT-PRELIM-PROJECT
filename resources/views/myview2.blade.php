<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Prelim Project</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    </head>
    <body class="antialiased">

        <header class="mt-5">
            <div class="d-flex justify-content-center">
                <h1>Integrative Programming Prelim Project</h1>
            </div>
            <nav class="d-flex justify-content-center my-5">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                      <li class="page-item"><a class="page-link" href="{{url('/')}}">Previous</a></li>
                      <li class="page-item"><a class="page-link" href="{{url('/')}}">1</a></li>
                      <li class="page-item"><a class="page-link" href="{{url('/myview2')}}">2</a></li>
                      <li class="page-item"><a class="page-link" href="{{url('/myview3')}}">3</a></li>
                      <li class="page-item"><a class="page-link" href="{{url('myview3')}}">Next</a></li>
                    </ul>
                </nav>
            </nav>
        </header>

        <div class="container d-flex justify-content-center">
            <p class="h1">My view 2</p>
        </div>
        <link rel="stylesheet" href="{{asset('js/bootstrap.min.js')}}">
    </body>
</html>
