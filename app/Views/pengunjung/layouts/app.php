<?= $this->include('pengunjung/layouts/header.php'); ?>
<?= $this->include('pengunjung/layouts/menu.php'); ?>
<?= $this->renderSection('content'); ?>
<?= $this->include('pengunjung/layouts/footer.php'); ?>
<?= $this->renderSection('js'); ?>