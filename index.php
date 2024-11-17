<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width">
   <title>TeaOn</title>
   <link rel="stylesheet" href="asset/style.css" media="screen">
   <script defer src="js/slider.js"></script>
   
</head>
<body> 
   <?php
      include('header/header.php');
   ?>

   <div class="wrapper" >

   <div class="cart"> 
      <a href="#popup-cart" class="cart__button"></a>
   </div>
   <div id="popup-cart">
      <div class="popup-cart">
      <a href="/" class="popup-cart__close"></a>
      <h4 class="poput-cart__title">Оформление заказа</h4>
      <div class="goods">

      </div>
      <div class="connection">
               <form class="connection__form form-connection">
                  <div class="form-connection__input">
                     <input class="form-connection__name" id="name" type="text" placeholder="Имя" required="required">
                     <div class="tel">
                        <label class="tel__title" for="online_phone">Номер телефона</label>
                        <input class="tel__input" id="online_phone" name="phone" type="tel"
                              required="required"
                              value="+_(___)___-__-__"
                              pattern="\+\[0-9]\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"
                              placeholder="+_(___)___-__-__">
                     </div>
                  </div>
                  <div class="form-connection__send">
                     <button class="contact-form__button" type="submit"> Отправить </button>
                     <div class="agreement">
                        <img src="img/cart/agreement.svg" alt="согласие">
                        <p>Я ознакомлен с Политикой конфиденциальности и согласен
                           на <a href="">обработку персональных данных.</a></p>
                     </div>
                  </div>
               </form>

      </div>
      <!-- <a href="" class="popup-cart__button">Отправить</a> -->
      </div>
   </div>

      <div class="background-1">
      <div class="background-1__section1">
            <h1 class="background-1__h1">Ваш <span class="bold-text">Любимый Чай</span><br> На <span class="bold-text">Каждый День</span></h1>
            <p class="background-1__p1">TeaOn подготавливает для Вас порционные наборы чая с инструкциями, чтобы Вы не думали о том, как его заваривать.</p>
         
            <a href="" class="link-button">Заказать</a>
            <div class="info background-1__info">
               <div class="info__time">
                  <img class="info__ikon" alt="time" src="img/header-section1/time.svg">
                  <div class="info__big-text">10:00 - 20:00</div>
                  <div class="info__little-text">Рабочие часы</div>
               </div>
               <div class="info__adress">
                  <img class="info__ikon" alt="adress" src="img/header-section1/adress.svg">
                  <div class="info__big-text">Velyka Vasylkivska 100</div>
                  <div class="info__little-text">Головной офис</div>
               </div>
               <div class="info__tel">
                  <img class="info__ikon" alt="tel" src="img/header-section1/tel.svg">
                  <div class="info__big-text">+7 (999) 999 99-99</div>
                  <div class="info__little-text">Горячая линия</div>
               </div>
            </div>
         </div>

      </div>

      <main>
         <div class="block-1">
            <div class="block__title title">
               <div class="title__docket">
                  <h2>Основы Чаепития</h2>
               </div>
            </div>
            <p class="block-1__p">Мы собрали для Вас наглядный  пример того как происходит приготовление нашей продукции в домашних условиях, чтобы получить полное наслаждение от любого чая.</p>
            <div class="slider">
               <div class="slider__button-1"></div>
               <div class="slider__images">
                  <div class="slider__img">
                     <img src="img/block1/img1.jpg" alt="food" class="">
                  </div>
                  <div class="slider__img">
                     <img src="img/block1/img2.jpg" alt="food" class="">
                  </div>
                  <div class="slider__img">
                     <img src="img/block1/img3.jpg" alt="food" class="">
                  </div>
                  <div class="slider__img slider__img_active-2">
                     <img src="img/block1/img4.jpg" alt="food" class="">
                  </div>
                  <div class="slider__img slider__img_active-1">
                     <img src="img/block1/img5.jpg" alt="food" class="">
                  </div>
               </div>
               <div class="slider__button-2"></div>
            </div>
         </div>
      
         <div class="block-2">
            <div class="block__title title">
               <div class="title__docket">
                  <h2>Как это происходит</h2>
               </div>
               <div class="title__bar"></div>
            </div>
            <div class="panel">
               <a href="" class="panel__item">
                  <h4 class="panel__title">Выбор чая</h4>
                  <div class="panel__bar"></div>
                  <p class="panel__text">Выберите все типы чая, которые Вам по душе, к каждому из них представлено подробное описание</p>
               </a>
               <a href="" class="panel__item">
                  <h4 class="panel__title">Частота доставки</h4>
                  <div class="panel__bar"></div>
                  <p class="panel__text">Как часто Вам будут доставлять чай, решать только Вам.</p>
               </a>
               <a href="" class="panel__item">
                  <h4 class="panel__title">Время доставки</h4>
                  <div class="panel__bar"></div>
                  <p class="panel__text">Временные интервалы доставки от 2 часов</p>
               </a>
               <a href="" class="panel__item">
                  <h4 class="panel__title">Наслаждение</h4>
                  <div class="panel__bar"></div>
                  <p class="panel__text">Необязательно придерживаться обязательной последовательности в приеме нашего чая. Вы вольны делать так, как чувствуете себя в данный момент.</p>
               </a>
            </div>
         </div>

         <div class="block-3" id="menu">
            <div class="block__title title">
               <div class="title__docket">
                  <h2>Чаи дня</h2>
               </div>
               <div class="title__bar"></div>
            </div>
            <div class="cards">
               <div class="card">
                  <div class="card__img-go">
                     <img class="img-dish" alt="food" src="img/block3/01.jpg">
                     <div class="card__go"></div>
                  </div>
                  <div class="card__explanation explanation"> 
                     <h3 class="explanation__h3">Набор Hard Work</h3>
                     <p class="explanation__p1">Served with french fries + drink</p>
                     <p class="explanation__p2">Choice of: Coke, Fanta, Sprite, Upgrade to large fries, Add whopper patty, Add Tender crisp patty and more...</p>
                     <div class="stars-order">   
                        <span class="stars">Рейтинг</span>
                        <span class="button-order">Заказать</span>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card__img-go">
                     <img class="img-dish" alt="food" src="img/block3/02.jpg">
                     <div class="card__go"></div>
                  </div>
                  <div class="card__explanation explanation"> 
                     <h3 class="explanation__h3">Набор Chill Day</h3>
                     <p class="explanation__p1">Served with french fries + drink</p>
                     <p class="explanation__p2">Choice of: Coke, Fanta, Sprite, Upgrade to large fries, Add whopper patty, Add Tender crisp patty and more...</p>
                     <div class="stars-order">   
                        <span class="stars">Рейтинг</span>
                        <span class="button-order">Заказать</span>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card__img-go">
                     <img class="img-dish" alt="food" src="img/block3/03.jpg">
                     <div class="card__go"></div>
                  </div>
                  <div class="card__explanation explanation"> 
                     <h3 class="explanation__h3">Набор Full Relax</h3>
                     <p class="explanation__p1">Served with french fries + drink</p>
                     <p class="explanation__p2">Choice of: Coke, Fanta, Sprite, Upgrade to large fries, Add whopper patty, Add Tender crisp patty and more...</p>
                     <div class="stars-order">   
                        <span class="stars">Рейтинг</span>
                        <span class="button-order">Заказать</span>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card__img-go">
                     <img class="img-dish" alt="food" src="img/block3/04.jpg">
                     <div class="card__go"></div>
                  </div>
                  <div class="card__explanation explanation"> 
                     <h3 class="explanation__h3">Набор Pallette of Flavors</h3>
                     <p class="explanation__p1">Served with french fries + drink</p>
                     <p class="explanation__p2">Choice of: Coke, Fanta, Sprite, Upgrade to large fries, Add whopper patty, Add Tender crisp patty and more...</p>
                     <div class="stars-order">   
                        <span class="stars">Рейтинг</span>
                        <span class="button-order">Заказать</span>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card__img-go">
                     <img class="img-dish" alt="food" src="img/block3/05.jpg">
                     <div class="card__go"></div>
                  </div>
                  <div class="card__explanation explanation"> 
                     <h3 class="explanation__h3">Набор Casual</h3>
                     <p class="explanation__p1">Served with french fries + drink</p>
                     <p class="explanation__p2">Choice of: Coke, Fanta, Sprite, Upgrade to large fries, Add whopper patty, Add Tender crisp patty and more...</p>
                     <div class="stars-order">   
                        <span class="stars">Рейтинг</span>
                        <span class="button-order">Заказать</span>
                     </div>
                  </div>
               </div>
               
               <div class="card">
                  <div class="card__img-go">
                     <img class="img-dish" alt="food" src="img/block3/06.jpg">
                     <div class="card__go"></div>
                  </div>
                  <div class="card__explanation explanation"> 
                     <h3 class="explanation__h3">Набор Sweet Dreams</h3>
                     <p class="explanation__p1">Served with french fries + drink</p>
                     <p class="explanation__p2">Choice of: Coke, Fanta, Sprite, Upgrade to large fries, Add whopper patty, Add Tender crisp patty and more...</p>
                     <div class="stars-order">   
                        <span class="stars">Рейтинг</span>
                        <span class="button-order">Заказать</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="block-4" id="chefs">
            <div class="block__title title">
               <div class="title__docket">
                  <h2>Легенды чаепитий</h2>
               </div>
               <div class="title__bar"></div>
            </div>
            <div class="chefs">
               <div class="chef">
                  <div class="chef-info">
                     <img src="img/block4/avatars/avatar1.svg" alt="avatar" class="chef__avatar">
                     <div>
                        <div class="chef__name">Gregory Flores</div>
                        <div class="chef__place">Chef of the cold</div>
                     </div>
                  </div>
                  <div class="chef__photos">
                     <img src="img/block4/dishes/1.1.jpg" alt="food" class="n1">
                     <img src="img/block4/dishes/1.2.jpg" alt="food" class="n2">
                     <img src="img/block4/dishes/1.3.jpg" alt="food" class="n2">
                  </div>
               </div>
               <div class="chef">
                  <div class="chef-info">
                     <img src="img/block4/avatars/avatar2.svg" alt="avatar" class="chef__avatar">
                     <div>
                        <div class="chef__name">Annette Cooper</div>
                        <div class="chef__place">Chef of the hot</div>
                     </div>
                  </div>
                  <div class="chef__photos">
                     <img src="img/block4/dishes/2.1.jpg" alt="food" class="n1">
                     <img src="img/block4/dishes/2.2.jpg" alt="food" class="n2">
                     <img src="img/block4/dishes/2.3.jpg" alt="food" class="n2">
                  </div>
               </div>
               <div class="chef">
                  <div class="chef-info">
                     <img src="img/block4/avatars/avatar3.svg" alt="avatar" class="chef__avatar">
                     <div>
                        <div class="chef__name">Greg Fox</div>
                        <div class="chef__place">Сhef macro kitchen</div>
                     </div>
                  </div>
                  <div class="chef__photos">
                     <img src="img/block4/dishes/3.1.jpg" alt="food" class="n1">
                     <img src="img/block4/dishes/3.2.jpg" alt="food" class="n2">
                     <img src="img/block4/dishes/3.3.jpg" alt="food" class="n2">
                  </div>
               </div>
            </div>
         </div>

         <div class="block-5" id="recipes">
            <div class="block__title title">
               <div class="title__docket">
                  <h2>Советы от нас</h2>
               </div>
               <div class="title__bar"></div>
            </div>
            <div class="banners">
               <a href="" class="banner" style="background-image: url(img/block5/background1.jpg);">
                  <div class="banner__go">
                     <img  class="banner__go-img" alt="go" src="img/block5/go.svg">
                  </div>
                  <p class="banner__p">Для пробуждения Ваших вкусовых рецепторов и подготовки к рабочему дню</p>
                  <div class="banner__elements elements">
                     <div class="elements__meal">К завтраку</div>
                     <div class="elements__data">02 Февраля 2024</div>
                     <div class="elements__views-comments">
                        <div class="elements__views">275</div>
                        <div class="elements__comments">12</div>
                     </div>

                  </div>
               </a>
               <a href="" class="banner" style="background-color:#252525;">
                  <div class="banner__go">
                     <img class="banner__go-img" alt="go" src="img/block5/go.svg">
                  </div>
                  <p class="banner__p"> Для получения легкости после большого приема пищи</p>
                  <div class="banner__elements elements">
                     <div class="elements__meal">Обед</div>
                     <div class="elements__data">05 Марта 2024</div>
                     <div class="elements__views-comments">
                        <div class="elements__views">275</div>
                        <div class="elements__comments">12</div>
                     </div>
                  </div>
               </a>
               <a href="" class="banner" style="background-image: url(img/block5/background2.jpg);">
                  <div class="banner__go">
                     <img class="banner__go-img" alt="go" src="img/block5/go.svg">
                  </div>
                  <p class="banner__p">Насладжение, которое хочет получить каждый от своего ужина</p>
                  <div class="banner__elements elements">
                     <div class="elements__meal">Ужин</div>
                     <div class="elements__data">05 Июля 2024</div>
                     <div class="elements__views-comments">
                        <div class="elements__views">275</div>
                        <div class="elements__comments">12</div>
                     </div>
                  </div>
               </a>
               <a href="" class="banner" style="background-color:#34C759; color: #000;">
                  <div class="banner__go">
                     <img class="banner__go-img" alt="go" src="img/block5/go.svg">
                  </div>
                  <p class="banner__p">Крепкий сон - залог Вашего здоровья</p>
                  <div class="banner__elements elements">
                     <div class="elements__meal">Сон</div>
                     <div class="elements__data" style="color: #000;">09 Августа 2024</div>
                     <div class="elements__views-comments">
                        <div class="elements__views">275</div>
                        <div class="elements__comments">12</div>
                     </div>
                  </div>
               </a>
            </div>
         </div>

         <div class="block-6" id="social">
            <div class="block__title title">
               <div class="title__docket">
                  <h2>Мы в Медиа</h2>
               </div>
               <div class="title__bar"></div>
            </div>
            <div class="social">
               <div class="social__twitter">
                  <div class="social__header">
                     <div class="social__icon-name">
                        <img src="img/block6/icon/twitter.svg" alt="twitter" class="social__icon">
                        <div class="social__name">Twitter</div>
                     </div>
                     <a class="social__button-link">FOLLOW US</a>
                  </div>
                  <div class="line-bottom"></div>
                     <div class="social__body">
                        <div class="social__data">24 Jun at 16:20 pm</div>
                        <div class="social__post">
                           <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore voluptas illo, tempore, repellat iure placeat numquam quibusdam eveniet soluta aspernatur, iusto assumenda ut deleniti. At distinctio iusto dolorum laborum quis.</p>
                           <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore voluptas illo, tempore, repellat iure placeat numquam quibusdam eveniet soluta aspernatur, iusto assumenda ut deleniti. At distinctio iusto dolorum laborum quis.</p>
                           <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore voluptas illo, tempore, repellat iure placeat numquam quibusdam eveniet soluta aspernatur, iusto assumenda ut deleniti. At distinctio iusto dolorum laborum quis.</p>
                           <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore voluptas illo, tempore, repellat iure placeat numquam quibusdam eveniet soluta aspernatur, iusto assumenda ut deleniti. At distinctio iusto dolorum laborum quis.</p>
                        </div>
                     </div>
               </div>
               <div class="social__instagram">
                  <div class="social__header">
                     <div class="social__icon-name">
                        <img src="img/block6/icon/instagram.svg" alt="twitter" class="social__icon">
                        <div class="social__name">Instagram</div>
                     </div>
                     <a class="social__button-link">FOLLOW US</a>
                  </div>
                  <div class="line-bottom line-bottom-opacity"></div>

                  <div class="social__body  social__body_padding social__body_scroll">
                     <div class="social__post social__post_display">
                        <img src="img/block6/instagram/post1.jpg" alt="photo" class="social__img-post">
                        <img src="img/block6/instagram/post2.jpg" alt="photo" class="social__img-post">
                        <img src="img/block6/instagram/post3.jpg" alt="photo" class="social__img-post">
                        <img src="img/block6/instagram/post4.jpg" alt="photo" class="social__img-post">
                        <img src="img/block6/instagram/post5.jpg" alt="photo" class="social__img-post">
                        <img src="img/block6/instagram/post6.jpg" alt="photo" class="social__img-post">
                     </div>

                  </div>
               </div>
               <div class="social__facebook">
                  <div class="social__header">
                     <div class="social__icon-name">
                        <img src="img/block6/icon/facebook.svg" alt="facebook" class="social__icon">
                        <div class="social__name">Facebook</div>
                     </div>
                     <a class="social__button-link">FOLLOW US</a>
                  </div>
                  <div class="line-bottom"></div>
                     <div class="social__body">
                        <div class="social__data">24 Jun at 16:20 pm</div>
                        <div class="social__post">
                           <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore voluptas illo, tempore, repellat iure placeat numquam quibusdam eveniet soluta aspernatur, iusto assumenda ut deleniti. At distinctio iusto dolorum laborum quis.</p>
                           <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore voluptas illo, tempore, repellat iure placeat numquam quibusdam eveniet soluta aspernatur, iusto assumenda ut deleniti. At distinctio iusto dolorum laborum quis.</p>
                           <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore voluptas illo, tempore, repellat iure placeat numquam quibusdam eveniet soluta aspernatur, iusto assumenda ut deleniti. At distinctio iusto dolorum laborum quis.</p>
                           <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore voluptas illo, tempore, repellat iure placeat numquam quibusdam eveniet soluta aspernatur, iusto assumenda ut deleniti. At distinctio iusto dolorum laborum quis.</p>    
                        </div>
                     </div>
               </div>
            </div>
         </div>
      </main>
      <footer class="footer">
         <section class="footer__section footer__section-1">
            <div class="info">
               <div class="info__time">
                  <img class="info__ikon" alt="time" src="img/header-section1/time.svg">
                  <div class="info__big-text">Каждый день с 10:00 - 20:00</div>
                  <div class="info__little-text">Working hours</div>
               </div>
               <div class="info__adress">
                  <img class="info__ikon" alt="agress" src="img/header-section1/adress.svg">
                  <div class="info__big-text">Velyka Vasylkivska 100</div>
                  <div class="info__little-text">Головной офис</div>
               </div>
               <div class="info__tel">
                  <img class="info__ikon" alt="tel" src="img/header-section1/tel.svg">
                  <div class="info__big-text">+7 (999) 345 32-33</div>
                  <div class="info__little-text">Горячая линия</div>
               </div>
            </div>
         </section>
         <div class="line-bottom"></div>
         <section class="footer__section footer__section-2">
            <a href="index.html"  class="logo"></a>
            <div class="footer__polit">© Designed by Yellow Snow. All Rights Reserved. </div>
         </section>
      </footer>
   </div>
</body>
</html>