<!-- index.blade.php -->
<div class="pull-left">
<a class="btn btn-success" href="<?php echo e(route('crud.create')); ?>">Ajouter un contact</a>
</div>

<?php $__env->startSection('content'); ?>
  <div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Civilité</th>
		<th>Prénom</th>
        <th>Nom</th>
		<th>Téléphone</th>
        <th>Email</th>
        <th>Société</th>
		<th>Ville</th>
		
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $cruds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($post['civilite']); ?></td>
        <td><?php echo e($post['prenom']); ?></td>
        <td><?php echo e($post['nom']); ?></td>
		<td><?php echo e($post['telephone']); ?></td>
        <td><?php echo e($post['email']); ?></td>
        <td><?php echo e($post['societe']); ?></td>
		 <td><?php echo e($post['ville']); ?></td>
        <td><a href="<?php echo e(action('CRUDController@edit', $post['id'])); ?>" class="btn btn-warning">Editer</a></td>
		<td><a href="<?php echo e(action('CRUDController@show', $post['id'])); ?>" class="btn btn-warning">Voir</a></td>
        <td>
          <form action="<?php echo e(action('CRUDController@destroy', $post['id'])); ?>" method="post">
            <?php echo e(csrf_field()); ?>

            <input name="_method" type="hidden" value="DELETE" onclick="return confirm('Confirmez la suppression?');">
            <button class="btn btn-danger" type="submit">Supprimer</button>
          </form>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>