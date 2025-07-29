<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo "O nome digitado foi: " . $_POST["nome"] . "<br>";
    echo "A idade informada foi: " . $_POST["idade"] . "<br>";
    echo "O RG informado foi: " . $_POST["rg"] . "<br>";
    echo "O CPF informado foi: " . $_POST["cpf"] . "<br>";
    echo "O email informado foi: " . $_POST["email"] . "<br>";
    echo "A data informada foi: " . $_POST["data"] . "<br>";

    if (isset($_POST["estacao"])) {
        $estacoes = $_POST["estacao"];
        echo "Estações escolhidas:<br>";
        for ($i = 0; $i < count($estacoes); $i++) {
            echo "- " . $estacoes[$i] . "<br>";
        }
    } else {
        echo "Nenhuma estação foi selecionada.<br>";
    }

    echo "O sexo informado foi: " . $_POST["sexo"] . "<br>";
    echo "A cor informada foi: " . $_POST["cor"] . "<br>";

} else {
    echo "Nenhum dado foi enviado.";
}
?>
