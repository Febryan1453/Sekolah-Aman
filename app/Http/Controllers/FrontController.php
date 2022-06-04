<?php

namespace App\Http\Controllers;

use App\Http\Requests\CariRequest;
use App\Models\DataNik;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.yield.index');
    }

    public function strrrr()
    {
        $testString = 'Muhammad Febryan';

        // 56789
        // $data = Str::substr($testString, 3, 8);
        // $data = Str::str_replace("a", "*", "$testString");
        $string = Str::mask('taylor@example.com', '*', -10, 3);
        echo $string;
    }

    public function cariNik(CariRequest $request)
    {
        $hasil = $request->nik;
        $title = "Result for $request->nik";
        $keyword = $request->nik;
        $result = DataNik::where('nik', 'like', "%" . $keyword . "%")->get();
        // dd($result);
        return view('front.yield.hasil', [
            'result' => $result,
            'hasil' => $hasil,
            'title' => $title,
        ]);
    }
}
