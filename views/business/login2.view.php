		<!-- Contenido -->
		<div class="tope"></div>
		<div class="titulo">
			<h1>Iniciar Sesión</h1>
		</div>
		<div class="migas color-gris-oscuro">
			<a href="../index.html">Inicio</a>
			<p> &nbsp / &nbsp</p>
			<a href="login.html">Iniciar Sesión</a>
		</div>
		<section class="paginas forms color-gris-claro">			
			<form class="form form-login" id="form-login" action="?c=Login" method="post"
				name="formLogin">
				<a class="enlace-registro" href="register.html">Registro</a>
				<h2 class="form-subtitulo">Iniciar Sesión</h2>
				<div class="form-cuerpo color-blanco">
					<div class="form-control">
						<label class="label" for="correo">Correo</label>
						<input class="input" type="email" name="correo" id="correo" placeholder="Correo Usuario"
							pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,5}"
							title="Ingrese un correo válido" required>
					</div>
					<div class="form-control">
						<label class="label" for="pass">Contraseña</label>
						<input class="input" type="password" name="pass" id="pass"
							placeholder="Contraseña: 5 a 8 caracteres" pattern="[A-Za-z0-9]{5,8}"
							title="Entre 5 y 8 caracteres" required>
					</div>
					<!-- maxlength="8" -->
				</div>
				<div class="form-pie">
					<input type="reset" id="cancelar-login" value="Cancelar">
					<input type="submit" value="Enviar">
				</div>
				<a class="enlace-olvido" href="forgot.html">¿Olvidó su Contraseña?</a>
			</form>
		</section>		