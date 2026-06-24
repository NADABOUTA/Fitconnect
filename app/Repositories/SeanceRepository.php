<?php

require_once __DIR__.'/../../config/Database.php';

class SeanceRepository
{

    private $db;


    public function __construct()
    {
        $this->db = Database::connect();
    }


    // Toutes les séances
    public function findAll()
    {

        $sql = "SELECT * FROM seance";

        $stmt = $this->db->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }



    // Une séance par id
    public function findById($id)
    {

        $sql = "SELECT *

                FROM seance

                WHERE id_seance=?";


        $stmt = $this->db->prepare($sql);

        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);

    }



    // Séances d'un adhérent

    public function findByAdherent($id)
    {

        $sql = "SELECT *

                FROM seance

                WHERE id_adherent=?";


        $stmt = $this->db->prepare($sql);

        $stmt->execute([$id]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }




    // Ajouter séance


    public function create($data)
    {

        $sql="INSERT INTO seance(

                date_seance,
                duree,
                type_activite,
                equipement,
                id_adherent,
                id_salle

              )

              VALUES(?,?,?,?,?,?)";


        $stmt = $this->db->prepare($sql);


        return $stmt->execute([

            $data['date_seance'],
            $data['duree'],
            $data['type_activite'],
            $data['equipement'],
            $data['id_adherent'],
            $data['id_salle']

        ]);

    }





    // Modifier séance


    public function update($id,$data)
    {

        $sql = "UPDATE seance

                SET

                duree=?,
                type_activite=?,
                equipement=?

                WHERE id_seance=?";


        $stmt = $this->db->prepare($sql);



        return $stmt->execute([

            $data['duree'],
            $data['type_activite'],
            $data['equipement'],
            $id

        ]);

    }




    // Supprimer


    public function delete($id)
    {

        $sql="DELETE FROM seance

              WHERE id_seance=?";


        $stmt = $this->db->prepare($sql);


        return $stmt->execute([$id]);

    }


}