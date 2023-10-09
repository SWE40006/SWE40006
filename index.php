<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dyson Sphere Rotation</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #000;
            overflow: hidden;
        }

        .dyson-sphere {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            border: 10px dotted #FFF; /* Representing the solar panels or structures of the Dyson sphere */
            animation: rotateDyson 10s infinite linear;
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
    <div class="dyson-sphere"></div>
</body>
</html>
