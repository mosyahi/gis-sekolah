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
        <!-- Footer -->
        <?= $this->include('template/dashboard/footer'); ?>
        <!-- End Footer -->
    </div>
    <!-- End Content -->


    <!-- Script -->
    <?= $this->include('template/dashboard/script'); ?>
    <!-- End Script -->

</body>
</html>