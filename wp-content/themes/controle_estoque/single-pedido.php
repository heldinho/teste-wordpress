<?php get_header(); ?>
<?php $loop = new WP_Query( array( 'post_type' => 'pedidos')); ?>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="form-group">
				<div class="col-md-12">
					<?php $produtos = new WP_Query( array( 'post_type' => 'produtos' ) ); ?>
					<label for="pedido_produto">Produto:</label>
					<select id="pedido_produto" class="form-group form-control" name="pedido_produto">
					<?php while ( $produtos->have_posts() ) : $produtos->the_post(); ?>
					<?php $produto = get_post_custom($post->ID); ?>
						<option value="<?php echo $post->ID; ?>"><?php echo $produto['nome_produto'][0]; ?></option>
					<?php endwhile;?>
					<?php wp_reset_query();  ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-12">
					<?php $clientes = new WP_Query( array( 'post_type' => 'clientes' ) ); ?>
					<label for="pedido_cliente">Cliente:</label>
					<select id="pedido_cliente" class="form-group form-control" name="pedido_cliente">
					<?php while ( $clientes->have_posts() ) : $clientes->the_post(); ?>
					<?php $cliente = get_post_custom($post->ID); ?>
						<option value="<?php echo $post->ID; ?>"><?php echo $cliente['nome_cliente'][0]; ?></option>
					<?php endwhile;?>
					<?php wp_reset_query();  ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-12">
					<input type="button" name="salvar_pedido" id="salvar_pedido" class="btn btn-primary pull-right" value="Enviar" onclick="salvar_pedido()">
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h1>Todos os pedidos</h1>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-12">
			<?php if(!$loop->have_posts()) : ?>
			<div class="alert alert-warning" role="alert">
				<p>Nenhum pedido cadastrado.</p>
			</div>
			<?php endif; ?>
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th>Produto</th>
							<th>Cliente</th>
						</tr>
					</thead>
					<tbody>
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<?php $pedido = get_post_custom($post->ID); ?>
						<?php $produto = get_post($pedido["pedido_produto"][0]); ?>
						<?php $produto = get_post_custom($produto->ID); ?>
						<?php $cliente = get_post($pedido["pedido_cliente"][0]); ?>
						<?php $cliente = get_post_custom($cliente->ID); ?>
						<tr>
							<td><?php echo $produto['nome_produto'][0]; ?></td>
							<td><?php echo $cliente['nome_cliente'][0]; ?></td>
						</tr>
						<?php endwhile;?>
						<?php wp_reset_query();  ?>
					</tbody>
				</table>
			</div><!--end .table-responsive -->
		</div>
	</div>
</div>
<script type="text/javascript" src="http://hfpsistemas.com.br/wordpress/wp-content/plugins/estoque/js/jquery-3.1.1.js"></script>
<script type="text/javascript">
	function salvar_pedido() {
	  
	  var produto_pedido = $('#pedido_produto').val();
	  var cliente_pedido = $('#pedido_cliente').val();

	  if (produto_pedido != '' && cliente_pedido != '') {
	    var dados_user="pedido_cliente="+cliente_pedido
	            +"&pedido_produto="+produto_pedido;
	    $.ajax({
	       type: "POST",
	       url: "../wp-content/plugins/estoque/estoque.php",
	       data: "op=inserir_pedido&"+dados_user
	    }).done(function(dt_user) {});
	  }
	}
</script>
