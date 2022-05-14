<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <!-- MY CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/renkler.css">
    <link rel="stylesheet" href="./css/login.css">
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <header class="bg-primary ">

        <div class="container-fluid border-radius koyu-mavi">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark container-fluid">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="anasayfa.html"><i class="fa-brands fa-redhat" style="margin-right: 7px;"></i>Ramazan Sefa Kurtuluş</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-auto p-2">
                                <li class="nav-item d-flex justify-content-center">
                                    <a class="nav-link active" href="anasayfa.html">Anasayfa</a>
                                </li>
                                <li class="nav-item d-flex justify-content-center">
                                    <a class="nav-link active" aria-current="page" href="ozgecmis.html">Özgeçmiş</a>
                                </li>
                                <li class="nav-item d-flex justify-content-center">
                                    <a class="nav-link active" href="sehrim.html">Şehrim</a>
                                </li>
                                <li class="nav-item d-flex justify-content-center">
                                    <a class="nav-link active" href="mirasim.html">Mirasım</a>
                                </li>
                                <li class="nav-item d-flex justify-content-center">
                                    <a class="nav-link active" href="iletisim.html">İletişim</a>
                                </li>
                                <li class="nav-item d-flex justify-content-center">
                                    <a href="login.html" class="nav-link active"><i class="fa-solid fa-right-to-bracket"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>


    <div class="container">
			
			<?php 

				include("kullanicilar.php");


				if (($_POST["kulAdi"] == $user) and ($_POST["pass"] == $pass))
				{
			       $_SESSION["login"] = "true";
			       $_SESSION["user"] = $user;
			       $_SESSION["pass"] = $pass;
			
			       echo("SİTEYE GİRİŞ YAPTINIZ HOŞGELDİNİZ G211210004 !!");
                   header("Refresh: 2; url=anasayfa.html");
			
				}
			
				else 
				{
			            echo "Kullancı Adı veya Şifre Yanlış.<br>";
			            echo "!!!TEKRAR DENEYİN!!!";
			            header("Refresh: 1; url=login.html");
			    }
			
			?>
			
		</div>

        <script>
            // const user = "g211210004@sakarya.edu.tr";
            // const pass = "g211210004";
            // function check(){
            //     let x = document.forms["checkForm"]["kulAdi"].value;
            //     if (x != user) {
            //      alert("Hatalı Kullanıcı Adı");
            //     return false;
            //     }
            //     let y = document.forms["checkForm"]["pass"].value;
            //     if (y != pass) {
            //      alert("Hatalı Şifre");
            //     return false;
            //     }
            //     if(x==user || y==pass){
            //         alert("Oturumunuz duğrulandı")
            //     }
            // }

        </script>
    </section>




    <footer class=" bg-primary text-light  fixed-bottom">
        <div class="koyu-mavi d-flex flex-row justify-content-center p-4 border-radius" ">
            <p>Web Teknolojileri Projesi <i class="fa-regular fa-copyright " style="margin-right: 5px; "></i> </p>
            <p> Ramazan Sefa Kurtuluş || 2022</p>
        </div>
    </footer>






















    <script src="./js/bootstrap.js "></script>
    <script src="https://kit.fontawesome.com/2a95c1779f.js " crossorigin="anonymous "></script>

</body>

</html>