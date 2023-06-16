<?= $this->extend('layouts/base');?>

<?= $this->section("title");?>
<?= $page_title;?>
<?= $this->endSection();?>

<?= $this->section("content");?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Mapping</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Mapping</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->


<section class="content">
  <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.6732562721254!2d120.9007912715972!3d14.445984349975213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d2a56231af69%3A0x9803e58f004c485b!2sKaingen%2C%20Kawit%2C%204104%20Cavite!5e0!3m2!1sen!2sph!4v1685606014443!5m2!1sen!2sph" width="900" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>

  </section>

    </div>
    <?= $this->endSection();?>
