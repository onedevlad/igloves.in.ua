
<?php $f=file_get_contents(dirname($_SERVER['SCRIPT_FILENAME']).'/scripts/config.json'); settype($f, 'string'); $parsed=json_decode($f, true);?>
<?php if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['phone'])){mail($parsed['mail'], 'Новый заказ!', $_POST['surname'].' '.$_POST['name'].' (.'.$_POST['phone'].') заказал(а) stickypad!', "Content-type: text/plain; charset=utf-8");}?><!DOCTYPE html>
<html lang="uk">
  <head><script>var originalPrice=parseFloat('<?php echo $parsed["original-price"]; ?>') || 100; var discount=parseFloat('<?php echo $parsed["discount-percent"]; ?>');</script>
    <script type="text/javascript" async="" src="https://mc.yandex.ru/metrika/watch.js"></script>
    <script src="scripts/jquery.js"></script>
    <script src="scripts/mask.js"></script>
    <script defer src="scripts/custom.js"></script>
    <link rel="stylesheet" href="styles/custom.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>iGloves.in.ua</title>
  </head>
  <body>
    <div class="container-fluid screen-1">
      <div class="overlay">
        <div class="row header-info">
          <div class="col-md-4 header-info-left pull-left"><img src="images/np.png" alt=""><span>Доставка по всей Украине</span></div>
          <div class="col-md-2 pull-right header-info-right"><span>+38 (066) 881 06 22</span></div>
        </div>
        <div class="row header">
          <h1 class="heading">Заголовок</h1>
          <div class="col-md-5 video-wrapper"></div>
          <div class="col-md-4 col-md-offset-3 header-form-wrapper">
            <form method="POST">
              <h3>Закажите сейчас</h3>
              <table>
                <tr>
                  <td class="left">Ваше имя:</td>
                  <td>
                    <input name="name">
                  </td>
                </tr>
                <tr>
                  <td class="left">Ваша фамилия:</td>
                  <td>
                    <input name="surname">
                  </td>
                </tr>
                <tr>
                  <td class="left">Номер телефона:</td>
                  <td>
                    <input id="phone">
                  </td>
                </tr>
                <tr>
                  <td class="left">Цвет перчаток:</td>
                  <td>
                    <select name="color">
                      <option>Черный</option>
                      <option>Черный</option>
                      <option>Черный</option>
                      <option>Черный</option>
                      <option>Черный</option>
                    </select>
                  </td>
                </tr>
              </table>
              <button class="header-form-order">Заказать сейчас</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid screen-2">
      <div class="container">
        <h1>Преимущества перчаток</h1>
        <div class="row properties">
          <div class="col-md-3"><img src="images/devices.png" alt=""><span> <b>iGlove </b>- это универсальные перчатки, которые подойдут к любому устройству</span></div>
          <div class="col-md-3"><img src="images/energy.png" alt=""><span>Благодаря уникальной технологии Touch Silver энергия от пальцев легко проходит к экрану </span></div>
          <div class="col-md-3"><img src="images/ok.png" alt=""><span>Многолетний опыт использования <b>iGlove </b>показывает качество, практичность и<br>удобство таких перчаток</span></div>
          <div class="col-md-3"><img src="images/glove.png" alt=""><span>Универсальный размер</span></div>
        </div>
      </div>
      <div class="row divider">
        <div class="col-lg-12">
          <div class="left"></div>
          <div class="inner"></div>
          <div class="right"></div>
        </div>
      </div>
    </div>
    <div class="container-fluid screen-3">
      <h1>Характеристики перчаток</h1>
      <div class="row desc">
        <div class="hidden-xs hidden-sm line line-1"></div>
        <div class="hidden-xs hidden-sm line line-2"></div>
        <div class="hidden-xs hidden-sm line line-3"></div>
        <div class="hidden-xs hidden-sm line line-4"></div>
        <div class="col-sm-3 hidden-xs hidden-sm desc-text"><span class="desc-text-1">Lorem ipsum dolor sit amet, consectetur adipisicing</span><span class="desc-text-3">Lorem ipsum dolor sit amet, consectetur adipisicing</span></div>
        <div class="col-sm-6 col-sm-offset-3 col-md-offset-0 desc-img"><img src="images/gloves-benefits.png"></div>
        <div class="col-sm-3 hidden-xs hidden-sm desc-text"><span class="desc-text-2">Lorem ipsum dolor sit amet, consectetur adipisicing</span><span class="desc-text-4">Lorem ipsum dolor sit amet, consectetur adipisicing</span></div>
        <div class="col-xs-12 hidden-md hidden-lg"><span class="desc-text-1">Lorem ipsum dolor sit amet, consectetur adipisicing</span><span class="desc-text-2">Lorem ipsum dolor sit amet, consectetur adipisicing</span><span class="desc-text-3">Lorem ipsum dolor sit amet, consectetur adipisicing</span><span class="desc-text-4">Lorem ipsum dolor sit amet, consectetur adipisicing</span></div>
      </div>
      <div class="row divider">
        <div class="col-lg-12">
          <div class="left"></div>
          <div class="inner"></div>
          <div class="right"></div>
        </div>
      </div>
    </div>
    <div class="container-fluid screen-4">
      <div class="row pad-price">
        <div class="col-md-3 col-md-offset-2 col-xs-8 col-xs-offset-3 pad-image"><img src="images/pad.png" alt="" class="pad">
          <div class="discount"><img src="images/discount.png" alt="" class="discount-img">
            <nobr class="discount-text">-<span class="discount-value">65</span>%</nobr>
          </div>
        </div>
        <div class="col-md-3 col-md-offset-1 pad-text"><span class="old-price">Старая цена: <span class="overlined"><span class="original-price-value">100</span><span>грн</span></span></span><span class="new-price"><span class="new-price-value">35</span><span>грн</span></span>
          <button class="order">Заказать сейчас</button>
        </div>
      </div>
      <div class="row work-description-title">
        <h1 class="col-lg-12">Как мы работаем</h1>
      </div>
      <div class="row work-description">
        <div class="col-md-3"><img src="images/form.png" alt=""><span>Заполните форму заказа</span></div>
        <div class="col-md-3"><img src="images/reply.png" alt=""><span>Мы свяжемся с вами в течение часа</span></div>
        <div class="col-md-3"><img src="images/edit.png" alt=""><span>Уточните детали заказа</span></div>
        <div class="col-md-3"><img src="images/deliever.png" alt=""><span>Получите ваш заказ</span></div>
      </div>
      <div class="row divider">
        <div class="col-lg-12">
          <div class="left"></div>
          <div class="inner"></div>
          <div class="right"></div>
        </div>
      </div>
    </div>
    <div class="container-fluid screen-5">
      <h1>Универсальность и удобство!</h1>
      <div class="row properties">
        <div class="col-md-4 left-column">
          <h3>Харатеристика</h3>
          <table>
            <tr>
              <td>Материал:</td>
              <td class="right-row">силикон</td>
            </tr>
            <tr>
              <td>Размер:</td>
              <td class="right-row">14см х 8см x 2.5мм</td>
            </tr>
            <tr>
              <td>Цвета:</td>
              <td class="right-row">черный, прозрачный</td>
            </tr>
          </table>
          <h5>Особенности противоскользящего наноковрика:</h5>
          <ul>
            <li>Подходит для любой приборной панели</li>
            <li>Многоразовое использование</li>
            <li>Коврик изготовлен без использования клейких материалов</li>
            <li>Коврик изготовлен без использования магнитов</li>
          </ul>
        </div>
        <div class="col-md-4 middle-column"><img src="images/tr_pad.png" alt="Sticky pad"></div>
        <div class="col-md-4 right-column">
          <h3>Распродажа!</h3><img src="images/arrow.png" class="arrow">
          <h5 class="old-price">Старая цена:<span class="overlined"><span class="original-price-value">100</span><span>грн</span></span></h5><span class="new-price"><span class="new-price-value">35</span><span>грн</span></span>
          <button class="order">Заказать сейчас</button>
        </div>
      </div>
    </div>
    <div class="container-fluid screen-6">
      <div class="overlay">
        <div class="benefits">
          <ul>
            <li>Разработан учеными NASA для полетов в космос Sticky map очень практичен на панели автомобилей.</li>
            <li>Но он также подходит для кухни, ванной комнаты и для любых поверхностей.</li>
            <li>Вы можете не бояться, что коврик испачкается и потеряет свои свойства. Просто помойте «липкий» коврик , дайте ему просохнуть и он будет как новый!</li>
            <li>Наноковрик отлично подойдет для телефонов, ключей, очков и прочих предметов, которые ни в коем случаи не упадут во время езды.</li>
          </ul>
        </div>
      </div>
    </div>
    <div id="order-screen" class="container-fluid screen-7">
      <h1>Закажите коврик-липучку со скидкой</h1>
      <center>
        <form id="form" method="post">
          <table>
            <tr>
              <td>Ваше имя:</td>
              <td>
                <input id="name" type="text" autocomplete="off" name="name">
              </td>
            </tr>
            <tr>
              <td>Ваша фамилия:</td>
              <td>
                <input id="surname" type="text" autocomplete="off" name="surname">
              </td>
            </tr>
            <tr>
              <td>Номер телефона:</td>
              <td>
                <input id="phone" type="text" autocomplete="off" name="phone">
              </td>
            </tr>
          </table>
        </form>
        <button id="order" class="order">Отправить заказ</button>
      </center>
    </div>
  </body>
</html>