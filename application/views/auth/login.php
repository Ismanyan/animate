    <div class="wrapper">
        <!-- =====  CONTAINER START  ===== -->
        <div class="container">
            <div class="row ">
                <!-- =====  BANNER STRAT  ===== -->
                <div class="col-sm-12">
                    <div class="breadcrumb ptb_20">
                        <h1>Login</h1>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Login</li>
                        </ul>
                    </div>
                </div>
                <!-- =====  BREADCRUMB END===== -->
                <div id="column-left" class="col-sm-4 col-lg-3 hidden-xs">
                    <div id="category-menu" class="navbar collapse in mb_40" aria-expanded="true" style="" role="button">
                        <div class="nav-responsive">
                            <div class="heading-part">
                                <h2 class="main_title">Top category</h2>
                            </div>
                            <ul class="nav  main-navigation collapse in">
                                <?php foreach ($category as $key) : ?>
                                    <li><a href="<?= $key['id'] ?>"><?= $key['category_name'] ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 col-lg-9 mtb_20">
                    <!-- contact  -->
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="panel-login panel">
                                <div class="panel-heading">
                                    <div class="row mb_20">
                                        <div class="col-xs-6">
                                            <a href="#" class="active" id="login-form-link">Login</a>
                                        </div>
                                        <div class="col-xs-6">
                                            <a href="#" id="register-form-link">Register</a>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <?= form_open(base_url('auth/login'), array('class' => 'login-form', 'id' => 'login-form')) ?>
                                            <div class="form-group">
                                                <?= form_input(array('name' => 'username', 'class' => 'form-control', 'tabindex' => '1', 'placeholder' => 'Username', 'value' => set_value('username'))) ?>
                                                <small class="help-block text-danger"><?= form_error('username') ?></small>
                                            </div>
                                            <div class="form-group">
                                                <?= form_password(array('name' => 'password', 'class' => 'form-control', 'tabindex' => '2', 'placeholder' => 'Password')) ?>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <?= form_submit(array('name' => 'login-submit', 'class' => 'form-control btn btn-login', 'tabindex' => '4', 'id' => 'login-submit', 'value' => 'Log In')) ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?= form_close() ?>
                                            <?= form_open(base_url('auth/regist'), array('class' => 'register-form', 'id' => 'register-form')) ?>
                                            <div class="form-group">
                                                <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="<?= set_value('username') ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="<?= set_value('email') ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" id="password2" tabindex="2" class="form-control" placeholder="Password" required>
                                                <small class="help-block text-danger"><?= form_error('password') ?></small>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password" required>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                                    </div>
                                                </div>
                                            </div>
                                            <?= form_close() ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Blog  -->
    <!-- =====  CONTAINER END  ===== -->