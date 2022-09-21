
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Sistema ERP - mjailton</title>
		<link rel="shortcut icon" href="" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale =1">		
		<!--css-->		
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/auxiliar.css">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/grade.css">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/style.css">
	</head>
	
<body>

	<div class="topo d-flex justify-content-space-between">
	<a href="" class="mobmenu alt"><i class="fas fa-bars"></i></a>
	<a href="index.html" class="logo"><img src="<?php echo URL_BASE ?>assets/img/logo-laravel.png" class="d-inline-block" width="170"></a>
	
	<ul class="menu-topo">
		<li><a href="#" class="text-uppercase"><i class="fas fa-lock"></i> Login</a></li>
		<li>
			<img src="<?php echo URL_BASE ?>assets/img/foto01.jpg" class="img-user">
			<span class="text-dark">Tiago Oliveira</span>
		</li>
	</ul>
</div>	<div class="col menu-lateral position-relative">

<nav class="menuprincipal" id="principal">				
					<ul class="menu-ul icones">
						<li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
						<li><a href="#menu_cadastro"><i class="icon fas fa-file"></i> Cadastro <span>+</span></a></li>
						<li><a href="#menu_estoque"><i class="icon fas fa-cubes"></i> Estoque <span>+</span></a></li>
						<li><a href="#menu_compras"><i class="icon fas fa-cart-plus"></i> Compras <span>+</span></a></li>			
						<li><a href="#menu_producao"><i class="fas fa-tools"></i> Produção <span>+</span></a></li>					
						<li><a href="#menu_financeiro"><i class="icon fas fa-hand-holding-usd"></i> Financeiro <span>+</span></a></li>					
					</ul>
</nav>

<!-- MENU CADASTRO -->
<nav class="menuprincipal" id="menu_cadastro">
	<ul class="menu-lista">
		<li class="icones"><a href="" title="Recolher menu"><i class="fas fa-arrow-left ativo"></i></a></li>
		<h1 class="tt px-2"><b><i class="far fa-fw fa-file"></i> Cadastros</b></h1>
			<div id="accordion" >
				  <h3>Categoria</h3>
					<ul>
						<li><a href="lst_categoria.html">Lista todos</a></li>
						<li><a href="frm_categoria.html"> Cadastrar novo</a></li>							
					</ul>
				  <h3>Unidade</h3>
					<ul>
						<li><a href="lst_unidade.html">Lista todos</a></li>
						<li><a href="frm_unidade.html"> Cadastrar novo</a></li>						
					</ul>
				  <h3>Produto</h3>
					<ul>
						<li><a href="lst_produto.html">Lista todos</a></li>
						<li><a href="frm_produto.html"> Cadastrar novo</a></li>							
					</ul>
				
				  <h3>Contato</h3>
					<ul>
						<li><a href="lst_contato.html">Lista todos</a></li>
						<li><a href="frm_contato.html"> Cadastrar novo</a></li>							
					</ul>
				  <h3>Usuário</h3>
					<ul>
						<li><a href="lst_usuario.html">Lista</a></li>
						<li><a href="lst_tabela.html"> Tabela</a></li>							
						<li><a href="lst_acoes.html"> Ações</a></li>							
					</ul>
				  <h3>Diversos</h3>
				  <ul>
						<li><a href="frm_status_entraga.html">Status entrega </a></li>
						<li><a href="frm_status_cotacao.html">Status cotação </a></li>
						<li><a href="frm_status_entraga.html">Status item cotação </a></li>
						<li><a href="frm_status_ordem_compra.html">Status ordem de compra </a></li>
						<li><a href="frm_status_producao.html">Status ordem de produção </a></li>
						<li><a href="frm_status_pedido.html">Status pedidos</a></li>
				  </ul>
			</div>
	</ul>
</nav>

<!-- MENU ESTOQUE -->
<nav class="menuprincipal" id="menu_estoque">
	<ul class="menu-lista">
		<li class="icones"><a href="" title="Recolher menu"><i class="fas fa-arrow-left ativo"></i></a></li>
		<h1 class="tt px-2"><b><i class="fas fa-cubes"></i> Estoque</b></h1>
		<li><a href="entras_afulsas.html">Entradas avulsas</a></li>
		
		<small><b>Saídas</b></small>		
		<li><a href="saida_avulsa.html">Saídas Avulsas</a></li>
		
		<small><b>Pedidos</b></small>		
		<li><a href="pedidos.html">Pedidos</a></li>
		
		<small><b>Movimentações</b></small>		
		<li><a href="historico_movimento.html">Historico de movimento</a></li>
		<li><a href="extrato_produto.html">Extrado produto</a></li>
	</ul>
</nav>



<!-- MENU COMPRAS -->
<nav class="menuprincipal" id="menu_compras">
	<ul class="menu-lista">
		<li class="icones"><a href="" title="Recolher menu"><i class="fas fa-arrow-left ativo"></i></a></li>
		<h1 class="tt px-2"><b><i class="fas fa-cart-plus"></i> Compras</b></h1>
		<li><a href="lst_solicitacao.html"> Solicitação</a></li>
		<li><a href="lst_cotacao.html"> Cotação</a></li>
		<li><a href="lst_ordemcompra.html"> Ordem de compra</a></li>
	</ul>
</nav>



<!-- MENU PRODUÇÃO -->
<nav class="menuprincipal" id="menu_producao">
	<ul class="menu-lista">
		<li class="icones"><a href="" title="Recolher menu"><i class="fas fa-arrow-left ativo"></i></a></li>
		<h1 class="tt px-2"><b><i class="fas fa-cubes"></i> Produções</b></h1>
		
		<li><a href="lst_engenharia.html">Produtos</a></li>
		<li><a href="lst_insumos.html">Insumos</a></li>
		<li><a href="lst_ordemproduto.html">Ordem de produção</a></li>
		
	</ul>
</nav>

<!-- MENU FANACEIRO CONTABIL -->
<nav class="menuprincipal" id="menu_financeiro">
	<ul class="menu-lista">
		<li class="icones"><a href="" title="Recolher menu"><i class="fas fa-arrow-left ativo"></i></a></li>
		<h1 class="tt px-2"><b><i class="fas fa-hand-holding-usd"></i> Financeiro</b></h1>
		
		<small><b>Financeiro</b></small>
		<li><a href="lst_ordemcompra.html" class="nav-link text-light"> Ordem de compra</a></li>
		<li><a href="pedidos.html" class="nav-link text-light"> Pedidos</a></li>
		<li><a href="contasreceber.html" class="nav-link text-light"> Contas a receber</a></li>
		<li><a href="contasapagar.html" class="nav-link text-light"> Contas a pagar</a></li>
		<li><a href="lst_despesas.html" class="nav-link text-light"> Despesas</a></li>
			
		<small><b>Contábil</b></small>
		<li><a href="planodecontas.html" class="nav-link text-light"> Plano de contas</a>	</li>
		<li><a href="fluxocaixa.html" class="nav-link text-light"> Fluxo de caixas</a></li>
		<li><a href="livrodiario.html" class="nav-link text-light"> livro diário</a></li>
	</ul>
</nav>

</div>
<div class="rows mx-0">	
		<div class="col-9 central mb-3">
		<div class="card-body p-3">
				<div class="rows">
					<div class="col-6">
						<div class="card">
						<div class="p-2 bg-title text-light text-uppercase h4 mb-0 text-branco"><h5><i class="fas fa-chart-pie"></i> Gráfico de vendas no mês</h5></div>
							<!--<canvas class="my-4" id="myChart" width="400" height="250"></canvas>-->
							<img src="<?php echo URL_BASE ?>assets/img/img-grafico01.png" class="img-fluido">
						</div>
					</div>
					<div class="col-6">
						<div class="card">
						<div class="p-2 bg-title text-light text-uppercase h4 mb-0 text-branco"><h5><i class="fas fa-chart-pie"></i> Gráfico de vendas no mês</h5></div>
							<!--<canvas class="my-4" id="myChart2" width="400" height="250"></canvas>-->
							<img src="<?php echo URL_BASE ?>assets/img/img-grafico02.png" class="img-fluido">
						</div>
					</div>
				</div>
				
				<div class="rows mt-4">
					<div class="col-4 my-3">
						<div class="card bg-title2">
							<div class="card-body rows p-2">
								<div class="col-4 col-ms-12 text-center">
									<i class="fas fa-box-open text-branco h1 mb-0"></i>
								</div>
								<div class="col-md-8 col-ms-12">
									<span class="d-block text-branco">Entrada</span>
									<span class="h4 float-left text-branco"><strong>R$ 250.000,00</strong></span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-4 my-3">
						<div class="card bg-title2">
							<div class="card-body rows p-2">
								<div class="col-4 col-ms-12 text-center">
									<i class="fas fa-external-link-square-alt text-branco h1 mb-0"></i>
								</div>
								<div class="col-md-8 col-ms-12">
									<span class="d-block text-branco">Saída</span>
									<span class="h4 float-left text-branco"><strong>R$ 250.000,00</strong></span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-4 my-3">
						<div class="card bg-title2">
							<div class="card-body rows p-2">
								<div class="col-4 col-ms-12 text-center">
									<i class="fab fa-bitcoin text-branco h1 mb-0"></i>
								</div>
								<div class="col-md-8 col-ms-12">
									<span class="d-block text-branco">Despesas</span>
									<span class="h4 float-left text-branco"><strong>R$ 250.000,00</strong></span>
								</div>
							</div>
						</div>
					</div>
				</div>	
				
				<div class="rows mt-5">
					<div class="col-4 mb-3">
						<div class="card">
						<div class="bg-title p-2 h4 text-branco text-uppercase text-center">
							<h5><i class="fas fa-box-open"></i> Pedidos pendentes</h5>
						</div>
							<div class="card-body p-1">
								<div class="table-responsive">
									<table cellpadding="0" cellspacing="0" class="table table-sm table-bordered">
										<thead>
											<tr>
												<th align="left">Data</th>
												<th align="left">Produto</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td align="left">19/05/17</td>
												<td align="left">Panela cabo grande...</td>
											</tr>
											<tr>
												<td align="left">19/05/17</td>
												<td align="left">Panela cabo grande...</td>
											</tr>
											<tr>
												<td align="left">19/05/17</td>
												<td align="left">Panela cabo grande...</td>
											</tr>
											<tr>
												<td align="left">19/05/17</td>
												<td align="left">Panela cabo grande...</td>
											</tr>
											<tr>
												<td align="left">19/05/17</td>
												<td align="left">Panela cabo grande...</td>
											</tr>								
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-4 mb-3">
						<div class="card">
						<div class="bg-title p-2 h4 text-branco text-uppercase text-center">
							<h5><i class="fas fa-box-open"></i> Pedidos finalizados</h5>
						</div>
							<div class="card-body p-1">
								<div class="table-responsive">
									<table cellpadding="0" cellspacing="0" class="table table-sm table-bordered">
										<thead>
											<tr>
												<th align="left">Data</th>
												<th align="left">Produto</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td align="left">19/05/17</td>
												<td align="left">Panela cabo grande...</td>
											</tr>
											<tr>
												<td align="left">19/05/17</td>
												<td align="left">Panela cabo grande...</td>
											</tr>
											<tr>
												<td align="left">19/05/17</td>
												<td align="left">Panela cabo grande...</td>
											</tr>
											<tr>
												<td align="left">19/05/17</td>
												<td align="left">Panela cabo grande...</td>
											</tr>
											<tr>
												<td align="left">19/05/17</td>
												<td align="left">Panela cabo grande...</td>
											</tr>								
										</tbody>
									</table>
								</div>
						</div>
					</div>
					</div>
					<div class="col-4 mb-3">
						<div class="card">
						<div class="bg-title p-2 h4 text-branco text-uppercase text-center">
							<h5><i class="fas fa-box-open"></i> Pedidos alterados</h5>
						</div>
							<div class="card-body p-1">
								<div class="table-responsive">
									<table cellpadding="0" cellspacing="0" class="table table-sm table-bordered">
										<thead>
											<tr>
												<th align="left">Data</th>
												<th align="left">Produto</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td align="left">19/05/17</td>
												<td align="left">Panela cabo grande...</td>
											</tr>
											<tr>
												<td align="left">19/05/17</td>
												<td align="left">Panela cabo grande...</td>
											</tr>
											<tr>
												<td align="left">19/05/17</td>
												<td align="left">Panela cabo grande...</td>
											</tr>
											<tr>
												<td align="left">19/05/17</td>
												<td align="left">Panela cabo grande...</td>
											</tr>
											<tr>
												<td align="left">19/05/17</td>
												<td align="left">Panela cabo grande...</td>
											</tr>								
										</tbody>
									</table>
								</div>
					</div>
				</div>	
					
					
				</div>
		</div>
	</div>
</div>
	
</div>

		<!--font icones-->
		<script src="<?php echo URL_BASE ?>assets/js/jquery.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="https://kit.fontawesome.com/9480317a2f.js"></script>	
		<script src="<?php echo URL_BASE ?>assets/js/js.js"></script>	
		
		<!-- Graphs -->
		<script src="js/chart.js/Chart.min.js"></script>
		
 </body>
	
</html>
