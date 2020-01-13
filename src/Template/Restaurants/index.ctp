<div class="container" style="margin-top: 300px; height: 100px;">
        <div class="centered">
            <div class="centered-input" style="width: 400%;"><h1 style="font-size: 50px;
                margin-left: 300px;"> <b> 20 Nearby Restaurants </b></h1>
            </div></h1></div>
      
            <div class="centered-input">
              <div class="input-group input-group-lg">
                  <input type="text" class="card form-control material-icons" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                </div>
          </div>
      </div>
    </div>


    <span class="d-block" style="background-color: rgba(159, 214, 235, 0.231); margin-top: 50px; height: fit-content;"> <br><br> 
      <h5 style="text-align: center; font-size: 2rem;"> <b>Restaurants</b> </h5>
      <!-- carousel -->
  <div class="container-fluid" style="height: fit-content;">
    <div id=" carouselExample " class="carousel slide" data-ride="" data-interval="9000">
        <div class=" row w-100 mx-auto" role="listbox" style="padding-top: 100px;">
            <?php if(!$restaurants) { ?>
            <h2>No Results Found</h2>
            <?php } else {?>
            <?php foreach ($restaurants as $restaurant): ?>
            <div class="carousel-item col-md-3  active" style=" background-color: transparent; padding-top: 10px;">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="/AwesomityTaskForce/restaurants/details/<?= $restaurant->restaurant->R->res_id?>" title="image 1" class="thumb">
                      <?php $thumb = explode("?", $restaurant->restaurant->thumb);?>
                      <img class="img-fluid d-block" src="<?= $thumb[0] ?>" height = "482px" width= "361px" alt="slide 1" style="margin-bottom: 20px;">
                      <div class="kugasima" style="margin-top: 5px;">
                        <?= $this->Html->image('restaurant.png', array('class' => 'resto-item', 'height' =>'50px', 'width' => '50px')) ?>
                        <div class="right">
                          <p class="light-text"> <b><b> <b><?= $restaurant->restaurant->name ?></b></b></b> <br> <?= $restaurant->restaurant->location->city ?> </p> 
                        </div>
                      </div>
                    </a>

                  </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php } ?>
            
     <button type="button" class="btn btn-primary-broke" style="margin-bottom: 50px;">
      <h4 class="text" style="font-weight: normal; font-size: small;" >Explore More</h4> 
    </button>
        </div>
    </div>
</div>
    </span>
