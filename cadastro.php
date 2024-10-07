<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style-form.css">
</head>
<body>
    <form action="valida_cadastro.php" method="POST">
        <fieldset>
            <table>
                <tr>
                    <td>Informe o código</td>
                    <td><input size='15px' name='codigo'></td>
                </tr>
                <tr>
                    <td>Informe o nome do evento</td>
                    <td><input size='15px' name='nm_event'></td>
                </tr>
                <tr>
                    <td>Informe a data do evento</td>
                    <td><input type='date' size='15px' name='dt_event'></td>
                </tr>
                <tr>
                    <td>Informe a hora de incio do evento</td>
                    <td><input size='15px' name='hr_inicio_evet'></td>
                </tr>
                <tr>
                    <td>Informe a hora de finalização do evento</td>
                    <td><input size='15px' name='hr_final_event'></td>

                </tr>
                <tr>
                    <td>Informe a descrição do evento</td>
                    <td><input size='15px' name='descricao_event'></td>
                </tr>
                <tr>
                    <td>Informe o local do evento</td>
                    <td><input size='15px' name='local_event'></td>
                </tr>
                <tr>
                    <td>Informe o responsável pelo evento</td>
                    <td><input size='15px' name='responsavel_event'></td>
                </tr>
                <tr>
                    <td colspan=2><input type="SUBMIT" value='Cadastrar'></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>