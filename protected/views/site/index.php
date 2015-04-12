<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>  

<div class="carousel slide" id="miSlider" data-ride="carousel">
           
          <ol class="carousel-indicators">
            <li data-target="#miSlider" data-slide-to="0" class="active"></li>
            <li data-target="#miSlider" data-slide-to="1"></li>
            <li data-target="#miSlider" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner">

            <div class="item active">
              <a href="#miSlider">
                <img src="img/imagen1.jpg" alt="Imagen1">
                <div class="carousel-caption">
                  <h1>Sala</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, asperiores</p>
                </div>
              </a>
            </div> 

            <div class="item">
              <img src="img/imagen2.jpg" alt="Imagen2">
              <div class="carousel-caption">
                <h1>Comedor</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, asperiores</p>
              </div>
            </div>

            <div class="item">
              <img src="img/imagen3.jpg" alt="Imagen3">
              <div class="carousel-caption">
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <h1>Perro</h1>
                  </div>
                  <div class="hidden-xs col-sm-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, numquam, ut voluptatibus fuga porro quae cupiditate aperiam beatae mollitia maxime libero explicabo molestias in saepe ab aliquid culpa accusantium. Illo!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          
          <a href="#miSlider" class="carousel-control right" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>

        </div>

