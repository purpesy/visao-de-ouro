<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<header class="bg-azul-escuro shadow-md">
  <div class="container mx-auto px-6 py-5 flex items-center">
    <div class="logo">
      <img src="img/logo.png" alt="Logo" class="h-10">
    </div>

    <div class="flex-1"></div> <!-- Espaço flexível que empurra o menu e botão pro final -->

    <!-- Botão hamburger: só visível em telas pequenas -->
    <button id="menu-btn" class="md:hidden text-gray-300 focus:outline-none">
      <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>

    <!-- Menu principal desktop -->
    <nav>
      <ul id="menu" class="hidden md:flex space-x-12 font-sans text-gray-300 text-lg ml-6">
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

  <!-- Menu mobile (vertical) -->
  <nav id="mobile-menu" class="md:hidden bg-[#0A1E3F] hidden">
    <ul class="flex flex-col space-y-4 px-6 py-4 font-sans text-gray-300 text-lg">
      <li>
        <a href="index.php" class="block transition-colors duration-300 <?= $currentPage == 'index.php' ? 'text-yellow-500 font-semibold border-l-4 border-yellow-500 pl-2' : 'hover:text-yellow-400' ?>">Home</a>
      </li>
      <li>
        <a href="sobre.php" class="block transition-colors duration-300 <?= $currentPage == 'sobre.php' ? 'text-yellow-500 font-semibold border-l-4 border-yellow-500 pl-2' : 'hover:text-yellow-400' ?>">Sobre</a>
      </li>
      <li>
        <a href="servico.php" class="block transition-colors duration-300 <?= $currentPage == 'servico.php' ? 'text-yellow-500 font-semibold border-l-4 border-yellow-500 pl-2' : 'hover:text-yellow-400' ?>">Serviços</a>
      </li>
      <li>
        <a href="contato.php" class="block transition-colors duration-300 <?= $currentPage == 'contato.php' ? 'text-yellow-500 font-semibold border-l-4 border-yellow-500 pl-2' : 'hover:text-yellow-400' ?>">Contato</a>
      </li>
    </ul>
  </nav>

  <script>
    const btn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>
</header>
