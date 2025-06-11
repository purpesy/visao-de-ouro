<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<header class="bg-[#0A1E3F] shadow-md"> <!-- Azul bem escuro profissional -->
  <div class="container mx-auto px-6 py-5 flex items-center justify-between">
    <div class="logo">
      <img src="img/logo.png" alt="Logo" class="h-10">
    </div>
    <nav>
      <ul class="flex space-x-12 font-sans text-gray-300 text-lg">
        <li>
          <a href="index.php" class="transition-colors duration-300 <?= $currentPage == 'index.php' ? 'text-yellow-500 font-semibold border-b-2 border-yellow-500' : 'hover:text-yellow-400' ?>">Home</a>
        </li>
        <li>
          <a href="sobre.php" class="transition-colors duration-300 <?= $currentPage == 'sobre.php' ? 'text-yellow-500 font-semibold border-b-2 border-yellow-500' : 'hover:text-yellow-400' ?>">Sobre</a>
        </li>
        <li>
          <a href="servico.php" class="transition-colors duration-300 <?= $currentPage == 'servico.php' ? 'text-yellow-500 font-semibold border-b-2 border-yellow-500' : 'hover:text-yellow-400' ?>">Serviços</a>
        </li>
        <li>
          <a href="contato.php" class="transition-colors duration-300 <?= $currentPage == 'contato.php' ? 'text-yellow-500 font-semibold border-b-2 border-yellow-500' : 'hover:text-yellow-400' ?>">Contato</a>
        </li>
      </ul>
    </nav>
  </div>
</header>
