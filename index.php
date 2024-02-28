<?php

// ------------------------------------------------------------------
// nomor 1
echo "<h2>Nomor 1</h2>";


$dataToken = [];
function generate_token($user)
{
    global $dataToken;
    $genString = bin2hex(random_bytes(10));

    if (isset($dataToken[$user]) && count($dataToken[$user]) >= 10) {
        array_shift($dataToken[$user]);
    }
    // $dataToken[$user][] = 12345;
    $dataToken[$user][] = $genString;
    echo "Token tergenerate: " . $token[$user][] = $genString;
    return $token[$user][] = $genString;
}

function verify_token($user, $token)
{
    global $dataToken;
    array_search($token, $dataToken[$user]);
    if (condition) {
        $arr = array_search($token, $dataToken[$user]);
        unset($arr);
        return true;
    } else {
        return false;
    }
}

generate_token("Yosep Bahtiar") . "<br>";
// verify_token("Yosep Bahtiar", 12345) . "<br>";


echo "<hr>";
// ------------------------------------------------------------------
// nomor 2
echo "<h2>Nomor 2</h2>";
class Siswa
{
    public $nrp, $nama, $daftarNilai;

    public function __construct($nrp, $nama)
    {
        $this->nrp = $nrp;
        $this->nama = $nama;
        $this->daftarNilai = [];
    }

    public function setMapel($mapel, $nilai)
    {
        $nilai = new Nilai($mapel, $nilai);
        $this->daftarNilai[] = $nilai;
    }
}

class Nilai
{
    public $mapel, $nilai;

    public function __construct($mapel, $nilai)
    {
        $this->mapel = $mapel;
        $this->nilai = $nilai;
    }
}

$siswa = new Siswa(3000, "Yosep Bahtiar");
$siswa->setMapel("B. Inggris", 100);
// $siswa->setMapel("Matematika", 100);
// $siswa->setMapel("B. Jepang", 100);
// $siswa->setMapel("B. Korea", 100);
print_r($siswa);

echo "<br>";
echo "<br>";
$dataSiswa = [];
for ($i = 0; $i < 10; $i++) {
    $nama = bin2hex(random_bytes(10));
    $mapel = ["B. Inggris", "B. Indonesia", "B. Jepang"][rand(0, 2)];
    $siswa = new Siswa($i + 1, $nama);
    $siswa->setMapel($mapel, rand(0, 100));
    $dataSiswa[] = $siswa;
}

foreach ($dataSiswa as $key => $siswa) {
    echo "NRP: " . $siswa->nrp . "<br>";
    echo "Nama: " . $siswa->nama . "<br>";
    echo "Mapel: " . $siswa->daftarNilai[0]->mapel . "<br>";
    echo "Nilai: " . $siswa->daftarNilai[0]->nilai . "<br>";
    echo "<br>";
}



echo "<hr>";
// ------------------------------------------------------------------
// nomor 3
echo "<h2>Nomor 3</h2>";
function LampuLantas()
{
    $warna = ["merah", "kuning", "hijau"];

    static $i = -1;

    $i++;

    if ($i > 2) {
        $i = 0;
    }

    echo $warna[$i] . "<br>";
}

LampuLantas();
LampuLantas();
LampuLantas();
LampuLantas();


echo "<hr>";
// ------------------------------------------------------------------
// nomor 4
echo "<h2>Nomor 4</h2>";
$arr = [random_int(1, 30), random_int(1, 30), random_int(1, 30), random_int(1, 30), random_int(1, 30)];
print_r($arr);
echo "<br>";

function BilTerbesarNo2($input)
{
    sort($input);
    print_r($input);
    return $input[3];
}
$hasil = BilTerbesarNo2($arr);
echo "<br> Hasilnya: ";
echo $hasil;


echo "<hr>";
// ------------------------------------------------------------------
// nomor 5
echo "<h2>Nomor 5</h2>";
function Hitung($input)
{
    // $input = strlen($input);
    $jmlTerbanyak = str_split($input);
    $jmlTerbanyak = array_count_values($jmlTerbanyak);
    asort($jmlTerbanyak);

    $karTerbanyak = array_key_last($jmlTerbanyak);

    // print_r($jmlTerbanyak);
    // print_r($karTerbanyak);

    $hasil = $karTerbanyak . " " . $jmlTerbanyak[$karTerbanyak] . "x";

    return $hasil;
}

$input = "wellcome";
$output = Hitung($input);
echo $output;
