<?php
/** Escape Sequences :
 * \" : Double Quote
 * \\ : Backslash
 * \$ : Membuat dollar sign 
 * \n : enter atau membuat baris baru
 * \t : tab
 */
// * 1. Single Quote - Tidak dapat menambahkan atau menggunakan escape sequence
echo 'Nama : ';
echo 'Jang Kyujin';
echo "\n";

// * 2. Double Quote - Dapat menambahkan escape sequence seperti \n, \t
echo 'Nama : ';
echo 'Kang Seulgi';
echo "\n";


// * 3. Membuat string multiline menggunakan heredoc
echo <<<TEST
Ini adalah string 
yang ditulis dengan format 
multiline menggunakan heredoc

TEST;

// * 4. Membuat string multiline menggunakan nowdoc
echo <<<'TEST'
Ini adalah string 
yang ditulis dengan format 
multiline menggunakan nowdoc
TEST;