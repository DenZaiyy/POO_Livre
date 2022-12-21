<?php

//Crée un deuxieme auteur + quelques livres //fait
//Donner la date de naissance de l'auteur et calculer son âge //fait
//TODO Calculer le prix totale des livres d'un auteur

class Auteur
{
    private string $_nom;
    private string $_prenom;
    private string $_dateNaissance;
    private string $_dateMort;
    private array $_bibliographie;
    private int $_totalPrix;

    public function __construct($nom, $prenom, $dateN, $dateM)
    {
        $this->_bibliographie = [];
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateNaissance = $dateN;
        $this->_dateMort = $dateM;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    public function setDateNaissance($dateN)
    {
        $this->_dateNaissance = $dateN;
    }

    public function setDateMort($dateM)
    {
        $this->_dateMort = $dateM;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function getDateNaissance()
    {
        return $this->_dateNaissance;
    }

    public function getDateMort()
    {
        return $this->_dateMort;
    }

    public function getAge()
    {
        if ($this->getDateMort() == "") {
            $date = new DateTime($this->_dateNaissance);
            $today = new DateTime();
            $diff = $date->diff($today)->format("%y");
            return $diff;
        } else {
            $date = new DateTime($this->_dateNaissance);
            $dateOfDead = new DateTime($this->_dateMort);
            $diff = $date->diff($dateOfDead)->format("%y");
            return $diff;
        }
    }

    public function addLivres(Livre $livre)
    {
        $this->_bibliographie[] = $livre;
    }

    public function afficherBibliographie()
    {
        foreach ($this->_bibliographie as $livre) {
            return $livre;
        }
    }

    public function calcTotalPrix() {
        $prix = 0;
        foreach ($this->_bibliographie as $livre) {
            $prix += $livre->getPrix();
        }
        return "Total des livres: " . $prix . " €</br>";
    }

    public function __toString()
    {
        return '<strong>Livres de ' . $this->getNom() . ' ' . $this->getPrenom() . ' (' . $this->getAge() . ' ans)</strong><br>';
    }
}
