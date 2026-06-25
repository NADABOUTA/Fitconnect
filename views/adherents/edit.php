<!DOCTYPE html>

<html>


<head>

    <meta charset="UTF-8">

    <title>Modifier adhérent</title>

    <link rel="stylesheet" href="../assets/css/style.css">


</head>



<body>



    <div class="container">


        <div class="form">


            <h2>Modifier adhérent</h2>



            <form action="/FITCONNECT/public/index.php?action=updateAdherent" method="POST">



                <input type="hidden" name="id_adherent" value="<?= $adherent['id_adherent'] ?>">



                <input type="text" name="nom" value="<?= $adherent['nom'] ?>" required>


                <input type="text" name="prenom" value="<?= $adherent['prenom'] ?>" required>



                <input type="email" name="email" value="<?= $adherent['email'] ?>" required>



                <input type="text" name="telephone" value="<?= $adherent['telephone'] ?>" required>




                <select name="id_salle">


                    <option value="1" <?= $adherent['id_salle']==1?'selected':'' ?>>

                        FitConnect Casa


                    </option>




                    <option value="2" <?= $adherent['id_salle']==2?'selected':'' ?>>

                        FitConnect Rabat


                    </option>



                </select>




                <button class="btn">

                    Modifier


                </button>



            </form>


        </div>


    </div>



</body>

</html>