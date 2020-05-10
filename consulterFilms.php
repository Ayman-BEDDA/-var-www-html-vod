<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Consulter les films</title>
        <link rel="stylesheet" type="text/css" href="vod.css" media="screen" />
    </head>
    <body>
        
        <ul class="navbar">
            <li><a href="vod.html">Retourner à l'accueil</a>
            
        </ul>
        <?php
        $lignes = file("data/vod.csv");
        ?>
        <h1>Liste des films disponibles</h1>
        
        <table>
            <thead>
                <tr>
                    <th>Film</th>
                    <th>Année</th>
                    <th>Acteur</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($lignes as $uneLigne){
                    echo "<tr>";
                    $infos = explode( ":" , $uneLigne);
                    echo "<td>" . strtoupper($infos[0]) . "</td>";
                    echo "<td>" . ucfirst( strtolower( $infos[1] ) ) . "</td>";
                    echo "<td>" . ucwords( strtolower( $infos[2] ) ) . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </body>
</html>


