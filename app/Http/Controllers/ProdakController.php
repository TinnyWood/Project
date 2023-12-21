<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodak;
use Yajra\DataTables\Facades\DataTables;

class ProdakController extends Controller
{
    public function prodaks()
    {
        $prodaks = Prodak::all();
        return view('prodak.index', compact('prodaks'));
    }

    public function getProdak(Request $request)
    {
        $data = Prodak::select('*');

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $actionBtn = '<a href="#" class="btn btn-warning updateProdakForm" data-bs-toggle="modal" data-bs-target="#updateModal" data-id="' . $row->id . '" data-name="' . $row->name . '" data-price="' . $row->price . '"><i class="las la-edit"></i></a>';
                $actionBtn .= ' <a href="#" class="btn btn-danger delete_prodak" data-id="' . $row->id . '"><i class="las la-times"></i></a>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function addProdak(Request $request)
    {
        $prodak = new Prodak();
        $prodak->nama_proses = $request->nama_proses;
        $prodak->klasifikasi_perubahan = $request->klasifikasi_perubahan;
        $prodak->pelaksanaan2ndQA = $request->pelaksanaan2ndQA;
        $prodak->item_perubahan = $request->item_perubahan;
        $prodak->no_lembar_instruksi = $request->no_lembar_instruksi;
        $prodak->tanggal_produksi_saat_perubahan = $request->tanggal_produksi_saat_perubahan;
        $prodak->shiftt = $request->shiftt;
        $prodak->part_number_finish_good = $request->part_number_finish_good;
        $prodak->kualitas = $request->kualitas;
        $prodak->fakta_ng = $request->fakta_ng;
        $prodak->pcdt = $request->pcdt;
        $prodak->tanggal_perubahan_pcdt = $request->tanggal_perubahan_pcdt;
        $prodak->instruksi_kerja = $request->instruksi_kerja;
        $prodak->tanggal_perubahan_instruksi_kerja = $request->tanggal_perubahan_instruksi_kerja;
        $prodak->isir = $request->isir;
        $prodak->tanggal_perubahan_isir = $request->tanggal_perubahan_isir;
        $prodak->pemahaman = $request->pemahaman;
        $prodak->ulasan = $request->ulasan;

        $prodak->save();

        return response()->json(['status' => "success"]);
        $prodak = prodak::create($request->all());
        return response()->json($prodak);
    }

    public function updateProdak(Request $request)
    {
        $prodak = Prodak::findOrFail($request->up_id);

        $prodak->update([
            'nama_proses' => $request->up_nama_proses,
            'klasifikasi_perubahan' => $request->up_klasifikasi_perubahan,
            'pelaksanaan2ndQA' => $request->up_pelaksanaan2ndQA,
            'item_perubahan' => $request->up_item_perubahan,
            'no_lembar_instruksi' => $request->up_no_lembar_instruksi,
            'tanggal_produksi_saat_perubahan' => $request->up_tanggal_produksi_saat_perubahan,
            'shiftt' => $request->up_shiftt,
            'part_number_finish_good' => $request->up_part_number_finish_good,
            'kualitas' => $request->up_kualitas,
            'fakta_ng' => $request->up_fakta_ng,
            'pcdt' => $request->up_pcdt,
            'tanggal_perubahan_pcdt' => $request->up_tanggal_perubahan_pcdt,
            'instruksi_kerja' => $request->up_instruksi_kerja,
            'tanggal_perubahan_instruksi_kerja' => $request->up_tanggal_perubahan_instruksi_kerja,
            'isir' => $request->up_isir,
            'tanggal_perubahan_isir' => $request->up_tanggal_perubahan_isir,
            'pemahaman' => $request->up_pemahaman,
            'ulasan' => $request->up_ulasan,
        ]);

        return response()->json(['status' => 'success']);
    }

    public function deleteProdak(Request $request)
    {
        Prodak::find($request->prodak_id)->delete();
        return response()->json(['status' => 'success']);
    }
}
