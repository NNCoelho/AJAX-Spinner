<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Spinner</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

    <div class="text-center mt-5">
        <div id="resposta"></div>
        <div class="mt-4 mb-3">
            <button id="botao" class="btn btn-primary" onclick="executar_pedido()">Fazer pedido</button>
        </div>
        <img src="images/spinner.gif" alt="Loading..." id="spinner" style="display: none">
    </div>

    <script>

        function executar_pedido(){
            $.ajax({
                type: 'GET',
                url: 'resposta.php',

                beforeSend: function(){
                    // Antes do pedido
                    $('#spinner').show();
                },

                success: function(data){
                    // Sucesso
                    $('#resposta').text(data);
                },

                error: function(){
                    // Erro
                    console.log('ERRO!');
                },

                complete: function(){
                    // Terminado
                    $('#spinner').hide();
                    $('#botao').hide();
                }
            });
        }
    
    </script>
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>