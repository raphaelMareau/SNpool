<html>
        <link rel="stylesheet" href="Temperature.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="myProjects/webProject/icofont/css/icofont.min.css">
    <head>
        <title>Temperature</title>

    </head>  
        <body>
		<header>
            	<div class="full-screen">
                    </div>
            <h1>
            <a href="index.html"><i class="fa fa-home" aria-hidden="true"  style="font-size:150%;color:#778899"></i></a>
                        <ul>

                <li><a href="index.html"title="Piscine Connectée"><a1>Piscine Connectée</a1></a></li>
                        </ul>  
                <i2 class="fa fa-user" aria-hidden="true" style="font-size:135%;color:#778899"></i2>
            </h1>
                    	
        </header>
		<div id="box">
                    <div class="part1">
									   <?php
												echo "Le pH est de" . '<br />' ;
                       
												try
                                                    
												{
												   $bdd = new PDO('mysql:host=localhost;dbname=piscine;charset=utf8', 'root', '');
												} 
														catch (Exception $e)
												{
														die('Erreur : ' . $e->getMessage());
												}
												$reponse = $bdd->query('SELECT * FROM mesure ');

												while ($donnees = $reponse->fetch())
												{
													
													echo $donnees['pH'] . '<br />';
												}

												$reponse->closeCursor();

												?>

                    </div>
                    <div class="part2">

												<?php
												echo "La Température est de " . '<br />' ;
												try
												{
												   $bdd = new PDO('mysql:host=localhost;dbname=piscine;charset=utf8', 'root', '');
												} 
														catch (Exception $e)
												{
														die('Erreur : ' . $e->getMessage());
												}
												$reponse = $bdd->query('SELECT * FROM mesure');

												while ($donnees = $reponse->fetch())
												{
													
													echo $donnees['Temperature'] ;
													echo "°C" . '<br />';
													
												}

												$reponse->closeCursor();

												?>
                    </div>
                    <div class="part3">
												<?php
												echo "Le Chlore est de" . '<br />' ;
												try
												{
												   $bdd = new PDO('mysql:host=localhost;dbname=piscine;charset=utf8', 'root', '');
												} 
														catch (Exception $e)
												{
														die('Erreur : ' . $e->getMessage());
												}
												$reponse = $bdd->query('SELECT * FROM mesure');

												while ($donnees = $reponse->fetch())
												{
													
													echo $donnees['Chlore'];
													echo "g/m3" . '<br />';
												}

												$reponse->closeCursor();

												?>
                    </div>
		          </div>
     
    </body>
</html>