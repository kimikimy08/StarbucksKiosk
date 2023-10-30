<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loader</title>

    <style>
        .loader-container {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            z-index: 10000;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .loader-container img {
            min-height: 10rem;
            min-width: 10rem;
            max-height: 15rem;
            max-width: 15rem;
        }

        .loader-container.fade-out {
            top: -110%;
            opacity: 0;
        }
    </style>
</head>

<body>

    <!-- Loader -->
    <div class="loader-container">
        <img src="include/loader/loader.gif" alt="">
    </div>

    <script>
        function loader() {
            document.querySelector('.loader-container').classList.add('fade-out');
        }

        function fadeOut() {
            setInterval(loader, 3000);
        }

        window.onload = fadeOut;
    </script>

</body>

</html>