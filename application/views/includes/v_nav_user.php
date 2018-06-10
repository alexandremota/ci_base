<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?php echo base_url('home'); ?>">Embarcador</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('home/'); ?>">Home</a>
                </li> 

                <li class="nav-item">
                    <a class="nav-link" href="<?php //echo base_url('home/regras'); ?>">Regras</a>
                </li>
                        
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cadastros</a>
                    <div class="dropdown-menu">

                        <?php 

                        if ($this->ion_auth->is_admin())
                        {
                            echo '<a class="dropdown-item" href="'. base_url('home/cadastro') .'">Cadastrar Regras</a>';
                        }

                        ?>            
                    </div>
                </li> 
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php  echo '<i class="fa fa-user"></i> '.  $this->ion_auth->user()->row()->first_name; ?> </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?php echo base_url('auth/logout');?>">Sair</a>
                        <a class="dropdown-item" href="<?php echo base_url('auth/change_password');?>">Alterar Senha</a>
                        <?php 
                        if ($this->ion_auth->is_admin())
                        {
                            echo '<a class="dropdown-item" href="' . base_url('auth/users') .'">Usuários</a>';
                        }


                        ?>
                    </div>
                </li>  



            </ul>
        </div>
    </div>

</nav>