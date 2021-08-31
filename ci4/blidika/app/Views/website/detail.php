<?= $this->extend('layout/usertemp'); ?>

<?= $this->section('content'); ?>


<div class="blog-entries" style="padding-top: 12rem;">
    <div class="container">
        <div class="col-md-9">
            <div class="blog-posts">
                <div class="row">
                    <div class="col-md-12">
                        <div class="single-blog-post">
                            <img src="<?= base_url(); ?>/img/project/test.jpg" alt="test">
                            <div class="text-content">
                                <h2>judul</h2>
                                <table class="table table-striped" style="background-color: #ddd;">
                                    <tbody>
                                        <tr>
                                            <td>Style</td>
                                            <td>Americano</td>
                                        </tr>
                                        <tr>
                                            <td>Style</td>
                                            <td>Americano</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p>
                                    <br><br><a href="/">Back to Home</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="side-bar">
                <div class="recent-posts">
                    <ul>
                        <li>
                            <a href="single-post.html">
                                <img src="<?= base_url(); ?>/img/project/01-11.jpg" alt="Recent Post 1">
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>