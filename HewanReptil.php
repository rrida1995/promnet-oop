<!-- Class Inheritance dari Class Hewan -->
<?php
	#extends merupakan keyword yang menandakan inheritance
	class HewanReptil extends Hewan{

		function __construct($namaHewanReptil, $spesiesBaru){
			#property namaHewan bersifat public di class Hewan
			$this->namaHewan = $namaHewanReptil;
			#method setSpesies bersifat protected di class Hewan
			$this->setSpesies($spesiesBaru);
		}
	}
?>