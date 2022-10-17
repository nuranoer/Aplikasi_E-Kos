<?= $this->include('layouts/header.php'); ?>
<?= $this->include('layouts/sidebar.php'); ?>
<?= $this->renderSection('sidebar'); ?>
<?= $this->renderSection('content'); ?>
<?= $this->include('layouts/footer.php'); ?>
<?= $this->renderSection('js'); ?>