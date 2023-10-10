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
        }

        .evolution-stage {
            margin: 0 15px;
            opacity: 0.5;
            animation: fadeStage 10s infinite;
        }

        .hominid {
            animation-delay: 3s;
        }

        .human {
            animation-delay: 6s;
        }

        @keyframes fadeStage {
            0%, 100% {
                opacity: 0.5;
            }
            50% {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="container text-center evolution-container">
        <div class="evolution-stage monkey">
            <svg width="50" height="100">
                <circle cx="25" cy="25" r="20" fill="brown" /> <!-- Monkey head -->
                <!-- Add more SVG elements to represent monkey body if needed -->
            </svg>
        </div>

        <div class="evolution-stage hominid">
            <svg width="50" height="150">
                <circle cx="25" cy="25" r="20" fill="tan" /> <!-- Hominid head -->
                <rect x="10" y="50" width="30" height="80" fill="tan" /> <!-- Hominid body -->
            </svg>
        </div>

        <div class="evolution-stage human">
            <svg width="50" height="200">
                <circle cx="25" cy="25" r="20" fill="peachpuff" /> <!-- Human head -->
                <rect x="10" y="50" width="30" height="140" fill="peachpuff" /> <!-- Human body -->
            </svg>
        </div>
    </div>
</body>
</html>
