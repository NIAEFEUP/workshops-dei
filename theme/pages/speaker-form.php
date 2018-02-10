<?php include_once('common/header.php'); ?>
<script src="../javascript/sh-submit.js" defer></script>

<main role="main" class="container">
    <section>
        <h1 id="title">Workshop de Docker</h1>
        <h6 id="uc">ASSO</h6>
        <div id="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</div>
        <section>
            <section>
                <h1>Formulário</h1>
                <form method="post" action="#">
                    <label for="name">Nome Completo</label>
                    <input type="text" name="name">
                    <label for="background">Sobre mim: </label>
                    <textarea rows="15" cols="35" name="background"></textarea>
                    <label for="info">Proposta de Workshop/Palestra</label>
                    <textarea rows="15" cols="35" name="info"></textarea>
                    <input type="submit">
                </form>
            </section>
</main>

<?php include_once('common/footer.php'); ?>