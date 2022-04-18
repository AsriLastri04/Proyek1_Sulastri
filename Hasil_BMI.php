<?php

class DataBmi
{
    public $nama_lengkap;
    public $jk;
    public $umur;
    public $tinggi_badan;
    public $berat_badan;
    

    public function hasilBMI() {

        return "Nama : $this->nama_lengkap
                Jenis Kelamin : $this->jk 
                Umur : $this->umur 
                Tinggi Badan : $this->tinggi_badan 
                Berat Badan : $this->berat_badan ";
                
    }


    public function statusBMI ($BMI) {

        if ($BMI < 18.5) {
            return "<td> Kekurangan berat badan </td>";
        } else if ($BMI >= 18.5 && $BMI <= 24.9){
            return "<td> Ideal </td>";
        } else if ($BMI >= 25.0 && $BMI <= 29.9) {
            return "<td> Kelebihan berat badan </td>";
        } else {
            return "<td> Obesitas </td>";
        }

    }
}

if (isset($_GET[ "nama"])) {
    $bmi = new DataBmi;
    $bmi->nama_lengkap = $_GET["nama"];    
    $bmi->jk = $_GET["gender"];
    $bmi->umur = $_GET["usia"];
    $bmi->tinggi_badan = $_GET["tb"];
    $bmi->berat_badan = $_GET["bb"];
}

$pasien1 = ['name' => 'Laras', 'jeniskelamin' => 'Perempuan', 'umur' => 17, 'tinggi'=> 145, 'berat' => 80];
$pasien2 = ['name' => 'Leo', 'jeniskelamin' => 'Laki-Laki', 'umur' => 25,  'tinggi'=> 167, 'berat' => 45];
$pasien3 = ['name' => 'Lisa', 'jeniskelamin' => 'Perempuan', 'umur' => 21,  'tinggi'=> 150, 'berat' => 52.6];
$pasien4 = ['name' => $bmi->nama_lengkap, 'jeniskelamin' => $bmi->jk, 'umur' => $bmi->umur, 'tinggi' => $bmi->tinggi_badan, 'berat' => $bmi->berat_badan];

$ar_pasien = [$pasien1, $pasien2, $pasien3, $pasien4];
?>