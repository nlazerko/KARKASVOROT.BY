<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="KARKASVOROT.BY - Каркасы откатных ворот с калиткой. Предлагаем качественные ворота по лучшим ценам. Оформите заказ онлайн."
    />
    <meta
      name="keywords"
      content="каркасы ворот, откатные ворота, распашные ворота, калитка, ворота с калиткой, KARKASVOROT, ворота на заказ"
    />
    <meta name="author" content="Mikalai Lazerka" />
    <meta name="robots" content="index, follow" />
    <meta name="theme-color" content="#42a9ed" />

    <title>KARKASVOROT.BY</title>
    <?php
        wp_head();
    ?>
  </head>
  <body>
    <header class="header">
      <div class="container header__nav">
        <a href="#" class="main__logo"
          >KARKASVOROT.<span class="logo">BY</span></a
        >
        <nav class="nav">
          <a href="#products">продукция и цены</a>
          <a href="#examples">наши работы</a>
          <a href="#order">оформить заказ</a>
        </nav>
        <div class="contact">
          <a href="viber://chat?number=%2B375447726823"
            ><i class="fa-brands fa-viber"></i
          ></a>
          <a href="tg://resolve?domain=Maksimus05061981"
            ><i class="fa-brands fa-telegram"></i
          ></a>
          <a href="tel:+375447726823" class="phone_dec">+375447726823</a>
          <a href="tel:+375447726823" class="phone"
            ><i class="fa-solid fa-phone"></i
          ></a>
        </div>

        <div class="burger-menu" id="burger-menu">
          <i class="fa fa-bars"></i>
        </div>
      </div>
    </header>

    <section class="promo">
      <div class="container">
        <div class="row promo_row">
          <div class="col-md-6 promo_description">
            <div class="promo_header title">
              Изготовление
              <span>и монтаж <br />металло</span>конструкций
            </div>
            <div class="promo_subheader">
              Мы уверены, что сможем предложить Вам<br />
              изделия из металла по лучшей цене!
            </div>
            <ul class="promo_li">
              <li>- Откатные ворота</li>
              <li>- Распашные ворота</li>
              <li>- Калитка</li>
              <li>- Прочее</li>
            </ul>
            <a href="#order"><button class="promo_btn">Заказать</button></a>
          </div>

          <div class="col-md-6 promo_img">
            <img
              src="<?php echo bloginfo('template_url');?>/assets/promo360.jpg"
              alt="въездные ворота"
              class="promo360"
            />
            <div class="square"
            style=" background: url('<?php echo get_template_directory_uri(); ?>/assets/Group27.svg') center center/cover no-repeat;">
              <div class="square_text">
                Если Вам требуются въездные ворота,<br />
                то откатной вариант
                <span>— это отличное решение</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="price">
      <div class="container">
        <div class="row price_row" >
          <div class="price_title title" id="products">
            <span>Продукция </span>и цены
          </div>
          <?php
            
                           
                $posts = get_posts( array(
                  'numberposts' => -1,
                  'category_name'    => 'product',
                  'orderby'     => 'date',
                  'order'       => 'ASC',
                  'include'     => array(),
                  'exclude'     => array(),
                  'post_type'   => 'post',
                  'suppress_filters' => true,
                ) );

                global $post;

                foreach( $posts as $post ){
                  setup_postdata( $post );
                    ?> 
                      <div class="card_product" style="margin-top: 1.5rem;" >
            <img src="<?php the_field('foto'); ?>" alt="" class="img_product" />
            <div class="name_product"><?php the_title();?></div>
            <div class="info_product">
              <div class="price_product"><?php the_field('price'); ?></div>
              <div class="material_product">
                <div class="price_product"><?php the_field('material'); ?></div>
              </div>
            </div>
            <a href="#order"><button class="btn_product">заказать</button></a>
          </div>
     
            <?php
         
                }

                wp_reset_postdata(); 
                                      ?>
        
         
        </div>
        <div class="price_descr">
          *При оформлении заказа с вами свяжется специалист и согласует вид,
          точную высоту, длину каркаса<br />
          (Цена может поменяться) 
        </div>
      </div>
    </section>

    <section class="carousel">
      <div class="container">
        <div class="title carousel_header">Наши <span>работы</span></div>
        <div class="owl-carousel owl-theme" id="examples">

         <?php
            
                           
                $posts = get_posts( array(
                  'numberposts' => -1,
                  'category_name'    => 'slider',
                  'orderby'     => 'date',
                  'order'       => 'ASC',
                  'include'     => array(),
                  'exclude'     => array(),
                  'post_type'   => 'post',
                  'suppress_filters' => true,
                ) );

                global $post;

                foreach( $posts as $post ){
                  setup_postdata( $post );
                    ?> 
                      
     <div class="item"><img src="<?php the_field('photo'); ?>" alt="" /></div>
            <?php
         
                }

                wp_reset_postdata(); 
                                      ?>
          

        </div>
      </div>
    </section>

    <section class="form_order" id="order" style="margin-bottom: 2rem;">
      <div class="container order">
        <div class="order_title title">
          <img
            src="<?php echo bloginfo('template_url');?>/assets/white-arrow.svg"
            alt=""
            class="white_arrow order_arrow"
          />
          <span>Оформление</span> Заказа
          <img
            src="<?php echo bloginfo('template_url');?>/assets/blue-arrow.svg"
            alt=""
            class="blue_arrow order_arrow"
          />
        </div>

        <form action="https://api.web3forms.com/submit" method="POST">
          <input
            type="hidden"
            name="access_key"
            value="43af55d2-b307-4c5c-b55d-10d61cd4afd6"
          />
          <div class="form_input">
            <select name="products" class="form_box" required>
              <option value="" disabled selected>Выберите продукцию</option>
              <option value="Каркас откатных ворот">
                Каркас откатных ворот
              </option>
              <option value="Каркас распашных ворот">
                Каркас распашных ворот
              </option>
              <option value="Каркас калитки">Каркас калитки</option>
              <option value="Каркас откатных ворот">Каркас мебели</option>
              <option value="Каркас откатных ворот">Обувница сварная</option>
              <option value="Прочее">Прочее</option>
            </select>

            <input
              type="tel"
              id="phone"
              name="phone"
              class="form_box"
              required
              placeholder="Ваш телефон с кодом"
              autocomplete="off"
            />

            <input
              type="text"
              name="name"
              class="form_box"
              required
              placeholder="Ваше имя"
              autocomplete="off"
            />
          </div>

          <input type="submit" value="Отправить" class="form_btn" name="send" />
        </form>
      </div>
    </section>
   <?php
   wp_footer();
   ?>
  </body>
  <footer>
    <div class="container footer_info">
      Все права защищены. Любое использование либо копирование материалов и
      (или) подборки материалов сайта, элементов дизайна и оформления
      допускается лишь с письменного разрешения правообладателя и только со
      ссылкой на источник: URL
    </div>
  </footer>
</html>
