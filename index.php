<?php include 'components/head.php'; ?>

<body>
    <?php include 'components/header.php'; ?>
    <main>
        <?php include 'components/hero.php'; ?>
        <?php include 'components/sobre.php'; ?>
        <?php include 'components/servicoComponent.php'; ?>
        <?php include 'components/form.php'; ?>
        <?php include 'components/selos.php'; ?>
        <?php include 'components/CTA.php'; ?>
    </main>
    <?php include 'components/footer.php'; ?>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        ScrollReveal().reveal('.reveal', {
            origin: 'bottom',
            distance: '50px',
            duration: 1000,
            delay: 100,
            easing: 'ease-in-out',
            reset: false // se quiser animar só uma vez
        });
    </script>
</body>

</html>