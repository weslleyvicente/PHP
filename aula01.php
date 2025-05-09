<h1>Minha Primeira Página PHP</h1>
<?php
echo "Olá, Mundo!<br>";
echo "/Meu nome é Weslley!<br>";
echo "Estou aprendendo PHP!<br>";
echo "Estou gostando de PHP!";

//comentário de uma linha
# comentário de uma linha
/*
comentário de multiplas linhas
*/

/*
para usarmos as variáveis, usabmos o simbolo de $
*/
$nome = "Weslley";
$idade = 17;
$peso = 70.4;
$casado = false;
$altura = 1.75;
?>
<h1>Sobre Mim</h1>
<?php
echo "<p>Gosto de PHP!!!</p>";
?>
<h1>Dados Pessoais</h1>
<?php
echo "Meu nome é $nome <br>";
echo "Minha idade é $idade <br>";
echo "Meu peso é $peso <br>";
echo "minha altura é $altura m <br>";
?>