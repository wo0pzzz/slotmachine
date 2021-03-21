<?php

namespace App\Http\Controllers;

class SlotController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index() {
        $data = [];

        return view('index', $data);
    }

    public function getSymbols() {
        $data = [];
        $symbols = ['9', '10', 'J', 'Q', 'K', 'A', 'cat', 'dog', 'monkey', 'bird'];
        //$symbols = ['cat', 'dog']; // for testing
        $randomArr = [];
        $randomArrJS = [];

        for ($c = 0; $c < 3; $c++) {
            $key = $c;
            for ($r = 0; $r < 5; $r++) {
                $randomSymb = array_rand($symbols);
                $randomArr[$key] = $symbols[$randomSymb];
                $randomArrJS[] = $symbols[$randomSymb];
                $key += 3;
            }
        }

        $data['windata'] = $this->checkLines($randomArr);
        $data['board'] = $randomArrJS;
       //echo '<pre>'; var_dump($randomArrJS); echo '</pre>';

        return json_encode($data);
    }

    private function checkLines($board) {
        $bet = 100;
        $winLines = [];
        $winSumm = 0;
        $payTable = [
            0 => [0, 3, 6, 9, 12],
            1 => [1, 4, 7, 10, 13],
            2 => [2, 5, 8, 11, 14],
            3 => [0, 4, 8, 10, 12],
            4 => [2, 4, 6, 10, 14]
        ];

        foreach ($payTable as $key => $payline) {
            $sym_count = 0;
            foreach ($payline as $key2 => $num) {
                if (isset($payTable[$key][$key2+1])) {
                    if ($board[$num] == $board[$payTable[$key][$key2+1]]) {
                        $sym_count++;
                    } else {
                        continue(2);
                    }
                }

                if ($sym_count >= 2) {
                    $winLines[$key] = [
                        'payline'  => $payline,
                        'linenum'  => $key,
                        'count'    => $sym_count + 1
                    ];
                }
            }
        }

        foreach ($winLines as $wl) {
            switch ($wl['count']) {
                case 3 :
                    $winSumm += (20 * $bet) / 100;
                    break;
                case 4 :
                    $winSumm += (200 * $bet) / 100;
                    break;
                case 5 :
                    $winSumm += (1000 * $bet) / 100;
                    break;
            }
        }

        $winData['win_summ'] = $winSumm;
        $winData['win_lines'] = $winLines;

        return $winData;
    }
}
