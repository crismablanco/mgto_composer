<?php
namespace Qbk\Twitter\Block;
 
class Twitter extends \Magento\Framework\View\Element\Template
{
    public function getTwitterWelcome()
    {	
        return 'Hola mundo! esto es una prueba de twitts';
    }

    public function mostrarTwitts($usuario='')
    {
    	echo $usuario;
    }
}