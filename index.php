<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dyson Sphere Rotation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #000;
        }

        .dyson-sphere {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            border: 10px dotted #FFF; /* Representing the solar panels or structures of the Dyson sphere */
            animation: rotateDyson 10s infinite linear;
            position: relative;
        }

        /* Sample representation of solar panels/structures of the Dyson sphere using pseudo-elements */
        .dyson-sphere::before,
        .dyson-sphere::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 60%;
            height: 10px;
            background-color: #FFF;
            border-radius: 10px;
        }

        .dyson-sphere::before {
            transform: translate(-50%, -50%) rotate(45deg);
        }

        .dyson-sphere::after {
            transform: translate(-50%, -50%) rotate(-45deg);
        }

        @keyframes rotateDyson {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <div class="dyson-sphere mx-auto mb-3"></div>
        <p class="text-white">Hello, Me Dyson Sphere</p>
    </div>

    <!-- Optional JavaScript and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
