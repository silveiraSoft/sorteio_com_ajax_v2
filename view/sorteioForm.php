<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Resultado do sorteio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="div_resultado">
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<div style="height: 20px;"></div>
<div class="container">
	<div class="row">
	    <div class="col-lg-6 caja">
	        <form id="formSorteio" class="needs-validation" novalidate>
		    	<div class="alert alert-primary" role="alert">
				  Formulário do sorteio
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
					    <label for="exampleFormControlInput1">Nome Lotérica</label>
					    <input type="text" minlength="17" maxlength="255" name="nome_lot" class="form-control" id="nome_lot" placeholder="Nome lotérica"  required>
					    <div class="invalid-feedback">
					       Por favor, digite mais de 17 caracteres.
					    </div>
					    <div class="valid-feedback">
					       Validado ok
					    </div>
					</div>
					<div class="form-group col-md-6">
					    <label for="exampleFormControlInput1">Data Sorteio</label>
					    <input type="date" class="form-control is-invalid" name="data_sorteio" onFocusout="validarData(this);" id="data_sorteio" required>
						<div class="invalid-feedback">
						   Por favor, selecione uma data maior a data atual.
						</div>
						<!--
						<div class="valid-feedback">
						   Validado ok
						</div>
						-->

					</div>
					<div class="form-group col-md-3">
					    <label for="exampleFormControlInput1">Número inicial</label>
					    <input type="number"  min="1" max="5" class="form-control" id="num_inicial" name="num_inicial" required>
					</div>
					<div class="form-group col-md-3">
					    <label for="exampleFormControlInput1">Número final</label>
					    <input type="number" min="60" max="80" class="form-control" id="num_fim" name="num_fim" required>
					</div>
					<div class="form-group col-md-12">
					    <div class="form-group">
					    <button class="btn btn-primary" id="sortear">Sortear</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</<div>
