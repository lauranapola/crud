<?php
session_start();
?>
<!DOCTYPE html>
<head>
    <!-- required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width+device-width, initial-scale=1">
    <!-- boostrap CSS -->
    <link href ="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet">
    <title>Criar Aluno</title>
</head>
<body>
    <div class="container mt-5">
        <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                <div class="card-heardes">
                    <h4>Adicionar Aluno
                        <a href="index.php" class="btn btn-danger float-end">VOLTAR</a>
</h4>
</div>
<div class="card-body">
    <form action="code.php" method="POST">
        <div class="mb-3">
            <label>Nome</label>
            <input type ="text" name="name" class="form-control">
</div>
<div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control">
</div>
<div class="mb-3">
    <label>Email</label>
    <input type="text" name="phone" class="form-control">
</div>
<div class="mb-3">
    <button type="submit" nsme="save_student" class="btn btn-primary">Salvar Aluno</button>
</div>

</form>
</div>
</div>
</div>
</div>
</div>
 <src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></scri pt>
</body>
</html>