<!doctype html>
<html lang="en">

<link rel="shortcut icon" href="img/1.jpg"/><title>İletişim Sayfası </title>

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" href="style.css">

    <style>
    .footer {
        position: auto;
        left: 100%;
        bottom: ;
        width: 100%;
        background-color: black;
        color: white;
        text-align: center;
    }
    </style>
</head>

<body>

    <nav class="navbar bg-dark navbar-expand-sm navbar-dark fixed-top">
        <div class="container">
            <div> </div>
            <br></br>

            <a href="/" class="navbar-brand" >
            <img src="img/3.png"  width="70px"; height="70px"; />
                &nbsp;
            </a>
            <text class="navbar-toggler" type="text" data-toggle="collapse" data-target="#navbarCollapse">
            </text>
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link passive">
                            İletişim
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    <br></br>  
    <header>
        <div class="jumbotron bg-soft text-black">
            <div class="container">
                <div class="col-xl-15"> 
                    <h1 class="display-8 font-italic" size="6" text="center">
                        <br></br>İletişim Formu
                    </h1>
                    <h3 class="display-5 font-italic" size="6" text="center">
                    </br> Soru, Fikir ve Önerileriniz İçin Formu Doldurarak İletişime Geçebilirsiniz.
                    </h3>
                </div>
            </div>
            <div class="container">
                <div class="explorer_europe">
                    <div class="container" style="padding-top:20px;">
                        <div class="row  align-items-center">
                            <div class="col-md-8">
                                <br>
                                <form action="iletisim-post.php" method="post" class="wellspan8">
                                    <?php  if( isset($_GET['success'])) : ?>
                                    <div class="alert alert-success"> Mesajınız Başarıyla İletildi.</div>
                                    <?php endif ?>

                                    <table class="table">
                                        <tr>
                                            <td><u>Adınız Soyadınız :</u></td>
                                            <td><input type="text" name="adsoyad" class="form-control"
                                                    required="required" /></td>
                                        </tr>
                                        <tr>
                                            <td><u>Telefon Numaranız :</u></td>
                                            <td><input type="text" name="telefon" class="form-control" maxlength="11" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><u>E-posta Adresiniz :</u></td>
                                            <td><input type="text" name="mail" class="form-control"
                                                    required="required" /></td>
                                        </tr>
                                        <tr>
                                            <td><u>Mesajınız : </u></td>
                                            <td>
                                                <textarea name="mesaj" class="form-control"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><input type="submit" name="ilet" class="form-control" value="GÖNDER" />
                                            <td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                            <br></br>
                            <hr width="150%" color="#455A64" size="15">
                            <br></br>
   <div>
     <div class="col-md-8">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001.4216081380673!2d36.9693101153807!3d41.212581879280606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40881d170bfb5075%3A0xe3344033e2d52e6e!2sEmek%20Unlu%20Gida!5e0!3m2!1str!2str!4v1614460331067!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

   </div>
  </div>
  <div>
                              <div class="col-md-10">
                               <h1 class= "display=6 font-italic" size="2">
                                 <p><u><small>İletişim:</small></u></p>
                              </h1>
                              </div>
                          </div>

                            
            
  
   <?php
                                    
try {

    $baglanti = new PDO("mysql:host=localhost;dbname=form", "root", "");
    $baglanti->exec("SET NAMES utf8");
    $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sorgu = $baglanti->query("SELECT telefon, eposta, adres FROM bilgiler");

    $cikti = $sorgu->fetch(PDO::FETCH_ASSOC);

    echo "Telefon Numaramız:   " . $cikti["telefon"] . "<br /> E-posta Adresimiz: " . $cikti["eposta"] . "<br /> Adres: " . $cikti["adres"];

} catch (PDOException $e) {
    die($e->getMessage());
}

$baglanti = null;

?>
    </header>
  
    <main>

        <div class="footer">
            <p><bold>2020</bold></p>
        </div>

        </footer>

    </main>

</body>

</html>