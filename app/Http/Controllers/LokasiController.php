<?php

namespace App\Http\Controllers;

use App\Models\LokasiModel;
use Exception;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $lokasiModel;

    public function __construct()
    {
        $this->lokasiModel = new LokasiModel;
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Lokasi Gudang',
            'lokasi' => $this->lokasiModel->orderBy('nama_lokasi', 'ASC')->get()
        ];
        return view('lokasi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //
        return view('lokasi.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        try {
            $data = [
                'nama_lokasi' => $request->input('nama_lokasi'),
                'penanggung_jawab' => $request->input('penanggung_jawab'),
                'keterangan'        => $request->input('keterangan')
            ];
            //substr(hexdec(random_int(0,9999908)),4,-4);

            $id_lokasi = substr(md5(rand(0, 99999)), -4);
            $data['id_lokasi'] = $id_lokasi;
            // echo json_encode($data);
            //insert data ke database
            $insert = $this->lokasiModel->create($data);
            //Promise 
            if ($insert) {
                //redirect('gudang','refresh');
                return redirect('lokasi');
            } else {
                return "input data gagal";
            }
        } catch (Exception $e) {
            return $e->getMessage();
            //return "yaaah error nih, sorry ya";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id = null)
    {
        //
        $edit = $this->lokasiModel->find($id);
        return view('lokasi.edit', $edit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        try {
            $data = [
                'nama_lokasi'   => $request->input('nama_lokasi'),
                'penanggung_jawab' => $request->input('penanggung_jawab'),
                'keterangan'    => $request->input('keterangan')
            ];
            $upd = $this->lokasiModel
                ->where('id_lokasi', $request->input('id_lokasi'))
                ->update($data);
            if ($upd) {
                return redirect('lokasi');
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id = null)
    {
        //
        try {
            $hapus = $this->lokasiModel
                ->where('id_lokasi', $id)
                ->delete();
            if ($hapus) {
                return redirect('lokasi');
            }
        } catch (Exception $e) {
            $e->getMessage();
        }
    }
}
