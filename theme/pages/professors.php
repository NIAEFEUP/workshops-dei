<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Workshop Scheduler</title>
	<script src="javascript/script.js" defer></script>
</head>

<body>
	<nav>
		<a href="estudantes.html">Estudantes</a>
		<a href="docentes.html">Docentes</a>
		<a href="palestrantes.html">Palestrantes</a>
	</nav>
	
    <h1>Formulário</h1>
    <form>
        Nome Completo<br>
        <input type="text" name="full_name" /><br>

        Unidade Curricular<br>
        <input type="text" name="subject" /><br>

        Informações<br>
        <textarea rows="4" cols="50"></textarea><br>

        <button type="submit" id="create_talk">Submit</button>    
    </form>
    
    <footer>© 2018 Departamento de Informática</footer>
</body>

</html>