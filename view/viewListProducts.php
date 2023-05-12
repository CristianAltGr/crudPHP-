<div class="table-responsive-sm">
				<table class="table table-striped">
					<thead class="thead-dark">
						<tr>
							<th class="align-middle">ID</th>
							<th class="align-middle">NOM</th>
							<th class="align-middle">DESCRIPCIO</th>
                            <th class="align-middle">PREU</th>
                            <th class="align-middle">FOTO</th>
                            <th class="align-middle">STOCK</th>
                            <th class="align-middle">MENU</th>
							<th class="align-middle">MIDES</th>
							<th class="align-middle text-right"><a class="btn btn-primary" role="button" href="?action=new">Afegir</a></th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach($producte as $row) {
                                
								echo "<tr>";
								echo "<td class='align-middle'>" . $row['id'] . "</td>";
								echo "<td class='align-middle'>" . $row['nom'] . "</td>";
								echo "<td class='align-middle'>" . $row['descripcio'] . "</td>";
								echo "<td class='align-middle'> " . $row['preu'] . "</td>";
                                echo "<td class='align-middle'> <img src='" . $row['foto'] . "' id='imgProducte'></img></td>";
								echo "<td class='align-middle'>" . $row['stock'] . "</td>";
								echo "<td class='align-middle'>" . $row['menu'] . "</td>";
								echo "<td class='align-middle'>" . $row['mides'] . "</td>";

								echo "<td class='align-middle'>";
								echo "<a class='btn btn-success' role='button' href='?action=show&id=".$row['id']."'>Mostrar</a> ";
								echo "<a class='btn btn-warning' role='button' href='?action=edit&id=".$row['id']."'>Editar</a> ";
								echo "<a class='btn btn-danger' role='button' href='?action=delete&id=".$row['id']."'>Eliminar</a> ";
								echo "</td>";
								echo "</tr>";
							}
						?>
					</tbody>
				</table>
			</div>
		</div>