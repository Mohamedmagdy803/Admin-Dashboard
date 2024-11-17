

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('temp.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<main>

    <section class="banner-section d-flex justify-content-center align-items-end">
        <div class="section-overlay"></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-12">
                    <h1 class="text-white mb-lg-0">Contact</h1>
                </div>

                <div class="col-lg-4 col-12 d-flex justify-content-lg-end align-items-center ms-auto">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </section>
 

    <section class="contact-section section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 col-12 me-auto mb-lg-0 mb-5">
                    <h2 class="my-3">We're happy to help</h2>

                    <p>Best Cleaning Service is ready to serve you. Clean Work is a professional website layout for your business.</p>

                    <div class="contact-info bg-white shadow-lg">
                        <h3 class="mb-4">Contact Information</h3>

                        <h5 class="d-flex mt-3 mb-3">
                            <i class="bi-geo-alt-fill custom-icon me-3"></i>
                            Akershusstranda 20, 0150 Oslo, Norway
                        </h5>

                        <h5 class="d-flex mb-3">
                            <i class="bi-telephone-fill custom-icon me-3"></i>

                            <a href="tel: 110-220-9800">
                                110-220-9800
                            </a>
                        </h5>

                        <h5 class="d-flex">
                            <i class="bi-envelope-fill custom-icon me-3"></i>

                            <a href="mailto:info@company.com">
                                info@company.com
                            </a>
                        </h5>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <?php if(session('success')): ?>
                    <h4 class="alert alert-success text-center"><?php echo e(session('success')); ?></h4>
                    <?php endif; ?>
                    <form enctype="multipart/form-data" class="custom-form consulting-form bg-white shadow-lg mb-5 mb-lg-0" action=<?php echo e(route('question.store')); ?> method="post" role="form">
                      <?php echo csrf_field(); ?>
                        <div class="consulting-form-header d-flex align-items-center">
                            <h3 class="mb-4">Get a Free Quotation</h3>
                        </div>

                        <div class="consulting-form-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="name" id="volunteer-name" class="form-control" placeholder="John Walker" >
                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="email" id="volunteer-email" class="form-control" placeholder="yours@gmail.com">
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>


                            </div>


                            <select class="form-select form-control" name="type" id="job-salary" aria-label="Default select example">
                                <option selected disabled>Service Type</option>
                                <option value="House cleaning">House cleaning</option>
                                <option value="Car washing">Car washing</option>
                                <option value="Office cleaning">Office cleaning</option>
                                <option value="Factory cleaning">Factory cleaning</option>
                            </select>

                            <?php $__errorArgs = ['type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <textarea name="message" rows="3" class="form-control" id="volunteer-message" placeholder="Comment (Optional)"></textarea>
                            <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger"><?php echo e($message); ?></div>
                             <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <div class="col-lg-6 col-md-10 col-8 mx-auto">
                                <button type="submit" class="form-control">Submit Request</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
</main>

<footer class="site-footer">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 d-flex align-items-center mb-4 pb-2">
                <div>
                    <img src="images/bubbles.png" class="logo img-fluid" alt="">
                </div>

                <ul class="footer-menu d-flex flex-wrap ms-5">
                    <li class="footer-menu-item"><a href="#" class="footer-menu-link">About Us</a></li>

                    <li class="footer-menu-item"><a href="#" class="footer-menu-link">Blog</a></li>

                    <li class="footer-menu-item"><a href="#" class="footer-menu-link">Reviews</a></li>

                    <li class="footer-menu-item"><a href="#" class="footer-menu-link">Contact</a></li>
                </ul>
            </div>

            <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                <h5 class="site-footer-title mb-3">Our Services</h5>

                <ul class="footer-menu">
                    <li class="footer-menu-item">
                        <a href="#" class="footer-menu-link">
                            <i class="bi-chevron-double-right footer-menu-link-icon me-2"></i>
                            House Cleaning
                        </a>
                    </li>

                    <li class="footer-menu-item">
                        <a href="#" class="footer-menu-link">
                            <i class="bi-chevron-double-right footer-menu-link-icon me-2"></i>
                            Car Washing
                        </a>
                    </li>

                    <li class="footer-menu-item">
                        <a href="#" class="footer-menu-link">
                            <i class="bi-chevron-double-right footer-menu-link-icon me-2"></i>
                            Laundry
                        </a>
                    </li>

                    <li class="footer-menu-item">
                        <a href="#" class="footer-menu-link">
                            <i class="bi-chevron-double-right footer-menu-link-icon me-2"></i>
                            Office Cleaning
                        </a>
                    </li>

                    <li class="footer-menu-item">
                        <a href="#" class="footer-menu-link">
                            <i class="bi-chevron-double-right footer-menu-link-icon me-2"></i>
                            Toilet Cleaning
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mb-md-0">
                <h5 class="site-footer-title mb-3">Office</h5>

                <p class="text-white d-flex mt-3 mb-2">
                    <i class="bi-geo-alt-fill me-2"></i>
                    Akershusstranda 20, 0150 Oslo, Norway
                </p>

                <p class="text-white d-flex mb-2">
                    <i class="bi-telephone-fill me-2"></i>

                    <a href="tel: 110-220-9800" class="site-footer-link">
                        110-220-9800
                    </a>
                </p>

                <p class="text-white d-flex">
                    <i class="bi-envelope-fill me-2"></i>

                    <a href="mailto:info@company.com" class="site-footer-link">
                        info@company.com
                    </a>
                </p>

                <ul class="social-icon mt-4">
                    <li class="social-icon-item">
                        <a href="#" class="social-icon-link button button--skoll">
                            <span></span>
                            <span class="bi-twitter"></span>
                        </a>
                    </li>

                    <li class="social-icon-item">
                        <a href="#" class="social-icon-link button button--skoll">
                            <span></span>
                            <span class="bi-facebook"></span>
                        </a>
                    </li>

                    <li class="social-icon-item">
                        <a href="#" class="social-icon-link button button--skoll">
                            <span></span>
                            <span class="bi-instagram"></span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 col-6 mt-3 mt-lg-0 mt-md-0">
                <div class="featured-block">
                    <h5 class="text-white mb-3">Service Hours</h5>

                    <strong class="d-block text-white mb-1">Mon - Fri</strong>

                    <p class="text-white mb-3">8:00 AM - 5:30 PM</p>

                    <strong class="d-block text-white mb-1">Sat</strong>

                    <p class="text-white mb-0">6:00 AM - 2:30 PM</p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-footer-bottom">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                    <p class="copyright-text mb-0">Copyright © 2036 Clean Work Co., Ltd.</p>
                </div>
                
                <div class="col-lg-6 col-12 text-end">
                    <p class="copyright-text mb-0">
                    // Designed by <a href="https://www.tooplate.com" target="_parent">Tooplate</a> //</p>
                </div>
                
            </div>
        </div>
    </div>
</footer>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel\mahmoudfinal\resources\views/contact.blade.php ENDPATH**/ ?>