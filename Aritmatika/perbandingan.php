<?php 

// operator perbandingan (1)
echo "Operator Perbandingan (1)\n";
var_dump(9 == "sembilan"); // membandingkan nilai 9 dengan string "sembilan"
var_dump(9 === "sembilan"); //membandingkan nilai 9 dengan string "sembilan" dan tipe data (identik)
var_dump(9 != "sembilan"); // membandingkan nilai 9 dengan string "Sembilan" (tidak sama dengan)
var_dump(9 <> "sembilan"); // membandingkan nilai 9 dengan string "sembilan" (tidak sama dengan)

echo "Operator Perbandingan (2)\n";
var_dump(9 !== "sembilan"); // membandingkan nilai 9 dengan string "Sembilan" (tidak identik)
var_dump(9 < 8); //membandingkan nilai 9 dengan 8 (kurang dari)
var_dump(9 <= 9); // membandingkan nilai 9 dengan 9 (kurang dari atau sama dengan)
var_dump(9 > 10); //membandingkan nilai 9 dengan 8 (lebih dari)
var_dump(9 >= 9); // membadingkan nilai 9 dengan 9 (lebih dari atau sama dengan)