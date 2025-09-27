<?php
$timeDigitado = $_POST['time'] ?? '';
$timeDigitado = ucwords(strtolower(trim($timeDigitado))); // Ex: "santos" → "Santos"

switch ($timeDigitado) {
    case "Paulista":
        echo "Paulista é um time histórico do interior de São Paulo!";
        break;
    case "Corinthians":
        echo "Corinthians é um dos maiores clubes do Brasil, com sede em São Paulo.";
        break;
    case "Palmeiras":
        echo "Palmeiras é um clube paulista com tradição e muitos títulos nacionais e internacionais.";
        break;
    case "São Paulo":
        echo "São Paulo Futebol Clube é um dos gigantes do Brasil, com sede no Morumbi.";
        break;
    case "Santos":
        echo "Santos é famoso mundialmente, berço de Pelé e muitos craques.";
        break;
    case "Ponte Preta":
        echo "Ponte Preta é um dos clubes mais tradicionais de Campinas.";
        break;
    case "Bragantino":
        echo "Bragantino, atualmente conhecido como Red Bull Bragantino, vem ganhando destaque no cenário nacional.";
        break;
    default:
        echo "Time não encontrado. Verifique se digitou corretamente.";
        break;
}
?>