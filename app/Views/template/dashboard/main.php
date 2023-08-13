<!DOCTYPE html>
<html>
<head>
    <?= $this->include('template/dashboard/head'); ?>
</head>

<body>
    <!-- Header -->
    <?= $this->include('template/dashboard/header'); ?>
    <!-- End Header -->

    <!-- Sidebar -->
    <?= $this->include('template/dashboard/sidebar'); ?>
    <!-- End Sidebar -->

    <!-- Content -->
    <div class="main-container">
        <?= $this->renderSection('content'); ?>
    </div>
    <!-- End Content -->

    <!-- Footer -->
    <div class="footer-wrap pd-20 mb-20 card-box">
        <?= $this->include('template/dashboard/footer'); ?>
    </div>
    <!-- End Footer -->

    <!-- Script -->
    <?= $this->include('template/dashboard/script'); ?>
    <!-- End Script -->

</body>
</html>