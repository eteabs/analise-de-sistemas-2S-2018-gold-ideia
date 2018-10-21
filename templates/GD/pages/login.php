<?php
$msg_error = '';
$msg_color = 'orange';
$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if ($post):
	$post = array_map("strip_tags",array_map("trim",$post));

	if(in_array("",$post)):
		$msg_error = "Todos os dados são obrigatórios!";
    else:		
        $sth = $pdo->prepare("SELECT * FROM tbl_usuario WHERE usu_email = :login AND usu_senha = :senha");
        
        $sth->bindValue(":login", $post['email']);
        $sth->bindValue(":senha", $post['senha']);
        $sth->execute();

        if ($sth->rowCount() > 0):
            extract($sth->fetch(PDO::FETCH_ASSOC));
            $_SESSION['Login']['email'] = $usu_email;
            $_SESSION['Login']['nome'] = $usu_nome;
            $_SESSION['Login']['codigo'] = $usu_cod;
            
            header('LOCATION: '.HOME. '/homeuser');
        else:
            $msg_error = "Usuário e senha inválidos!";
        endif;
    endif;
endif;
?>
<div class="container-contact100">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form" method="post">
            <span class="contact100-form-title" style="color:white">
                Login
            </span>
            <h3 style="color:<?= $msg_color; ?>; text-align:center;"><?= $msg_error; ?></h3>

            <div class="wrap-input100 validate-input" data-validate="E-mail não pode ser branco">
                <span class="label-input100" style="color:gray">E-mail</span>
                <input class="input100" type="email" name="email" placeholder="Insira seu e-mail" value="<?= isset($post['email']) ? $post['email'] : ''; ?>">
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