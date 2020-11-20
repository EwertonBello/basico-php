# Variáveis
As variáveis no PHP são representadas por um cifrão ($) seguido pelo nome da variável. Os nomes de variável são case-sensitive.  

Ex: `$nome`

## Tipos
O tipo de uma variável é decidido em tempo de execução pelo próprio PHP, dependendo do contexto no qual a variável é usada.  

Ex:  

```php
$nome = "Ewerton"; // Tipo -> string
$idade = 21; // Tipo -> integer
$abaetetubense = true; // Tipo -> boolean
$altura = 1.75; // Tipo -> float
$linguagens = array("Kotlin", "PHP", "Dart", "Python", "Typescript"); // Tipo -> array
// a partir do PHP 5.4
$linguagens = ["Kotlin", "PHP", "Dart", "Python", "Typescript"]; // Tipo -> array

$pessoa = array("nome"=>$nome, "idade"=>$idade);// Tipo -> array com chave
// a partir do PHP 5.4
$pessoa = ["nome"=>$nome, "idade"=>$idade]; // Tipo -> array com chave
```
