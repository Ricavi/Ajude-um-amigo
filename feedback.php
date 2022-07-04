<?php
//todas as mensagens são guardadas no $_session[mensagem]
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
unset($_SESSION['mensagem']);
?>