<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
// {
//     public function result($num1, $operator, $num2)
//     {
//         if ($operator === 'addition') {
//             $result = $num1 + $num2;
//         } elseif ($operator === 'subtraction') {
//             $result = $num1 - $num2;
//         } elseif ($operator === 'multiplication') {
//             $result = $num1 * $num2;
//         } elseif ($operator === 'division') {
//             $result = $num1 / $num2;
//         }
//         return view('calc.result', ['result' => $result]);
//     }
// }


{
    public function result($num1, $operator, $num2)
    {
        switch ($operator) {
            case 'addition':
                $result = $num1 + $num2;
                break;
            case 'subtraction':
                $result = $num1 - $num2;
                break;
            case 'multiplication':
                $result = $num1 * $num2;
                break;
            case 'division':
                $result = $num1 / $num2;
                break;
        }
        return view('calc.result', ['result' => $result]);
    }
}
