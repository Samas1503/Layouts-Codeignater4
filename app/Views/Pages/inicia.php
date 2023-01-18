<?=$this->extend('Layouts/principal')?>

<?= $this->section('titulo')?>
    <?php echo $cosas?>
<?=$this->endSection()?>

<?=$this->section('contenido')?>
    <?php echo $nombre?>
<?= $this->endSection()?>