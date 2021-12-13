<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
<script>
    if (document.getElementById("remove-message") !== null) {
        document.getElementById("remove-message").addEventListener("click", function() {
        var element = document.getElementById("message");
            element.classList.add("d-none");
        });
    }
</script>
</html>