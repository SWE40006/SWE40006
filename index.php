<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Evolution Animation</title>
    <style>
        body {
            font-family: 'Quicksand', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #eee;
        }

        .evolution-container {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        .evolution-stage {
            margin: 0 15px;
            min-width: 30%;
            animation: moveStage 10s infinite alternate;
        }

        .hominid {
            animation-delay: 3s;
        }

        .human {
            animation-delay: 6s;
        }

        @keyframes moveStage {
            0%, 100% {
                transform: translateX(0);
            }
            50% {
                transform: translateX(-20px);
            }
        }

        .leg, .arm {
            fill: none;
            stroke-width: 3;
            animation: swing 2.5s infinite;
            transform-origin: top;
        }

        .right-leg, .right-arm {
            animation-delay: 2.25s;
        }

        @keyframes swing {
            0%, 100% {
                transform: rotate(-15deg);
            }
            50% {
                transform: rotate(15deg);
            }
        }
    </style>
</head>
<body class="bg-dark p-5">
    <div>
       
        <h1 class="text-white">The Evolution of Software</h1>
        <p class="text-white">By  Joe, Tevy, Wei, Mikkels</p>
    </div>
    <div class="container text-center evolution-container">
        <!-- Monkey -->
        <div class="evolution-stage monkey">
            <svg width="50" height="100">
                <circle cx="25" cy="25" r="20" fill="brown" /> <!-- Monkey head -->
                <line x1="25" y1="45" x2="25" y2="70" class="leg" stroke="brown" />
                <line x1="15" y1="45" x2="15" y2="70" class="leg right-leg" stroke="brown" />
                <line x1="10" y1="40" x2="5" y2="60" class="arm" stroke="brown" />
                <line x1="40" y1="40" x2="45" y2="60" class="arm right-arm" stroke="brown" />
            </svg>
        </div>
    

        <!-- Hominid -->
        <div class="evolution-stage hominid">
            <svg width="50" height="150">
                <circle cx="25" cy="25" r="20" fill="tan" /> <!-- Hominid head -->
                <rect x="10" y="50" width="30" height="80" fill="tan" /> <!-- Hominid body -->
                <line x1="25" y1="130" x2="25" y2="140" class="leg" stroke="tan" />
                <line x1="15" y1="130" x2="15" y2="140" class="leg right-leg" stroke="tan" />
                <line x1="10" y1="60" x2="5" y2="80" class="arm" stroke="tan" />
                <line x1="40" y1="60" x2="45" y2="80" class="arm right-arm" stroke="tan" />
            </svg>
        </div>

        <!-- Human -->
        <div class="evolution-stage human">
            <svg width="50" height="200">
                <circle cx="25" cy="25" r="20" fill="peachpuff" /> <!-- Human head -->
                <rect x="10" y="50" width="30" height="100" fill="peachpuff" /> <!-- Human body -->
                <line x1="25" y1="150" x2="25" y2="190" class="leg" stroke="peachpuff" />
                <line x1="15" y1="150" x2="15" y2="190" class="leg right-leg" stroke="peachpuff" />
                <line x1="10" y1="60" x2="5" y2="90" class="arm" stroke="peachpuff" />
                <line x1="40" y1="60" x2="45" y2="90" class="arm right-arm" stroke="peachpuff" />
            </svg>
        </div>
    </div>
</body>

</html>
