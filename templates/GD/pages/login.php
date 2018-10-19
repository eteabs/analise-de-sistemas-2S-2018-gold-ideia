<div class="container-contact100">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form" method="post" action="act-login">
            <span class="contact100-form-title" style="color:white">
                Login
            </span>

            <div class="wrap-input100 validate-input" data-validate="E-mail não pode ser branco">
                <span class="label-input100" style="color:gray">E-mail</span>
                <input class="input100" type="email" name="email" placeholder="Insira seu e-mail">
                <span class="focus-input100"></span>
            </div>


            <div class="wrap-input100 validate-input" data-validate="Senha não pode ser branco">
                <span class="label-input100" style="color:gray">Senha</span>
                <input class="input100" type="password" name="senha" placeholder="Entre com sua senha" required>
                <span class="focus-input100"></span>
            </div>


            <div class="container-contact100-form-btn">
                <div class="wrap-contact100-form-btn">
                    <div class="contact100-form-bgbtn"></div>
                    <button class="contact100-form-btn">
                        <span style="color:#000000">
                                Entrar
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
								<a class="contact100-form-btn" href="<?= HOME; ?>/cadastro">
									<span style="color:#000000">
											Cadastre-se
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