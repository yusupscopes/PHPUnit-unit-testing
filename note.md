# PHPUnit
## PHPUnit adalah salah satu framework untuk melakukan unit testing di PHP.
### Unit testing ini adalah ketika kita ngetest salah satu fungsi kecil dari program kita.

**_assertion_** ini semacam "pengujian".
fungsi _assert_ sendiri bisa dipakai untuk ngetest hal lain seperti array misalnya (_assertArrayHasKey()_).
Untuk contoh yang lain bisa kita search di google "phpunit assert list".

cara melakukan test yaitu dengan membuka terminal (arahkan ke folder project yang sedang dikerjakan)
ketikan perintah :
```
./vendor/bin/phpunit filenameTest.php
```
kalo tidak ada masalah dengan kode kita nanti output nya ada keterangan **OK**. Sebaliknya jika ada masalah, keterangannya adalah **FAILURES**.
