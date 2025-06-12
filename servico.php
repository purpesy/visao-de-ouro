<?php include 'components/head.php'; ?>

<body>
    <?php include 'components/header.php'; ?>
    <?php
    $titulo = "Soluções logísticas personalizadas para seu negócio crescer com eficiência";
    $descricao = "A consultoria que entende sua cadeia logística e impulsiona resultados com tecnologia e estratégia.";
    $botaoTexto = "Fale Conosco";
    $botaoLink = "contato.php";

    include 'components/hero.php';
    ?>
    <main>

        <section class="bg-white py-20 reveal">
            <div class="container mx-auto px-6 text-center flex flex-col justify-center md:text-left reveal">
                <h2 class="text-3xl md:text-5xl font-extrabold text-center text-yellow-500 mb-4 reveal">Nossos Serviços</h2>
                <p class="text-lg text-center justify-center md:text-xl text-gray-700 mx-auto md:mx-0 py-5 reveal ">
                    Oferecemos soluções logísticas integradas e personalizadas para empresas que desejam mais eficiência, segurança e resultados em suas operações.
                </p>
            </div>
            <div class="container mx-auto px-6 py-5 reveal">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center md:text-left reveal">

                    <!-- Serviço 2 -->
                    <div class="bg-gray-50 p-8 rounded-xl shadow-md hover:shadow-lg transition">
                        <div class="mb-4 text-yellow-500 reveal">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto md:mx-0 h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 12h18M3 17h18" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2 reveal">Otimização de Estoques</h3>
                        <p class="text-gray-600 reveal">
                            Controle inteligente de estoques com análise de demanda, evitando excessos ou rupturas e garantindo equilíbrio logístico.
                        </p>
                    </div>

                    <!-- Serviço 3 -->
                    <div class="bg-gray-50 p-8 rounded-xl shadow-md hover:shadow-lg transition">
                        <div class="mb-4 text-yellow-500 reveal">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto md:mx-0 h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L15 12 9.75 7" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2 reveal">Consultoria Estratégica</h3>
                        <p class="text-gray-600 reveal">
                            Diagnóstico completo da cadeia logística e desenvolvimento de planos personalizados para evolução do seu negócio.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-azul-escuro text-white py-20 reveal">
            <div class="container mx-auto px-6 text-center reveal">
                <h3 class="text-2xl md:text-4xl font-bold mb-6 reveal">Por que escolher a gente?</h3>
                <p class="text-lg max-w-3xl mx-auto mb-10 reveal">
                    Combinamos experiência, tecnologia e atendimento humano para transformar a logística da sua empresa. Atuamos como parceiros estratégicos para garantir resultados reais.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 reveal">
                    <div class="bg-white p-6 rounded-xl shadow-md reveal">
                        <h4 class="text-xl font-semibold text-yellow-500 mb-2 reveal">Soluções Modernas</h4>
                        <p class="text-gray-600 reveal">Utilizamos tecnologia de ponta para otimizar processos logísticos e garantir eficiência máxima.</p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-md reveal">
                        <h4 class="text-xl font-semibold text-yellow-500 mb-2 reveal">Gestão Personalizada</h4>
                        <p class="text-gray-600 reveal">Cada cliente é único. Criamos estratégias sob medida.</p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-md reveal">
                        <h4 class="text-xl font-semibold text-yellow-500 mb-2 reveal">Atendimento humanizado</h4>
                        <p class="text-gray-600 reveal">Nosso time se importa com o seu sucesso.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-gray-50 py-16 text-center reveal">
            <div class="container mx-auto px-6 reveal">
                <h3 class="text-2xl md:text-4xl font-bold mb-4 reveal">Vamos transformar sua logística?</h3>
                <p class="text-lg text-gray-400 mb-6 reveal">Entre em contato conosco e descubra como podemos ajudar seu negócio a crescer.</p>
                <a href="contato.php" class="inline-block bg-yellow-500 text-[#0A1E3F] font-semibold px-6 py-3 rounded-xl shadow hover:bg-yellow-400 transition reveal">
                    Solicitar Orçamento
                </a>
            </div>
        </section>

    </main>
    <?php include 'components/footer.php'; ?>
</body>

</html>