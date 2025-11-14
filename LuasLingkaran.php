<?php

class LuasLingkaran {

    public const phi = 3.14;
    public int $jari;
    
    public function __construct($isiJari = 1) {
        $this->jari = $isiJari;
    }

    public function tampil($nama = 'ban') {
        $rumus = self::phi * ($this->jari * $this->jari);
        echo "Lingkaran {$nama} hasilnya adalah: {$rumus}";
    }

    public static function testing() {
        echo "<br>";
        echo "ini dari static";
    }

    public function __destruct() {
        echo "<br>";
        echo "udah ah cape";
    }
}

$lingkaran = new LuasLingkaran(12); 
$lingkaran->tampil('roda'); 

LuasLingkaran::testing();
?>
