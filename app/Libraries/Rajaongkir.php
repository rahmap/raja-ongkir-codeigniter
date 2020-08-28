<?php

/**
 * Rajaongkir Library for CodeIgniter
 * Digunakan untuk mengkonsumsi API Rajaongkir dengan mudah
 *
 * @author Rahma Andita P <rahma.p@students.amikom.ac.id>
 */
namespace App\Libraries;

require_once 'RajaOngkir/Endpoints.php';

use Endpoints;

class Rajaongkir extends Endpoints {

    private $api_key;
    private $account_type;

    public function __construct() {
        // Pastikan bahwa PHP mendukung cURL
        if (!function_exists('curl_init')) {
            die('cURL Class - PHP was not built with cURL enabled. Rebuild PHP with --with-curl to use cURL.');
        }
        
        if (getenv('raja.API_KEY') == '' || getenv('raja.ACCOUNT_TYPE') == '') {
            die('Harap masukkan raja.API_KEY dan raja.ACCOUNT_TYPE Anda di .env');
        } else {
            $this->api_key = getenv('raja.API_KEY');
            $this->account_type = getenv('raja.ACCOUNT_TYPE');
        }
        parent::__construct($this->api_key, $this->account_type);
    }
}