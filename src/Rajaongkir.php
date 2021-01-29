<?php

/**
 * Rajaongkir Library for CodeIgniter
 * Digunakan untuk mengkonsumsi API Rajaongkir dengan mudah
 *
 * @author Rahma Andita P <rahma.p@students.amikom.ac.id>
 */
namespace Rahmap\Rajaongkir;

require_once 'Endpoints.php';

use Endpoints;

class Rajaongkir extends Endpoints {

    private $api_key;
    private $account_type;

    public function __construct($api_key = null, $account_type = null) {
        // Pastikan bahwa PHP mendukung cURL
        if (!function_exists('curl_init')) {
            die('cURL Class - PHP was not built with cURL enabled. Rebuild PHP with --with-curl to use cURL.');
        }
        
        if (empty($api_key) || empty($account_type)) {
            die('Harap masukkan raja.API_KEY dan raja.ACCOUNT_TYPE Anda di .env');
        } else {
            $this->api_key = $api_key;
            $this->account_type = $account_type;
        }
        parent::__construct($this->api_key, $this->account_type);
    }
}