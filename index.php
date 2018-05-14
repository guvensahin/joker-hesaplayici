<!DOCTYPE html>
<html>
<head>
    <title>Yemeksepeti Joker Hesaplayıcısı</title>

    <!-- Meta
    ================================================== -->
    <meta charset="utf-8">
    <meta name="description" content="Bu uygulama; yemeksepetinden verilen toplu siparişlerde, siparişe joker indirimi uygulandıktan sonra, tarafların indirim öncesinde aldığı ürünlere göre indirim sonrasında ne kadar ödemesi gerektiğini hesaplar.">
    <meta name="keywords" content="yemeksepeti joker hesap, yemeksepeti joker hesaplayıcısı, joker, yemeksepeti, joker indirim">



    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="inc/js/bootstrap/css/bootstrap.min.css">
    <style type="text/css">
        body
        {
            padding-top: 20px;
            background-color: #f9f9f9;
        }
    </style>


    <!-- JavaScript
    ================================================== -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script src="inc/js/bootstrap/js/bootstrap.min.js"></script>
    <script src="inc/js/jquery.numeric.js"></script>
    <script src="inc/js/custom.js"></script>


    <!-- google analytics -->
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-28195039-3']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>

</head>
<body>




<div class="container">


    <div class="row">
        <div class="span8">
            <h3>Yemeksepeti Joker Hesaplayıcısı</h3>

            <div class="alert alert-info">
                <strong>Nedir ?</strong> Yemeksepetinden verilen toplu siparişlerde; siparişe joker indirimi uygulandıktan sonra, tarafların indirim öncesinde aldığı ürünlere göre indirim sonrasında ne kadar ödemesi gerektiğini hesaplar.
				<br>Kısaca indirimi taraflar arasında doğru şekilde paylaştırır.
            </div>

            <div class="alert alert-success">
                <strong>Nasıl Kullanılır ?</strong>
				<ol>
				<li>Toplu siparişe katılan kişilerin ismini ve aldığı ürünlerin toplam tutarını giriniz. <a href="./inc/img/01.png">Örnek resim</a></li>
				<li>Ardından "Hesapla" butonuna basınız. Joker indirimi sipariş tutarı üzerinden otomatik uygulanacak ve sonuçları ekranda gösterilecektir. <a href="./inc/img/02.png">Örnek resim</a></li>
				</ol>
				
            </div>

            <form class="form-inline" id="calcForm"></form>
			
            <a class="btn" href="javascript:void(0);" onclick="addItemBox();"><i class="icon-plus"></i> Ortak Ekle</a>
			<a class="btn btn-success" href="javascript:void(0);" onclick="calc();"><i class="icon-retweet"></i> Hesapla</a>
			
			
        </div>


        <div class="span4">
            <!-- AddThis Button BEGIN -->
            <div class="addthis_toolbox addthis_floating_style addthis_counter_style" style="left:50px;top:50px;">
                <a class="addthis_button_facebook_like" fb:like:layout="box_count"></a>
                <a class="addthis_button_tweet" tw:count="vertical"></a>
                <a class="addthis_button_google_plusone" g:plusone:size="tall"></a>
                <a class="addthis_counter"></a>
            </div>
            <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4f205ff166b840c7"></script>
            <!-- AddThis Button END -->
        </div>
    </div>
    
    
    <div class="row">
        <div class="span12">
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>
				&copy; 2013 - <?php echo date('Y'); ?> <a href="http://guvensahin.com" title="Güven Şahin">Tasarım ve Geliştirme</a> |
				<a href="https://github.com/guvensahin/joker-hesaplayici" title="kaynak kodları">GitHub</a> |
				<a href="http://benzersanatci.com" title="bir başka şükela araç: benzer sanatçı">benzer sanatçı</a>
			</p>
        </div>
    </div>


</div> <!-- /container -->








<!-- myModal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3>Sonuçlar</h3>
	</div><!-- end modal-header -->
	
	
	<div class="modal-body">
		<div id="modalContent"></div>
    </div><!-- end modal-body -->
</div><!-- end myModal -->










</body>
</html>
