<?php

class LuasLingkaran {
    public const phi = 3.14;
    public int $jari;

    public function __construct($isiJari = 1){
        $this->jari = $isiJari;
    }

    public function tampil($nama) {
        $rumus = LuasLingkaran::phi * $this->jari * $this->jari;
        echo "hasilnya {$nama} adalah: {$rumus}";
    }

    public static function testing() {
        echo "ini dari static";
    }

    public function __destruct() {
        echo "selesaaiii";
    }
}

$lingkaran = new LuasLingkaran();
$lingkaran->tampil('hijau'); //panggil method

LuasLingkaran::testing();