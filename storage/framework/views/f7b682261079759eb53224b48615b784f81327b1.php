<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.Login'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>

    <body>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
        <div class="home-btn d-none d-sm-block">
            <a href="<?php echo e(url('index')); ?>" class="text-dark"><i class="fas fa-home h2"></i></a>
        </div>
        <div class="account-pages mt-20">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-soft-primary">
                                <div class="row">
                                    <div class="col-12">
                                       <a href="<?php echo e(url('/')); ?>"> <img src="<?php echo e(asset('assets/images/valyou_x_black_logo.svg')); ?>" alt="" class="img-fluid logo-img"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="text-center mt-20">
                                    <h5 class="text-primary">Welcome Back !</h5>
                                    <p>Sign in to continue to Valyou X.</p>
                                </div>
                                <div class="p-2">
                                    <form class="form-horizontal" method="POST" action="<?php echo e(route('login')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group spycust">
                                            <input name="email" type="email"
                                                   class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  value="<?php echo e(old('email')); ?>" placeholder="E-mail" id="email" autocomplete="email" autofocus>
                                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>

                                        <div class="form-group spycust">
                                            <input type="password" name="password"
                                                   class="form-control  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                   id="userpassword" placeholder="Password">
                                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                                            <label class="custom-control-label" for="customControlInline">Remember
                                                me</label>
                                        </div>

                                        <div class="mt-3">
                                            <button class="btn-block waves-effect waves-light btn-right" type="submit"><img width="120" src="<?php echo e(asset('assets/images/login-btn.svg')); ?>" alt="">
                                            </button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <h5 class="font-size-14 mb-3">Sign in with</h5>

                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="#"
                                                       class="social-list-item bg-primary text-white border-primary">
                                                        <i class="mdi mdi-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="social-list-item bg-info text-white border-info">
                                                        <i class="mdi mdi-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="social-list-item bg-danger text-white border-danger">
                                                        <i class="mdi mdi-google"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="mt-4 text-center spycust">
                                            <a href="password/reset" class="text-muted"><i class="mdi mdi-lock mr-1"></i>
                                                Forgot your password?</a>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>

                        <div class="mt-5 text-center">
                            <p>Don't have an account ? <a href="<?php echo e(url('register')); ?>"
                                                          class="font-weight-medium text-primary"> Signup now </a></p>
                            <p>©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>
                                Valyou X <i class="mdi mdi-heart text-danger"></i> Powered by Blockchain Technology
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-without-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\aug_client\resources\views/auth/login.blade.php ENDPATH**/ ?>