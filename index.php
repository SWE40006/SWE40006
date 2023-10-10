<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evolution Animation</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #eee;
        }

        .evolution-container {
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        .evolution-stage {
            margin: 0 15px;
            animation: moveStage 10s infinite;
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
            stroke: currentColor;
            stroke-width: 3;
            animation: swing 0.5s infinite;
        }

        .arm {
            animation-delay: 0.25s;
        }

        @keyframes swing {
            0%, 100% {
                transform: rotate(0);
            }
            50% {
                transform: rotate(15deg);
            }
        }
    </style>
</head>
<body>
    <div class="container text-center evolution-container">
        <!-- Monkey -->
        <div class="evolution-stage monkey">
            <svg width="50" height="100" viewBox="0 0 50 100">
                <circle cx="25" cy="25" r="20" fill="brown" /> <!-- Monkey head -->
                <line x1="10" y1="50" x2="10" y2="80" class="leg" stroke="brown" />
                <line x1="40" y1="50" x2="40" y2="80" class="leg" stroke="brown" />
                <line x1="10" y1="40" x2="5" y2="60" class="arm" stroke="brown" />
                <line x1="40" y1="40" x2="45" y2="60" class="arm" stroke="brown" />
            </svg>
        </div>

        <!-- Hominid -->
        <div class="evolution-stage hominid">
            <svg width="50" height="150" viewBox="0 0 50 150">
                <circle cx="25" cy="25" r="20" fill="tan" /> <!-- Hominid head -->
                <rect x="10" y="50" width="30" height="80" fill="tan" /> <!-- Hominid body -->
                <line x1="10" y1="130" x2="10" y2="140" class="leg" stroke="tan" />
                <line x1="40" y1="130" x2="40" y2="140" class="leg" stroke="tan" />
                <line x1="10" y1="60" x2="5" y2="80" class="arm" stroke="tan" />
                <line x1="40" y1="60" x2="45" y2="80" class="arm" stroke="tan" />
            </svg>
        </div>

        <!-- Human -->
        <div class="evolution-stage human">
            <svg width="50" height="200" viewBox="0 0 50 200">
                <circle cx="25" cy="25" r="20" fill="peachpuff" /> <!-- Human head -->
                <rect x="10" y="50" width="30" height="100" fill="peachpuff" /> <!-- Human body -->
                <line x1="10" y1="150" x2="10" y2="190" class="leg" stroke="peachpuff" />
                <line x1="40" y1="150" x2="40" y2="190" class="leg" stroke="peachpuff" />
                <line x1="10" y1="60" x2="5" y2="90" class="arm" stroke="peachpuff" />
                <line x1="40" y1="60" x2="45" y2="90" class="arm" stroke="peachpuff" />
            </svg>
        </div>
    </div>
</body>
</html>
