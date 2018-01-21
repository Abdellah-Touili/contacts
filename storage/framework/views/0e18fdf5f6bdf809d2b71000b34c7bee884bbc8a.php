<!-- create.blade.php -->


<?php $__env->startSection('content'); ?>
<div class="container">
  <form method="post" action="<?php echo e(url('crud')); ?>">
    <div class="form-group row" style="float:left;">
      <?php echo e(csrf_field()); ?>

      <label for="civilité" class="col-sm-2 col-form-label col-form-label-lg"  >Civilité</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="civilité" style="float:left;" placeholder="civilité" name="civilite">
      </div>
	  <div class="form-group row" >
      <?php echo e(csrf_field()); ?>

      <label for="prenom" class="col-sm-2 col-form-label col-form-label-lg" style="float:left;">Prénom</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="prenom" style="float:left;" placeholder="prénom" name="prenom">
      </div>
	  <div class="form-group row">
      <?php echo e(csrf_field()); ?>

      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Nom</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="nom" name="nom">
      </div>
	  <div class="form-group row">
      <?php echo e(csrf_field()); ?>

      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Fonction</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="fonction" name="fonction">
      </div>
	  <div class="form-group row">
      <?php echo e(csrf_field()); ?>

      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Service</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="service" name="service">
      </div>
	  <div class="form-group row" style="float:left;">
      <?php echo e(csrf_field()); ?>

      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Téléphone mobile</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="telephone_mobile" name="telephone_mobile">
      </div>
	  <div class="form-group row" style="float:left;">
      <?php echo e(csrf_field()); ?>

      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="email" name="email">
      </div>
	  <div class="form-group row" style="float:left;">
      <?php echo e(csrf_field()); ?>

      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Date de naissance</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="date de naissance" name="date_naissance">
      </div>
	  <div class="form-group row" style="float:right;">
      <?php echo e(csrf_field()); ?>

      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Société</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="societe" name="societe">
      </div>
	  <div class="form-group row" style="float:right;">
      <label for="adresse" class="col-sm-2 col-form-label col-form-label-sm">Adresse</label>
      <div class="col-sm-10">
        <textarea id="adresse" name="adresse" rows="3" cols="30"></textarea>
      </div>
	  </div>
	  <div class="form-group row" style="float:right;">
      <?php echo e(csrf_field()); ?>

      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Code postal</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="code postal" name="code_postal">
      </div>
	  <div class="form-group row">
      <?php echo e(csrf_field()); ?>

      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Ville</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="ville" name="ville">
      </div>
	 <div class="form-group row" style="float:left;">
      <?php echo e(csrf_field()); ?>

      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Téléphone</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="téléphone" name="telephone">
      </div>
	  <div class="form-group row" style="float:left;">
      <?php echo e(csrf_field()); ?>

      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Site web</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="site web" name="site_web">
      </div>
    
    <div class="form-group row">
      <div class="col-md-2"></div>
      <input type="submit" class="btn btn-primary">
    </div>
  </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>