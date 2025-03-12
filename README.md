IDX Reader
==========

Library to read and parse IDX data. Internet Data Exchange (IDX) is a standard to describe properties such as houses, appartment, etc... commonly used in the real estate industry.

https://en.wikipedia.org/wiki/Internet_Data_Exchange

See [FieldParser.php](./src/FieldParser.php) for the implemented field names and [idx-format-v3.01-description.xlsx](./Documentation/idx-format-v3.01-description.xlsx) for a detailed description of the IDX 3.01 standard.

Usage
-----

    $contents = file_get_contents('sample.idx');
    $reader = new Visol\IdxReader\IdxReader();
    $reader->load($contents);

We can also load a dataset from a file:

    $reader = new Visol\IdxReader\IdxReader()
    $reader->loadFromFile('sample.idx');

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
