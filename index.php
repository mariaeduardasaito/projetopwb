<?php include 'cabecalho.php'; ?>
<style>
    div {
        border: 1px solid #117ae2;
    }
</style>

<div class="row">
    <div class="col-md-4"></div>

    <div class="col-md-4">

        <div class="card">
         <div class="card-body">
           <form action="" method="post">
             <label for="login">Username</label>
                <input class="form-control" type="text" name="login" id="login">
             <label for="senha">Senha</label>
                <input class="form-control" type="password" name="senha" id="senha">
         <div class="row">
             <div class="col-md-6"></div>
             <div class="col-md-6"></div>
         </div> 
           </form>
         </div>

        </div>
    </div>

    <div class="col-md-4">
        
    </div>

</div>

<?php include 'rodape.php'; ?>