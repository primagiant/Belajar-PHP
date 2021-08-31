<?= $this->extend('layout/admintemp'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row my-3">
        <div class="col-md-12">
            <h1>Tambah Project</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <form action="/project/saveProject" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="nama_project" class="form-label">Nama Project</label>
                    <input type="text" class="form-control<?= ($validation->hasError("nama_project")) ? " is-invalid" : ""; ?>" name="nama_project" id="nama_project" value="<?= old('nama_project'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama_project'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="selectForm" class="form-label">Kategori</label>
                    <select class="form-select" id="selectForm is-invalid" name="kategori" aria-label="Default select example">
                        <option value="1">Comercial Building</option>
                        <option value="2">Hunian</option>
                        <option value="3">Interior Design</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="display" class="form-label">Image Display</label>
                    <input class="form-control<?= ($validation->hasError("display")) ? " is-invalid" : ""; ?>" type="file" name="display" id="display">
                    <div class="invalid-feedback">
                        <?= $validation->getError('display'); ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>