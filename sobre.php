<?php include 'components/head.php'; ?>

<body>
    <?php include 'components/header.php'; ?>
    <?php
    $titulo = "Nossa História: Compromisso com eficiência logística e inovação";
    $descricao = "Desde a fundação, ajudamos empresas a reduzirem custos, ganharem agilidade e crescerem com soluções logísticas sob medida.";
    $botaoTexto = "Fale com a gente";
    $botaoLink = "contato.php";

    include 'components/hero.php';
    ?>
    <main>
        <?php include 'components/sobre.php'; ?>

        <!-- HISTÓRIA -->
        <section class="historia reveal bg-azul-escuro text-white py-20">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div class="flex justify-center">
                        <img src="img/imagem-exemplo.jpg" alt="Imagem da história" class="w-full max-w-md h-auto rounded-lg shadow-xl object-cover">
                    </div>
                    <div class="text-center md:text-left">
                        <h2 class="text-2xl md:text-5xl font-extrabold mb-6 text-yellow-500">NOSSA HISTÓRIA</h2>
                        <p class="text-base md:text-lg leading-relaxed max-w-xl mx-auto md:mx-0">
                            Fundada em 2025 por alunos do curso técnico do SENAI, a <strong>Visão de Ouro</strong> nasceu com o objetivo de oferecer soluções logísticas inteligentes, acessíveis e adaptadas à realidade do mercado brasileiro. Unindo o conhecimento técnico adquirido em sala de aula à vontade de inovar, criamos uma agência comprometida com a <strong>excelência</strong> e a <strong>eficiência operacional</strong>. <br>

                            Mesmo sendo uma iniciativa jovem, a <strong>Visão de Ouro</strong> carrega em seu DNA a busca constante por <strong>melhorias nos processos logísticos</strong>, contribuindo para o crescimento sustentável de empresas de diferentes portes e setores. Nossa missão é transformar desafios em oportunidades por meio de <strong>planejamento estratégico</strong>, <strong>análise de dados</strong> e aplicação de <strong>boas práticas logísticas</strong>. <br>

                            Com uma equipe dedicada, formada por profissionais em formação e orientada por princípios de <strong>responsabilidade</strong>, <strong>inovação</strong> e <strong>aprendizado contínuo</strong>, seguimos construindo uma trajetória de impacto e profissionalismo. Estamos prontos para deixar nossa marca no setor logístico brasileiro com <strong>visão</strong>, <strong>estratégia</strong> e <strong>resultados</strong>.

                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- VISÃO -->
        <section class="visao reveal bg-gray-100 py-20">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div class="text-center md:text-left">
                        <h2 class="text-2xl md:text-5xl font-extrabold mb-6 text-yellow-500">NOSSA VISÃO</h2>
                        <p class="text-base md:text-lg leading-relaxed max-w-xl mx-auto md:mx-0">
                            Ser a principal referência em consultoria no Brasil, reconhecida pela excelência, expertise e capacidade de transformar desafios em oportunidades, proporcionando aos nossos clientes uma visão clara e estratégica para o crescimento contínuo.
                        </p>
                    </div>
                    <div class="flex justify-center">
                        <img src="img/imagem-exemplo.jpg" alt="Imagem da visão" class="w-full max-w-md h-auto rounded-lg shadow-xl object-cover">
                    </div>
                </div>
            </div>
        </section>

        <!-- MISSÃO -->
        <section class="missao reveal bg-azul-escuro text-white py-20">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div class="flex justify-center">
                        <img src="img/imagem-exemplo.jpg" alt="Imagem da missão" class="w-full max-w-md h-auto rounded-lg shadow-xl object-cover">
                    </div>
                    <div class="text-center md:text-left">
                        <h2 class="text-2xl md:text-5xl font-extrabold mb-6 text-yellow-500">NOSSA MISSÃO</h2>
                        <p class="text-base md:text-lg leading-relaxed max-w-xl mx-auto md:mx-0">
                            Oferecer consultoria estratégica de alta qualidade, ajudando nossos clientes a alcançar o sucesso e a prosperidade por meio de soluções personalizadas e inovação, com um foco único no fortalecimento de suas operações e no alcance de seus objetivos.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- VALORES -->
        <section class="valores reveal bg-gray-100 py-20">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div class="text-center md:text-left">
                        <h2 class="text-2xl md:text-5xl font-extrabold mb-6 text-yellow-500">NOSSOS VALORES</h2>
                        <ul class="text-base md:text-lg leading-relaxed max-w-xl mx-auto md:mx-0 space-y-4 list-disc list-inside">
                            <li><strong>Excelência:</strong> Buscamos entregar soluções de alto impacto, superando as expectativas dos nossos clientes com qualidade e dedicação.</li>
                            <li><strong>Compromisso:</strong> Estamos profundamente comprometidos com o sucesso dos nossos clientes, trabalhando ao lado deles para alcançar suas metas de forma eficaz.</li>
                            <li><strong>Inovação:</strong> Encorajamos a criatividade e a inovação, sempre em busca de abordagens únicas e eficientes para cada desafio.</li>
                            <li><strong>Transparência:</strong> Atuamos com total transparência, construido relações de confiança e respeito com nossos clientes, colaboradores e parceiros.</li>
                            <li><strong>Ética:</strong> Nossos serviços são conduzidos com integridade e respeito, seguindo os mais altos padrões éticos em todas as nossas interações.</li>
                            <li><strong>Crescimento Sustentável:</strong> Apoiamos o crescimento sustentável, ajudando nossos clientes a alcançar resultados duradouros e responsáveis.</li>
                        </ul>
                    </div>
                    <div class="flex justify-center">
                        <img src="img/imagem-exemplo.jpg" alt="Imagem dos valores" class="w-full max-w-md h-auto rounded-lg shadow-xl object-cover">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'components/footer.php'; ?>
</body>

</html>