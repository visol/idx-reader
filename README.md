IDX Reader
==========

[![Build Status](https://travis-ci.org/visol/idx-reader.svg?branch=1.1.0)](https://travis-ci.org/visol/idx-reader)

Library to read and parse IDX data. Internet Data Exchange (IDX, also known as Information Data Exchange) is a standard to describe properties such as houses, appartment, etc... commonly used in the real estate industry.

Latest release: [dev-master](https://packagist.org/packages/visol/idx-reader#dev-master)

PHP >= 5.5.9

Usage
-----

    $contents = file_get_contents('sample.idx');
    $reader = new Visol\IdxReader\IdxReader();
    $reader->load($contents);

We can also load a data-set from a file:

    $reader = new Visol\IdxReader\IdxReader()
    $reader->loadFromFile('sample.idx')
        ->getRecords();


We can retrieve all records or count them:

    // Returns an array of records
    $reader->getRecords();

    // Returns an integer
    $reader->countRecords();

Complete example:

    $reader = new Visol\IdxReader\IdxReader()
    $reader
        ->forceUtf8()
        ->loadFromFile('sample.idx')
        ->getRecords();

Contribute
----------

Contributions to the package are always welcome!

* Report any bugs or issues you find on the [issue tracker].
* You can grab the source code at the package's [Git repository].

Unit Tests
----------

To run the unit tests simply:

```
./phpunit tests
```

License
-------

All contents of this package are licensed under the [MIT license].

[Composer]: https://getcomposer.org
[issue tracker]: https://github.com/visol/idx-reader
[Git repository]: https://github.com/visol/idx-reader
[MIT license]: LICENSE
[`IdxReader`]: src/IdxReader.php
