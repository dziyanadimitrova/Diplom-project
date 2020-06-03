<!DOCTYPE html>
<html lang="en">
<head>
	<title>Grand Realt</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="hero">
				<header class="main-header padding-site">
			<div class="main-header-top">
				<a href="#">
					<img src="img/logo1.jpg" class="logo" width="300" height="150">
				</a>
				<ul class="navigation-menu-top">
					
					@guest
                        <li class="navigation-menu-list"><a href="/register" class="navigation-menu-link">Регистрация</a></li>
					<li class="navigation-menu-list"><a href="/login" class="navigation-menu-link navigation-menu-link-active">Вход</a></li>   
                            
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
				</ul>
			</div>
			<div class="main-header-bottom">
				 <nav id="primary_nav_wrap">
				
				      <ul class="navigation-menu-bottom">
                      
				        <li><a href="zhilaya">Жилая</a>
				          <ul>
				            <li><a href="prodazha">Продажа</a>
				              <ul>
				                <li><a href="novostroyka">Новостройки</a></li>
				                <li><a href="kvartira">Квартиры</a></li>
				                <li><a href="komnata">Комнаты</a></li>
				                
				                
				              </ul>
				            
				            </li>
				            <li><a href="arenda">Аренда</a><ul>
				                <li><a href="kvartira">Квартиры</a></li>
				                <li><a href="komnata">Комнаты</a></li>
				                <li><a href="kvartira_sutki">Квартиры на сутки</a></li>
				                <li><a href="komnata_sutki">Комнаты на сутки</a></li>
				                
				              </ul></li>
				            <li><a href="spros">Cпрос</a><ul>
				                <li><a href="kupit_kvartiry">Куплю квартиру</a></li>
				                <li><a href="snimy_kvartiry">Сниму квартиру</a></li>
				                <li><a href="kupit_komnaty">Куплю комнату</a></li>
				                <li><a href="snimy_komnaty">Сниму комнату</a></li>
				                
				              </ul></li>
				          </ul>
				        </li> <li><a href="kommerch">Коммерческая</a>
				          <ul>
				            <li><a href="prodazha">Продажа</a>
				              <ul>
				                <li><a href="biznes_center">Бизнес центры</a></li>
				                <li><a href="tc">Торговые центры</a></li>
				                <li><a href="ofice">Офисы, нежелые помещения</a></li>
								<li><a href="cafe">Рестораны, бары, кафе</a></li>
								<li><a href="sklad">Склады, производства</a></li>
				                <li><a href="magazin">Магазины, торговые помещения</a></li>
								<li><a href="garazh">Гаражи, машиноместа</a></li>
				                
				              </ul>
				            
				            </li>
				            <li><a href="arenda">Аренда</a><ul>
							
				                <li><a href="#">Бизнес центры</a></li>
				                <li><a href="#">Торговые центры</a></li>
				                <li><a href="#">Аренда офиса, помещений</a></li>
								<li><a href="#">Рестораны, бары, кафе</a></li>
								<li><a href="#">Склады, производства</a></li>
				                <li><a href="#">Магазины, торговые помещения</a></li>
								<li><a href="#">Аренда гаража, машиноместа</a></li>
				                
				              </ul></li>
				            <li><a href="#">Cпрос</a><ul>
				                <li><a href="#">Куплю офис, помещение</a></li>
				                <li><a href="#">Куплю магазин</a></li>
				                <li><a href="#">Куплю склад</a></li>
				                <li><a href="#">Куплю гараж</a></li>
								<li><a href="#">Сниму офис, помещение</a></li>
				                <li><a href="#">Сниму магазин</a></li>
				                <li><a href="#">Сниму склад</a></li>
				                <li><a href="#">Сниму гараж</a></li>
				                
				              </ul></li>
				          </ul>
				        </li> <li><a href="#">Загородная</a>
				          <ul>
				            <li><a href="#">Продажа</a>
				              <ul>
				                <li><a href="#">Коттеджные поселки</a></li>
				                <li><a href="#">Коттеджи, дома, участки</a></li>
				                <li><a href="#">Проекты домов</a></li>
				                
				                
				              </ul>
				            
				            </li>
				            <li><a href="#">Аренда</a><ul>
				                <li><a href="#">Коттеджи на сутки</a></li>
				                <li><a href="#">Агроусадьбы на сутки</a></li>
				                <li><a href="#">Коттеджи в аренду длительно</a></li>
				                
				                
				              </ul></li>
				            <li><a href="#">Cпрос</a><ul>
				                <li><a href="#">Куплю коттедж, дом</a></li>
				                <li><a href="#">Куплю дачу</a></li>
				                <li><a href="#">Куплю участок</a></li>
				                <li><a href="#">Сниму коттедж</a></li>
				                
				              </ul></li>
				          </ul>
				        </li> <li><a href="#">Зарубежная</a>
				          <ul>
				            <li><a href="#">Жилая</a>
				              
				            
				            </li>
				            <li><a href="#">Коммерческая</a></li>
				            <li><a href="#">Земля, участки</a></li>
							<li><a href="#">Аренда</a></li>
				          </ul>
				        </li> <li><a href="#">Участки</a>
				          
				        </li>
				       </ul>
				</nav>
				<a href="#" class="add-announcement">Добавить объявление</a>
			</div>
		</header>
	@yield('content')

	<footer>
		<div class="wrapper footer">
			<ul>
				

				

				<li class="links">
					<ul>
						
						
						<li><a href="/design">Дизайн интерьера</a></li>
						<li><a href="/cleaning">Услуги по уборке</a></li>
					<li><a href="/strahovanie">Страхование недвижимости</a></li>
						
					</ul>
				</li>
				
				<li class="links">
					<ul>
					<li><a href="/ocenka">Оценка недвижимости</a></li>
						<li><a href="/reklama">Размещение рекламы</a></li>
						
						
						
					</ul>
				</li>

                <li class="links">
					<ul>
						<li><a href="/contacts">Контактная информация</a></li>
					
						<li><a href="/information">Размещение информации</a></li>
						
					</ul>
				</li>
<li class="links">
					<ul>
					
					
						<li><a href="/cost">Прейскурант</a></li>
						
						<li><a href="/questions">Часто задаваемые вопросы</a></li>
						
					</ul>
				</li>

				<li class="about">
					
					<ul>
						<li><a href="http://facebook.com/pixelhint" class="facebook" target="_blank"></a></li>
						<li><a href="http://twitter.com/pixelhint" class="twitter" target="_blank"></a></li>
						<li><a href="http://plus.google.com/+Pixelhint" class="google" target="_blank"></a></li>
						<li><a href="#" class="skype"></a></li>
					</ul>
				</li>
			</ul>
		</div>

		
	</footer><!--  end footer  -->
	
</body>
</html>