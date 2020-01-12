<div class="bg-image">
    <?= $this->Html->image('resto_bg.png', array('class' => 'center-fit')) ?>
    <div class="kugasima" style="margin-top: 5px;">
        <?= $this->Html->image('restaurant.png', array('class' => 'kugasima_img', 
                'style' => 'width: 150px; height: 250px;')) ?>
        <div class="right">
            <h3 class="rating-sub-header">
                <p class="rating-stars" style="font-size: 40px; color: white; margin-top: -200px; margin-left: 100px;"> <b><b> <b><?php echo $res->name ?></b></b></b> <br> <p class="rating-stars" style="margin-top: -15px; color: white; margin-left: 100px; font-size: 20px;"> <?php echo $res->location->city ?></p></p>
            </h3>        </div>
      </div>
    </div>
</div>



  <div class="row" style="width: fit-content;">
    <div class="col-md-6 light-text " style="color: white; text-align: center;">
        <div class="card text-center" style="margin-left: 85px; margin-right: 10%; margin-top: 10%;">
            <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                  <?= $this->Html->link('Info', 
                  array('controller' => 'Restaurants', 'action' => 'details', $res_id),
                  array('class' => 'nav-link')) ?>
                </li>
                <li class="nav-item">
                  <?= $this->Html->link('Ratings', 
                  array('controller' => 'Restaurants', 'action' => 'ratings', $res_id),
                  array('class' => 'nav-link active')) ?>
                </li>
              </ul>
            </div>
            
            <div class="container">
                <?php foreach ($details as $review): ?>
                <h3 class="rating-sub-header">
                    <img src="<?php echo $review->review->user->profile_image ;?>" style="width: 50px; height: 50px;">
                    <p class="rating-stars" style="font-size: 17px; color: black;"> <b><b> <b><?= $review->review->user->name ?></b></b></b> <br> <p class="rating-stars" style="margin-top: -15px;"> <b><?= $review->review->rating ?> Stars</b></p></p>
                </h3>

                <h5 class="rating-light-text">
                    <span ><?= $review->review->rating_text ?></span>
                </h5>
                <?php endforeach; ?>
            </div>
            
          </div>
    </div>
    <div class="col-md-6 light-text " style="color: black; text-align: right; align-content: flex-end;">
        <div class="card" style="width: 100%; margin-left: 85px; height: fit-content;"> 
            <div class="card-body">
              <div class="container">
                <div class="group-header">
                  <span>Menu</span>
                </div>
                
                <h3 class="menu-sub-header">
                  <span >Breakfast</span> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

                  <h5 class="menu-light-text">
                    <span >IBIRAHA</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <span class="menu-price" >50 Frw </span>
                  </h5>
                  <h5 class="menu-light-text">
                    <span >IRINDAZI</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
                    <span class="menu-price" >100 Rfw</span>
                  </h5>
                  <h5 class="menu-light-text">
                    <span >IBISHUBATAYI</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;
                    <span class="menu-price" >200 Rfw</span>
                  </h5>
                  <h5 class="menu-light-text">
                    <span >BANJIYA</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                    <span class="menu-price" >50 Rfw</span>
                  </h5>
                  <h5 class="menu-light-text">
                    <span >SAMBUSA</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <span class="menu-price" >200 Rfw</span>
                  </h5>

                <h5 class="menu-light-text">
                  <span >ROLEX</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
                  <span class="menu-price" >700 Rfw</span>
                </h5> <br>

                <h3 class="menu-sub-header">
                  <span >Lunch</span>
                  <br>
                  <h5 class="menu-light-text">
                    <span >IMVANGE</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
                    <span class="menu-price" >600 Rfw</span>
                  </h5>
                  <h5 class="menu-light-text">
                    <span >CAPATI NIBISHYOMBO</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;
                    <span class="menu-price" >900 Rfw</span>
                  </h5>
                  <h5 class="menu-light-text">
                    <span >UMUCERI NISOSI</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&nbsp;
                    <span class="menu-price" >1000 Rfw</span>
                  </h5>
                  <h5 class="menu-light-text">
                    <span >INYAMA</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;
                    <span class="menu-price" >800 Rfw</span>
                  </h5>
                </h3>
              </div>
            </div>
          </div>
    </div>
  </div>