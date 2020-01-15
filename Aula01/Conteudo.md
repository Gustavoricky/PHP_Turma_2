# Aula 1



Assuntos vistos na primeira aula:

- Arquitetura Cliente-Servidor
- Requisições e Respostas (*request* e *response*)
- Servidor de Aplicação (*software* que roda no lado do servidor)
- Portas: o que são e quais são as portas convencionais 80 e 443
- HTML (estático e visual)
- PHP (dinâmico e processamento)



### Arquitetura Cliente-Servidor



**Cliente** é referente aos *softwares* e dispositivos com os quais o **usuário** (ser humano) interage.



---

**Cliente não é o ser humano. Cliente faz referência ao *software* e ao dispositivo**.

**Usuário é o ser humano**.

Existem *softwares* clientes: são os programas com os quais o usuário interage (navegador, aplicativos, editores de texto, etc.)

E também existem dispositivos clientes: são as máquinas com as quais o usuário interage (computador pessoal, *notebook*, *smartphone*, etc.)

---



 **Servidor** é referente aos *softwares* e dispositivos com os quais os ***softwares* clientes** interagem.



Repare que o usuário NÃO interage diretamente com o servidor.

O usuário interage com o *software* cliente que, por sua vez, comunica-se e troca dados com os servidores.

Essa troca de dados é feita entre *SOFTWARES* (é importante ter isso em mente sempre).



##### O que é uma troca de dados?

A troca de dados entre *softwares* é simplesmente o envio de uma sequência de *bits* (uma mensagem) de um programa para outro.

Inicialmente, um programa envia dados para outro que, por sua vez, responde com outra sequência de *bits*.



Essa troca de dados configura uma comunicação entre os *softwares*.

A comunicação, como já descrito acima, acontece da seguinte forma:



1. O *software* cliente faz uma **REQUISIÇÃO** (*request*) ao *software* servidor.
2. O *software* servidor recebe a requisição e gera uma **RESPOSTA** (*response*).
3. Essa resposta é recebida pelo cliente, que pode, ou não, enviar novas requisições.



Todo esse esquema de comunicação entre cliente e servidor com *requests* e *responses* configura o que é chamado de arquitetura cliente-servidor.



### O servidor de aplicação

"Servidor de **aplicação**" é a nomenclatura dada à categoria de *softwares* que rodam no lado do servidor.

Esses *softwares* são responsáveis por receber as requisições do cliente e por devolver as respectivas respostas.

Para que isso aconteça, o *software* precisa estar em execução e precisa ficar **escutando** (*listening*) novas requisições.



##### O que significa ficar escutando novas requisições?

Significa apenas ficar esperando por novas requisições. O servidor de aplicação (que é o *software* de servidor) fica esperando chegar novas requisições. Isso é o que significa "ficar escutando". 

No inglês, o comportamento de ficar escutando é chamado de *listening*.



---

O servidor de aplicação que utilizaremos no curso é o **Apache**.

---



### Portas

Portas são números de referência para cada *software* que está em execução no computador.

Atribui-se um número de porta para cada programa no momento em que sua execução é iniciada.

O número de porta serve para o computador identificar exclusivamente cada um dos programas que estão em execução simultaneamente.



O **Apache** (o *software* de servidor que utilizaremos) deve rodar, **por convenção**, na porta 80 ou na porta 443.

A porta 80 é a porta convencional para receber dados **NÃO**-criptografados.

Já a porta 443 é a porta convencional para receber dados **criptografados**.

Quando diz-se que é a "porta **convencional**" significa que uma **CONVENÇÃO** de profissionais da área decidiram o número para a porta e não há motivo técnico específico por tal escolha.



### HTML

HTML é uma linguagem de marcação utilizada para construir páginas *web*.

Com o HTML, é possível gerar de uma maneira simples interfaces de interação com o usuário, isto é, páginas com textos, imagens, links, botões, menus, etc.

Portanto, o HTML é utilizado para construir o **visual** de *sites* e de sistemas *web*.



### PHP

O PHP é uma linguagem de programação utilizada para realizar o processamento de dados.

Com o PHP, é possível realizar cálculos, comparações de dados, geração de textos, buscas de dados em um banco, etc.



A diferença principal entre o HTML e o PHP é que, enquanto o HTML é **renderizado** pelos navegadores, o PHP gera **código que será executado**.

Essa diferença é crucial pelo fato de o HTML ser capaz de gerar conteúdo apenas estático.

Já o PHP é capaz de gerar conteúdo dinâmico.



Uma outra forma de entender essa diferença é saber que o código HTML não realiza processamento de dados. O código HTML apenas especifica como o navegador deve renderizar componentes visuais na tela. 

Por exemplo: o HTML não é capaz de realizar o cálculo 5 x 5, mas é capaz de dizer ao navegador para desenhar um botão na página.



Por outro lado, o PHP processa dados. Dessa forma, o PHP pode gerar resultados que dependem totalmente da demanda. 

Por exemplo: o PHP consegue realizar operações matemáticas e, até mesmo, é capaz de permitir que o usuário escolha os próprios números e a operação matemática a ser feita. Caso o usuário escolha os números 5 e 4, e a operação de soma, o PHP consegue gerar o resultado de 5 + 4 = 9. Ou seja, consegue gerar um resultado com base na demanda do usuário. Por esse motivo, diz-se que o PHP gera dados dinâmicos (pois variam de acordo com as entradas).