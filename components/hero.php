<section class="hero bg-[#0a1e3f] text-white py-24 px-6 text-center">
    <h1 class="text-xl md:text-5xl font-extrabold max-w-4xl mx-auto mb-6">
        <?= $titulo ?>
    </h1>
    <p class="max-w-2xl mx-auto text-lg mb-8 text-gray-300">
        <?= $descricao ?>
    </p>
    <?php if (isset($botaoTexto) && isset($botaoLink)) : ?>
        <a href="<?= $botaoLink ?>" class="inline-block bg-yellow-500 hover:bg-yellow-600 text-[#0a1e3f] font-bold py-4 px-12 rounded-lg transition">
            <?= $botaoTexto ?>
        </a>
    <?php endif; ?>
</section>
