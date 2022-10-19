<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>.::Cafetería Konecta::.</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.css">
</head>
<body class="antialiased">
<div class="w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('index')}}">.::Cafeteria Konecta::.</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('index')}}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('products.index')}}">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('sales.index')}}">Ventas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container" id="app">
            @include('sweetalert::alert')
            {{ $slot }}
        </div>
    </main>
    <footer class="flex justify-center mt-4 sm:items-center sm:justify-between bg-light">
        <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
            Héctor Julián Cogua Morera -
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>
    </footer>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
<script>
    $('document').ready(function (){
        $('.product').on('change',function (){
            stock = $('.product option:selected').data('stock');
            if (stock == 0) {
                $('#quantity').attr("disabled", "disabled");
                $.toast({
                    heading: 'Error',
                    text: 'El stock de este producto ya se encuentra en 0, no se puede vender, por favor selecciona otra opción',
                    showHideTransition: 'fade',
                    hideAfter: 5000,
                    position: 'top-right',
                    icon: 'error'
                });
            } else {
                $('#quantity').removeAttr("disabled", "disabled");
            }
        });
    });

</script>
</html>
