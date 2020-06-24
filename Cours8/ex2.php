<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ex2</title>
        <style>

            td{

                padding: 10px;

            }
            
            table, td{

                border: solid 1px;

            }

        </style>
    </head>

    <body>
        
        <table>
                <tr>
                    <td>Nom</td>
                    <td>Prénom</td>
                    <td>Adresse</td>
                    <td>Ville</td>
                    <td>Code postal</td>
                </tr>
            <tr>
                <td><?=$_POST['nom']?></td>
                <td><?=$_POST['prenom']?></td>
                <td><?=$_POST['adresse']?></td>
                <td><?=$_POST['ville']?></td>
                <td><?=$_POST['code']?></td>
            </tr>
        </table>

    </body>

</html>