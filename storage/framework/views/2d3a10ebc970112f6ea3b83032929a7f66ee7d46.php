<?php $__env->startSection('conteudo'); ?>
<?php if(count($errors) > 0): ?>
<div class="alert alert-danger">
	<ul>
		<?php foreach($errors->all() as $error): ?>
		<li><?php echo e($error); ?></li>
		<?php endforeach; ?>
	</ul>
</div>
<?php endif; ?>
<h1>Novo produto</h1>
<form action="/produtos/adiciona" method="post">
	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
    <div class="form-group">
		<label>Nome</label>
		<input name="nome" class="form-control" value="<?php echo e(old('nome')); ?>"/>
	</div>
	<div class="form-group">
		<label>Descricao</label>
		<input name="descricao" class="form-control" value="<?php echo e(old('descricao')); ?>"/>
    </div>
    <div class="form-group">
		<label>Valor</label>
		<input name="valor" class="form-control" value="<?php echo e(old('valor')); ?>"/>
	</div>
	<div class="form-group">
		<label>Quantidade</label>
		<input type="number" name = "quantidade" value="<?php echo e(old('quantidade')); ?>" class="form-control"/>
	</div>
	<button type="submit" class="btn btn-primary btn-block">Submit</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>