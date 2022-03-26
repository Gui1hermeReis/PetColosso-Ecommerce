<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Conta - Pet Colosso</title>
    <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css2?family=
        Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome
        /4.7.0/css/font-awesome.min.css">
</head>
    <body>

        <!------------- Menu ------------->

        <?php
            include ('menu.php');
        ?>

        <!------------- Conta ------------->

        <div class="pagina-contato">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <img src="images/imagem1.png" width="90%">
                    </div>

                    <div class="col-2">
                        <div class="form-container">
                            <div class="form-btn">
                                <span>Fale conosco</span>
                                <hr id="Indicator">
                            </div>

                            <form id="FaleForm">
                                <input type="text" placeholder="Nome">
                                <input type="email" placeholder="Email">
                                <input type="text" placeholder="Telefone">
                                <input type="text" placeholder="Motivo">
                                <button type="submit" class="btn">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!------------- Footer ------------->

        <?php
            include ('footer.php');
        ?>


        <!------------- JS form ------------->

        <script>
            var FaleForm = document.getElementById("FaleForm");
            var Indicator = document.getElementById("Indicator");
        </script>
    </body>
</html>