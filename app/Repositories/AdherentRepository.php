<?php

require_once __DIR__ . '/../../config/Database.php';

class AdherentRepository
{

    private $db;


    public function __construct()
    {
        $this->db = Database::connect();
    }


    // Afficher tous les adhérents
    public function findAll()
    {

        $sql = "SELECT * FROM adherent";

        $stmt = $this->db->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }



    // Trouver adhérent par id

    public function findById($id)
    {

        $sql = "SELECT * FROM adherent
                WHERE id_adherent = ?";


        $stmt = $this->db->prepare($sql);


        $stmt->execute([$id]);


        return $stmt->fetch(PDO::FETCH_ASSOC);

    }




    // Ajouter adhérent

    public function create($data)
    {

        $sql = "INSERT INTO adherent(

                    nom,
                    prenom,
                    email,
                    telephone,
                    date_inscription,
                    id_salle

                )

                VALUES(?,?,?,?,?,?)";


        $stmt = $this->db->prepare($sql);



        return $stmt->execute([

            $data['nom'],
            $data['prenom'],
            $data['email'],
            $data['telephone'],
            $data['date_inscription'],
            $data['id_salle']

        ]);



    }




    // Modifier adhérent


    public function update($id,$data)
    {


        $sql="UPDATE adherent


              SET


              nom=?,
              prenom=?,
              email=?,
              telephone=?,
              id_salle=?


              WHERE id_adherent=?";


        $stmt=$this->db->prepare($sql);



        return $stmt->execute([


            $data['nom'],
            $data['prenom'],
            $data['email'],
            $data['telephone'],
            $data['id_salle'],
            $id


        ]);


    }





    // Supprimer adhérent


    public function delete($id)
    {


        $sql="DELETE FROM adherent
              WHERE id_adherent=?";


        $stmt=$this->db->prepare($sql);



        return $stmt->execute([$id]);


    }





    // Vérifier existence


    public function exists($id)
    {

        $sql="SELECT COUNT(*) as total

              FROM adherent

              WHERE id_adherent=?";


        $stmt=$this->db->prepare($sql);

        $stmt->execute([$id]);


        $result=$stmt->fetch(PDO::FETCH_ASSOC);



        return $result['total']>0;



    }




}

?>