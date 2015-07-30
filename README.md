# Milople_Cms

Solves Magento 1.9.2.0 static block display issue

See:
- http://magento.stackexchange.com/questions/69215/ee-1-14-2-ce-1-9-2-block-caching-update-has-non-unique-cache-keys-duplicate/74837?noredirect=1#comment100703_74837
- http://magento.stackexchange.com/questions/73685/magento-1-9-2-0-static-block-display-issues

## Installation

Add `require` and `repositories` sections to your composer.json as shown in example below and run `composer update`.

*composer.json example*

```
{
    "repositories": [
        {"type": "git", "url": "https://github.com/kirchbergerknorr/Milople_Cms"},
    ],
    
    "require": {
        "kirchbergerknorr/Milople_Cms": "*"
    }
}
```


## Support

Please [report new bugs](https://github.com/kirchbergerknorr/Milople_Cms/issues/new).

