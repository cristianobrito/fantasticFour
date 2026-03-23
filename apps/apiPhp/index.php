<?php
// src/index.php
echo "<h1>Projeto PHP Mínimo com Docker rodando!</h1>";
echo "<h2>FantasticFour</h2>";
echo "🐘 PHP 8.2 está rodando no container php82!<br>";
echo "Versão do PHP: " . phpversion() . "<br>";
// Teste se o modulo intl (que o CodeIgniter pede) está ativo
echo "Modulo INTL: " . (extension_loaded('intl') ? 'Ativo ✅' : 'Inativo ❌');
phpinfo();
?>
