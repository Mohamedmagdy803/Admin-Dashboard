<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>
          Argon Dashboard - Free Dashboard for Bootstrap 4 by Creative Tim
        </title>
        <!-- Favicon -->
        <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!-- Icons -->
        <link href="./assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
        <link href="./assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
        <!-- CSS Files -->
        <link href="./assets/css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />
      </head>
<body>
    <div id="app">
   
        <main class="">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>


 <!--   Core   -->
 <script src="./assets/js/plugins/jquery/dist/jquery.min.js"></script>
 <script src="./assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
 <!--   Optional JS   -->
 <script src="./assets/js/plugins/chart.js/dist/Chart.min.js"></script>
 <script src="./assets/js/plugins/chart.js/dist/Chart.extension.js"></script>
 <!--   Argon JS   -->
 <script src="./assets/js/argon-dashboard.min.js?v=1.1.2"></script>
 <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
 <script>
   window.TrackJS &&
     TrackJS.install({
       token: "ee6fab19c5a04ac1a32a645abde4613a",
       application: "argon-dashboard-free"
     });
 </script>
</body>
</html>
<?php /**PATH E:\laravel\mahmoudfinal\resources\views/layouts/dashboard.blade.php ENDPATH**/ ?>