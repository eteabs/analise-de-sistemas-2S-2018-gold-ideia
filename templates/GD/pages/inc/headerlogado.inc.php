<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">GoldIdeia</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <?php
                if($url[0] == 'perfil'):
                ?>
                <li>
                    <a class="page-scroll" href="<?= HOME; ?>">Home</a>
                </li>
                <li>
                    <a class="page-scroll" href="<?= HOME; ?>/cadastro-ideia">Cadatre sua ideia</a>
                </li>
                <li>
                    <a class="page-scroll" href="#portfolio">Destaques</a>
                </li>
                <?php
                elseif($url[0] == 'cadastro-ideia'):
                ?>
                <li>
                    <a class="page-scroll" href="<?= HOME; ?>">Home</a>
                </li>
                <li>
                    <a class="page-scroll" href="<?= HOME; ?>/perfil">Perfil</a>
                </li>
                <li>
                    <a class="page-scroll" href="#portfolio">Destaques</a>
                </li>
                <?php
                else:
                ?>
                <li>
                    <a class="page-scroll" href="<?= HOME; ?>/perfil">Perfil</a>
                </li>                
                <li>
                    <a class="page-scroll" href="#portfolio">Destaques</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contato</a>
                </li>
                <?php
                endif;
                ?>
                <li>
                    <a class="page-scroll" href="<?= HOME; ?>/logout">Sair</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>