<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>  
<div class="container" style="width: 100%; height: 80%;margin-top: -60px;margin-bottom: -10px; margin-left: -10px;margin-right: -20px;">
<div class="carousel slide" id="miSlider" data-ride="carousel">
           
          <ol class="carousel-indicators">
            <li data-target="#miSlider" data-slide-to="0" class="active" style="visibility: hidden;"></li>
            <li data-target="#miSlider" data-slide-to="1" style="visibility: hidden;"></li>
            <li data-target="#miSlider" data-slide-to="2" style="visibility: hidden;"></li>
          </ol>

          <div class="carousel-inner"> 

              <div class="item active">
              <a href="#miSlider">
                <?php echo "<img src=\".." ?><?php echo Yii::app()->theme->baseUrl; ?><?php echo"/img/img1.jpg\" >";?>
                <div class="carousel-caption">
                  <h1>Relax</h1>
                  <p>Alojamientos pensados para ti!</p>
                </div>
              </a>
            </div> 

            <div class="item">
            <?php echo "<img src=\".." ?><?php echo Yii::app()->theme->baseUrl; ?><?php echo"/img/img2.jpg\" >";?>

              <div class="carousel-caption">
                <h1>Granada, lugar de encuentro.</h1>
                <p>Adentrate en su Alcaicería, sumergete en las noches del Albayzin</p>
              </div>
            </div>

            <div class="item">
            <?php echo "<img src=\".." ?><?php echo Yii::app()->theme->baseUrl; ?><?php echo"/img/img3.jpg\" >";?>
              <div class="carousel-caption">
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <h1>Sierra Nevada</h1>
                  </div>
                  <div class="hidden-xs col-sm-12">
                    <p>Disfruta de tu deporte favorito, más de 60km de pistas abiertas, te están esperando.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          
          <a href="#miSlider" class="carousel-control right" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>

        </div>
    
    	</div><!--/.fluid-container-->
	</div>
    <div class="passlider">
        <div class="container">
            <div class="row">
        <div class="iconoshome">
            <img src="../desarrollo/themes/blackboot/img/dispositivos/ic_phone_android_black_48dp.png" />
            <img src="../desarrollo/themes/blackboot/img/dispositivos/ic_laptop_mac_black_48dp.png" />
            <img src="../desarrollo/themes/blackboot/img/dispositivos/ic_tablet_black_48dp.png" />
        </div >
            </div>
            <p class="tituloseccion"><br>Aplicación multiplataforma</p>
            <h4 class="descripcionseccion" id="descripcionseccion"><br>Compatible con cualquier dispositivo, instale su app y disfrute de las mejores ofertas de alojamiento en Granada</h4>
        
        </div>
    </div>
    <div class="passlider">
        <div class="iconoshome">
            <img src="../desarrollo/themes/blackboot/img/home/ic_hearing_black_48dp.png" />
            <p class="tituloseccion"><br>Usabilidad</p>
            <h4 class="descripcionseccion"><br>Llegar a todos es nuestro compromiso. Por tal motivo desde AloAloha mejoramos constantemente nuestra apliacción con técnicas de usabilidad, para que solo se centre en lo importante, disfrutar de su alojamiento en Granada.</h4>
        </div>
    </div>
      <div class="passlider">
        <div class="iconoshome">
            <img src="../desarrollo/themes/blackboot/img/hotel/ic_hotel_black_48dp.png" />
            <p class="tituloseccion"><br>Nuestros Alojamientos</p>
            <h4 class="descripcionseccion"><br>Disponemos de la oferta de hospedería más amplia de Granada, consulte la disponibilidad y nosotros nos encargamos del resto.</h4>
        </div>
    </div>  
    
<div class="divapi">    
  <?php
include 'consultaapi.php';
?>
 
    </div>

 </div>