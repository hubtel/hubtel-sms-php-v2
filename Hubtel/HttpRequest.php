<?php 
namespace Hubtel;


class HttpRequest{
    private $url;
    private $connection;
    private $headers;

    public function __construct($url = "", $headers = []){
        $this->url = $url;
        $this->headers = $headers;
        $this->connection = curl_init();
    }

    public function post($request = null){
        curl_setopt($this->connection, CURLOPT_URL, $this->url);
        curl_setopt($this->connection, CURLOPT_HTTPHEADER, $this->headers);
        curl_setopt($this->connection, CURLOPT_POSTFIELDS, $request);
        curl_setopt($this->connection, CURLOPT_RETURNTRANSFER, true);

        $apiResponse = curl_exec($this->connection);
        curl_close($this->connection);

        return $apiResponse;
    }

    public function get($request = ""){
        curl_setopt("{$this->connection}{$request}", CURLOPT_URL, $this->url);
        curl_setopt($this->connection, CURLOPT_HTTPHEADER, $this->headers);
        curl_setopt($this->connection, CURLOPT_RETURNTRANSFER, true);

        $apiResponse = curl_exec($this->connection);
        curl_close($this->connection);

        return $apiResponse;
    }
}