<?php
require_once("restKezelo.php");
require_once("games.php");

class GamesrestKezelo extends restKezelo
{
    function getAllgames()
    {
        $games= new Games();
        $sorAdat=$games->getAllgames();
        if(empty($sorAdat))
        {
            $statusCode=404;
            $sorAdat=array('error'=> 'No Games found!');
        }
        else
        {
            $statusCode=200;
        }

        $this->sethttpFejlec($statusCode);
        $result["games"]=$sorAdat;

        $response=$this->encodeJson($result);
        echo $response;
    }

    function getGamesByid($id)
    {
        $games=new Games();
        $sorAdat=$games->getGamesByid($id);
        if(empty($sorAdat))
        {
            $statusCode=404;
            $sorAdat=array('error'=> 'No Games found by this id!');
        }
        else
        {
            $statusCode=200;
        }

        $this -> sethttpFejlec($statusCode);
        $result["GamesByID"]=$sorAdat;

        $response=$this->encodeJson($result);
        echo $response;
    }

    function getGamesByType($typename)
    {
        $games=new Games();
        $sorAdat=$games->getGamesByType($typename);
        if(empty($sorAdat))
        {
            $statusCode=404;
            $sorAdat=array('error'=> 'No GAMES by this Manufacturer found!');
        }
        else
        {
            $statusCode=200;
        }
        $this -> sethttpFejlec($statusCode);
        $result["GamesByType"]=$sorAdat;

        $response=$this->encodeJson($result);
        echo $response;
    }

    function getFault()
    {
        $statusCode=400;
        $this->sethttpFejlec($statusCode);
        $sorAdat=array('error'=>'Bad Request!');
        $result["Fault"]=$sorAdat;

        $response=$this->encodeJson($result);
        echo $response;
    }

    function encodeJson($responseData)
    {
        $jsonResponse=json_decode($responseData);
        return $jsonResponse;
    }
}
?>