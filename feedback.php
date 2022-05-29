<?php
//Iniciar  Sessão
session_start();

//se existe a sessão mensagem criada
if (isset($_SESSION['mensagem'])) :
?>
	<div class="position-fixed top-0 end-0 p-3 " style="z-index: 11">
		<div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true" >
			<div class="d-flex">
				<div class="toast-body">
					<?php echo $_SESSION['mensagem']; ?>
				</div>
				<button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
			</div>
		</div>
	</div>
<?php
endif;
session_unset(); //limpar a sessão
?>