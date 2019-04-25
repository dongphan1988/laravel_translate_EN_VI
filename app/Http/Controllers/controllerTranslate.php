<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerTranslate extends Controller
{
    function showList(){
        return view('list');
    }
    function getTranslate(Request $request)
    {
        $arrayEng = ['one','two','three'];
        $arrayVi = ['1','2','3'];
        $string = $request->inPut;
        $translate = 0;

            for ($index = 0; $index < count($arrayVi); $index++) {
                if ($string == $arrayVi[$index]) {
                    $translate = $arrayEng[$index];
                    return (view('translate', compact('translate')));
                }
            }
            $translate = "input wrong";
            return (view('translate', compact('translate')));
        }


}
