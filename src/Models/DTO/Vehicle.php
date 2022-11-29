<?php

namespace Models\DTO;




/**
 * Classe DTO (attributs + getters + setters) matérialisant les utilisateurs du site
 */
class Vehicle{

    private int $id;
    private string $brand;
    private string $model;
    private string $color;
    private string $registration;

    /**
     * Getters
     */
    
    public function getId(): int
    {
        return $this->id;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getRegistration(): string
    {
        return $this->registration;
    }


    /**
     * Setters
     */


    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setBrand(string $brand): self
    {
        $this->brand = $brand;
        return $this;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;
        return $this;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;
        return $this;
    }
    
    public function setRegistration(string $registration): self
    {
        $this->registration = $registration;
        return $this;
    }

}