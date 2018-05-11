    <?php include "header.php" ?>
    
        <nav class="navbar navbar-expand-md navbar-dark bg-secondary ">
            <div class="container">
                <a class="navbar-brand " href="index.php">SCFO</a>
                <ul class="navbar-nav float-right">
                    <a href="index.php">
                        <button type="button" class="btn btn-dark mt-1">Login</button>
                    </a>
                </ul>
            </div>
        </nav>
        <div class="card text-white bg-light mb-3 mt-3 mx-auto" style="max-width: 30rem;">
            <div class="card-header text-dark text-center">Cadastro de Usuário</div>
            <div class="card-body">
                <div class="container pt-3 ">
                    <form class="mx-auto text-dark " style="width: auto;">
    
                        <div class="form-group">
                            <label for="exampleInputEmail1">CPF</label>
                            <input type="email" class="form-control" id="exampleInputCpf" aria-describedby="emailHelp" placeholder="000.000.000-00">
                        </div>
    
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome completo</label>
                            <input type="email" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Nome completo">
                        </div>
    
                        <div class="form-group">
                            <label for="exampleInputEmail1">E-mail</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entre com seu email">
                        </div>
    
                        <div class="form-group">
                            <label for="exampleInputEmail1">Confrimar e-mail</label>
                            <input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Confirme seu email">
                        </div>
    
                        <div class="form-group">
                            <label for="exampleInputPassword1">Senha</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Insira sua senha">
                        </div>
    
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirmar senha</label>
                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirme a senha">
                        </div>
    
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Ao clicar em "Cadastrar", você aceita os
                                <a href="#termos">Termos</a> e a Política de
                                <a href="#privacidade">Privacidade</a>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-dark float-right">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
        <?php include "footer.php" ?>
</body>

</html>