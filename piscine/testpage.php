<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="testpage.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="index.html" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
                  <?php
                    // Je me connecte à la base de données
                    try
                    {
                        $bdd = new PDO('mysql:host=localhost;dbname=piscine;charset=utf8', 'root', '');
                    }
                    catch (Exception $e) // Si erreur
                    {
                            die('Erreur : ' . $e->getMessage());
                    }

                 ?>
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
                
                <?php 
                $reponse = $bdd->query('SELECT * FROM user');
                $user = $bdd->('SELECT `login` FROM user LIMIT 1')
                ?>
            </form>
        </div>
    </body>
</html>