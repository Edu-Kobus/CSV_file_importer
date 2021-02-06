# :page_facing_up: Importador CSV 

&nbsp;
## :book: Sobre: 
Importador de arquivos CSV foi desenvolvido com intuito de importar planilhas direto para banco de dados com mais facilidade.

&nbsp;
### Tecnologias utilizadas: 
* PHP
* HTML
* CSS
* Apache
* Para deploy da aplicação foi utilizado um servidor local através do <a href="https://www.apachefriends.org/pt_br/index.html">XAMPP</a>
* Banco de dados utilizado MySQL e <a href="https://dev.mysql.com/downloads/workbench/">MySQL Workbench</a> para visualização. Juntamente com PHPMyAdmin para criação e edição do banco de dados.

&nbsp;

## :game_die: Modelagem do banco de dados: 
Database name: **csv3**
&nbsp;

Table name: **import**

Primeiramente para consulta dos dados da tabela podemos utilizar no Workbench para aplicar no banco de dados o seguinte comando: 

```
use csv3;
show tables;
SELECT * FROM import; 
```
&nbsp;

- Campos da tabela:

![coluns](/img/coluns.PNG)

A tabela em questão possue dois INDEX, **"id_produto"** e **"cod_barra"** para facilitar a busca dos produtos. Pois cada produto possue apenas um id, e código de barra se difere de cada produto simplificando a busca na tabela. Para consulta de index podemos utilizar o comando:
```SHOW INDEX FROM import;```

&nbsp; 
## :page_with_curl:Planilha:
O <a href="https://github.com/Edu-Kobus/CSV_file_importer/tree/master/spreadsheets">.csv</a> importado na aplicação contém 10000 produtos dos quais são separados por **";"** sem cabeçalho na primeira linha.


&nbsp;
&ensp;

## :electric_plug: Conexão e extensão CSV:
Ao inserirmos no importador o formato incorreto a aplicação retornará a mensagem **"Extensão inválida"**, somente aceitando o formato *.csv* no qual ao importar retornará a mensagem **"Dados inseridos com sucesso"**, onde será enviado diretamente ao banco de dados setado no código, juntamente com a tabela na qual será direcionada os dados.

&ensp;

Para conexão com banco de dados respectivamente setamos na quarta string o nome do nosso banco de dados .sql, como vemos **"csv3"** :
`$conn = new mysqli("localhost", "root", "", "csv3");`

&ensp;

Em seguida para reconhecimento de nosso *.csv* devemos digitar o nome da tabela e suas colunas respectivamente como podemos ver no comando: 
`$result = $conn->query("INSERT INTO import (produto, cod_barra, categoria, preço_de_custo, preço_de_venda) VALUES('$produto', '$cod_barra', '$categoria','$preço_de_custo', '$preço_de_venda')");
`

## :computer:Aplicação:
### ![gif](/img/img.gif)
