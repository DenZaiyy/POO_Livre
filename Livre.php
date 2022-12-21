<?php

class Livre
{
    private string $_titre;
    private int $_anneeParruption;
    private int $_nbOfPages;
    private int $_prix;
    private Auteur $_auteur;

    public function __construct($titre, $anneeParruption, $nbOfPages, $prix, Auteur $auteur)
    {
        $this->_titre = $titre;
        $this->_anneeParruption = $anneeParruption;
        $this->_nbOfPages = $nbOfPages;
        $this->_prix = $prix;
        $this->_auteur = $auteur;
        $auteur->addLivres($this);
    }

    public function setTitre($titre)
    {
        $this->_titre = $titre;
    }

    public function setAnneeParruption($anneeParruption)
    {
        $this->_anneeParruption = $anneeParruption;
    }

    public function setNbOfPages($nbOfPages)
    {
        $this->_nbOfPages = $nbOfPages;
    }

    public function setPrix($prix)
    {
        $this->_prix = $prix;
    }

    public function getTitre()
    {
        return $this->_titre;
    }

    public function getAnneeParruption()
    {
        return $this->_anneeParruption;
    }

    public function getNbOfPages()
    {
        return $this->_nbOfPages;
    }

    public function getPrix()
    {
        return $this->_prix;
    }

    public function __toString()
    {
        return $this->getTitre() . ' (' . $this->getAnneeParruption() . ') : ' . $this->getNbOfPages() . ' pages / ' . $this->getPrix() . ' €<br>';
    }
}
