<?= $this->extend("layout/admintemp"); ?>

<?= $this->section("style"); ?>
<style>
    .img-container-meme img {
        width: 100%;
        height: 500px;
        object-fit: cover;
        object-position: 20% 10%;
    }
</style>
<?= $this->endSection(); ?>


<?= $this->section("content"); ?>
<div class="container">
    <div class="row mt-3">
        <div class="col">
            <h2>Project Detail</h2>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-9">
            <div class="card mb-3">
                <div class="img-container-meme">
                    <img src="<?= base_url('/img/project/'); ?>/<?= $project['nama_project']; ?>/<?= $project['display']; ?>" alt="Picture" class="card-img-top">
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $project['nama_project']; ?></h5>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card text-center">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <a href="#" class="btn btn-warning">Edit Project</a>
                    <form action="/project/<?= $project['id_project']; ?>" method="post" class="list-group-item text-center">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger" onclick="return confirm('Are You sure ?')">Remove Project</button>
                    </form>
                    <div class="card text-center mt-3">
                        <div class="card-header">
                            Gambar Lainnya
                        </div>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">Add</a>
                            <a href="#" class="btn btn-danger">Remove</a>
                            <a href="#" class="btn btn-warning">Edit</a>
                        </div>
                    </div>
                    <div class="card text-center mt-3">
                        <div class="card-header">
                            Deskripsi
                        </div>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">Add</a>
                            <a href="#" class="btn btn-danger">Remove</a>
                            <a href="#" class="btn btn-warning">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>