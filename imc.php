<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC Simples</title>
</head>
<style>
    *{
    margin: 0;
}

h1{
    color: black;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    text-align: center;
    margin-top: 100px;
}
body {
    background-color: blanchedalmond;
    display: flex;
    flex-direction: column;
    align-items: center;
}
form{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    text-align: center;
    border-radius: 15px;
    width: 300px;
    background-color: white;
    padding: 1%;
    font-size: 18px;
    margin-top: 50px;
    border-width: 8px;
    border-style: solid;
    border-color:  #fec343;
    font-weight: 500;
}
.botao-enviar {
  background-color: #fec343;
  border: none;
  padding: 5px;
  color: white;
  border-radius: 10px;
  cursor: pointer;
  margin-top: 20px;
  font-size: 25px;
  font-weight: 900;
  transition: background-color 0.3s ease;
}
div{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    text-align: center;
    font-size: 25px;
    width: 300px;
    height: 50px; 
    color: #98928e;
    font-weight: 500;
    margin-top: 100px;
}
strong{
    color: #fec343;
}
.placeholder {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-weight: 500;
  border-width: 3px;
  border-radius: 30px;
  cursor: pointer;
  margin-top: 20px;
}
</style>
<body>
    <h1>Calculadora de IMC</h1>

    <form method="post">
        Peso (kg): <input type="number" placeholder = "Insira o seu peso" name ="peso" class="placeholder"
        step="0.1" required><br><br>
        Altura (m): <input type="number" placeholder = "Insira a sua altura" name="altura" class="placeholder"
        step="0.01" required><br><br>
        <input type="submit" volume="Calcular IMC" class="botao-enviar">
    </form>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];
        echo "<div>";
        if ($altura > 0) {
            $imc = $peso / ($altura * $altura);
            echo "<p>Seu IMC é: <strong>" . number_format
            (num: $imc, decimals: 2) . "</strong></p>";
        
          if ($imc < 18.5) {
            echo "<p>Classificação: Abaixo do peso</p>";
        }   elseif ($imc < 25) {
            echo "<p>Classificação: Peso normal</p>";
        }   elseif ($imc < 30) {
            echo "<p>Classificação: Sobrepeso</p>";
        }   else {
            echo "<p>Classificação: Obesidade</p>";
        } 
        }
        echo "</div>";
    }
    ?>
    
</body>
</html>
