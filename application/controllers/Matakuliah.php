<?php
class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-matakuliah');
    }

    public function cetak()
    {
        $this->form_validation->set_rules('kode','Kode Matakuliah','required|min_length[3]', [
            'required' => 'Kode Mata Kuliah Harus Diisi',
            'min_lenght' => 'Kode Terlalu Pendek'
        ]);

        $this->form_validation->set_rules('nama','Nama Matakuliah','required|min_length[3]')
    }
}
?>