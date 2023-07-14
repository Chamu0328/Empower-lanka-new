<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empower Lanka</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dash.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="css/header.css">
    @yield('links')
</head>
<body>
    <nav>
        <div class="container">
            <div>
                <a href="/"><h2 class="logo">Empower lanka</h2></a>
            </div>
            
            <div class="profile"> 
              
            </div>
            
        </div>
    </nav>
    <section class="content">
        @yield('body')
    </section>
    
    @yield('scripts')
</body>
</html>