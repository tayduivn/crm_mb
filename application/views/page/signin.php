<!-- Login Alternative Row -->
<div class="container">
    <div class="row">
        <div class="col-md-5 col-md-offset-1">
            <div id="login-alt-container">

                <img src="<?= STEL_PATH ?>img/jetstarlogo.png" style="width: 360px; margin-top: 16px"/>

                <!-- Title -->
                <h1 class="push-top-bottom">
                    <img src="<?= base_url('public/stel/img/logo-stel.png') ?>" alt="icon" width="30" height="30"> <strong style="vertical-align: -5px"><?php echo $template['name']; ?></strong><br>
                    <small><b style="color: #00569f">@Welcome to@ <?php echo $template['name']; ?> @Webapp@!</b></small>
                </h1>
                <!-- END Title -->

                <div class="hidden">
                    <b style="font-size: 16px">Perfect application to manage your telecom office</b>
                </div>

                <!-- Key Features -->
                <ul class="fa-ul hidden" style="color: white">
                    <li><i class="fa fa-check fa-li text-default"></i> Nice &amp; Modern Design</li>
                    <li><i class="fa fa-check fa-li text-default"></i> Retina Display with light color</li>
                    <li><i class="fa fa-check fa-li text-default"></i> Manage perfect your business</li>
                    <li><i class="fa fa-check fa-li text-default"></i> Independent</li>
                    <li><i class="fa fa-check fa-li text-default"></i> Customize for you</li>
                    <li><i class="fa fa-check fa-li text-default"></i> .. and many more awesome features!</li>
                </ul>
                <!-- END Key Features -->       

                <!-- Footer -->
                <footer class="text-muted push-top-bottom" style="margin-top: 28px">
                    <small style="color: #00569f"><span id="year-copy"></span> &copy; <span><?php echo $template['name'] . ' ' . $template['version']; ?></span></small>
                </footer>
                <!-- END Footer -->
            </div>
        </div>
        <div class="col-md-5">
            <!-- Login Container -->
            <div id="login-container">
                <!-- Login Title -->
                <div class="login-title text-center">
                    <h1><strong>@Login@</strong> @your account@</h1>
                </div>
                <!-- END Login Title -->

                <!-- Login Block -->
                <div class="block push-bit">
                    <!-- Login Form -->
                    <?php if(isset($error)) { ?>
                    <p class="text-center text-danger"><?= $error ?></p>
                    <?php } ?>
                    <form action="<?= base_url("action/login") ?>" method="post" id="form-login" class="form-horizontal">
                        <input type="hidden" name="redirect" value="<?php if(isset($redirect)) echo $redirect ?>">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                    <input type="text" id="login-username" name="username" class="form-control input-lg" placeholder="Username">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                    <input type="password" id="login-password" name="password" class="form-control input-lg" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-actions">
                            <div class="col-xs-4">
                                <label class="switch switch-primary" data-toggle="tooltip" title="@Remember Me@?">
                                    <input type="checkbox" id="login-remember-me" name="login-remember-me" checked>
                                    <span></span>
                                </label>
                            </div>
                            <div class="col-xs-8 text-right">
                                <button type="submit" class="btn btn-sm btn-primary">@Login@</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12 text-center">
                                <?php $lang = $this->input->get("lang");
                                $lang = $lang ? $lang : (isset($default_language) ? $default_language : "");
                                if(strtoupper($lang) == "ENG") { ?>
                                <a href="<?= base_url("page/signin?lang=vie") ?>" id="vie-language"><small>Vietnamese</small></a>
                                <?php } else { ?>
                                <a href="<?= base_url("page/signin?lang=eng") ?>" id="eng-language"><small>English</small></a>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="form-group hidden">
                            <div class="col-xs-12 text-center">
                                <a href="javascript:void(0)" id="link-register-login"><small>Other Login Way</small></a>
                            </div>
                        </div>
                    </form>
                    <!-- END Login Form -->

                    <!-- Register Form -->
                    <form action="login_alt.php#register" method="post" id="form-register" class="form-horizontal display-none">
                        <div class="form-group form-actions">
                            <div class="col-xs-12 text-center">
                                <a href="<?php if(isset($glogin_url)) echo $glogin_url; ?>" role="button" class="btn btn-sm btn-primary"><b><i class="fa fa-google" aria-hidden="true"></i></b> Login by Google Account</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12 text-center">
                                <small>Back to default login?</small> <a href="#" id="link-register"><small>Login</small></a>
                            </div>
                        </div>
                    </form>
                    <!-- END Register Form -->
                </div>
                <!-- END Login Block -->
            </div>
            <!-- END Login Container -->
        </div>
    </div>
</div>
<!-- END Login Alternative Row -->

<!-- Modal Terms -->
<div id="modal-terms" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Terms &amp; Conditions</h4>
            </div>
            <div class="modal-body">
                <h4>Title</h4>
                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <h4>Title</h4>
                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <h4>Title</h4>
                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </div>
</div>
<!-- END Modal Terms -->