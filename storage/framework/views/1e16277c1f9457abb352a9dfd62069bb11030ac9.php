<?php $__env->startSection('conteudo'); ?>
<h1>Detalhes do produto: <?= $p->nome ?> </h1>
<ul>
	<li>
		<b>Valor:</b> R$ <?php echo e($p->valor); ?>

	</li>
	<li>
		<b>Descrição:</b> <?php echo e($p->descricao); ?>

	</li>
	<li>
		<b>Quantidade em estoque:</b> <?php echo e($p->quantidade); ?>

	</li>
</ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>