<!DOCTYPE html>
<html lang="en">
<head>
  <title>Scraper Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<script>

   function trigger()
   {
      // document.getElementById("output").innerHtml = "<span><svg version='1.1' id='L3'  width='120' height='220' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 100 100' enable-background='new 0 0 0 0' xml:space='preserve'><circle fill='none' stroke='#000' stroke-width='4' cx='50' cy='50' r='44' style='opacity:0.5;'/><circle fill='#fff' stroke='#000' stroke-width='3' cx='8' cy='54' r='6' ><animateTransform attributeName='transform' dur='2s' type='rotate' from='0 50 48' to='360 50 52' repeatCount='indefinite' /> </circle></svg></span>" ;
      document.getElementById("output").innerText = "Loading..." ;
      execute();
   }
   function execute()
   {
   		jQuery.ajax({
   		url: "backend.php",
   		data:'date='+$("#date").val()+'&month='+$("#month").val(),
   		type: "POST",
   		success:function(data){
   		$("#output").html(data);
   		},
   		error:function (){
   		
   		}
   		});
   }
</script>

<style>
   .temp{
       height: 30px;
    padding-left: 13px;
    padding-right: 13px;
    font-size: 12px;
   }
</style>
<main>
    <section class="page-section bg-light parallax-6 bg-light-alfa-90"id="menu"data-background="/svg/sprinkle.svg">
        <div class="container relative">
         <h2 class="font-alt mb-70 mb-sm-40 section-title">Wiki Birth Dates</h2>
         <div class="row">
         
               <div class="col-md-6" style="padding-bottom: 10px;" >
                     <select class="input-md round temp" id="month">
                                                      <option value="January">January</option>
                                                      <option value="February">February</option>
                                                      <option value="March">March</option>
                                                      <option value="April">April</option>
                                                      <option value="May">May</option>
                                                      <option value="June">June</option>
                                                      <option value="July">July</option>
                                                      <option value="August">August</option>
                                                      <option value="September">September</option>
                                                      <option value="October">October</option>
                                                      <option value="November">November</option>
                                                      <option value="December">December</option>
                     </select>
               
               </div>
               <div class="col-md-6" style="padding-bottom: 10px;">
                  <select class="input-md round temp" id="date">
                     <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option>
                     <option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option>
                     <option value="9">9</option> <option value="10">10</option>  
                     <option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option>
                     <option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option>
                     <option value="19">19</option><option value="20">20</option>      
                     <option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option>
                     <option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option>
                     <option value="29">29</option> <option value="30">30</option><option value="31">31</option>
                                             
                  </select>
               </div>
               <div class="col-md-6">                                
                  <button name="submit" class=" btn btn-secondary" onClick="trigger();">FIND</button>
               </div>
         
            <div class="col-sm-12 mb-40">
               <div class="widget">
               
                  <div id="output"></div>
                             
               </div>
            </div>
         </div>
        </div>
    </section>

</main>
</body>
