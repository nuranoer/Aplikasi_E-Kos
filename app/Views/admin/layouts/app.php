<?= $this->include('admin/layouts/header.php'); ?>
<?= $this->include('admin/layouts/navbar.php'); ?>
<?= $this->include('admin/layouts/sidebar.php'); ?>
<?= $this->renderSection('content'); ?>
<?= $this->include('admin/layouts/footer.php'); ?>
<?= $this->renderSection('js'); ?>