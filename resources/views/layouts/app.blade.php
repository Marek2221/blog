<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>{{ config('app.name') }}</title>
        <link rel="icon" href="https://i0.wp.com/zs3-wyszkow.pl/wp-content/uploads/2020/12/szkolazs3-min.jpg?fit=1920%2C1200&ssl=1">
        <!-- Fonts -->
         <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">




        <style>
            body {
                font-family: 'Nunito';
                background-color: lightgray;
            }
            .round-border{
                border: 1px solid black;
                border-radius: 10px;
                transition: 0.2s ease-out;
            }
            .round-border:hover {
                background-color: lightblue;
                transition: 0.2s ease-out;
            }
            .Post-link {
                background-color: lightblue;
                color: black;
                border-radius: 10px;
                text-decoration: none;
                text-decoration: bold;
                transition: 0.2s ease-out;
            }
            .Post-link:hover {
                background-color: red;
                color: lightgray;
                transition: 0.2s ease-out;
            }
            .separator {
                width: 100%; 
                height: 20px; 
                background-color: gray;
            }
            .coloredbox {
                background-color: darkgray;
                border-radius: 10px;
            }
            .noiceborder {
                border: 1px solid black;
                border-radius: 10px;
                background-color: white;
            }
        </style>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Navigation</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active round-border">
                        <a class="nav-link" href="/">Return to start page</a>
                    </li>
                    <li class="nav-item round-border">
                        <a class="nav-link" href="/blog">Home</a>
                    </li>
                    <li class="nav-item round-border">
                        <a class="nav-link" href="/blog/create/post">Add Post</a>
                    </li>
                    <li class="nav-item round-border">
                        <a class="nav-link" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Rick Roll</a>
                    </li>
                </ul>
            </div>
        </nav>

    </head>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <body>

    @yield('content')

    </body>
    
 
</html>
