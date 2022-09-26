<div class="col-9 central mb-3">
		<div class="rows">	
                <div class="col-12">
                <div class="caixa">
                    <div class="p-2 py-1 bg-title text-light text-uppercase h4 mb-0 text-branco d-flex justify-content-space-between">
						<span class="d-flex center-middle"><i class="far fa-list-alt mr-1"></i> Lista de categoria </span>
						<div>
							<a href="<?php echo URL_BASE ."categoria/create" ?>" class="btn btn-verde mx-1 d-inline-block"><i class="fas fa-plus-circle"></i> Adicionar novo</a>
							<a href="" class="btn btn-laranja filtro mx-1 d-inline-block"><i class="fas fa-filter"></i> Filtrar</a>
						</div>
					</div>
                        
					<form name="busca" action="" method="GET">
                        <div class="px-2 pt-2">	
							  <div class="mostraFiltro bg-padrao mt-2 p-2 radius-4">
							  <div class="rows">
                                        <div class="col-8">	
                                                <label class="text-label d-block text-branco">Nome </label>
                                                <input type="text" name="categoria" value="" class="form-campo">
                                        </div>
                                        <div class="col-2">	
                                             <label class="text-label d-block text-branco">Ativo </label>
                                            <select name="ativo" class="form-campo">
                                                <option value="S">Sim</option>                                                 
                                                <option value="N">Não</option>                                                 
                                            </select>
                                        </div>
                                        <div class="col-2 mt-1 pt-1">
                                                <input type="submit" value="Pesquisar" class="btn btn-roxo text-uppercase">
                                        </div>
                                </div>
                                </div>
                        </div>
                    </form>
                </div>
                </div>

		<div class="col-12">
			<div class="px-2">			
				<div class="p-1">
					<div class="msg sucesso">
					<p><b><i class="fas fa-check"></i> Mensagem de boas vindas</b> Parabéns seu produto foi inserido com sucesso <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></p>
					</div>
					<div class="msg erro">
					<p><b><i class="fas fa-times"></i> Mensagem de Erro</b> Houve um erro <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></p>
					</div>
					<div class="msg info">
					<p><b><i class="fas fa-exclamation-triangle"></i> Mensagem de aviso</b> Tem um aviso pra você <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></p>
					</div>
				</div>
               <div class="tabela-responsiva pb-4 mt-3">
                    <table cellpadding="0" cellspacing="0" id="dataTable" width="100%">
                            <thead>
                                    <tr>
                                       <th align="center">Id</th>
                                       <th align="center" width="50%">Nome</th>
                                       <th align="center">Editar</th>
                                       <th align="center">Excluir</th>
                                    </tr>
                            </thead>
                            <tbody>  
                                                                   
                             <tr>
								<td align="center">1</td>
                                <td align="left">Panela</td>
                                											
                                <td align="center"><a href="frm_categoria.html" class="d-inline-block btn btn-outline-roxo btn-pequeno"><i class="fas fa-edit"></i> Editar</a>                              </td>									
                                <td align="center"><a href="javascript:;" onclick="return excluir(this)" data-entidade ="categoria" data-id="1" class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i> Excluir</a>                                </td>
                             </tr>                                       
                                                              
                             <tr>
								<td align="center">2</td>
                                <td align="left">Cuzcuzeira</td>
                                											
                                <td align="center"><a href="frm_categoria.html" class="d-inline-block btn btn-outline-roxo btn-pequeno"><i class="fas fa-edit"></i> Editar</a>                              </td>									
                                <td align="center"><a href="javascript:;" onclick="return excluir(this)" data-entidade ="categoria" data-id="2" class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i> Excluir</a>                                </td>
                             </tr>                                       
                                                              
                             <tr>
								<td align="center">3</td>
                                <td align="left">Copo</td>
                                											
                                <td align="center"><a href="frm_categoria.html" class="d-inline-block btn btn-outline-roxo btn-pequeno"><i class="fas fa-edit"></i> Editar</a>                              </td>									
                                <td align="center"><a href="javascript:;" onclick="return excluir(this)" data-entidade ="categoria" data-id="3" class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i> Excluir</a>                                </td>
                             </tr>                                       
                                                              
                             <tr>
								<td align="center">4</td>
                                <td align="left">Caneca</td>
                                											
                                <td align="center"><a href="frm_categoria.html" class="d-inline-block btn btn-outline-roxo btn-pequeno"><i class="fas fa-edit"></i> Editar</a>                              </td>									
                                <td align="center"><a href="javascript:;" onclick="return excluir(this)" data-entidade ="categoria" data-id="4" class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i> Excluir</a>                                </td>
                             </tr>                                       
                                                              
                             <tr>
								<td align="center">5</td>
                                <td align="left">Papeiro</td>
                                											
                                <td align="center"><a href="frm_categoria.html" class="d-inline-block btn btn-outline-roxo btn-pequeno"><i class="fas fa-edit"></i> Editar</a>                              </td>									
                                <td align="center"><a href="javascript:;" onclick="return excluir(this)" data-entidade ="categoria" data-id="5" class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i> Excluir</a>                                </td>
                             </tr>                                       
                                                              
                             <tr>
								<td align="center">6</td>
                                <td align="left">Leiteira</td>
                                											
                                <td align="center"><a href="frm_categoria.html" class="d-inline-block btn btn-outline-roxo btn-pequeno"><i class="fas fa-edit"></i> Editar</a>                              </td>									
                                <td align="center"><a href="javascript:;" onclick="return excluir(this)" data-entidade ="categoria" data-id="6" class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i> Excluir</a>                                </td>
                             </tr>                                       
                                                              
                             <tr>
								<td align="center">7</td>
                                <td align="left">Frigideira</td>
                                											
                                <td align="center"><a href="frm_categoria.html" class="d-inline-block btn btn-outline-roxo btn-pequeno"><i class="fas fa-edit"></i> Editar</a>                              </td>									
                                <td align="center"><a href="javascript:;" onclick="return excluir(this)" data-entidade ="categoria" data-id="7" class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i> Excluir</a>                                </td>
                             </tr>                                       
                                                              
                             <tr>
								<td align="center">7</td>
                                <td align="left">Frigideira</td>
                                											
                                <td align="center"><a href="frm_categoria.html" class="d-inline-block btn btn-outline-roxo btn-pequeno"><i class="fas fa-edit"></i> Editar</a>                              </td>									
                                <td align="center"><a href="javascript:;" onclick="return excluir(this)" data-entidade ="categoria" data-id="7" class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i> Excluir</a>                                </td>
                             </tr>               						
                        </tbody>
                    </table>
								
                        </div>

            </div>
        </div>

        </div>