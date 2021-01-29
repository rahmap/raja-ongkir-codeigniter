# Raja Ongkir Library for CodeIgniter 4.x

CodeIgniter library for consuming [RajaOngkir](http://rajaongkir.com) API.
This library is an update from [andisis](https://github.com/andisis/raja-ongkir-codeigniter) which is only for **Codeigniter 3.x** and not updated. This library can be used for all types of accounts (starter, basic and pro).


## Installation

```php
composer require rahmap/rajaongkir-ci4
```

Check :

1. `app/Controllers/Home.php`
2. `app/Libraries/Rajaongkir.php`
3. `app/Libraries/RajaOngkir/Endpoints.php`
4. `app/Libraries/Rajaongkir/Restclient.php`

## Configuration

Open "**PROJECT_ROOT => .env**", enter the API key and change the account type.

## Usage

First, load the RajaOngkir library on `Controllers`.

```php
use \App\Libraries\Rajaongkir;
```
### Make a request

```php
# Instance Object
$RO = new RajaOngkir();

# Get all province
$provinces = $RO->province();

# Get all cities
$cities = $RO->city();

# Get districts based on cities
$subdistrict = $RO->subdistrict(151); // city_id = 151

# Get shipping costs
$cost = $RO->cost(501, 114, 1000, "jne");
```
### Response

The resulting response is a JSON string reply from RajaOngkir.

### Reference

[RajaOngkir Official Documentation](http://rajaongkir.com/dokumentasi)
