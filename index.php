<!-- Main Page of Class-part OOP in PHP -->
<!-- Setiap membuat program berbasis OOP sebaiknya Main function dan Class dibuat dalam file terpisah -->
<!-- karena tujuan dari OOP sendiri adalah untuk -->

<!-- include Class yang telah dibuat sebelumnya -->
<?php
include("Hewan.php"); 
include("HewanReptil.php"); 

	#1 Instansasi Class: Merupakan proses pemanggilan Class menjadi sebuah object
	$hewan1 = new Hewan("Sapi"); //or $hewan1 = new Hewan; jika tidak pakai constructor
	$hewan2 = new Hewan("Ikan");
	/*
		Notes:
		- Setiap membuat object baru dari sebuah Class, harus selalu menggunakan keyword 'new'
		- variabel $hewan1 menjadi sebuah handle pada object Hewan yang baru saja diinstansiasikan
		- disebut sebagai handle karena $hewan1 akan digunakan untuk mengontrol dan menggunakan object Hewan
		- Setiap variable handle yang diinstansiasikan untuk Class yang sama akan memiliki nilai property masing-masing dan tidak akan saling mempengaruhi
	*/

	#2 Set Object Properties
	$hewan1->setHabitat("Darat");
	$hewan2->setHabitat("Air Tawar");

	// $x = $hewan1->getNamaHewan();
	// $y = $hewan2->getNamaHewan();

	#3 Mengakses data sebuah object
	echo "Hewan ".$hewan1->getNamaHewan()." habitatnya di ".$hewan1->getHabitat()."<br/>";
	echo "Hewan ".$hewan2->getNamaHewan()." habitatnya di ".$hewan2->getHabitat()."<br/>";
	/*
		Notes:
		- Proses pemasukan value dari setiap variabel handle pada property Class: Instansiasi objek, set value pada property, function setter pada Hewan akan menyimpan value dari sini di dalam variabel $this->namaHewan. Ketika value akan dipanggil kembali ke sini maka fungsi getter akan melempar value yang tersimpan dalam variabel $this->namaHewan
		- Pemanggilan fungsi setter dan getter dapat dilakukan dengan variabel biasa
	*/

	/*
		Coba: tanpa get & set
		- $hewan1 = "Sapi";
		- $hewan2 = "Ayam";
		- echo $hewan1;
		- echo $hewan2;
	*/

	echo "<br/>";

	#4 Tidak boleh mengakses property secara langsung dari sebuah Class
	// $hewan3 = new Hewan();
	// $hewan3->setNamaHewan("Ular");
	// echo "Nama hewan 3 adalah: ".$hewan3->namaHewan; // directly accessing properties in a Class is a No-No
	/* Kenapa? */

	echo "<br/>";

	#5 Constructor
	/*$hewan4 = new Hewan("Lumba-lumba");
	echo "Nama hewan 4 adalah: ".$hewan4->getNamaHewan();*/

	/*
		- Variabel $hewan4 dimasukkan value langsung ketika di instansiasi, sebgaia pengganti fungsi setter karena Hewan telah mempunyai constructor dengan argumen set value namaHewan di dalamnya
		- Akan muncul sejumlah warning dan notice. Karena object yang telah diinstansiasi sebelumnya belum mempunyai constructor berargumen di dalamnya. 
		- Coba construct dikosongkan
		- Tujuan penggunaan constructor: salah satunya mengurangi baris code yang dibuat dan juga menghemat waktu
	*/

	#6 Restricting access to property
	// echo "Hewan 4 tinggal di habitat: ".$hewan4->habitat;

	#7 Restricting access to method
	// echo $hewan4->getHabitat();

	#8 Inheritance
	$hewan5 = new HewanReptil("Ular", "Reptil");

	echo "Hewan ".$hewan5->getNamaHewan()." termasuk spesies ".$hewan5->getSpesies();
?>
