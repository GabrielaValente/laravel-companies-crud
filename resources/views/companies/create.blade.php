@include('template')
<link rel="stylesheet" href="{{asset('/css/companies/create.css')}}" type="text/css">
<!-- Importando CSS e bootstrap da template.php  -->

<div class="container">
    <h1>Formulário de Cadastro - Empresas </h1>
    <form action="<?= url('companies/store') ?>" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Informe o nome da empresa</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>

        <div class="form-group">
            <label for="email">Informe a Data Início das atividades </label>
            <input type="datetime-local" class="form-control" name="dti_atividade" id="datetime" required>
        </div>

        <div class="form-group">
            <label for="email">Informe a Data Final das atividades </label>
            <input type="datetime-local" class="form-control" name="dtf_atividade" id="datetime" required>
        </div>

        <div class="custom-control custom-switch">
            <input type="checkbox" value="1" class="custom-control-input" name="especial" id="customSwitch1">
            <label class="custom-control-label" for="customSwitch1">Empresa Especial</label>
          </div>

          <div class="form-group">
            <label for="name">CEP</label>
            <input type="text" class="form-control" name="cep" id="cep" required>
        </div>
          <div class="form-group">
            <label for="public_area">Logradouro</label>
            <input type="text" class="form-control" name="public_area" id="public_area" required>
        </div>
        <div class="form-group">
            <label for="complement">Complemento</label>
            <input type="text" class="form-control" name="complement" id="complement" required>
        </div>
        <div class="form-group">
            <label for="number">Número</label>
            <input type="number" class="form-control" maxlength="4" name="number" id="number" required>
        </div>
        <div class="form-group">
            <label for="neighborhood">Bairro</label>
            <input type="text" class="form-control" name="neighborhood" id="neighborhood" required>
        </div>
        <div class="form-group">
            <label for="latitude">Latitude</label>
            <input type="text" class="form-control" name="latitude" id="latitude" required>
        </div>
        <div class="form-group">
            <label for="longitude">Longitude</label>
            <input type="text" class="form-control" name="longitude" id="longitude" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Cadastrar empresa</button>
    </form>
    <script type="text/javascript" src="/js/companies/create.js"></script>
</div>
