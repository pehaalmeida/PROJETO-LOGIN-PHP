<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Erro 404</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h1 class="title is-1 has-text-grey">ERRO 404</h1>
                    <h3 class="title is-6 has-text-grey"><a href="../index.php" target="_blank">Pagina Não Encontrada</a></h3>
                    
                </div>
            </div>
        </div>
    </section>
</body>

<script>
    // Recupera o erro salvo no sessionStorage
    const erroBanco = sessionStorage.getItem('db_error');
    if (erroBanco) {
        console.error(erroBanco);
        sessionStorage.removeItem('db_error'); // Limpa após exibição
    }
</script>

</html>