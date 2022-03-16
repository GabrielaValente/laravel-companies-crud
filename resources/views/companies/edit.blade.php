@include('template')
<link rel="stylesheet" href="{{asset('/css/companies/create.css')}}" type="text/css">
<!-- Importando CSS e bootstrap da template.php  -->

<div class="container">
    <h1>Formulário de Edição - Empresas </h1>
    <form action="<?= url('companies/update') ?>" method="post">
        @csrf
        <input type="text" class="form-control" hidden name="id" id="id" value="{{$companies['id']}}" required>
        <div class="form-group">
            <label for="name">Informe o nome da empresa</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$companies['name']}}" required>
        </div>

        <div class="form-group">
            <label for="email">Informe a Data Início das atividades </label>
            <input type="datetime-local" class="form-control" name="dti_atividade" id="datetime" value="{{$companies['dti_atividade']}}" required>
        </div>

        <div class="form-group">
            <label for="email">Informe a Data Final das atividades </label>
            <input type="datetime-local" class="form-control" name="dtf_atividade" id="datetime" value="{{$companies['dtf_atividade']}}" required>
        </div>

        <div class="custom-control custom-switch">
            <input type="checkbox" value="1" class="custom-control-input" name="especial" id="customSwitch1" value="{{$companies['especial']}}">
            <label class="custom-control-label" for="customSwitch1">Empresa Especial</label>
          </div>

          <div class="form-group">
            <label for="name">CEP</label>
            <input type="text" class="form-control" name="cep" id="cep" value="{{$adress['cep']}}"required>
        </div>
          <div class="form-group">
            <label for="public_area">Logradouro</label>
            <input type="text" class="form-control" name="public_area" id="public_area" value="{{$adress['public_area']}}" required>
        </div>
        <div class="form-group">
            <label for="complement">Complemento</label>
            <input type="text" class="form-control" name="complement" id="complement" value="{{$adress['complement']}}"required>
        </div>
        <div class="form-group">
            <label for="number">Número</label>
            <input type="number" class="form-control" maxlength="4" name="number" id="number" value="{{$adress['number']}}" required>
        </div>
        <div class="form-group">
            <label for="neighborhood">Bairro</label>
            <input type="text" class="form-control" name="neighborhood" id="neighborhood" value="{{$adress['neighborhood']}}" required>
        </div>
        <div class="form-group">
            <label for="latitude">Latitude</label>
            <input type="text" class="form-control" name="latitude" id="latitude" value="{{$adress['latitude']}}" required>
        </div>
        <div class="form-group">
            <label for="longitude">Longitude</label>
            <input type="text" class="form-control" name="longitude" id="longitude" value="{{$adress['longitude']}}" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Atualizar registro</button>
    </form>
    <script type="text/javascript" src="/js/companies/create.js"></script>
</div>
