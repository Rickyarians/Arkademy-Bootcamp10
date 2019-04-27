<?php

function getBiodata() {


    // Variabel menampung nama - String
    $nama = 'Ricky Ariansyah';
    
    // Variabel menampung Alamat - String
    $address = 'Jalan Hidup baru raya gandaria jakarta selatan';

    // Variabel menampung hobbies - Array
    $hobbies = ['Coding', 'Gaming', 'Reading'];

    // variabel menampung menikah - boolean
    $married = false;

    // if else untuk return hasil nikah
    $hasilmenikah = '';
    if($married == true) {
        $hasilmenikah = "Menikah";
    } else {
        $hasilmenikah = "Tidak Menikah";
    }
    
    // object menampung sekolah - object
    $school = new stdClass();
    $school->highschool = 'Bhumi Husada VHS';
    $school->university = 'Mercubuana University';

    // array object menampung skill

    $skillsatu = new stdClass();
    $skillsatu->namaskill = "PHP";
    $skillsatu->kemampuan = "Pemula";

    $skilldua = new stdClass();
    $skilldua->namaskill = 'HTML';
    $skilldua->kemampuan = 'Pemula';

    $totalskill = array($skillsatu, $skilldua);
   

    $hasil = array(
        'name' => $nama,
        'address' => $address,
        'hobbies' => $hobbies,
        'married' => $hasilmenikah,
        'school' =>$school,
        'skill' => $totalskill
    );

    return $hasil;
}

$get = getBiodata();
echo json_encode($get);

?>