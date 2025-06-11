<?php include 'components/head.php'; ?>

<body>
    <?php include 'components/header.php'; ?>
    <main>
        <?php
        $titulo = "Soluções logísticas inteligentes para empresas que querem crescer com estratégia";
        $descricao = "Na Visão de Ouro, combinamos planejamento, tecnologia e atendimento personalizado para transformar sua logística em vantagem competitiva.";
        $botaoTexto = "Conheça nossos serviços";
        $botaoLink = "servico.php";

        include 'components/hero.php';
        ?>
        <?php include 'components/sobre.php'; ?>
        <?php include 'components/servicoComponent.php'; ?>
        <?php include 'components/form.php'; ?>
        <?php include 'components/selos.php'; ?>
        <?php include 'components/CTA.php'; ?>
    </main>
    <?php include 'components/footer.php'; ?>

</body>

</html>