<?= $this->extend('layout/usertemp'); ?>

<?= $this->section('content'); ?>
<div id="video-container">
    <div class="video-overlay"></div>
    <div class="video-content">
        <div class="inner">
            <h1>Prima<em>Project</em></h1>
            <p>ARCHITECT DAN INTERIOR DESIGN</p>
            <div class="scroll-icon">
                <a class="scrollTo" data-scrollTo="portfolio" href="#"><img src="img/scroll-icon.png" alt=""></a>
            </div>
        </div>
    </div>
    <video autoplay="" loop="" muted>
        <source src="highway-loop.mp4" type="video/mp4" />
    </video>
</div>


<div class="grid-portfolio" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <div class="thumb">
                        <a href="img/project/test.jpg" data-lightbox="image-1">
                            <div class="hover-effect">
                                <div class="hover-content">
                                    <h1>Biodiesel <em>squid</em></h1>
                                    <p><a href="/website/detail" class="btn btn-default">Description</a></p>
                                </div>
                            </div>
                        </a>
                        <div class="image">
                            <img src="img/project/test.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="load-more-button">
                    <a href="#">Load More</a>
                </div>
            </div>
        </div>

    </div>
</div>
<?= $this->endSection(); ?>