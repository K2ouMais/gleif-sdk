# GLEIF-SDK

The GLEIF-SDK provides a simple and object-oriented way for interaction with the [GLEIF-API](https://documenter.getpostman.com/view/7679680/SVYrrxuU?version=latest#e0f078b5-5c9c-426f-b045-dd258f9a5565) powered by [Saloon](https://docs.saloon.dev).

## Installation

You can install the package via composer:

```bash
composer require k2oumais/gleif-sdk
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="gleif-sdk-config"
```

This is the contents of the published config file:

```php
return [
    'gleif-api' => [
        'url' => 'https://api.gleif.org/api',
    ],
];
```

## Usage

```php
$gleif = new \K2ouMais\Gleif\GleifApi();

###### LEI-Records >> LVL1-Information

$gleif->send(new AllLeiRecords())->json();
$gleif->send(new LeiRecordById('5299000J2N45DDNE4Y28'))->json();

###### LEI-Records >> LVL2-Relationship Information >> Parents

// Get Direct/Ultimate Parent LEI, Relationships and Exceptions
$gleif->send(new DirectParentLeiRecord('ZZG38T0MDR3QY1ETUA76'))->json();
$gleif->send(new UltimateParentLeiRecord('01TRDHWDCL69YP41S025'))->json();

$gleif->send(new DirectParentRelationships('549300COKYB5EGSU1838'))->json();
$gleif->send(new UltimateParentRelationships('0292003540H0S4VA7A50'))->json();

$gleif->send(new DirectParentReportingExceptions('001GPB6A9XPE8XJICC14'))->json();
$gleif->send(new UltimateParentReportingExceptions('001GPB6A9XPE8XJICC14'))->json();

###### LEI-Records >> LVL2-Relationship Information >> Children

// Get Direct/Ultimate Children and Child Relationships
$gleif->send(new DirectChildren('001GPB6A9XPE8XJICC14'))->json();
$gleif->send(new UltimateChildren('001GPB6A9XPE8XJICC14'))->json();

$gleif->send(new DirectChildRelationships('ZZG38T0MDR3QY1ETUA76'))->json();
$gleif->send(new UltimateChildRelationships('01TRDHWDCL69YP41S025'))->json();

###### LEI-Records >> Related LEI Records

// Get an Associated Entity, Successor Entity or the Managing LOU
$gleif->send(new AssociatedEntity('335800OGLWMREXSGH297'))->json();
$gleif->send(new SuccessorEntity('029200098C3K8BI2D551'))->json();
$gleif->send(new ManagingLou('5493001KJTIIGC8Y1R12'))->json();

###### LEI-Records >> ISINs

// Get ISINs
$gleif->send(new Isins('529900W18LQJJN6SJ336'))->json();

###### LEI-Records >> LEI Issuer

// Get the LEI Issuer
$gleif->send(new LeiIssuer('5299000J2N45DDNE4Y28'))->json();

###### LEI Autocompletions
$gleif->send(new AutoCompletions('Apple', 'fulltext'))->json();

###### LEI Countries, Regions, Jurisdictions, Issuers, Registration Agents and Registration Authorities 

// Countries
$gleif->send(new AllCountryCodes())->json();
$gleif->send(new CountryCodeById('DE'))->json();

// Regions
$gleif->send(new AllRegions())->json();
$gleif->send(new RegionById('DE-HE'))->json();

// Jurisdictions
$gleif->send(new AllJurisdictions())->json();
$gleif->send(new JurisdictionById('DE'))->json();

// Issuers
$gleif->send(new AllLeiIssuers())->json();
$gleif->send(new LeiIssuerById('259400L3KBYEVNHEJF55'))->json();
$gleif->send(new LeiIssuerJurisdictionById('259400L3KBYEVNHEJF55'))->json();

// Registration Agents
$gleif->send(new AllRegistrationAgents())->json();
$gleif->send(new RegistrationAgentById('5d10d4de691522.63705283'))->json();

// Registration Authorities
$gleif->send(new AllRegistrationAuthorities())->json();
$gleif->send(new RegistrationAuthorityById('RA000001'))->json();
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [João Alves](https://github.com/K2ouMais)
- [Saloon](https://docs.saloon.dev/)
- [GLEIF](https://www.gleif.org/)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
