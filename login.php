<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style-form.css">
</head>
<body>
    <form action="login_realizada.php" method="POST">
        <fieldset>
            <table>
                <tr>
                    <td>Informe o email do usuario</td>
                    <td><input size='15px' name='emai_user'></td>
                </tr>
                <tr>
                    <td>Informe a senha do usuario</td>
                    <td><input size='15px' name='password_user'></td>
                </tr>
                    <td colspan=2><input type="SUBMIT" value='Consultar'></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>