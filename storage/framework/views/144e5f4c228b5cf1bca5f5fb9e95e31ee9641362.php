<!-- edit.blade.php -->


<?php $__env->startSection('content'); ?>


<div><?php echo e($crud->nom); ?> <?php echo e($crud->prenom); ?> Contact </div>
<div>Identité du contact: </div>
<div class="container">
  <form method="post" action="<?php echo e(action('CRUDController@update', $id)); ?>">
    <div class="form-group row">
      <?php echo e(csrf_field()); ?>

      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Civilité</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="civilité" name="civilite" value="<?php echo e($crud->civilite); ?>">
      </div>
    </div>
	
	<div class="form-group row">
      <?php echo e(csrf_field()); ?>

      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Nom</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="nom" name="nom" value="<?php echo e($crud->nom); ?>">
      </div>
    </div>
	<div class="form-group row">
      <?php echo e(csrf_field()); ?>

      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Prénom</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="prénom" name="prenom" value="<?php echo e($crud->prenom); ?>">
      </div>
    </div>
	<div class="form-group row">
      <?php echo e(csrf_field()); ?>

      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Fonction</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="fonction" name="fonction" value="<?php echo e($crud->fonction); ?>">
      </div>
    </div>
	<div class="form-group row">
      <?php echo e(csrf_field()); ?>

      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Service</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="service" name="service" value="<?php echo e($crud->service); ?>">
      </div>
    </div>
	
	
	<div class="form-group row">
      <?php echo e(csrf_field()); ?>

      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">E-mail</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="émail" name="email" value="<?php echo e($crud->email); ?>">
      </div>
    </div>
	<div class="form-group row">
      <?php echo e(csrf_field()); ?>

      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Téléphone mobile</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="téléphone mobile" name="telephone_mobile" value="<?php echo e($crud->telephone_mobile); ?>">
      </div>
    </div>
	<div class="form-group row">
      <?php echo e(csrf_field()); ?>

      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Date de naissance</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="date de naissance" name="date_naissance" value="<?php echo e($crud->date_naissance); ?>">
      </div>
    </div>
	
<div> Société: </div>
	<div class="form-group row">
      <?php echo e(csrf_field()); ?>

      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Nom</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="société" name="societe" value="<?php echo e($crud->societe); ?>">
      </div>
	</div>
	<div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Adresse</label>
      <div class="col-sm-10">
        <textarea name="adresse" rows="3" cols="50"><?php echo e($crud->adresse); ?></textarea>
      </div>
    </div>
	<div class="form-group row">
      <?php echo e(csrf_field()); ?>

      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Code postal</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="code postal" name="code_postal" value="<?php echo e($crud->code_postal); ?>">
      </div>
    </div>
	<div class="form-group row">
      <?php echo e(csrf_field()); ?>

      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Ville</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="ville" name="ville" value="<?php echo e($crud->ville); ?>">
      </div>
    </div>
		
	<div class="form-group row">
      <?php echo e(csrf_field()); ?>

      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Téléphone</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="téléphone" name="telephone" value="<?php echo e($crud->telephone); ?>">
      </div>
    </div>
	
	<div class="form-group row">
      <?php echo e(csrf_field()); ?>

      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Site web</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="site web" name="site_web" value="<?php echo e($crud->site_web); ?>">
      </div>
    </div>

    <div class="form-group row">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Modifier</button>
	  <a href="<?php echo e(action('CRUDController@index')); ?>" class="btn btn-warning">Retour à la liste des contacts</a>
    </div>
  </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>