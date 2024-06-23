<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class measureController extends Controller
{
    public function calculateBMI(Request $request)
    {
        $weight = $request->input('weight');
        $height = $request->input('height');

        if (!is_numeric($weight) || !is_numeric($height) || $weight <= 0 || $height <= 0) {
            return response()->json(['error' => 'Please enter a valid weight and height'], 400);
        }

        $heightInMeters = $height / 100; // cm -> m
        $bmi = $weight / pow($heightInMeters, 2);
        $desc = $this->interpretBMI($bmi);

        return response()->json([
            'bmi' => number_format($bmi, 2),
            'description' => $desc,
        ]);
    }

    private function interpretBMI($bmi)
    {
        if ($bmi < 18.5) {
            return 'underweight';
        } else if ($bmi < 25) {
            return 'healthy';
        } else if ($bmi < 30) {
            return 'overweight';
        } else {
            return 'obese';
        }
    }
}
