<h2>Materias</h2>
			<ul>
				<?php 
					include('controller/index-controller.php');

					$controller = new indexcontroller();

					$result = $controller->getMaterias();
				 ?>

		         <?php 
		             while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) { ?> 
		         
		 				<li><a href="MatInfo2.php?<?php echo $line['idMateria'] ?>"><?php echo $line['NombreMateria'] ?></a></li>
		         <?php    }
		          ?>
			</ul>