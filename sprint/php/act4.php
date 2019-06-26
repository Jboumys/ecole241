<?php
//tableau associatif
$personnes = array(
<<<<<<< HEAD
    0=>array('nom'=>'Boumys', 'prenom'=>'Wilson', 'age'=>'28', 'profil'=>'http://jwilson.alwaysdata.net/'),
    1=>array('nom'=>'Din', 'prenom'=>'Kelby', 'age'=>'22', 'profil'=>'http://din.alwaysdata.net/'),
    2=>array('nom'=>'Koumba', 'prenom'=>'Ali', 'age'=>'12', 'profil'=>'http://koumba.alwaysdata.net/'),
    3=>array('nom'=>'Obam', 'prenom'=>'Billy', 'age'=>'12', 'profil'=>'http://koumba.alwaysdata.net/'),
    4=>array('nom'=>'Kouyinikina', 'Laurion'=>'Ali', 'age'=>'12', 'profil'=>'http://koumba.alwaysdata.net/'),
    5=>array('nom'=>'Mboyi', 'prenom'=>'Catana', 'age'=>'26', 'profil'=>'http://koumba.alwaysdata.net/'),
    6=>array('nom'=>'Moukina', 'prenom'=>'Kevin', 'age'=>'12', 'profil'=>'http://koumba.alwaysdata.net/'),
    7=>array('nom'=>'Tchitombi', 'prenom'=>'Ivan', 'age'=>'26', 'profil'=>'http://koumba.alwaysdata.net/'),
    8=>array('nom'=>'Ntom Ntom', 'prenom'=>'Chérifa', 'age'=>'14', 'profil'=>'http://koumba.alwaysdata.net/'),
    9=>array('nom'=>'Noubissi', 'prenom'=>'Yannick', 'age'=>'26', 'profil'=>'http://koumba.alwaysdata.net/'),
    //10=>array('nom'=>'Moulingui', 'prenom'=>'Joslain', 'age'=>'19', 'profil'=>'http://koumba.alwaysdata.net/'),
);

foreach ($personnes as $element){
    echo $element.'<br/>';
}

//for ($i=0; $i<10; $i++){
//    echo $tableau;
//}

//echo $tableau[0];
=======
    array(
        'nom'   =>'Boumys',
        'prenom'=>'Wilson',
        'age'   =>28,
        'profil'=>'http://jwilson.alwaysdata.net/'
    ),
    array(
        'nom'   =>'Din',
        'prenom'=>'Kelby',
        'age'   =>22,
        'profil'=>'http://din.alwaysdata.net/'
    ),
    array(
        'nom'   =>'Koumba',
        'prenom'=>'Ali',
        'age'   =>12,
        'profil'=>'http://koumba.alwaysdata.net/'
    ),
    array(
        'nom'   =>'Obam',
        'prenom'=>'Billy',
        'age'   =>12,
        'profil'=>'http://koumba.alwaysdata.net/'
    ),
    array(
        'nom'   =>'Kouyinikina',
        'prenom'=>'Deny',
        'age'   =>12,
        'profil'=>'http://koumba.alwaysdata.net/'
    ),
    array(
        'nom'   =>'Mboyi',
        'prenom'=>'Catana',
        'age'=>26,
        'profil'=>'http://koumba.alwaysdata.net/'
    ),
    array(
        'nom'   =>'Moukina',
        'prenom'=>'Kevin',
        'age'   =>12,
        'profil'=>'http://koumba.alwaysdata.net/'
    ),
    array(
        'nom'   =>'Tchitombi',
        'prenom'=>'Ivan',
        'age'   =>26,
        'profil'=>'http://koumba.alwaysdata.net/'
    ),
    array(
        'nom'   =>'Ntom Ntom',
        'prenom'=>'Chérifa',
        'age'   =>14,
        'profil'=>'http://koumba.alwaysdata.net/'
    ),
    array(
        'nom'   =>'Noubissi',
        'prenom'=>'Yannick',
        'age'   =>26,
        'profil'=>'http://koumba.alwaysdata.net/'
    ),
);
?>
<h1>Tableau associatif</h1>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Age</th>
            <th>Profil</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($personnes as $skey => $element){
            ?>
            <tr>
                <td><?php echo ($skey+1); ?></td>
                <td><?php echo $element['nom']; ?></td>
                <td><?php echo $element['prenom']; ?></td>
                <td><?php echo $element['age']; ?> </td>
                <td>
                    <code>
                        <a href="<?php echo $element['profil']; ?>" target="_blank">
                            <?php echo $element['profil']; ?>
                        </a>
                    </code>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>







>>>>>>> 3d3a99c173013176814bec18a7f04ac83e99f141
