<?php
$msg_error = '';
$msg_color = 'orange';
$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if ($post):
	$post = array_map("strip_tags",array_map("trim",$post));

	$regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/"; 
	if(in_array("",$post)):
		$msg_error = "Todos os dados são obrigatórios!";
	elseif(!preg_match($regex, $post['email'])):		 
		$msg_error = "Insira um email válido!";
	elseif($post['senha'] != $post['confsenha']):
		$msg_error = "As senhas não condizem!";
	else:		
		$sth = $pdo->prepare("INSERT INTO tbl_usuario (usu_nome, usu_email, usu_senha, usu_premium) VALUES ( :nome, :email, :senha, :premium )");

		$sth->bindValue(":nome", $post['name']);
		$sth->bindValue(":email", $post['email']);
		$sth->bindValue(":senha", $post['senha']);
		$sth->bindValue(":premium", 0);

		$sth->execute();

		header('LOCATION: '.HOME.'/login');
	endif;
endif;
?>
<div class="container-contact100">
	<div class="wrap-contact100">
		<form class="contact100-form validate-form" method="post" action="">
			<span class="contact100-form-title" style="color:white">
				Registre-se
			</span>
			<h3 style="color:<?= $msg_color; ?>; text-align:center;"><?= $msg_error; ?></h3>

			<div class="wrap-input100 validate-input" data-validate="Name is required">
				<span class="label-input100" style="color:gray">Seu Nome</span>
				<input class="input100" type="text" name="name" placeholder="Entre com seu Nome..." value="<?= isset($post['name']) ? $post['name'] : ''; ?>">
				<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 validate-input" data-validate = "Insira um E-mail válido: ex@abc.xyz">
				<span class="label-input100" style="color:gray">Email</span>
				<input class="input100" type="text" name="email" placeholder="Entre com seu E-mail..." value="<?= isset($post['email']) ? $post['email'] : ''; ?>">
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
					<button class="contact100-form-btn" name="btnsend" value="btnsend">
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