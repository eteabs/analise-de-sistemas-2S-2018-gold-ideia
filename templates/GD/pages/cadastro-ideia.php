<?php
$msg_error = '';
$msg_color = 'orange';
$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if ($post):
	$post = array_map("strip_tags",array_map("trim",$post));
    unset($post['ide_img']);
	if(in_array("",$post)):
		$msg_error = "Todos os dados são obrigatórios!";
    else:		
        $sth = $pdo->prepare("INSERT INTO tbl_ideias (ide_usu, ide_nome, ide_completo, ide_img) VALUES ( :cod, :nome, :completo, :img)");

		$sth->bindValue(":nome", $post['ide_nome']);
        $sth->bindValue(":completo", $post['ide_completo']);
        $sth->bindValue(":cod", $_SESSION['Login']['codigo']);
        $sth->bindValue(":img", '');
        $sth->execute();
       
        header('LOCATION: '.HOME.'/perfil');

    endif;
endif;
?>
<section id="cadideia" style="background-color:#222">
    <div class="container" style="background-color:#666; padding: 30px;">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading" style="color:#fed136">Cadastro de Ideia</h2>
                <h3 class="section-subheading" style="color:#fff" >Informe os dados de sua ideia, preenchendo todos os campos.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form class="form" name="cadideia" method="post">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nome da Ideia" name="ide_nome" required>
                            </div><!-- /form-group -->
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Descrição da Ideia" rows="8" style="resize:none;" name="ide_completo" required></textarea>                            
                            </div>                        
                        </div><!-- /col-md-8 -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="file" class="form-control" name="ide_img">
                            </div><!-- /form-group -->                        
                        </div><!-- /col-md-4 -->                    
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-xl btn_start">Cadastrar Ideia</button>
                        </div><!-- /col-lg-12 -->
                    </div><!--/row -->
                </form>
            </div>
        </div>
    </div>
</div>  