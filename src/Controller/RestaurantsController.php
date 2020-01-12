<?php
    namespace App\Controller;

    use App\Controller\AppController;

    class RestaurantsController extends AppController
    {
        public function index()
        {
            if($this->request->is('post'))
            {
                $query = $this->request->getData('query');
            
                $response = json_decode($this->TomatoApi('https://developers.zomato.com/api/v2.1/cities?q='.$query));
                if(!$response){
                    echo "Yoo sucker,  connect to the internet for the api to work";
                    die();
                }
                
                if($response->status == 'success'){
                    
                      if($response->location_suggestions[0]->id){
                          $city_id = $response->location_suggestions[0]->id;
          
                          $restaurantresponse = json_decode($this->TomatoApi('https://developers.zomato.com/api/v2.1/search?entity_id='.$city_id.'&entity_type=city'));
                          if(!$response){
                            echo "Yoo sucker,  connect to the internet for the api to work";
                            die();
                            }
                         // if($restaurantresponse->results_found > 0){
                             // print_r($restaurantresponse->restaurants[0]->restaurant->name);
                          //}
                          $this->set('restaurants', $restaurantresponse->restaurants);
                      }
                      else{
                         // echo "City not found";
                      }
                  }
            }
        }

        public function details($id)
        {
           
            $response = json_decode($this->TomatoApi('https://developers.zomato.com/api/v2.1/restaurant?res_id='.$id));
            if(!$response){
                echo "Yoo sucker,  connect to the internet for the api to work";
                die();
            }

            $this->set('details', $response);
        }

        public function ratings($id){
            $response = json_decode($this->TomatoApi('https://developers.zomato.com/api/v2.1/reviews?res_id='.$id));
            if(!$response){
                echo "Yoo sucker,  connect to the internet for the api to work";
                die();
            }
            $res = json_decode($this->TomatoApi('https://developers.zomato.com/api/v2.1/restaurant?res_id='.$id));
            if(!$response){
                echo "Yoo sucker,  connect to the internet for the api to work";
                die();
            }
            $this->set('res_id', $id)->set('details', $response->user_reviews)->set('res', $res);
        }

        public function TomatoApi($url) {
            $ch = curl_init();
    
            curl_setopt_array($ch, array(
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HTTPHEADER => ['Accept: application/json', 'user-key: 4845ef7990f339558d61fcec4ad80ddc'],
                CURLOPT_URL => $url,
            ));
    
            $response = curl_exec ($ch);
           
            if($response === false){
                return false;
            }
            
            curl_close ($ch);
    
            return $response;
        }
    }