<?php include 'cabecalho.php'; ?>
<style>
    
</style>

<div class="row w-100">
    <div class="col-md-4"></div>

    <div class="col-md-4">

        <div class="card">
         <div class="card-body">
           <form action="" method="post">
             <label for="login">Username</label>
                <input class="form-control" type="text" name="login" id="login">
             <label for="senha">Senha</label>
                <input class="form-control" type="password" name="senha" id="senha">
         <div class="row mt-3">
             <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Entrar</button>
             </div>
             <div class="col-md-6 align-items-center d-flex justify-content-end">
                <input type="checkbox" class= "form-check-input mx-2" value="senha"/> Salvar senha
             </div>
         </div> 
           </form>
         </div>

        </div>
    </div>

    <div class="col-md-4">
        
    </div>

</div>

<?php include 'rodape.php'; ?>