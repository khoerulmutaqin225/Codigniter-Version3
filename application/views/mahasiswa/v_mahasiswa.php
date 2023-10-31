<a href="<?= base_url('mahasiswa/input_mahasiswa') ?>" class="btn btn-primary btn-sm">Tambah Data</a>

<?php 
// Notification crud

if($this->session->flashdata('pesan')){
    echo '<div class="alert alert-success">';
    echo $this->session->flashdata('pesan');
    echo '</div>';
}
?>

<table class="table table-bordered" id="dataTable" >
    <thead>
        <tr class="text-center" >
            <th>No</th>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Tempat</th>
            <th>Jenis Kelamin</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no =1; foreach ($mhs as $key => $value) { ?>
            <tr>
                <td class="text-center" ><?= $no++ ?> </td>
                <td class="text-center" ><?= $value->nim ?> </td>
                <td><?= $value->nama_mahasiswa ?> </td>
                <td><?= $value->tempat_lahir ?>,<?= date('d M Y',strtotime($value->tgl_lahir)) ?> </td>
                <td class="text-center" >
                    <?= $value->jenis_kelamin=='L' ?'Laki-Laki' : 'Perempuan' ?> 
                </td>
                <td class="text-center" >
                    <a href="<?=base_url('mahasiswa/edit_mahasiswa/'.$value->id_mahasiswa) ?>" class="btn btn-warning btn-sm" >Edit</a>
                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>