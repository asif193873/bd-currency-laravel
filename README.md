# Introduction

 This is a package to express currency in Bangladeshi currency.

## install package

```sh
	composer require asif193873/pass_generator
```

### In controller put the code
```php
	use Asif\PassGenerator\Facades\BDcurrency;

```
### Now use the function with the help of BDcurrency Facade
```php
	BDcurrency::numToBanglaWord(4343) // output চার হাজার তিন শত তেতাল্লিশ।

	BDcurrency::numToBn(4343) // output ৪৩৪৩।

	BDcurrency::numToWord(4343) // four thousand three hundred forty three।

```

### you can use helper function bdcurrency() instead of Facade.
```php
	bdcurrency()->numToBanglaWord(4343) // output চার তিন শত তেতাল্লিশ।

	bdcurrency()->numToBn(4343) // output ৪৩৪৩।

	bdcurrency()->numToWord(4343) // four thousand three hundred forty three।

```
