<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditDataNikRequest;
use Illuminate\Http\Request;
use App\Http\Requests\InputDataNikRequest;
use App\Models\DataNik;

class NikController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dataNik()
    {
        $dataNik = DataNik::orderBy('id', 'DESC')->get();
        $title = "Daftar Data NIK";
        return view('admin.data-nik', [
            'dataNik' => $dataNik,
            'title' => $title,
        ]);
    }

    public function inputDataNik()
    {
        $title = "Input Data NIK";
        return view('admin.input-data-nik', [
            'title' => $title,
        ]);
    }

    public function storeDataNik(InputDataNikRequest $request)
    {
        $input = $request->all();
        DataNik::create($input);
        return redirect(route('dataNik'));
    }


    public function editDataNik($id)
    {
        $title = "Edit Data NIK";
        $dataNik = DataNik::findorFail($id);
        return view('admin.edit-data-nik', [
            'title'     => $title,
            'dataNik'   => $dataNik,
        ]);
    }

    public function updateDataNik(EditDataNikRequest $request, $id)
    {
        $dataNik = DataNik::findorFail($id);
        $dataNik->update([
            'nama'              => $request->nama,
            'tempat_lahir'      => $request->tempat_lahir,
            'tlg_lahir'         => $request->tlg_lahir,
            'keterangan'        => $request->keterangan,
        ]);
        return redirect()->route('dataNik');
    }

    public function deleteDataNik($id)
    {
        $dataNik = DataNik::findorFail($id);
        $dataNik->delete();
        return redirect()->back();
        // return redirect()->route('dataNik');
    }
}
