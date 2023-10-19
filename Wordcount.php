<?php 
class Wordcount{
    public function countWords($sentence){
        return count(explode(" ",$sentence));
        //count berfungsi untuk Menghitung Jumlah Baris
        //explode berguna sebagai fungsi sebagai pemisah string
    }
}
?>