# Aula 02



### HTML - Componentes Básicos



A linguagem HTML funciona através de *tags*.

Uma *tag* informa ao navegador o deve ser renderizado na página.



Exemplo:

```html
<h1>Conteúdo da Tag</h1>
<h2>Conteúdo da Tag</h2>
<h3>Conteúdo da Tag</h3>
<h4>Conteúdo da Tag</h4>
<h5>Conteúdo da Tag</h5>
<h6>Conteúdo da Tag</h6>
```



Acima temos um exemplo de código HTML, que gera o seguinte resultado:

<iframe style='width: 100%;' height="265" src="exemplo1.html"></iframe>



As *tags* no código acima são: `<h1></h1>`,  `<h2></h2>`,  `<h3></h3>`,  `<h4></h4>`,  `<h5></h5>` e `<h6></h6>`.



Vamos analisar a primeira linha:

```html
<h1>Título Principal</h1>
```

A primeira parte da *tag* (`<h1>`) é a ***tag* de abertura**, que informa ao navegador como o conteúdo deve ser renderizado.

A segunda parte da *tag* (`</h1>`) é a ***tag* de fechamento**. Repare que a *tag* de fechamento possui uma barra (`/`) a mais em comparação com a *tag* de abertura.

A *tag* de fechamento informa ao navegador que o conteúdo que deve ser renderizado seguindo o estilo do `h1` chegou ao fim. Portanto, o restante do conteúdo **não** será mais renderizado seguindo o estilo do `h1`.



As *tags* `h1`, `h2`, `h3`, `h4`, `h5`e `h6` são *tags* de *Heading* (cabeçalhos, traduzindo para o português). São utilizadas para renderizar títulos e subtítulos.

A diferença entre elas está no tamanho da fonte do conteúdo.

A `h1` renderiza o conteúdo com um tamanho maior de fonte do que as outras, enquanto a  `h6` renderiza com um tamanho menor de fonte em relação às outras.





###  *Tags* `a`, `form` e `input`:



As *tags* mais importantes que utilizaremos são as *tags* `a`, `form` e `input`.

A importância dessas *tags* se dá pelo fato de elas serem capazes de **provocar** requisições ao servidor.

Isto é, elas **iniciam o processo de troca de dados** entre o cliente e o servidor.



### `<a></a>`:

A *tag* `<a>` serve para o navegador renderizar um *link*. Ao clicar no *link*, o navegador faz uma requisição para um servidor, pedindo para acessar uma determinada página.

Exemplo de utilização:

```html
<a href="http://www.google.com">Clique aqui</a>
```

O código acima gera o seguinte resultado:

<div style="border: 1px solid grey; padding: 15px;">
    <a href="http://www.google.com">Clique aqui</a>
</div>

​    

Ao interagir com o *link* acima, o usuário é direcionado para a página inicial do site do Google.

---

É importante ressaltar que, ao clicar no *link*, uma **requisição ao servidor do google** é feita e, como resposta dessa requisição, a página inicial do Google é enviada de volta ao navegador.

Por tal efeito, a *tag* `<a>` inicia uma comunicação entre cliente e servidor: o cliente envia a requisição pedindo para acessar uma página e o servidor responde com a própria página.

---



Repare que o **atributo `href`** é configurado para que o clique no *link* leve até a página do Google.

Portanto, é justamente o `href` que define para qual `URL` será realizada uma requisição.



---

Reforçando, a nomenclatura que se dá para o `href` é **atributo**.

O `href` é um dos diversos atributos que existem. Os atributos servem para configurar a maneira pela qual uma *tag* vai ser renderizada.

Outro aspecto dos atributos é que eles **sempre** devem ser colocados **dentro da tag de abertura**.

---



### `<form></form>` e `<input />`:

A *tag* `<form>` é utilizada para construir um formulário no qual o usuário pode inserir dados.

Por exemplo, um formulário de cadastro normalmente possui campos para digitar e-mail e senha.

Cada campo no qual o usuário pode inserir dados é renderizado pela *tag* `<input />`.

A *tag* `<input />` possui uma diferença em relação às outras *tags* que já vimos: não possui a *tag* de fechamento.

A `<input />` possui apenas a *tag* de abertura em um formato de auto-fechamento, com a barra (`/`) no final da *tag* de abertura para indicar que é o fim.



O código HTML a seguir renderiza um formulário de cadastro com os campos para e-mail e senha:

```html
<form>
    E-mail: <input />
    Senha: <input />
</form>
```



O código acima gera o seguinte resultado:

<div style="border: 1px solid grey; padding: 15px;">
    <form>
        E-mail: <input />
        Senha: <input />
    </form>
</div>



Analisando o código HTML, pode-se reparar que o conteúdo da *tag* `form` é formado por **tudo** que está entre as *tags* de abertura e fechamento (`<form>` e `</form>`).

Portanto, o conteúdo do formulário é composto tanto por texto, quanto por *tags* de `<input/>`.

Os textos `E-mail:` e `Senha:` são renderizados como textos (como realmente deveriam ser).

Por sua vez, as *tags* de `<input/>` são renderizadas como caixas de entrada de dados, nas quais o usuário é capaz de digitar suas informações.



Para completar esse formulário, é preciso adicionar um botão de submissão dos dados.

Isso é feito também com a *tag* `<input/>`. Entretanto, é necessário configurá-la com o atributo `type="submit"` para indicar que essa *tag* de `<input/>` deve ser renderizada com um botão de submissão de dados.

Exemplo:

```html
<form>
    E-mail: <input />
    Senha: <input />
    <input type="submit" />
</form>
```



O código acima gera o seguinte resultado:

<div style="border: 1px solid grey; padding: 15px;">
    <form>
        E-mail: <input />
        Senha: <input />
		<input type="submit" />
    </form>
</div>



Agora o formulário possui um botão de "Enviar".