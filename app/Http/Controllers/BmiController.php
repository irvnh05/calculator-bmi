<?php

namespace App\Http\Controllers;
use App\Models\Calculator;
use Illuminate\Http\Request;

class BmiController extends Controller
{
    public function index()
    {
      return view('pages.index');
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $bmi = new Calculator();
        $bmi->usia = $request->usia;
        $bmi->jenis_kelamin = $request->jenis_kelamin;
        $bmi->berat_badan = $request->berat_badan;
        $bmi->tinggi_badan = $request->tinggi_badan/100;
        $tinggi_badan2 = ($bmi->tinggi_badan) * ($bmi->tinggi_badan);
        $bmi->hasil = ( $bmi->berat_badan / $tinggi_badan2 );
        
        if (($bmi->hasil) < 18.5)
        {
            $bmi->hasil = 'Kekuragan Berat Badan';
        }
        elseif (($bmi->hasil >= 18.0) && ($bmi->hasil <= 24.9))
        {
            $bmi->hasil = 'Normal(Ideal)';
        }
        elseif (($bmi->hasil >= 25.0) && ($bmi->hasil <= 29.9))
        {
            $bmi->hasil = 'Kelebihan Berat Badan';
        }
        elseif (($bmi->hasil) >= 30.0 )
        {
            $bmi->hasil = 'Kegemukan';
        }

        
        $bmi->save();
        $id = $bmi->id;
       return redirect()->route('success',$id);
    }

    public function success($id)
    {
        $item = Calculator::findOrFail($id);
        return view('pages.success',[
            'item' => $item
        ]);
    }

    public function edit($id)
    {
       
    }

    public function update(Request $request, $id)
    {
        
    }
 
    public function destroy($id)
    {
      
    }
}
