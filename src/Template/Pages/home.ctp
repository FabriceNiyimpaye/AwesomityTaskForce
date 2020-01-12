<div class="bg-image">
    <?= $this->Html->image('background.png', array('class' => 'center-fit')) ?>
    <div class="centered" style="width: 100%;"><h1 style="font-size: 60px;"> <b> Find Nearby Restaurants </b></h1>
    <?= $this->Form->create(null,
             ['url' => ['controller' => 'Restaurants', 'action' => 'index'],
                'class' => 'centered-input']
            ) ?>
        <div class="input-group input-group-lg">
            <input type="text" name="query" class="card form-control" style="margin-top: -100px;  font-size: 18px; background: url(images/search.png) no-repeat scroll 7px 7px;
            padding-left:30px;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="search">
                      <button type="submit" class="btn btn-primary" style="background-color: #ff6000; width: 150px; border: none;">Search</button>

          </div>
    </form>
    </div>
</div>


    <span class="d-block" style="background-color: rgba(159, 214, 235, 0.231); height: 700px; margin-top: -00px;"> <br><br> 
      <h5 style="text-align: center; font-size: 2rem;"> <b>Restaurants</b> </h5>
      <!-- carousel -->
  <div class="container-fluid">
    <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
        <div class="carousel-inner row w-100 mx-auto" role="listbox" style="padding-top: 100px;">
            <div class="carousel-item col-md-3  active" style=" background-color: transparent; padding-top: 10px;">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <?= $this->Html->image('food.png', array('class' => 'img-fluid d-block', 'style' =>'margin-bottom: 20px;')) ?>
                      <div class="kugasima" style="margin-top: 5px;">
                        <?= $this->Html->image('restaurant.png', array('class' => 'resto-item', 'height' =>'50px', 'width' => '50px')) ?>
                        <div class="right">
                          <p class="light-text"> <b><b> <b>KUGASIMA CAFFEE</b></b></b> <br> $$$ - Kimihurura </p> 
                        </div>
                      </div>
                    </a>

                  </div>
                </div>
            </div>
            

            <div class="carousel-item col-md-3  active" style=" background-color: transparent; padding-top: 10px;">
              <div class="panel panel-default" >
                 <div class="panel-thumbnail" >
                   <a href="#" title="image 1" class="thumb">
                     <img class="img-fluid d-block" src="./imgs/food.png" alt="slide 1" style="margin-bottom: 20px;">
                     <div class="kugasima" style="margin-top: 5px;">
                       <img class="resto-item" src="./imgs/restaurant.png" alt="" width="50px" height="50px">
                       <div class="right">
                        <p class="light-text"> <b><b> <b>KUGASIMA CAFFEE</b></b></b> <br> $$$ - Kimihurura </p> 
                       </div>
                     </div>
                   </a>
                 </div>
               </div>
           </div>

           <div class="carousel-item col-md-3  active" style=" background-color: transparent; padding-top: 10px;">
            <div class="panel panel-default" >
               <div class="panel-thumbnail" >
                 <a href="#" title="image 1" class="thumb">
                   <img class="img-fluid d-block" src="./imgs/food.png" alt="slide 1" style="margin-bottom: 20px;">
                   <div class="kugasima" style="margin-top: 5px;">
                     <img class="resto-item" src="./imgs/restaurant.png" alt="" width="50px" height="50px">
                     <div class="right">
                      <p class="light-text"> <b><b> <b>KUGASIMA CAFFEE</b></b></b> <br> $$$ - Kimihurura </p> 
                     </div>
                   </div>
                 </a>
               </div>
             </div>
         </div>

         <div class="carousel-item col-md-3  active" style=" background-color: transparent; padding-top: 10px;">
          <div class="panel panel-default">
             <div class="panel-thumbnail" >
               <a href="#" title="image 1" class="thumb">
                 <img class="img-fluid d-block" src="./imgs/food.png" alt="slide 1" style="margin-bottom: 20px;">
                 <div class="kugasima" style="margin-top: 5px;">
                   <img class="resto-item" src="./imgs/restaurant.png" alt="" width="50px" height="50px">
                   <div class="right">
                    <p class="light-text"> <b><b> <b>KUGASIMA CAFFEE</b></b></b> <br> $$$ - Kimihurura </p> 
                   </div>
                 </div>
               </a>
             </div>
           </div>
       </div>

       <div class="carousel-item col-md-3  active" style=" background-color: transparent; padding-top: 10px;">
        <div class="panel panel-default"style="" >
           <div class="panel-thumbnail" >
             <a href="#" title="image 1" class="thumb">
               <img class="img-fluid d-block" src="./imgs/food.png" alt="slide 1" style="margin-bottom: 20px;">
               <div class="kugasima" style="margin-top: 5px;">
                 <img class="resto-item" src="./imgs/restaurant.png" alt="" width="100px" height="100px">
                 <div class="right">
                  <p class="light-text"> <b><b> <b>KUGASIMA CAFFEE</b></b></b> <br> $$$ - Kimihurura </p> 
                 </div>
               </div>
             </a>
           </div>
         </div>
     </div>
            
     <button type="button" class="btn btn-primary-broke" style="">
      <h4 class="text" style="font-weight: normal; font-size: small;" >Explore More</h4> 
    </button>
            
           
         
             
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


    </span> <br> <br>
    <h5 style="text-align: center; font-size: 2rem;"> <b>Restaurants</b> </h5>
    <!-- How it works -->
    <div class="container" style="margin-bottom: 50px; margin-top: 100px ;">
      <div class="d-inline-block">
        <img src="./imgs/step1.png" alt="" width="75" height="80"> <br><br>
        <h5>Step Uno</h5> <br>
        Lorem ipsum dolor, <br> sit amet consectetur <br> adipisicing elit.
      </div>
      
      <div class="d-inline-block ">
        <img src="./imgs/step2.png" alt="" width="75" height="75"> <br> <br>
        <h5>Step Dos</h5> <br>
        Lorem ipsum dolor, <br> sit amet consectetur <br> adipisicing elit.
      </div>

      <div class="d-inline-block ">
        <img src="./imgs/step3.png" alt="" width="80" height="75"> <br> <br>
        <h5>Step Tres</h5> <br>
        Lorem ipsum dolor, <br> sit amet consectetur <br> adipisicing elit.
      </div>
    </div>
    <!--  -->
    <span class="d-block" style="background-color: #ff6000; margin-top: 150px;">
      <div class="mobo-app">
        <?= $this->Html->image('phone.png',
                                array(
                                    'width' =>'600px',
                                    'height'=>'600px',
                                    'style' => 'margin: -100px; margin-left: 50px;' ) ) ?>
        <div class="float-right"><h6> Get the app </h6> 
          <h5 style="font-weight: normal; font-size: small;"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. <br>  </h5>
          <h5 style="font-weight: normal; font-size: small;"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. <br>  </h5>
          <button type="button" class="btn btn-primary-broken" style=" background-color: whitesmoke; ">
            <h4 class="text" style="font-weight: normal; font-size: small;" >Explore More</h4> 
          </button>
        </div>
      </div>
    </span>
    <!-- footer -->
  