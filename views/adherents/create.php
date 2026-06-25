<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <title>Ajouter adhérent</title>

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

        </nav>

    </header>




    <div class="container">


        <div class="form">


            <h2>Ajouter un adhérent</h2>



            <form action="/FITCONNECT/public/index.php?action=storeAdherent" method="POST">



                <input type="text" name="nom" placeholder="Nom" required>




                <input type="text" name="prenom" placeholder="Prénom" required>




                <input type="email" name="email" placeholder="Email" required>




                <input type="text" name="telephone" placeholder="Téléphone" required>




                <input type="date" name="date_inscription" required>




                <select name="id_salle" required>

                    <option value="">Choisir salle</option>

                    <option value="1">

                        FitConnect Casa

                    </option>



                    <option value="2">

                        FitConnect Rabat

                    </option>


                </select>




                <button class="btn">

                    Enregistrer

                </button>



            </form>


        </div>


    </div>



</body>

</html>