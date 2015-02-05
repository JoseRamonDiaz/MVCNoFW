<div id="logo">
			<h1><a href="index.php" title="LIS FMAT">LIS FMAT</a></h1>
			<p>Un espacio para compartir apuntes e información 
                <?php if (isset($_SESSION['login_username']) && $_SESSION['login_username']!=''): ?>
                    <?php echo '| Bienvenido '.$_SESSION['login_username'] ?>
                <?php endif ?>
            </p>
		</div>
  <ul id="nav">
			<li><a class="current" href="#"><span class="akey">I</span>nicio</a></li>
			<li>
                <?php if (isset($_SESSION['login_username']) && $_SESSION['login_username']!=''): ?>

                       <a href="controller/logout.php" >Cerrar Sesión</a>
                       
                <?php else: ?>

                        <a href="login.php" >Iniciar sesión</a>

                <?php endif ?>
            </li>
            <li><input type="text"><button>Buscar</button></li>
		</ul>
    </div>