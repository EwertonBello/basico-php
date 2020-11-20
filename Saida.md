# Saída
Os principais métodos de saída são `echo`, `var_dump` e `print_r`.

```php
<?php
$nome = "Ewerton";
$idade = 21;

echo 'Nome: '.$nome; // Output: Nome: Ewerton
echo 'Idade: '.$idade; // Output: Idade: 21
echo 'Nome: $nome'; // Output: Nome: $nome
echo 'Idade: $idade'; // Output: Idade: $idade

echo "Nome: ".$nome; // Output: Nome: Ewerton
echo "Idade: ".$idade; // Output: Idade: 21
echo "Nome: $nome"; // Output: Nome: Ewerton
echo "Idade: $idade"; // Output: Idade: 21

$pessoa = array("nome"=>$nome, "idade"=>$idade);

var_dump($pessoa); // Output: array(2) { ["nome"]=> string(7) "Ewerton" ["idade"]=> int(21) }
print_r($pessoa); // Output: Array ( [nome] => Ewerton [idade] => 21 )
?>
```
