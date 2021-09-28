Teste técnico para vaga de estágio FULL STACK. 

O teste consiste em realizar um sistema básico de CRUD. Para este sistema utilizei o banco de dados MYSQL, a linguagem 
de programação PHP e tecnologias como HTML e juntamente com o CSS o framework BOOTSTRAP. 

Para rodar todo o sistema é preciso iniciar o XAMPP, habilitando o apache e o mysqli. 

Feito isso é preciso criar o Banco de Dados. 
O banco de dados pode ser criado diretamente pelo phpMyAdmin. O nome do banco de dados deve ser crud_teste e sua tabela deve se chamar cadastro que vai receber 5 colunas sendo elas:

(NOME)              (TIPO)                (EXTRA)
cod_pessoa        int(11)              auto_increment
nome              varchar(200)
sobrenome         varchar(200)
email             varchar(200)
senha             varchar(200)

Após a criação do DB o sistema já está pronto para funcionar, basta acessar o link http://localhost/CRUD_PHP/index.php
lembrando que os arquivos devem estar salvados na pasta HTDOCS e que o XAMPP com o APACHE e MYSQL devem estar ativados a todo momento pois se trata de um sistema hospedado em server local. 


Na tela index.php há dois botões CADASTRO e PESQUISAR, o botão CADASTRO serve para incluir novos cadastros no DB, quantos quiserem. Quando não quiser mais efetuar nenhum cadastro basta clicar no botão VOLTAR. Já o PESQUISAR serve para verificar quais são os cadastro que já estão no banco de dados, na tela pesquisa.php haverá uma barra de busca que caso não encontre a busca desejada informará todos os cadastros existentes no banco, ou seja, se não houver cadastros não irá mostrar nada . Nessa mesma tela é possível editar os cadastros e salvar as alterações feitas, infelizmente eu não consegui realizar a última etapa do CRUD que seria o DELETE. Então através desse sistema ele não realiza as exclusões de cadastro. Caso queira excluir para efeito de teste é necessário apagar pelo BD. 
