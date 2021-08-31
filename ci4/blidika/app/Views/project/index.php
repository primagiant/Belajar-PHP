<?= $this->extend('layout/admintemp'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row my-3 align-midlle">
        <div class="col-md-12">
            <h1>All Project</h1>
            <a class="btn btn-primary float-end" href="project/tambah">Tambah Project</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?php if (session()->getFlashData("msg")) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashData('msg'); ?>
                </div>
            <?php endif; ?>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Nama Project</th>
                        <th>Kategori</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $num = 1;
                    foreach ($project as $p) :
                    ?>
                        <tr class="align-middle">
                            <td><?= $num++; ?></td>
                            <td><img src="/img/project/<?= $p['nama_project']; ?>/<?= $p['display']; ?>" width="200px"></td>
                            <td><?= $p['nama_project']; ?></td>
                            <td><?= $p['nama_kategori']; ?></td>
                            <td><a class="btn btn-primary" href="/project/<?= $p['id_project']; ?>">Detail</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>