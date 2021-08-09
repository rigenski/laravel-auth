<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authentication</title>
    <link rel="stylesheet" href={{ asset('/assets/css/style.css') }}>
</head>
<body>
    @yield('main')

    <script>
        const drawer = document.querySelector('.nav_drawer');
        const nav = document.querySelector('.nav_list');

        drawer.addEventListener("click", function () {
            const arr = nav.classList.value.split(" ");

            for (i = 0; i < arr.length; i++) {
                if (arr[i] == "show") {
                    nav.classList.remove("show");
                } else {
                    nav.classList.add("show");
                }
            }
        })
    </script>
</body>
</html>