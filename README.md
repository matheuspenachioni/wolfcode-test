# IMPORTANTE
Acesse a branch <a href="https://github.com/matheuspenachioni/wolfcode-test/tree/practice-test">practice-test</a> para ver o código-fonte e o relatório
<!-- Respostas HTML -->
## HTML
* A ) O que é HTML? Qual a sua importância no desenvolvimento web?
```
É uma linguagem de marcação de hipertexto, sua importância está na estruturação de páginas web feita por ele utilizando tags e seguindo as boas práticas.
```
* B ) Quais são as principais tags HTML utilizadas para definir a
estrutura de uma página web?
```
Aqui vão algumas tags: header, nav, footer, section, main e aside.
Lembrando que essas palavras ficam dentro de "< >".
```
<!-- Respostas CSS -->
## CSS
* A ) O que é CSS? Qual a sua importância no desenvolvimento web?
```
O CSS tem a função de deixar as páginas estilizadas, sua importância está em deixar as páginas visualmente agradáveis e trazer facilidade para o usuário usar a aplicação.
Também é feita validações de tamanho de tela para manter o layout agradável no aparelho em que está sendo usado.
```
* B ) Qual é a diferença entre classes e IDs em CSS? Quando é mais adequado usar uma ou outra?
```
Se usa um ID quando: você tem um elemento único que somente ele precisa daquele estilo e também para identificar com maior facilidade determinado elemento.

Se uma uma CLASSE quando: você tem vários elementos que precisam daquele mesmo estilo.
```
<!-- Respostas JS -->
## JavaScript
* A ) O que é JavaScript? Qual a sua importância no desenvolvimento web?
```
É uma linguagem de programação interpretada e é usada para fazer validações no frontend e definir o comportamento da aplicação e de seus elementos.

Exemplo: o botão de menu de uma sidenav que fecha/abre ao receber um clique. 
```
* B ) Qual é a diferença entre variáveis var, let e const em JavaScript?
```
A diferença entre elas está no escopo. O "var" tem um escopo global, "let" tem um escopo local e "const" é parecida com "let", mas não permite reatribuição e redeclaração.

Exemplo: https://prnt.sc/Z0_LsRWEPKuF

No exemplo da imagem acima vemos que "one" vale "22", mas dentro do escopo do "if" (e somente nele) ele vale 33, justamente por estarmos usando "let".
```
* C ) Explique a diferença entre == e === em JavaScript.
```
A diferença entre os dois é que "===" compara "valor" e "tipo", já o "==" compara independente disso.

Exemplo: https://prnt.sc/i85BsO6TeShH
```
<!-- Respostas PHP -->
## PHP
* A ) O que é PHP? Qual a sua importância no desenvolvimento web?
```
PHP é uma linguagem de scripts e é frequentemente usada no lado backend, mas também permite criar páginas web dinâmicas e componentiza-las. Além de oferecer facilidade para alguns recursos que demandariam mais tempo em outras linguagens.
```
* B ) Qual é a diferença entre uma variável de escopo global e uma variável de escopo local em PHP?
```
Funciona igualmente ao JavaScript, a de escopo global fica acessível em qualquer parte e a de escopo local apenas no método em que foi criado.
```
* C ) Qual é a função do operador ternário em PHP?
```
Um operador ternário funciona como um "if", mas é compacto e feito para ser usado em expressões simples.

Exemplo:
$variavel = condição ? verdadeiro : falso
```
<!-- Respostas GIT -->
## GIT
* A ) O que é Git? Qual a sua importância no desenvolvimento de
software?
```
GIT é uma ferramenta de versionamento de código, sua importância está em ter um histórico das alterações feitas, chamadas de commits, e poder voltar nesses commits para ver algo que já havia sido feito.
```
* B ) Qual é a diferença entre git pull e git fetch?
```
Com "git pull" você baixa a versão mais recente do repositório REMOTO para o repositório LOCAL.

Com "git fetch" você fica sabendo das alterações feitas em um repositório ou branch desde a última vez que foi usado "git pull".
```
* C ) O que é o git merge e quando é necessário utilizá-lo?
```
O "git merge" é usado para mesclar uma branch e é usado quando você dá pull request para branch main (ou em outra branch). Também é usado em resolução de conflito de código, isso ocorre quando parte do seu código alterou algo que também foi alterado na branch que receberá o merge.
```
<!-- Respostas MySQL -->
## MySQL
* A ) O que é MySQL? Qual a sua importância no desenvolvimento web?
```
MySQL é um Sistema Gerenciador de Banco de Dados (SGBD), sua importância é armazenar dados e permitir o gerenciamento dos mesmos (consultas básicas ou avançadas, exclusões e inserções, funções, gatilhos e etc...).
```
* B ) Qual é a diferença entre INNER JOIN e OUTER JOIN em MySQL?
``` 
O "INNER JOIN" retorna os dados quando as duas tabelas tem chaves que se correspondem em ON.

O "OUTER JOIN" retorna os dados de ambas tabelas.
```
* C ) Como funciona a cláusula WHERE em uma consulta SQL?
```
A cláusula WHERE define QUANDO as instruções anteriores a ela serão aplicadas.

Exemplo:
SELECT p.nome_pessoa FROM pessoa p WHERE p.id_pessoa = 1
```
