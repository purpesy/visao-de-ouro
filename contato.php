<?php include 'components/head.php'; ?>

<body>
    <?php include 'components/header.php'; ?>
    <?php
    $titulo = "Fale com a Visão de Ouro";
    $descricao = "Estamos prontos para entender suas necessidades logísticas e criar soluções sob medida para sua empresa.";
    $botaoTexto = null; // ou deixar sem botão
    $botaoLink = null;

    include 'components/hero.php';
    ?>

    <main>
        <?php include 'components/form.php'; ?>

        <section class="bg-azul-escuro py-20 px-6 reveal">
            <div class="max-w-6xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 reveal">Fale com nosso time</h2>
                <p class="text-gray-50 max-w-2xl mx-auto mb-12 reveal">
                    Nossa equipe está pronta para entender suas necessidades e oferecer soluções logísticas personalizadas. Escolha o canal ideal e entre em contato conosco.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-left reveal">
                    <!-- Telefone -->
                    <div class="flex items-start space-x-4 reveal">
                        <div class="text-yellow-500 text-3xl reveal">
                            <i class="fas fa-phone-alt reveal"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white mb-1 reveal">Telefone</h3>
                            <p class="text-gray-50 reveal">(11) 99999-9999<br>Seg - Sex: 08h às 18h</p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex items-start space-x-4 reveal">
                        <div class="text-yellow-500 text-3xl reveal">
                            <i class="fas fa-envelope reveal"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white mb-1 reveal">E-mail</h3>
                            <p class="text-gray-50 reveal">contato@visaodeouro.com.br<br>Responderemos em até 24h úteis</p>
                        </div>
                    </div>

                    <!-- Endereço -->
                    <div class="flex items-start space-x-4 reveal">
                        <div class="text-yellow-500 text-3xl reveal">
                            <i class="fas fa-map-marker-alt reveal"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white mb-1 reveal">Endereço</h3>
                            <p class="text-gray-50 reveal">São Paulo - SP<br>Atendimento nacional (presencial e online)</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white py-20 px-6 text-center reveal">
            <h2 class="text-3xl font-bold mb-4 text-[#0a1e3f] reveal">Área de Atendimento</h2>
            <p class="text-gray-600 mb-8 max-w-2xl mx-auto reveal">
                Atendemos empresas de todo o Brasil com foco em São Paulo, Rio de Janeiro, Minas Gerais e Paraná. Para outras regiões, consulte disponibilidade.
            </p>

            <div class="flex flex-wrap justify-center gap-6 text-[#0a1e3f] font-medium reveal">
                <span class="bg-yellow-100 px-6 py-3 rounded-full reveal">São Paulo (SP)</span>
                <span class="bg-yellow-100 px-6 py-3 rounded-full reveal">Todo Brasil (online)</span>
            </div>
        </section>



    </main>

</body>

<?php include 'components/footer.php'; ?>

</html>