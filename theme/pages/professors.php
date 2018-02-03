<?php include_once('common/header.php'); ?>
<main role="main" class="container">
    <section>
        <h1>Formulário</h1>
        <form method="post" action="#">
            <label for="name">Nome Completo</label>
            <input type="text" name="name">
            <label for="uc">Unidade Curricular</label>
            <input type="text" name="uc">
            <label for="info">Informações</label>
            <textarea rows="20" cols="40" name="info"></textarea>
            <input type="submit">
        </form>
    </section>
</main>
<?php include_once('common/footer.php'); ?>