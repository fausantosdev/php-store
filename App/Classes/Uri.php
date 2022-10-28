<?php

namespace App\Classes;

class Uri
{
    /**
     * @var string
     */
    private string $uri;


    public function __construct()
    {
        $this->uri = $_SERVER['REQUEST_URI'];
    }

    /**
     * Verifica se existe parâmetros na url
     * @return void
     */
    public function emptyUri(): bool
    {
        //return ($this->uri == '/') ? true : false;
        return $this->uri == '/';
    }

    /**
     * Pega a url
     * @return mixed|string
     */
    public function getUri(): string
    {
        return $this->uri;
    }

    /**
     * Redirecionar
     * @param string|null $redirect
     * @return void
     */
    public function redirect(string $redirect = null)
    {
        if(is_null($redirect))
        {
            return header('Location:/');
        }

        return header("Location:/{$redirect}");
    }
}