<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <title>Adhérents</title>

    <link rel="stylesheet" href="../assets/css/style.css">

</head>


<body>


    <header class="header">

        <div class="logo">

            FitConnect

        </div>


        <nav class="menu">

            <a href="../../public/index.php">
                Dashboard
            </a>

            <a href="../../public/index.php?action=adherents">

                Adhérents

            </a>

            <a href="../../public/index.php?action=abonnements">

                Abonnements

            </a>


        </nav>


    </header>





    <div class="container">


        <h2 class="title">

            Liste des adhérents

        </h2>




        <a href="../../public/index.php?action=createAdherent">

            <button class="btn">

                Ajouter Adhérent

            </button>

        </a>





        <table>


            <thead>

                <tr>

                    <th>ID</th>

                    <th>Nom</th>

                    <th>Prénom</th>

                    <th>Email</th>

                    <th>Téléphone</th>

                    <th>Date inscription</th>

                    <th>Salle</th>

                    <th>Actions</th>

                </tr>

            </thead>



            <tbody>



                <?php foreach($adherents as $a): ?>

                <tr>



                    <td>

                        <?= $a['id_adherent']; ?>

                    </td>



                    <td>

                        <?= $a['nom']; ?>

                    </td>



                    <td>

                        <?= $a['prenom']; ?>

                    </td>



                    <td>

                        <?= $a['email']; ?>

                    </td>



                    <td>

                        <?= $a['telephone']; ?>

                    </td>



                    <td>

                        <?= $a['date_inscription']; ?>

                    </td>



                    <td>

                        <?= $a['id_salle']; ?>

                    </td>



                    <td>


                        <a class="btn"
                            href="/FITCONNECT/public/index.php?action=editAdherent&id=<?= $a['id_adherent'] ?>">

                            Modifier

                        </a>



                        <a href="#">


                            <button class="btn">

                                Supprimer

                            </button>


                        </a>



                    </td>



                </tr>


                <?php endforeach; ?>



            </tbody>




        </table>




    </div>




</body>


</html>