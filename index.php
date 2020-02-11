<!doctype html>
<html lang="tr">
<head>
    <title>Yemeksepeti Joker Hesaplayıcısı</title>

    <!-- Meta
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Bu uygulama; yemeksepetinden verilen toplu siparişlerde, siparişe joker indirimi uygulandıktan sonra, tarafların indirim öncesinde aldığı ürünlere göre indirim sonrasında ne kadar ödemesi gerektiğini hesaplar.">
    <meta name="keywords" content="yemeksepeti joker hesap, yemeksepeti joker hesaplayıcısı, joker, yemeksepeti, joker indirim">



    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="inc/css/custom.css">

    


    <!-- JavaScript
    ================================================== -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <script src="inc/js/jquery.numeric.js"></script>
    <script src="inc/js/custom.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-28195039-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-28195039-3');
    </script>
</head>
<body>




<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>Yemeksepeti Joker Hesaplayıcısı</h1>

            <br>

            <div class="alert alert-primary" role="alert">
                <h4 class="alert-heading">Nedir ?</h4>
                Yemeksepetinden verilen toplu siparişlerde; siparişe joker indirimi uygulandıktan sonra, tarafların indirim öncesinde aldığı ürünlere göre indirim sonrasında ne kadar ödemesi gerektiğini hesaplar.
				<br>
                Kısaca indirimi taraflar arasında doğru şekilde paylaştırır.
            </div>

            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Nasıl Kullanılır ?</h4>
				<ol>
                    <li>Toplu siparişe katılan kişilerin ismini ve aldığı ürünlerin toplam tutarını giriniz. <a href="./inc/img/01.png" target="blank" class="alert-link">Örnek resim &rarr;</a></li>
                    <li>Ardından "Hesapla" butonuna basınız. Joker indirimi sipariş tutarı üzerinden otomatik uygulanacak ve sonuçları ekranda gösterilecektir. <a href="./inc/img/02.png" target="blank" class="alert-link">Örnek resim &rarr;</a></li>
				</ol>
            </div>


            <form></form>
			

            <a class="btn btn-primary" href="javascript:void(0);" onclick="addItemBox();"><i class="fas fa-plus"></i></i> Ortak Ekle</a>
			<a class="btn btn-success" href="javascript:void(0);" onclick="calc();"><i class="fas fa-retweet"></i> Hesapla</a>
			
			<br>
			<br>
			<br>

			<div class="ads">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- joker - esnek kutu -->
				<ins class="adsbygoogle"
					 style="display:block"
					 data-ad-client="ca-pub-2453073529147932"
					 data-ad-slot="1587718225"
					 data-ad-format="auto"
					 data-full-width-responsive="true"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
        </div>
    </div>
    
    
    <!-- footer -->
    <div class="row">
        <div class="col-md-12">
            <br>
            <br>
            
            <p>
				&copy; 2013 - <?php echo date('Y'); ?> <a href="http://guvensahin.com" title="Güven Şahin">Tasarım ve Geliştirme</a> |
				<a href="https://github.com/guvensahin/joker-hesaplayici" title="kaynak kodları">GitHub</a> |
				<a href="http://benzersanatci.guvensahin.com" title="bir başka şükela araç: benzer sanatçı">benzer sanatçı</a>
			</p>

            <br>
        </div>
    </div>


</div><!-- /container -->




<div class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Sonuçlar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        <div id="modalContentResult"></div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tamam</button>
      </div>
    </div>

  </div>
</div>








<!-- AddThis -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5bccaeacdea50552"></script> 


</body>
</html>
