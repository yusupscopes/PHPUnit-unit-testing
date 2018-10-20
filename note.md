# PHPUnit
## PHPUnit adalah salah satu framework untuk melakukan unit testing di PHP.
### Unit testing ini adalah ketika kita ngetest salah satu fungsi kecil dari program kita.

**_assertion_** ini semacam "pengujian".
fungsi _assert_ sendiri bisa dipakai untuk ngetest hal lain seperti array misalnya (_assertArrayHasKey()_).
Untuk contoh yang lain bisa kita search di google "phpunit assert list".

cara melakukan test yaitu dengan membuka terminal (arahkan ke folder project yang sedang dikerjakan)
ketikan perintah :
```
$ ./vendor/bin/phpunit filenameTest.php
```
kalo tidak ada masalah dengan kode kita nanti output nya ada keterangan **OK**. Sebaliknya jika ada masalah, keterangannya adalah **FAILURES**.

### Konfigurasi dan nama fungsi
Untuk memudahkan dalam test, biasanya file-file _FilenameTest.php_ akan disimpan pada satu folder (pada contoh ini folder _tests_), konfigurasi (menggunakan _phpunit.xml_) kita akan diarahkan ke folder tersebut dan ketika kita melakukan test hanya mengetikkan perintah
```
$ ./vendor/bin/phpunit 
```
tanpa menambahkan parameter nama file (semua file dalam folder tests akan dieksekusi).

Ada dua cara dalam penamaan fungsi, terserah mau menggunakan yang mana asalkan konsisten!
1. menggunakan keyword **_test_** pada nama fungsi.
```php
public function testUserCanLogin() {}
```
2. menggunakan **_DocBlock_**.
```php
/** @test */
public function UserCanLogin() {}
```
