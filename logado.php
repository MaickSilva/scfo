<?php include "header.php" ?>
<?php
    session_start();
    if(!isset($_SESSION['UsuarioLog'])){
        header("Location: index.php");
        session_destroy();
    }
    
    if(isset($_GET['logout'])){
        session_destroy();
        header("Location: index.php");
    }
?>
    
    <nav class="navbar navbar-expand-md navbar-dark bg-secondary ">
        <div class="container">

            <a class="navbar-brand " href="logado.php">SCFO</a>


            <ul class="navbar-nav float-right">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <p class="mb-0">Nome usuário</p>
                            <?php 
                                echo " ".$_SESSION['cpf']
                            ?>
                        <a href="?logout">
                            <button type="button" class="btn btn-dark mt-1">Sair</button>
                            
                        </a>
                        </div>
                    </div>
                </div>
            </ul>

        </div>
    </nav>

        <div class="container mb-3"> 
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                    <div class="nav flex-column nav-pills mt-1" id="v-pills-tab" role="tablist" aria-orientation="vertical"> 
                        <a href="cadastrarConta.php" class="nav-link btn-secondary mt-1" id="cadastroConta" role="tab" aria-controls="v-pills-home" aria-selected="true">Cadastrar conta</a>
                        <a class="nav-link btn-secondary mt-1" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Cadastrar previsões</a>
                        <a class="nav-link btn-secondary mt-1" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Cadastrar realizações</a>
                        <a class="nav-link btn-secondary mt-1" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Emitir relatórios</a>
                    </div>
                </div>
                
                <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                    <div class="card text-white bg-light mb-3 mt-2 mx-auto" style="max-width: 30rem;">
                        <div class="card-body">
                            <div class="container ">
                                <form class="mx-auto text-dark " style="width: auto;" "card-text">
                                    <div class="container text-center">
                                        <h2>Sistema de Controle Financeiro Orçamentário</h2>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php include "footer.php" ?>

</body>