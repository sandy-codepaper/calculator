# Simple Calculator

## Description

sandy-codepaper/calculator this is simple calculator.

## Features

- Calculate value based on rate and value.
- Handle exceptions for invalid values.

## Installation

You can install the package via Composer. Run the following command in your terminal:

```bash
composer require sandy-codepaper/calculator
```

## Usage

### Initializing the Package

To use the package, you need to first initialize it and provide the calculate value:

```php
use SandyCalculator\Calculator;

require "./vendor/autoload.php"; 

```

### Example Usage

Here's an example of how you can use the package to calculate the value:

```php  

$calc = new Calculator;

$sum = $calc->add(1, 2);

print $sum;
```


### Exception Handling

The package handles exceptions for invalid values. If the value passed to the `calculate()` method is negative, an exception will be thrown. You can catch the exception and handle it accordingly.

## Testing

The package comes with a set of unit tests to ensure its stability and functionality. You can run the tests using the following command:

```bash
vendor/bin/phpunit
```

## Contributing

Contributions are welcome! If you encounter any issues or have suggestions for improvements, please create an issue in the [issue tracker](https://github.com/sandy-codepaper/calculator/issues/new). If you'd like to contribute code, please follow these guidelines:

1. Fork the repository.
2. Create a new branch for your feature/bug fix.
3. Commit your changes and push them to your branch.
4. Submit a pull request.

Please ensure that your code adheres to the existing coding style and is well-documented.

## License

This package is open-source and available under the [MIT License](https://opensource.org/licenses/MIT).