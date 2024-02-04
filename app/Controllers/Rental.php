<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Rentalmodel;

class Rental extends ResourceController
{
    use ResponseTrait;
    public function index()
    {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET');
        header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

        $model = new RentalModel();

        $result = $model->orderBy('id', 'DESC')->findAll(10);

        if (!empty($result)) {
            $data = [
                'status' => true,
                'data' => $result
            ];
        } else {
            $data = [
                'status' => false,
                'message' => 'Barang tidak ditemukan'
            ];
        }
        return $this->respond($data);
    }

    public function create()
    {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods:POST");
        header('Content-Type: application/json');

        $model = new RentalModel();
        $data = [
            'nama_barang' => $this->request->getPost('nama_barang'),
            'nama_penyewa' => $this->request->getPost('nama_penyewa'),
            'durasi' => $this->request->getPost('durasi'),
            'total_pembayaran' => $this->request->getPost('total_pembayaran'),
        ];

        $model->insert($data);
        $msg = "Data barang berhasil ditambahkan";

        return $this->response->setJSON(['status' => true, 'message' => $msg]);
    }

    public function show($id = null)
    {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET');
        header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

        $model = new RentalModel();
        $data  = [
            'status' => true,
            'data' => $model->where('id', $id)->first()
        ];

        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }

    // delete
    public function delete($id = null)
    {
        $model = new RentalModel();
        $data = $model->where('id', $id)->delete($id);
        if ($data) {
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data produk berhasil dihapus.'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
}
