<div class="container-contact100">
	<div class="wrap-contact100">
		<form class="contact100-form validate-form" method="post" action="act-register">
			<span class="contact100-form-title" style="color:white">
				Registre-se
			</span>

			<div class="wrap-input100 validate-input" data-validate="Name is required">
				<span class="label-input100" style="color:gray">Seu Nome</span>
				<input class="input100" type="text" name="name" placeholder="Entre com seu Nome...">
				<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 validate-input" data-validate = "Insira um E-mail válido: ex@abc.xyz">
				<span class="label-input100" style="color:gray">Email</span>
				<input class="input100" type="text" name="email" placeholder="Entre com seu E-mail...">
				<span class="focus-input100"></span>
			</div>


			<div class="wrap-input100 validate-input" data-validate="Senha não pode ser branco">
				<span class="label-input100" style="color:gray">Senha</span>
				<input class="input100" type="password" name="senha" placeholder="Entre com sua senha" required>
				<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 validate-input" data-validate="Senha não pode ser branco">
				<span class="label-input100" style="color:gray">Confirmação de senha</span>
				<input class="input100" type="password" name="confsenha" placeholder="Confirme sua senha" required>
				<span class="focus-input100"></span>
			</div>

			<div class="container-contact100-form-btn">
				<div class="wrap-contact100-form-btn">
					<div class="contact100-form-bgbtn"></div>
					<button class="contact100-form-btn">
						<span style="color:#000000">
								Enviar
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="col-xs-6">
						<div class="container-contact100-form-btn">
							<div class="wrap-contact100-form-btn">
								<div class="contact100-form-bgbtn"></div>
								<a class="contact100-form-btn" href="<?= HOME; ?>/login">
									<span style="color:#000000">
											Login
										<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
									</span>
								</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="container-contact100-form-btn">
							<div class="wrap-contact100-form-btn">
								<div class="contact100-form-bgbtn"></div>
								<a class="contact100-form-btn" href="<?= HOME; ?>">
									<span style="color:#000000">
											Home
										<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>					
		</form>
	</div>
	
</div>