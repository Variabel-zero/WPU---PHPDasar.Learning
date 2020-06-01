<?php

//cope vraibel // ruang lingkup variabel
// $x = 10;
// function tampil(){
// 	global $x;
// 	echo $x;
// }
// tampil();



//variabel superglobal
//var_dump($_GET);
//var_dump($_POST);
// echo $_SERVER['HTTP_SEC_FETCH_SITE'];

// $_GET['nama'] = "Satriawan";
// $_GET['alamat'] = "Lopok";
// var_dump($_GET);


$mahasiswa = [
			[
				'nama'		=> "A Silent Voice",
				'tahun'		=> "2016",
				'sudradara' => "Naoko Yamada",
				'gendre' 	=> "film drama remaja animasi",
				'pemain'	=> "Miyu Irino, Saori Hayami, Aoi Yūki, Kenshō Ono, Yūki Kaneko, Yui Ishikawa,Megumi Han, Toshiyuki ,Toyonaga, Mayu Matsuoka",
				'produser'	=> "Eharu Ōhashi, Shinichi Nakamura, Mikio Uetsuki, Toshio Iizuka,Kensuke Tateishi",
				'untung'	=> "¥2,3 miliar(US$19,56 juta)",
				'negara'	=>'Jepang',
				'durasi'	=> "130 menit",
				'cover' 	=> "a_silent_voice.jpg"
			],
			[
				'nama'		=> "Coraline",
				'tahun'		=> "2009",
				'sudradara' => "Henry Selick",
				'gendre' 	=> "film animasi Amerika ",
				'pemain'	=> "Dakota Fanning, Teri Hatcher, Keith David, Robert Bailey Jr. , John Hodgman, Jennifer Saunders, Dawn French, Ian McShane",
				'produser'	=> "Claire Jennings",
				'untung'	=> "$10,154,106",
				'negara'	=>'Amerika Serikat',
				'durasi'	=> "100 menit",
				'cover' 	=> "Coraline.jpg"
			],
			[
				'nama'		=> "Inception",
				'tahun'		=> "2010",
				'sudradara' => "Christopher Nolan",
				'gendre' 	=> "film fiksi ilmiah",
				'pemain'	=> "Leonardo DiCaprio, Joseph Gordon-Levitt, Ellen Page, Tom Hardy, Ken Watanabe, Cillian Murphy, Marion Cotillard, Tom Berenger, Michael Caine",
				'produser'	=> "Christopher Nolan,Emma Thomas",
				'untung'	=> "$828.322.032",
				'negara'	=> "Amerika Serikat,Britania Raya",
				'durasi'	=> "148 menit",
				'cover' 	=> "Inception.jpg"
			],
			[
				'nama'		=> "Interstellar",
				'tahun'		=> "2014",
				'sudradara' => "Christopher Nolan",
				'gendre' 	=> "film fiksi ilmiah petualangan",
				'pemain'	=> "Matthew McConaughey, Anne Hathaway, Jessica, hastain, Michael Caine",
				'produser'	=> "Emma Thomas, Christopher Nolan, Lynda Obst",
				'untung'	=> "$675.120.017",
				'negara'	=> "Amerika Serikat, Britania Raya",
				'durasi'	=> "169 menit",
				'cover' 	=> "Interstellar.jpg"
			],
			[
				'nama'		=> "Into The Wild",
				'tahun'		=> "2007",
				'sudradara' => "Sean Penn",
				'gendre' 	=> "film fiksi ilmiah petualangan",
				'pemain'	=> "Emile Hirsch, Marcia Gay Harden, William Hurt, Jena Malone, Catherine Keener, Brian Dierker, Vince Vaughn, Zach Galifianakis, Kristen Stewart,Hal Holbrook",
				'produser'	=> "Sean Penn, Art Linson, Bill Pohlad",
				'untung'	=> "$675.120.017",
				'negara'	=> "Amerika Serikat",
				'durasi'	=> "148 menit",
				'cover' 	=> "Into_the_wild.jpg"
			],
			[
				'nama'		=> "John Wick",
				'tahun'		=> "2014",
				'sudradara' => "Chad Stahelski",
				'gendre' 	=> "thriller",
				'pemain'	=> "Keanu Reeves, Michael Nyqvist, Alfie Allen, Adrianne Palicki, Bridget Moynahan, Dean Winters, Ian McShane, John Leguizamo, Willem Dafoe",
				'produser'	=> "Basil Iwanyk, David Leitch, Eva Longoria, Michael Witherill",
				'untung'	=> "$78.7 million",
				'negara'	=> "United States",
				'durasi'	=> "101 minutes",
				'cover' 	=> "John_Wick.jpg"
			],
			[
				'nama'		=> "John Wick Chapter 2",
				'tahun'		=> "2017",
				'sudradara' => "Chad Stahelski",
				'gendre' 	=> "thriller",
				'pemain'	=> "Keanu Reeves, Common, Laurence Fishburne, Riccardo Scamarcio, Ruby Rose, John Leguizamo, Ian McShane",
				'produser'	=> "Basil Iwanyk, Erica Lee",
				'untung'	=> "$171.539.887",
				'negara'	=> "Amerika Serikat",
				'durasi'	=> "122 menit",
				'cover' 	=> "John_Wick_Chapter_2.jpg"
			],
			[
				'nama'		=> "Life of Pi",
				'tahun'		=> "2012",
				'sudradara' => "Ang Lee",
				'gendre' 	=> "film drama fantasi petualangan",
				'pemain'	=> "Suraj Sharma, Irrfan Khan, Tabu, Adil Hussain, Gerard Depardieu, Rafe Spall",
				'produser'	=> "Ang Lee, Gil Netter, David Womark",
				'untung'	=> "$609.016.565",
				'negara'	=> "Amerika Serikat",
				'durasi'	=> "127 menit",
				'cover' 	=> "Life_of_Pi.jpg"
			],
			[
				'nama'		=> "Silent Hill: Revelation",
				'tahun'		=> "2013",
				'sudradara' => "Michael J. Bassett",
				'gendre' 	=> "film horor psikologi",
				'pemain'	=> "Adelaide Clemens, Kit Harington, Deborah Kara Unger, Martin Donovan, Malcolm McDowell, Carrie-Anne Moss, Sean Bean",
				'produser'	=> "Samuel Hadida, Don Carmody",
				'untung'	=> "$609.016.565",
				'negara'	=> "Kanada, Prancis",
				'durasi'	=> "95 menit",
				'cover' 	=> "silent_hill_revelation_3d.jpg"
			],
			[
				'nama'		=> "Zathura",
				'tahun'		=> "2013",
				'sudradara' => "Michael J. Bassett",
				'gendre' 	=> "film horor psikologi",
				'pemain'	=> "Adelaide Clemens, Kit Harington, Deborah Kara Unger, Martin Donovan, Malcolm McDowell, Carrie-Anne Moss, Sean Bean",
				'produser'	=> "Samuel Hadida, Don Carmody",
				'untung'	=> "$609.016.565",
				'negara'	=> "Kanada, Prancis",
				'durasi'	=> "95 menit",
				'cover' 	=> "Zathura.jpg"
			]
		];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GET</title>
</head>
<body>
	<h1>Get</h1>
	<ul>
<?php foreach($mahasiswa as $mhs) : ?>
		<li>
			<a href="latihan2.php?nama=<?= $mhs['nama'];?>&tahun=<?= $mhs['tahun'];?>&sudradara=<?= $mhs['sudradara'];?>&gendre=<?= $mhs['gendre'];?>&pemain=<?= $mhs['pemain'];?>&produser=<?= $mhs['produser'];?>&untung=<?= $mhs['untung'];?>&negara=<?= $mhs['negara'];?>&durasi=<?= $mhs['durasi'];?>&cover=<?= $mhs['cover'];?>"><?= $mhs['nama'];?></a>
		</li>
<?php endforeach; ?>
	</ul>
</body>
</html>
