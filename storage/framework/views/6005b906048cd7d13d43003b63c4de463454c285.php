<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login &mdash; SD Muhammadiyah Brosot</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?php echo e(url('assets/bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('assets/fontawesome/css/all.css')); ?>">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo e(url('assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('assets/css/components.css')); ?>">

    <link rel="shortcut icon" href="../assets/img/sdmuhbrosot.png" type="image/x-icon">
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="d-flex flex-wrap align-items-stretch">
                <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                    <div class="p-4 m-3">
                        <img src="../assets/img/sdmuhbrosot.png" alt="logo" width="80" class="shadow-light rounded-circle mb-5 mt-2">
                        <h5 class="text-dark font-weight-normal">Aplikasi <span class="font-weight-bold">Inventaris Barang Sekolah</span></h5>
                        <form method="POST" action="<?php echo e(route('login')); ?>" class="needs-validation" novalidate="">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" tabindex="1" required autofocus>

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

                            <div class="form-group">
                                <div class="d-block">
                                    <label for="password" class="control-label">Password</label>
                                </div>
                                <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" tabindex="2" required>
                                <div class="invalid-feedback">
                                    Mohon masukkan password!
                                </div>

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

                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-success btn-lg btn-icon icon-right" tabindex="4">
                                    Login
                                </button>
                            </div>
                        </form>

                        <div class="text-center mt-5 text-small">
                            Copyright &copy; Inven-BS. Made with 💙 by Stisla
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="../assets/img/unsplash/login.jpg">
                    <div class="absolute-bottom-left index-2">
                        <div class="text-light p-5 pb-2">
                            <div class="mb-5 pb-3">
                                <h1 class="mb-2 display-4 font-weight-bold" id="greetings"></h1>
                                <h5 class="font-weight-normal text-muted-transparent">Yogyakarta, Indonesia</h5>
                            </div>
                            Photo by <a class="text-light bb" target="_blank" href="https://www.instagram.com/kknmum.umy005/">KKN.005</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="<?php echo e(url('assets/js/jquery-3.5.1.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/jquery.nicescroll.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/moment.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/stisla.js')); ?>"></script>

    <!-- Template JS File -->
    <script src="<?php echo e(url('assets/js/scripts.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/custom.js')); ?>"></script>

    <!-- Page Specific JS File -->
    <?php echo $__env->make('layouts.partials.greetings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script>
        $(document).ready(function() {
            $("#greetings").html(greetings());
        });
    </script>
</body>

</html><?php /**PATH C:\Users\UJIAN\Downloads\Inventory-SIA\inven-bs\resources\views/auth/login.blade.php ENDPATH**/ ?>