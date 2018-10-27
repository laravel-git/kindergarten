<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="class/css/bootstrap.min.css">
<script src="class/js/jquery.min.js"></script>
<script src="class/js/bootstrap.min.js"></script>
<title></title>
<style>
	.box a{
		font-size:20px;
	}
</style>
</head>
<body>
	<div class="container" style="margin-top:5%; height:100px;">
		<nav class="navbar navbar-inverse box"> 
			<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"></a>
			</div>
			<ul class="nav navbar-nav">
			  <li class="active"><a href="#">Bosh sahifa</a></li>
			  
			  <li><a href="tarbiyachi.php">Xodimlar</a></li>
			  
			  <li><a href="mashgulot.php">Mashg'ulotlar</a></li>
			  
			  <li><a href="ovqatlar.php">Ovqatlar</a></li>
			  <li><a href="bolalar.php">Bolalar</a></li>
			  
			 </ul>
			  <ul class="nav navbar-nav navbar-right">
				  <li>
				  <form class="form-inline" action="admin.php" method="POST">
					<div class="form-group">
						<input style="margin-top:5%;" name = "login" type="text" class="form-control" placeholder="Login" required = "required">
					</div>
					<div class="form-group">
						<input style="margin-top:5%"type="password" name = "parol" class="form-control" placeholder="Parol" required = "required">
					</div>
					<div class="form-group">
						<input style="margin-top:10px; margin-right:10px" name = "bos" type="submit" class="btn btn-primary" value="Kirish">
					</div>
				  </form>
				  </li>
			  </ul>
			
			</div>
		</nav>
		<div class="row box2">
			<div class="col-md-8 col-xs-12">
				<!-- carousel begin -->
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
						
					</ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
					<div class="item active">
					  <img src="image/2.jpg" style="height:400px" alt="Chania">
					</div>

					<div class="item">
					  <img src="image/1.jpg" style="height:400px" alt="Chania">
					</div>

					<div class="item">
					  <img src="image/3.jpg" style="height:400px" alt="Flower">
					</div>
					<div class="item">
					  <img src="image/4.jpg" style="height:400px" alt="Flower">
					</div>
			
					
				  </div>

				  <!-- Left and right controls -->
				  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				</div>
					<!-- carousel end -->
			</div>
			<div class="col-md-4 col-xs-12">
				<img src="image/maptash.png" style="width:100%; height: 400px">
			</div>
		</div>
		<br>
		
			<div class="panel-group">
			  <div class="panel panel-default">
				<div class="row">
					<div class="col-md-8">
						<div class="panel-body"><h3>O‘zbekistonda tezlashtirilgan tartibda xususiy bog‘cha va maktablar tarmog‘i yaratiladi</h3>
							<p>
								Prezident Shavkat Mirziyoyev “Nodavlat ta’lim xizmatlari ko‘rsatish faoliyatini yanada rivojlantirish chora-tadbirlari to‘g‘risida” qaror imzoladi, deb yozadi Norma.
								Hujjatga muvofiq, 2018-yilning 1-yanvaridan boshlab yuridik shaxslar tomonidan mulkchilik va tashkiliy-huquqiy shakllaridan qat’i nazar, nodavlat ta’lim xizmatlari ko‘rsatishni litsenziya asosida amalga oshirish tartibi joriy etiladi.
								Nodavlat ta’lim xizmatlari faoliyati bilan shug‘ullanuvchi yuridik shaxslar:
								o‘z faoliyatini davlat ta’lim standartlari va talablar asosida amalga oshiradi;
								amaldagi me’yoriy-huquqiy hujjatlarga qat’iy rioya qilgan holda yuqori malakali pedagog va boshqa kadrlar bilan ta’minlash, ta’lim-tarbiya jarayonini tashkil etish uchun zarur shart-sharoitlarni yaratish choralarini ko‘radi;
								o‘qish muddati va shartlari, to‘lov miqdori, tomonlarning huquq va majburiyatlari hamda boshqa shartlar belgilangan shartnomaga muvofiq ta’lim oluvchilarning ota-onalari yoki boshqa qonuniy vakillari bilan o‘zaro munosabat o‘rnatadi;
								o‘z faoliyatini aholiga pullik ta’lim xizmatlarini ko‘rsatish, xayriya fondlari va grantlardan kelib tushgan mablag‘lar, shuningdek, qonunchilikda taqiqlanmagan boshqa manbalar hisobidan moliyalashtiradi;
								bitiruvchilarga davlat namunasidagi ta’lim to‘g‘risidagi hujjat beradi.
								Maktabgacha va umumiy o‘rta ta’lim sohasida nodavlat ta’lim xizmatlarini ko‘rsatadigan yuridik shaxslar ijtimoiy himoyaga muhtoj oilalarning qobiliyatli va iqtidorli farzandlarini tanlov asosida muassasadagi jami o‘quvchilar umumiy sonining 10 foizidan kam bo‘lmagan miqdorda ta’lim xizmatlarini ko‘rsatish evaziga kelib tushgan daromadlar hisobidan bepul (grant asosida) o‘qishga qabul qilishi belgilab qo‘yilsin. Keyingi yillarda o‘quvchilarni bepul (grant asosida) o‘qitishni davom ettirish bo‘yicha qaror nodavlat ta’lim xizmatlarini ko‘rsatish faoliyati bilan shug‘ullanuvchi yuridik shaxs tomonidan ta’lim oluvchining oilaviy sharoiti va uning akademik natijalaridan kelib chiqqan holda qabul qilinadi.
								O‘zbekiston Respublikasi Xususiylashtirilgan korxonalarga ko‘maklashish va raqobatni rivojlantirish davlat qo‘mitasi Qoraqalpog‘iston Respublikasi Vazirlar Kengashi, Toshkent shahar va viloyatlar hokimliklari bilan birgalikda aholiga nodavlat ta’lim xizmatlarini ko‘rsatish faoliyati bilan shug‘ullanuvchi yuridik shaxslarga davlat mulki bo‘lgan foydalanilmayotgan bino, ob’ektlar va inshootlarni davlat-xususiy sherikchilik shartlari asosida o‘rnatilgan tartibda sotishni tashkil etadi.
								Maktabgacha va umumiy o‘rta ta’lim sohasida nodavlat ta’lim xizmatlarini ko‘rsatish faoliyati bilan shug‘ullanadigan yuridik shaxslar 2021 yil 1 yanvargacha bo‘lgan muddatda quyidagi to‘lovlardan ozod qilinadi:
								barcha turdagi soliq va davlat maqsadli jamg‘armasiga majburiy to‘lovlardan (yagona ijtimoiy to‘lovdan tashqari), bunda ozod qilinayotgan mablag‘lar ularni zamonaviy o‘quv vositalari bilan jihozlash, zarur mahsulotlar va jihozlar sotib olish, bino va inshootlarni rekonstruksiya qilish, kapital ta’mirlash hamda aholining ijtimoiy himoyaga muhtoj qatlamiga bepul ta’lim xizmatlarini ko‘rsatishga maqsadli yo‘naltiriladi;
								mehnat shartnomasi asosida ta’lim-tarbiya jarayoniga jalb qilingan xorijiy o‘qituvchi va mutaxassislarning oylik ish haqidan yagona ijtimoiy to‘lov.
								Bundan tashqari, yuridik shaxslar tomonidan nodavlat ta’lim xizmatlarini ko‘rsatishda
								chet ellik o‘qituvchi va mutaxassislar jismoniy shaxslarga solinadigan daromad solig‘i va O‘zbekiston Respublikasi Moliya vazirligi huzuridagi budjetdan tashqari pensiya jamg‘armasiga ajratiladigan to‘lovlardan tuzilgan mehnat shartnomasi doirasida ozod qilinadi;
								chet ellik o‘qituvchi va mutaxassislarga ikki tomonlama aviachiptalarni xarid qilish bilan bog‘liq xarajatlar (uzoq muddatli mehnat shartnoma asosida – bir yilda ikki martadan oshmagan holda) ish beruvchi tomonidan qoplanishi mumkin;
								chet ellik o‘qituvchi va mutaxassislarning yashash joyi uchun to‘lovlar qisqa muddatli mehnat shartnomalariga asosan (bir oydan ko‘p bo‘lmagan muddatga) ish beruvchilar tomonidan amalga oshiriladi, uzoq muddatli mehnat shartnomalari doirasida ularning yashash joyi uchun to‘lovlar shartnoma shartlariga muvofiq ish haqi bilan birgalikda to‘lab beriladi.
						</p>
						</div>
					</div>
					<div class="col-md-4">
						<br><br>
						<img src="image/bogcha.jpg" style="width:100%">
						<br><br>
						<img src="image/bogcha2.jpg" style="width:100%">
						<br><br>
						<img src="image/bogcha1.jpg" style="width:100%">
					</div>
				</div>
			  </div>
			</div>
		
		
		
		
		<div class="panel">
				<div class="panel-heading" style="background-color:#0c2d45;">
					<div class="row">
						<div class="col-md-2">
							<a href="http://www.farzand.uz" style="color:white">Farzandlar uchun</a>
						</div>
						<div class="col-md-1">
							<a href="http://www.ziyonur.uz" style="color:white">Ziyonur.uz</a>
						</div>
						<div class="col-md-1">
							<a href="http://www.Kitob.uz" style="color:white">Kitoblar</a>
						</div>
						<div class="col-md-1">
							<a href="http://www.Dono.uz" style="color:white">Dono.uz</a>
						</div>
						<div class="col-md-1">
							<a href="http://www.Kun.uz" style="color:white">Yangliklar</a>
						</div>
					</div>
				</div>
		</div>
		
	</div>	
</body>
</html>