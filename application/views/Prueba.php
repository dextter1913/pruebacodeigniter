			<!-- Main content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 shadow">
							<form id="frmInsertarDatos">
								<label>Nombre: <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese Nombre"></label>
								<label>Apellido: <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Ingrese Apellido"></label>
								<label>Email: <input type="email" name="email" id="email" class="form-control" placeholder="Ingrese Correo"></label>
								<label>Identificacion: <input type="text" name="identificacion" id="identificacion" class="form-control" placeholder="Ingrese Identificacion"></label>
								<button class="btn btn-outline-primary" id="Ingresar">Ingresar</button>
							</form>
						</div>
						<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 shadow">

							<label class="text-center">Datatable</label>
							<table class="text-center border table table-hover table-responsive" id="TablaClientes">
								<thead>
									<tr>
										<th>Id</th>
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Email</th>
										<th>Identificacion</th>
									</tr>
								</thead>
								<tbody>

								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- /.container-fluid -->
			</div>
			<!-- /.content -->