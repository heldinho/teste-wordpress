<?php get_header(); ?>
<?php $loop = new WP_Query( array( 'post_type' => 'clientes', 'posts_per_page' => 10 ) ); ?>	
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="form-group">
				<div class="col-md-12">
					<label>Nome</label>
					<input type="text" class="form-group form-control" name="Nome">
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-12">
					<label>E-Mail</label>
					<input class="form-group form-control" name="Email">
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-12">
					<label>Telefone</label>
					<input type="text" class="form-group form-control" name="Telefone">
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
			<h1>Todos os clientes</h1>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-12">
			<?php if(empty($loop)) : ?>
			<div class="alert alert-warning" role="alert">
				<p>Nenhum cliente cadastrado.</p>
			</div>
			<?php endif; ?>
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th>Nome</th>
							<th>Email</th>
							<th>Telefone</th>
						</tr>
					</thead>
					<tbody>
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<?php $produto = get_post_custom($post->ID); ?>
						<tr>
							<td><?php echo $produto["nome_cliente"][0]; ?></td>
							<td><?php echo $produto["email_cliente"][0]; ?></td>
							<td><?php echo $produto["telefone_cliente"][0]; ?></td>
						</tr>
						<?php endwhile;?>
						<?php wp_reset_query();  ?>
					</tbody>
				</table>
			</div><!--end .table-responsive -->
		</div>
	</div>
</div>
