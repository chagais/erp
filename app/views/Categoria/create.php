<div class="p-2 bg-title text-light text-uppercase h5 mb-0 text-branco d-flex justify-content-space-between">
			<span><i class="fas fa-plus-circle"></i> Cadastrar categoria</span>
			<a href="lst_categoria.html" class="btn btn-verde btn-pequeno"><i class="fas fa-arrow-left"></i>  Voltar</a>
		</div>                       
		
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
		<form action="" method="Post">
            <div class="col-6 d-block m-auto rows px-5 py-">
				<div class="border radius-4 mt-5 px-4">
					<div class="col-12 mb-3 mt-5">
						<label class="text-label">Nome</label>	
						<input type="text" name="categoria" value="" class="form-campo" placeholder="Digite o nome da categoria">
					</div>                                   
					<div class="col-12 mt-3 mb-5">
						<input type="hidden" name="id_categoria" value="">
						<input type="submit"  value="Salvar categoria" class="btn btn-laranja d-block m-auto">
					</div>
				</div>
        </form>