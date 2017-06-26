<?php get_header(); ?>
<?php $loop = new WP_Query( array( 'post_type' => 'produtos', 'posts_per_page' => 10 ) ); ?>	
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="form-group">
				<div class="col-md-12">
					<label>Nome Produto</label>
					<input type="text" class="form-group form-control" name="Nome">
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-12">
					<label>Descrição Produto</label>
					<textarea class="form-group form-control" name="Descricao"></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-12">
					<label>Preço Produto</label>
					<input type="text" class="form-group form-control" name="Preco">
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-12">
					<button type="submit" class="btn btn-primary pull-right">Enviar</button>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h1>Todos os produtos</h1>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-12">
			<?php if(!$loop->have_posts()) : ?>
			<div class="alert alert-warning" role="alert">
				<p>Nenhum produto cadastrado.</p>
			</div>
			<?php endif; ?>
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th>Nome</th>
							<th>Descrição</th>
							<th>Preço</th>
						</tr>
					</thead>
					<tbody>
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<?php $produto = get_post_custom($post->ID); ?>
						<tr>
							<td><?php echo $produto["nome_produto"][0]; ?></td>
							<td><?php echo $produto["nome_produto"][0]; ?></td>
							<td><?php echo $produto["preco_produto"][0]; ?></td>
						</tr>
						<?php endwhile;?>
						<?php wp_reset_query();  ?>
					</tbody>
				</table>
			</div><!--end .table-responsive -->
		</div>
	</div>
</div>
