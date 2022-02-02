<?php

class Mail
{
    private $sujets;
    private $destinataire;
    private $message;
    private $envoyeur;

    public function __construct($sujets, $destinataire, $envoyeur, $message)
    {
        $this->setSujets($sujets);
        $this->setDestinataire($destinataire);
        $this->setEnvoyeur($envoyeur);
        $this->setMessage($message);
    }

    /**
     * @return mixed
     */
    public function getSujets()
    {
        return $this->sujets;
    }

    /**
     * @param mixed $sujets
     */
    public function setSujets($sujets): void
    {
        $this->sujets = $sujets;
    }

    /**
     * @return mixed
     */
    public function getDestinataire()
    {
        return $this->destinataire;
    }

    /**
     * @param mixed $destinataire
     */
    public function setDestinataire($destinataire): void
    {
        $this->destinataire = $destinataire;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message): void
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getEnvoyeur()
    {
        return $this->envoyeur;
    }

    /**
     * @param mixed $entete
     */
    public function setEnvoyeur($envoyeur): void
    {
        $this->envoyeur = $envoyeur;
    }

    function sendMail()
    {
        if (isset($_POST["email"], $_POST["message"])) {
            mail($this->getDestinataire(), $this->getSujets(), $this->getMessage(), "-f " . $this->getEnvoyeur());
        }
    }
}