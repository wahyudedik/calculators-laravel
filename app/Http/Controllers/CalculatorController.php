<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {
        $request->validate([
            'number1' => 'required|numeric',
            'number2' => 'required|numeric',
            'operator' => 'required|in:add,subtract,multiply,divide',
        ]);

        $number1 = $request->input('number1');
        $number2 = $request->input('number2');
        $operator = $request->input('operator');

        $result = $this->performCalculation($number1, $number2, $operator);

        return view('calculator', compact('result'));
    }

    private function performCalculation($number1, $number2, $operator)
    {
        switch ($operator) {
            case 'add':
                return $number1 + $number2;
            case 'subtract':
                return $number1 - $number2;
            case 'multiply':
                return $number1 * $number2;
            case 'divide':
                return $number1 / $number2;
        }
    }
}
