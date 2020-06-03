	@extends('layouts.base')
	@section('content')
		<form class="forma">
		
		<div class="inside_form1">
		<p class="labelforma" align="right">
 <label>
Область
</label></p>
<p class="labelforma" align="right">
 <label>
Населенный пункт
</label></p>
<p class="labelforma" align="right">
 <label>
Цена общая, $: 
</label></p>
<p class="labelforma" align="right">
 <label>
Цена за м2, $: 
</label></p>
<p class="labelforma" align="right">
 <label>
Площадь: 
</label></p>
 </div>


	<div class="inside_form2">	
<p><select name="list1" >
  <option>Все области</option>
  <option>Минская</option>
  <option>Витебская</option>
  <option>Гомельская</option>
  <option>Гродненская</option>
  <option>Брестская</option>
  <option>Могилевская</option>
 </select></p>
  <input type="text1" id="city" size="29">
 <div class="inside_form3"> 
 <p>
  <label >
от
</label>
  <input type="text1" id="prise_ot" size="9">
 
   <label>
до
</label>
  <input type="text1" id="prise_do" size="9"></p>
 <p>
  <label>
от
</label>
  <input type="text1" id="prise_m_ot" size="9">
 
   <label>
до
</label>
  <input type="text1" id="prise_m_do" size="9"></p>
  <p>
  <label>
от
</label>
  <input type="text1" id="area_ot" size="9">
 
   <label>
до
</label>
  <input type="text1" id="area_do" size="9"></p>
  <p>
  <label>  
  

</div>
</div>


<a href="#" class="find">Найти</a>

</form>







		<!--  end header section  -->

			<section class="caption">
			
			
			
			
			
			
			
			</section>
	</section><!--  end hero section  -->


	<section class="search">
		<div class="wrapper">
			<form action="#" method="post">
				<input type="text" id="search" name="search" placeholder="Быстрый поиск"  autocomplete="off"/>
				<input type="submit" id="submit_search" name="submit_search"/>
			</form>
			<a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
		</div>

		<div class="advanced_search">
			<div class="wrapper">
				<span class="arrow"></span>
				<form action="#" method="post">
					<div class="search_fields">
						<input type="text" class="float" id="check_in_date" name="check_in_dateF" placeholder="Количество комнат от"  autocomplete="off">

						<hr class="field_sep float"/>

						<input type="text" class="float" id="check_out_date" name="check_out_date" placeholder="Количество комнат до"  autocomplete="off">
					</div>
					<div class="search_fields">
						<input type="text" class="float" id="min_price" name="min_price" placeholder="Минимальная цена за метр"  autocomplete="off">

						<hr class="field_sep float"/>

						<input type="text" class="float" id="max_price" name="max_price" placeholder="Максимальная цена за метр"  autocomplete="off">
					</div>
					<input type="text" id="keywords" name="keywords" placeholder="Район"  autocomplete="off">
					<input type="submit" id="submit_search" name="submit_search"/>
				</form>
			</div>
		</div><!--  end advanced search section  -->
	</section><!--  end search section  -->


	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
				<li>
					<a href="#">
						<img src="img/property_1.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">1914 USD/m2</span>
					<div class="property_details">
						<h1>
							<a href="#">3-комнатная квартира по пр. Победителей 75 к. 1</a>
						</h1>
						<h2 class="textvipmin">65.3 м2 общая площадь <span class="property_size"></span></h2>
					</div>
				</li>
				<li>
					<a href="#">
						<img src="img/property_2.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">1483 USD/m2</span>
					<div class="property_details">
						<h1>
							<a href="#">1- комнатная квартира Советский район, ул. Якуба Коласа д. 61-2.</a>
						</h1>
						<h2 class="textvipmin">35 м2 общая площадь<span class="property_size"></span></h2>
					</div>
				</li>
				<li>
					<a href="#">
						<img src="img/property_3.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">1214 USD/m2</span>
					<div class="property_details">
						<h1>
							<a href="#">3-комнатная квартира по ул. Янки Мавра 3</a>
						</h1>
						<h2 class="textvipmin">70 м2 общая площадь<span class="property_size"></span></h2>
					</div>
				</li>
				
				
				
			</ul>
			<div class="more_listing">
				<a href="#" class="more_listing_btn">Ещё</a>
			</div>
		</div>
	</section>	<!--  end listing section  -->
	@endsection