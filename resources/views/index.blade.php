<html>
<head>
    <title>Slot machine by Arturs B.</title>

    <link rel="stylesheet" href="/styles/styles.css">
    <script src="/scripts/jquery-3.5.1.min.js"></script>
    <script src="/scripts/smachine.js"></script>
</head>
<body>
<div class="content">
    <div class="wrapper">
        <div class="machine">
            <div class="svglines line-0">
                <svg class="line-container">
                    <line x1="5" y1="50" x2="495" y2="50" class="svgline" style="stroke:rgb(255,165,0);" />
                </svg>
            </div>
            <div class="svglines line-1">
                <svg class="line-container">
                    <line x1="5" y1="150" x2="495" y2="150" class="svgline" style="stroke:rgb(255,255,0);" />
                </svg>
            </div>
            <div class="svglines line-2">
                <svg class="line-container">
                    <line x1="5" y1="250" x2="495" y2="250" class="svgline" style="stroke:rgb(128,128,0);" />
                </svg>
            </div>
            <div class="svglines line-3">
                <svg class="line-container">
                    <line x1="5" y1="5" x2="250" y2="250" class="svgline" style="stroke:rgb(255,0,0);" />
                    <line x1="250" y1="250" x2="495" y2="5" class="svgline" style="stroke:rgb(255,0,0);" />
                </svg>
            </div>
            <div class="svglines line-4">
                <svg class="line-container">
                    <line x1="5" y1="295" x2="250" y2="50" class="svgline" style="stroke:rgb(0,128,0);" />
                    <line x1="250" y1="50" x2="495" y2="295" class="svgline" style="stroke:rgb(0,128,0);" />
                </svg>
            </div>

            <table>
                <tr class="line">
                    <td class="item"></td>
                    <td class="item"></td>
                    <td class="item"></td>
                    <td class="item"></td>
                    <td class="item"></td>
                </tr>
                <tr class="line">
                    <td class="item"></td>
                    <td class="item"></td>
                    <td class="item"></td>
                    <td class="item"></td>
                    <td class="item"></td>
                </tr>
                <tr class="line">
                    <td class="item"></td>
                    <td class="item"></td>
                    <td class="item"></td>
                    <td class="item"></td>
                    <td class="item"></td>
                </tr>
            </table>
        </div>
        <div class="info-container">
            <div class="info">
                <span><b>BET: </b>100 (1.00 €)</span>
                <div class="win-text">
                    <b>YOU WIN!</b>
                    <span class="win-summ"></span>
                    <br>
                    <b>ON LINES:</b><br>
                    <div class="win-lines">

                    </div>
                </div>
            </div>
            <div class="buttons">
                <button id="playbtn">Play!</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
