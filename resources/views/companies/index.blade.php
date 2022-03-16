@include ('template')
<!-- Importando CSS e bootstrap da template.php  -->
<div class="container mt-4">
    <h1>Listagem de Empresas</h1>
    <a class="btn btn-primary mb-3 mt-3" href="<?= url('/companies/create'); ?>">Cadastrar nova empresa</a>
    <table class="table table-striped table-bordered table-hover dt-responsive">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Data Início das atividades</th>
                <th>Data Final das atividades</th>
                <th>Especial</th>
                <th>Ações</th>
            </tr>
        </thead>
        @foreach ($companies as $company) <!-- Repetição para exibir os registros !-->
            <tbody>
                <td>{{$company->name}}</td>
                <td>{{$company->dti_atividade}}</td>
                <td>{{$company->dtf_atividade}}</td>
                @if ($company->especial == 0)
                    <td>Não</td>
                @else
                    <td>Sim</td>
                @endif
                <td class="text-center">
                        <a class="btn btn-sm btn-success" href="<?= url('/companies/edit/'.$company->id);?>">Editar</a>
                        <a class= "btn btn-sm btn-danger" href="<?= url('/companies/delete/'.$company->id);?>">Excluir</a>
                </td>
            </tbody>
        @endforeach
    </table>
</div>
