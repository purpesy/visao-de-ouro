<?php
// Define a página atual com base no nome do arquivo atual
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<header class="bg-blue-950 shadow-md flex">
    <div class="container mx-auto px-3 py-7 flex items-center justify-between">
        <div class="logo">
            <img src="img/logo.png" alt="Logo">
        </div>
        <div class="menu">
            <ul class="flex space-x-6 text-white font-medium">
                <li>
                    <a href="index.php" class="text-2xl transition-colors duration-300 <?= $currentPage == 'index.php' ? 'text-amber-600 text-bold underline' : 'hover:text-amber-400' ?>">Home</a>
                </li>
                <li>
                    <a href="sobre.php" class="text-2xl transition-colors duration-300 <?= $currentPage == 'sobre.php' ? 'text-amber-600 text-bold underline' : 'hover:text-amber-400' ?>">Sobre</a>
                </li>
                <li>
                    <a href="servico.php" class="text-2xl transition-colors duration-300 <?= $currentPage == 'servico.php' ? 'text-amber-600 text-bold underline' : 'hover:text-amber-400' ?>">Serviços</a>
                </li>
                <li>
                    <a href="contato.php" class="text-2xl transition-colors duration-300 <?= $currentPage == 'contato.php' ? 'text-amber-600 text-bold underline' : 'hover:text-amber-400' ?>">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</header>
