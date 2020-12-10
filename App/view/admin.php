<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<body>
    <h1>Page admin</h1>
    <form method="POST">
    <table>
                    <tr>
                        <td >
                            <label for="lien">Lien youtube :</label>
                        </td>
                        <td>
                            <input type="text" placeholder="Votre lien" name="lien" >
                        </td>
                    </tr>
                
                    <tr>
                        <td >
                            <label for="titreAudio">Titre Audio :</label>
                        </td>
                        <td>
                            <input type="text" placeholder="Votre titre" name="titreAudio">
                        </td>
                    </tr>
                    <tr>
                        <td >
                            <label for="audio">Audio :</label>
                        </td>
                        <td>
                            <input type="file" placeholder="Votre audio" name="audio">
                        </td>
                    </tr>
                    <tr >
                    <td colspan="2">
                    <input type="submit" name="formAdmin" value="Valider la modification">
                    </td>
                    </tr>
                    
    </table>
    <a href="?page=home">Home</a>
    </form>
</body>

</html>