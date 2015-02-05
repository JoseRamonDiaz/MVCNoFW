<div id="footer">
		<?php if (isset($_SESSION['login_username']) && $_SESSION['login_username']!=''): ?>
			<p><a href="#">BIENVENIDO</a></p>
		<?php else: ?>
			<p><a href="registro.php">Registrate</a></p>
		<?php endif ?>
			
</div>