<?php 
echo "Ini adalah Contoh Tipe Data Integer : \n";
echo "Decimal : ";
var_dump(5678); // 5678 in Decimal is int(5678)

echo "Octal : ";
var_dump(0123); // 0123 in octal is int(83)

echo "Hexadecimal : ";
var_dump(0x1A); //0x1A in Hexadecimal is int(26) 

echo "Binary : ";
var_dump(0b1111111); //0b1111111 in Binary is 127 

echo "Underscore di Number : ";
var_dump(1_234_567); //1_234_567 is int(1234567)

// Floating Point
echo "\nIni adalah Contoh Tipe Data Float : \n";
echo "Floating Point : ";
var_dump(5.678); // 5.678 in Decimal is float(5.678)

echo "Floating Point dengan E Notation Plus (1.2 x 1000) : ";
var_dump(5.6e3); // 5.6e3 in Decimal is float(5.600)

echo "Floating Point dengan E Notation Minus (5.6 x 0.001) : ";
var_dump(5.6e-3); // 5.6e3 in Decimal is float(0.0056)

echo "Underscore Floating Point : ";
var_dump(5_678.910); // 5_678.910 is float(5678.91)

echo "Integer Overflow (Batasan Integer) : ";
var_dump(9223372036854775808);

