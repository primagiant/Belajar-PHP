<?= $this->extend('layouts/template') ?>


<?= $this->section('style'); ?>
<link href="css/style.css" rel="stylesheet">
<link href="css/color/default_color.css" rel="stylesheet" id="select_color_style">
<?= $this->endSection() ?>


<?= $this->section('content') ?>

<?= $this->include('components/loader'); ?>

<?= $this->include('components/navbar'); ?>

<?= $this->include('components/home'); ?>

<div class="line-page-wrapper">
    <?= $this->include('components/about'); ?>
    <?= $this->include('components/services'); ?>
    <?= $this->include('components/testimonial'); ?>
    <?= $this->include('components/contact'); ?>
    <?= $this->include('components/footer'); ?>
</div>

<?= $this->include('components/extends'); ?>

<!-- Back To Top -->
<a href="#" class="back_top"> <i class="mdi mdi-chevron-up"> </i> </a>

<?= $this->endSection() ?>


<?= $this->section('script'); ?>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/scrollspy.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/typed.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/switcher.js"></script>
<script src="js/map.js"></script>
<script src="js/custom_script.js"></script>
<?= $this->endSection() ?>