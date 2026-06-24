<?php

require_once __DIR__ . '/../../config/Database.php';

class AbonnementRepository
{

    private $db;


    public function __construct()
    {
        $this->db = Database::connect();
    }


    // Tous les abonnements
    public function findAll()
    {

        $sql = "SELECT * FROM abonnement";

        $stmt = $this->db->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }



    // Trouver abonnement par ID

    public function findById($id)
    {

        $sql = "SELECT * FROM abonnement
                WHERE id_abonnement = ?";


        $stmt = $this->db->prepare($sql);

        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);

    }




    // Trouver abonnement d'un adhérent

    public function findByAdherent($idAdherent)
    {

        $sql = "SELECT *

                FROM abonnement

                WHERE id_adherent=?";


        $stmt = $this->db->prepare($sql);

        $stmt->execute([$idAdherent]);

        return $stmt->fetch(PDO::FETCH_ASSOC);

    }




    // Ajouter abonnement


    public function create($data)
    {


        $sql = "INSERT INTO abonnement(

                    type_abonnement,
                    date_debut,
                    date_fin,
                    id_adherent

                )

                VALUES(?,?,?,?)";


        $stmt = $this->db->prepare($sql);



        return $stmt->execute([


            $data['type_abonnement'],
            $data['date_debut'],
            $data['date_fin'],
            $data['id_adherent']


        ]);

    }




    // Modifier


    public function update($id,$data)
    {


        $sql = "UPDATE abonnement


                SET


                type_abonnement=?,
                date_debut=?,
                date_fin=?


                WHERE id_abonnement=?";


        $stmt = $this->db->prepare($sql);



        return $stmt->execute([


            $data['type_abonnement'],
            $data['date_debut'],
            $data['date_fin'],
            $id


        ]);


    }





    // Supprimer



    public function delete($id)
    {


        $sql = "DELETE FROM abonnement

                WHERE id_abonnement=?";


        $stmt = $this->db->prepare($sql);


        return $stmt->execute([$id]);


    }



}

?>