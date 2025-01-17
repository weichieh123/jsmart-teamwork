<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSMART</title>
    <style>
        /* * {
            outline: 1px solid red;
        } */
        body,
        html {
            width: 100%;
            height: 100%;
            background-color: #f8f4d5;
            margin: 0;
            padding: 0;
        }

        .title {
            width: 200px;
            margin: 0 auto;
            text-align: center;
        }

        .title h2 {
            margin: 0;
            padding: 300px 0 0 0;
        }

        .container {
            width: 200px;
            height: 200px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            margin: auto;
            filter: url('#goo');
            animation: rotate-move 2s ease-in-out infinite;
        }

        .dot {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background-color: #000;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
        }

        .dot-3 {
            background-color: #f74d75;
            animation: dot-3-move 2s ease infinite, index 6s ease infinite;
        }

        .dot-2 {
            background-color: #10beae;
            animation: dot-2-move 2s ease infinite, index 6s -4s ease infinite;
        }

        .dot-1 {
            background-color: #ffe386;
            animation: dot-1-move 2s ease infinite, index 6s -2s ease infinite;
        }

        @keyframes dot-3-move {
            20% {
                transform: scale(1)
            }

            45% {
                transform: translateY(-18px) scale(.45)
            }

            60% {
                transform: translateY(-90px) scale(.45)
            }

            80% {
                transform: translateY(-90px) scale(.45)
            }

            100% {
                transform: translateY(0px) scale(1)
            }
        }

        @keyframes dot-2-move {
            20% {
                transform: scale(1)
            }

            45% {
                transform: translate(-16px, 12px) scale(.45)
            }

            60% {
                transform: translate(-80px, 60px) scale(.45)
            }

            80% {
                transform: translate(-80px, 60px) scale(.45)
            }

            100% {
                transform: translateY(0px) scale(1)
            }
        }

        @keyframes dot-1-move {
            20% {
                transform: scale(1)
            }

            45% {
                transform: translate(16px, 12px) scale(.45)
            }

            60% {
                transform: translate(80px, 60px) scale(.45)
            }

            80% {
                transform: translate(80px, 60px) scale(.45)
            }

            100% {
                transform: translateY(0px) scale(1)
            }
        }

        @keyframes rotate-move {
            55% {
                transform: translate(-50%, -50%) rotate(0deg)
            }

            80% {
                transform: translate(-50%, -50%) rotate(360deg)
            }

            100% {
                transform: translate(-50%, -50%) rotate(360deg)
            }
        }

        @keyframes index {

            0%,
            100% {
                z-index: 3
            }

            33.3% {
                z-index: 2
            }

            66.6% {
                z-index: 1
            }
        }
    </style>
</head>

<body>
    <div class="title">
        <h2>請先登入</h2>
    </div>
    <div class="container">
        <div class="dot dot-1"></div>
        <div class="dot dot-2"></div>
        <div class="dot dot-3"></div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <defs>
            <filter id="goo">
                <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 21 -7" />
            </filter>
        </defs>
    </svg>
</body>

</html>