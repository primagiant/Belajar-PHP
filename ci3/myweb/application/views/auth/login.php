<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Login Page</h3>
                                <?= $this->session->flashdata('msg'); ?>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="<?= base_url('auth'); ?>">
                                    <div class="form-floating mb-3">
                                        <input class="form-control<?= (form_error('email') != '') ? ' is-invalid' : ''; ?>" id="email" name="email" type="text" placeholder="name@example.com" value="<?= set_value("email"); ?>" />
                                        <label for="email">Email address</label>
                                        <?= form_error("email", '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control<?= (form_error('password') != '') ? ' is-invalid' : ''; ?>" id="password" name="password" type="password" placeholder="Password" />
                                        <label for="password">Password</label>
                                        <?= form_error("password", '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <a class="small" href="password.html">Forgot Password?</a>
                                        <button type="submit" name="login" class="btn btn-primary">Login</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="<?= base_url(); ?>auth/register">Need an account? Sign up!</a></div>
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