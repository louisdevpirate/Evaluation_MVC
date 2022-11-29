<?php

namespace Models\DAO;

use PDO;

use Models\DTO\Vehicle;

class VehicleManager{

    private PDO $db;

    public function getDb(): PDO
    {
        return $this->db;
    }

    public function setDb(PDO $db): self
    {
        $this->db = $db;
        return $this;
    }

    public function __construct()
    {
        $this->setDb( connectDb() );
    }

    public function save(Vehicle $vehicleToSave)
    {
        
        $createVehicle = $this->db->prepare('INSERT INTO vehicle(brand, model, color, registration) VALUES(?,?,?,?)');

        $createVehicle->execute([
            $vehicleToSave->getBrand(),
            $vehicleToSave->getModel(),
            $vehicleToSave->getColor(),
            $vehicleToSave->getRegistration()
        ]);

        //Fermeture de la requête
        $createFruit->closeCursor();

    }

    public function findAll(): array
    {

        $getVehicles = $this->db->query('SELECT * FROM vehicle');


        $vehicleList = $getVehicles->fetchAll(PDO::FETCH_ASSOC);

        $getVehicles->closeCursor();

        

        foreach($vehicleList as $vehicle){

            $newVehicle = new Vehicle();

            $newVehicle
                ->setId($vehicle['id'])
                ->setBrand($vehicle['brand'])
                ->setModel($vehicle['model'])
                ->setColor($vehicle['color'])
                ->setRegistration($vehicle['registration'])
            ;

            $vehiclesListObjects[] = $newVehicle;
            
        }

        return $vehiclesListObjects;

    }


    public function findOneBy(string $field, $value): ?Vehicle
    {   

        $getVehicle = $this->db->prepare('SELECT * FROM vehicle WHERE ' . $field . ' = ?');

        $getVehicle->execute([
            $value,
        ]);

        $foundVehicle = $getVehicle->fetch(PDO::FETCH_ASSOC);


        if(!empty($foundVehicle))
        {

            $convertedVehicle = new Vehicle();

            $convertedVehicle
                ->setId( $foundVehicle ['id'] )
                ->setBrand( $foundVehicle ['brand'] )
                ->setModel( $foundVehicle ['model'] )
                ->setColor( $foundVehicle ['color'] )
                ->setRegistration( $foundVehicle ['registration'] )
            ;
        }

        return $convertedVehicle ?? null;

    }

    public function delete(Vehicle $vehicleToDelete): void
    {
        $deleteVehicle = $this->db->prepare('DELETE FROM vehicle WHERE id = ?');

        $deleteVehicle->execute([
            $vehicleToDelete->getId(),
        ]);
    }

    public function update(Vehicle $vehicleToUpdate): void 
    {
        $updateVehicle = $this->db->prepare('UPDATE vehicle SET brand=?, model=?, color=?, registration=?, WHERE id=? ');

        $updateVehicle->execute([
            $vehicleToUpdate->getBrand(),
            $vehicleToUpdate->getModel(),
            $vehicleToUpdate->getColor(),
            $vehicleToUpdate->getRegistration()
        ]);
        

    }

}