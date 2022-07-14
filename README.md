
<h1> Project Laravel <h1>

    
 ### Essa é uma aplicação web desenvolvida em Laravel e PHP, utilizando banco de dados para armazenar os registros. Seguindo a estrutura MVC, Model, View e Controller. 
 Também foi utilizado o Blade, Eloquent e JQuery.
    
 ### Funcionalidades
    
    
    
+ Tela de Login com usuário autenticado no banco de dados.
+ Inserir um registro de uma empresa
+ Atualizar as informações dessa empresa
+ Remover uma empresa do sistema
    
 ## Campos que o Model utiliza:
    
 + nome 
 + tempo de inicío das atividades
 + tempo de final das atividades
 + switch/checkbox para selecionar se a empresa é especial
 + endereço: cep, logradouro, complemento, número, bairro, latitude e longitude.

 ## Tecnologias utilizadas

 <table>
 <tr> 
     <td>PHP</td>
     <td>Laravel</td>
     <td>Boostrap</td>
     <td>MySQL</td>
 </tr>
     
 <tr>
     <td>7.3</td>
     <td>8.7</td>
     <td>4.6</td>
     <td>10.4</td>
 </tr>
</table>
    
    
## Como rodar a aplicação 

1) Clone este repositório
2) Abra o cmd e execute o comando: composer install
3) Crie um arquivo .env (pode copiar do arquivo .env.example
4) Configure suas variáveis em .env
5) Execute o comando: php artisan migrate
6) Execute o comando: php artisan serve

   
 

