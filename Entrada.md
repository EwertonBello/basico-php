# Entrada
Um método comum de entrada de dados em um script PHP, é utilizando formulário HTML.

Para possibilitar essa entrada de dados, se faz necessário utilizar um dos métodos HTTP.
Os principais são `GET` e `POST`. 

## Formulário HTML
Em um arquivo `html`, é criado um formulário onde se pede a entrada de dois dados(Nome e Idade).
> Utilizando o método `POST`.
```html
<form action="action.php" method="POST">
	Nome: <input type="text" name="input_nome"/>
	Idade: <input type="text" name="input_idade"/>
	<input type="submit"/>
</form>
./index.html
```

## Script PHP
```php
<?php
$nome = $_POST['input_nome'];
$idade = $_POST['input_idade'];
?>
./action.php
```
