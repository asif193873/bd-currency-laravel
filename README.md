# creative

 this is a package to express currency in Bangladeshi currency.

## Recommended IDE Setup



## Customize configuration

See [Vite Configuration Reference](https://vitejs.dev/config/).

## install package

```sh
composer require asif193873/pass_generator
```

### In controller put the code
```php
	use Asif\PassGenerator\Facades\BDcurrency;

```
### 
```php
	BDcurrency::numToBanglaWord(4343) // output চার তিন শত তেতাল্লিশ।

	BDcurrency::numToBn(4343) // output ৪৩৪৩।

	BDcurrency::numToWord(4343) // four thousand three hundred forty three।

```

### you can use helper function bdcurrency() instead of Facade.
```php
	bdcurrency()->numToBanglaWord(4343) // output চার তিন শত তেতাল্লিশ।

	bdcurrency()->numToBn(4343) // output ৪৩৪৩।

	bdcurrency()->numToWord(4343) // four thousand three hundred forty three।

```
