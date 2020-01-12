<div class="bg-image">
    <?= $this->Html->image('resto_bg.png', array('class' => 'center-fit')) ?>
    <div class="kugasima" style="margin-top: 5px;">
        <?= $this->Html->image('restaurant.png', array('class' => 'kugasima_img', 
                'style' => 'width: 150px; height: 250px;')) ?>
        <div class="right">
            <h3 class="rating-sub-header">
                <p class="rating-stars" style="font-size: 40px; color: white; margin-top: -200px; margin-left: 100px;"> <b><b> <b><?php echo $details->name ?></b></b></b> <br> <p class="rating-stars" style="margin-top: -15px; color: white; margin-left: 100px; font-size: 20px;"> <?php echo $details->location->city ?></p></p>
            </h3>        </div>
      </div>
    </div>
</div>

  <div class="row">
    <div class="col-md-6 light-text " style="color: white; text-align: center;">
        <div class="card text-center" style="margin-left: 10%; margin-right: 10%; margin-top: 10%;">
            <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                  <?= $this->Html->link('Info', 
                  array('controller' => 'Restaurants', 'action' => 'details', $details->id),
                  array('class' => 'nav-link active')) ?>
                </li>
                <li class="nav-item">
                  <?= $this->Html->link('Ratings', 
                  array('controller' => 'Restaurants', 'action' => 'ratings', $details->id),
                  array('class' => 'nav-link')) ?>
                </li>
              </ul>
            </div>
            <div class="card-body" style="color: black; text-align: left;">
                <div class="row">
                    <div class="col-md-6 light-text " style="color: black; text-align: left;">
                    <h5 class="light-text"> <b>Name</b> </h5>
                    <h5 class="light-text"> <b>Photo</b></h5>
                    <h5 class="light-text"> <b>Website</b></h5>
                    <h5 class="light-text"> <b>Location</b></h5>
                    <h5 class="light-text"> <b>Online Delivery</b></h5>
                    <h5 class="light-text"> <b>Table booking</b></h5>
                    <h5 class="light-text"> <b>Cuisines</b></h5>
                    <h5 class="light-text"> <b>Currency</b></h5>
                    <h5 class="light-text"> <b>Price Range</b></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-8 lighter-text " style="color: gray; text-align: left; bottom: 309px; padding-left: 40%; font-weight: lighter;">
                <h5 class="light-text"><?= $details->name ?> </h5>
                    <h5 class="light-text"><?= $details->phone_numbers ?></h5>
                    <h5 class="light-text"></h5>
                    <h5 class="light-text"><?= $details->location->city ?></h5>
                    <h5 class="light-text"><?= ($details->R->has_menu_status->delivery == -1)?"no":"yes" ?></h5>
                    <h5 class="light-text"><?= ($details->R->has_menu_status->takeaway == -1)?"no":"yes" ?></h5>
                    <h5 class="light-text"><?= $details->cuisines ?></h5>
                    <h5 class="light-text"><?= $details->currency ?></h5>
                    <h5 class="light-text"><?= $details->price_range ?></h5>
            </div>
          </div>
    </div>
    <div class="col-md-6 light-text " style="color: black; text-align: right; align-content: flex-end;">
        <div class="card"> 
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