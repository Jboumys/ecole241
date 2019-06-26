<?php require 'data.php'; ?>
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







