@extends('layouts.base')
<div>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
		
				@include("includes.dobmenu") 
				
				 <form action="{{asset('send/')}}">
				
				<div class="kvartiradob">
		

		<div class="dobnovobjavl">  Добавить новое объявление	</div>
		  
		<div class="kont_mest">
		  <label class="kontakty">  Контакты	  </label>  <label class="mestopol">  Месторасположение	</label>  
   </div>

		 
		  
		  
		 
		  <div class="kontaktydob"> 
 @include("includes.kontact") 


 
     
	 
	 
	 <div class="mestopol-form1">   

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
Улица
</label></p> 
<p class="labelforma" align="right">
 <label>
Номер дома
</label></p> 
<p class="labelforma" align="right">
 <label>
Корпус
</label></p> 
  
     </div>
	 
<div class="mestopol-form2"> 


<p><select class="select" name="list1" id="oblast" >
  <option>Все области</option>
  <option>Минская</option>
  <option>Витебская</option>
  <option>Гомельская</option>
  <option>Гродненская</option>
  <option>Брестская</option>
  <option>Могилевская</option>
 </select></p>
	 <p> <input class="input" type="text1" id="gorod" size="20"></p>
	<p> <input class="input" type="text1" id="ulica" size="20"></p>
	<p> <input class="input" type="text1" id="dom_nom" size="20"></p>
	<p> <input class="input" type="text1" id="corpus" size="20"></p>
	 
	 
	 </div>
		   
</div>
 

<div class="harakter-form"> 

<div class="kont_mest">
		  <label class="kontakty">  Характеристики	  </label>    </div>
		  
			  
    <div class="kontaktydob"> 
 
<div class="kontaktydob1">   
<p class="labelforma" align="right">
 <label>
Количество комнат
</label></p>
<p class="labelforma" align="right">
 <label>
Общая площадь, м2
</label></p>
<p class="labelforma" align="right">
 <label>
Жилая площадь, м2
</label></p>
<p class="labelforma" align="right">
 <label>
Этаж
</label></p> 
<p class="labelforma" align="right">
 <label>
Этажность
</label></p>  
<p class="labelforma" align="right">
 <label>
Балкон
</label></p>  


 </div>


<div class="kontaktydob2">   

  
  <p>  <input class="input" type="text1" id="kol_komn" size="20"> </p>
  <p> <input class="input" type="text1" id="area" size="20"> </p>
  <p>  <input class="input" type="text1" id="zhil_area" size="20"> </p>
  <p> <input class="input" type="text1" id="etazh" size="20"> </p>
  <p>  <input class="input" type="text1" id="etazhnost" size="20"> </p>
  <p><select name="balcon" id="balcon"  class="select">
  <option>Балкон</option>
   <option>Лоджия</option>
  <option>Не важно</option>
 
 </select></p>
  
  
     </div>


	 
	 
<div class="mt-20-ml-20"> 



	 
	 <a href="#" class="dobavit_ob">Добавить объявление</a>
	 </div>
	 
	 
		    </div>



</div>

 </form>
 
 
        </div>
    </div>
</div>
@endsection
