$(document).ready(function() {

    let symbolsArray;
    let itemsArray = $('.machine .item');
    let winData;

    function getSymbols() {
        $.ajax({
            type: 'POST',
            url: '/api/get_symbols',
            dataType: 'json',
            success: function (data) {
                symbolsArray = data.board;
                winData = data.windata;
                insertSymbols();
            }
        });
    }

    function insertSymbols() {
        for (num in symbolsArray) {
            $(itemsArray[num]).text(symbolsArray[num]);
        }
        checkWin();
    }

    function checkWin() {
        $('.win-lines').html('');
        for (let line in winData.win_lines) {
            $('.line-' + winData.win_lines[line].linenum).show();

            if (winData.win_summ > 0) {
                $('.win-lines').append('<div>' + winData.win_lines[line].payline + '</div>');
            }
        }

        if (winData.win_summ > 0) {
            $('.win-text').show();
            $('.win-summ').text(winData.win_summ + '  (' + (winData.win_summ / 100).toFixed(2) + ' €)');
        } else {
            $('.win-text').hide();
        }
    }

    $('#playbtn').on('click', function () {
        $('.svglines').hide();
        getSymbols();
    });

});
