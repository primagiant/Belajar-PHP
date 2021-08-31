<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Create Account</h3>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="<?= base_url("auth/register"); ?>">
                                    <div class="form-floating mb-3">
                                        <input class="form-control<?= (form_error('name') != '') ? ' is-invalid' : ''; ?>" id="name" name="name" type="text" placeholder="Enter your first name" value="<?= set_value('name'); ?>" />
                                        <label for="name">Full name</label>
                                        <?= form_error('name', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control <?= (form_error('email') != '') ? ' is-invalid' : ''; ?>" id=" email" name="email" type="text" placeholder="name@example.com" value="<?= set_value('email'); ?>" />
                                        <label for="email">Email address</label>
                                        <?= form_error("email", '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control<?= (form_error('password1') != '') ? ' is-invalid' : ''; ?>" id="password1" name="password1" type="password" placeholder="Create a password" />
                                                <label for="password1">Password</label>
                                                <?= form_error("password1", '<div class="invalid-feedback">', '</div>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control<?= (form_error('password1') != '') ? ' is-invalid' : ''; ?>" id="password2" name="password2" type="password" placeholder="Confirm password" />
                                                <label for="password2">Confirm Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid">
                                            <button type="submit" name="register" class="btn btn-primary btn-block">Create Account</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="<?= base_url(); ?>auth">Have an account? Go to login</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2021</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>