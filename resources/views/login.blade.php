@include ('template')
<!-- Importando CSS e bootstrap da tenplate.php  -->
<div class="container">
    <h1>Tela de Login</h1>
    <form action="<?= url("/login"); ?>" method="post">
        @csrf
        <div class="form-group">
            <label for="email">Digite o seu e-mail</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="password">Digite a sua senha</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Entrar</button>
    </form>
</div>

