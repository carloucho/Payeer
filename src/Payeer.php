<?php

// tellarion.dev github.com/tellarion

namespace Tellarion\Api;

class Payeer {

    const API_URL = "https://payeer.com/ajax/api/api.php";

    protected $account = null;
    protected $apiId = null;
    protected $apiPass = null;

    public function __construct($account, $apiId, $apiPass) {
        $this->account = $account;
        $this->apiId = $apiId;
        $this->apiPass = $apiPass;
    }

    public function getResponse($next = null) {

        $post_params = array(
            "account" => $this->account, 
            "apiId" => $this->apiId, 
            "apiPass" => $this->apiPass,
        );

        if($next != null) {
            $post_params = array_merge($post_params, $next);
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, API_URL);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_params));
        curl_setopt($ch, CURLOPT_USERAGENT, "composer require tellarion/payeer V-Agent");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:" => "application/json"));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;

    }

    public function getAuth() {

        return $this->getResponse();

    }

    public function getBalance() {

        $array = array(
            'action' => 'getBalance'
        );

        return $this->getResponse($array);
    }

    public function transfer($args = null) {

        $array = array(
            'action' => 'transfer'
        );

        if($args != null) {
            $array = array_merge($array, $args);
        }

        return $this->getResponse($array);

    }

    public function checkUser($args = null) {

        $array = array(
            'action' => 'checkUser'
        );

        if($args != null) {
            $array = array_merge($array, $args);
        }

        return $this->getResponse($array);
        
    }

    public function getExchangeRate($args = null) {

        $array = array(
            'action' => 'getExchangeRate'
        );

        if($args != null) {
            $array = array_merge($array, $args);
        }

        return $this->getResponse($array);
        
    }

    public function payoutChecking($args = null) {

        $array = array(
            'action' => 'payoutChecking'
        );

        if($args != null) {
            $array = array_merge($array, $args);
        }

        return $this->getResponse($array);
        
    }

    public function getPaySystems() {

        $array = array(
            'action' => 'getPaySystems'
        );

        return $this->getResponse($array);
        
    }

    public function paymentDetails($args = null) {

        $array = array(
            'action' => 'paymentDetails'
        );

        if($args != null) {
            $array = array_merge($array, $args);
        }

        return $this->getResponse($array);
        
    }

    public function history($args = null) {

        $array = array(
            'action' => 'history'
        );

        if($args != null) {
            $array = array_merge($array, $args);
        }

        return $this->getResponse($array);
        
    }

    public function payoutDetails($args = null) {

        $array = array(
            'action' => 'payoutDetails'
        );

        if($args != null) {
            $array = array_merge($array, $args);
        }

        return $this->getResponse($array);
        
    }

    public function invoiceCreate($args = null) {

        $array = array(
            'action' => 'invoiceCreate'
        );

        if($args != null) {
            $array = array_merge($array, $args);
        }

        return $this->getResponse($array);
        
    }

    public function merchant($args = null) {

        $array = array(
            'action' => 'merchant'
        );

        if($args != null) {
            $array = array_merge($array, $args);
        }

        return $this->getResponse($array);
        
    }

}

?>