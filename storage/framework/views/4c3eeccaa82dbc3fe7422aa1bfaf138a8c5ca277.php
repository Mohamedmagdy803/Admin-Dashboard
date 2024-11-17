<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="images/bubbles.png" class="logo img-fluid" alt="">

            <span class="ms-2">Clean Work</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href=<?php echo e(route('welcome')); ?>>Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href=<?php echo e(route('about')); ?>>About Us</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item" href=<?php echo e(route('service')); ?>>Our Services</a></li>

                        <li><a class="dropdown-item" href="coming-soon.html">Coming Soon</a></li>

                        <li><a class="dropdown-item" href="page-404.html">Page 404</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href=<?php echo e(route('contact')); ?>>Contact</a>
                </li>
                  <!-- Authentication Links -->
                  <?php if(auth()->guard()->guest()): ?>
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                  </li>
                  <?php if(Route::has('register')): ?>
                      <li class="nav-item">
                          <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                      </li>
                  <?php endif; ?>
              <?php else: ?>
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          <?php echo e(Auth::user()->name); ?>

                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <?php if(Auth::user() && Auth::user()->role == "admin"): ?>
                            <a class="dropdown-item" href=<?php echo e(route('home')); ?>>
                             Dashboard
                          </a>
                        
                            
                        <?php endif; ?> 
                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              <?php echo e(__('Logout')); ?>

                          </a>

                          <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                              <?php echo csrf_field(); ?>
                          </form>
                      </div>
                  </li>
              <?php endif; ?>

                <li class="nav-item ms-3">
                    <a class="nav-link custom-btn custom-border-btn custom-btn-bg-white btn" href="#">Get started</a>
                </li>
            </ul>
        </div>
    </div>
</nav><?php /**PATH C:\Users\M7mod\Downloads\Compressed\mahmoudfinal\resources\views/temp/navbar.blade.php ENDPATH**/ ?>