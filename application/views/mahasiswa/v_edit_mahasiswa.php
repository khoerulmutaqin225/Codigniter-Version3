<!-- Basic Card Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><?= $judul ?></h6>
    </div>
    <div class="card-body">
        <?php
        // notif validation form
        echo validation_errors(
            '<div class="col-lg-12">
            <div class="card bg-danger text-white shadow">
                <div class="card-body">
                    <span>',
                '</span>.
                </div>
                </div>
            </div>'
        );
        ?>
        <?php echo form_open('mahasiswa/edit_mahasiswa/'.$mhs->id_mahasiswa) ?>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>NIM</label>
                    <input value="<?= $mhs->nim ?>" type="text" name="nim" class="form-control" placeholder="NIM">
                </div>

                <div class="form-group">
                    <label>Nama Mahasiswa</label>
                    <input value="<?= $mhs->nama_mahasiswa ?>" type="text" name="nama_mahasiswa" class="form-control" placeholder="Nama Mahasiswa">
                </div>

                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input value="<?= $mhs->tempat_lahir ?>" name="tempat_lahir" class="form-control">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                        <select  name="jenis_kelamin" class="form-control">
                            <option value="">--Jenis Kelamin--</option>                            
                            <option value="L" <?= $mhs->jenis_kelamin == 'L' ? 'selected' :'' ?>>Laki - laki</option>
                            <option value="P" <?= $mhs->jenis_kelamin == 'P' ? 'selected' :''?>>Perempuan</option>
                        </select>
                </div>
                <div class="form-group">
                    <label>tanggal Lahir</label>
                    <input value="<?= $mhs->tgl_lahir ?>" type="date" name="tgl_lahir" class="form-control">
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Simpan Data</button>
                    <a href="<?= base_url('mahasiswa/index') ?>" class="btn btn-success">Kembali</a>
                </div>
            </div>
        </div>
        <?php echo form_close() ?>
    </div>
</div>