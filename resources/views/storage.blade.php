<!-- use only for storage -->
<section class="admin-section">
  
  <div class="admin-form-wrapper">
      <div class="admin-form">

          <div class="form-group">
              <div class="form-sellect">
                  <div class="form_radio_btn">
                      <input id="type-1" class="form-selector" type="radio" name="type" value="item" checked>
                      <label for="type-1">Item</label>
                  </div>                       
                  <div class="form_radio_btn">
                      <input id="type-2" class="form-selector" type="radio" name="type" value="lot">
                      <label for="type-2">Lot of items</label>
                  </div>                        
              </div>
          </div> 

          <form class="admin-form-content form-item admin-form-item" id="add-item-form" action="/private" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                  <label for="type">type</label>
                  <div class="form-sellect">
                      <div class="form_radio_btn">
                          <input class="form-type" form="addItem" id="radio-100" type="checkbox" name="type" value="item" checked>
                          <label for="radio-100">Item</label>
                      </div>                                              
                  </div>
              </div> 

              <div class="form-group-item">
                  <div class="form-group">
                      <label for="animal_type">animal's type</label>
                      <div class="form-sellect">
                          <div class="form_radio_btn">
                              <input form="add-item-form" id="item-1" type="radio" name="animal_type" value="mammoth" checked>
                              <label for="item-1">Mammoth</label>
                          </div>                       
                          <div class="form_radio_btn">
                              <input form="add-item-form" id="item-2" type="radio" name="animal_type" value="rhinoceros">
                              <label for="item-2">Rhinoceros</label>
                          </div>                        
                          <div class="form_radio_btn">
                              <input form="add-item-form" id="item-3" type="radio" name="animal_type" value="bison">
                              <label for="item-3">Bison</label>
                          </div>
                      </div>
                  </div> 

                  <div class="form-group">
                      <label for="lot_type">item's type</label>
                      <div class="form-sellect">                
                          <div class="form_radio_btn">
                              <input form="add-item-form" id="item-4" type="radio" name="lot_type" value="tusk" checked>
                              <label for="item-4">Tusk</label>
                          </div>                
                          <div class="form_radio_btn">
                              <input form="add-item-form" id="item-5" type="radio" name="lot_type" value="tooth">
                              <label for="item-5">Tooth</label>
                          </div>
                          <div class="form_radio_btn">
                              <input form="add-item-form" id="item-5-2" type="radio" name="lot_type" value="splint">
                              <label for="item-5-2">Splint</label>
                          </div>
                          <div class="form_radio_btn">
                              <input form="add-item-form" id="item-5-3" type="radio" name="lot_type" value="bark">
                              <label for="item-5-3">Bark</label>
                          </div>                    
                          <div class="form_radio_btn">
                              <input form="add-item-form" id="item-6" type="radio" name="lot_type" value="horn">
                              <label for="item-6">Horn</label>
                          </div>
                          <div class="form_radio_btn">
                              <input form="add-item-form" id="item-7" type="radio" name="lot_type" value="skull">
                              <label for="item-7">Skull</label>
                          </div>
                          <div class="form_radio_btn">
                              <input form="add-item-form" id="item-8" type="radio" name="lot_type" value="bone">
                              <label for="item-8">Bone</label>
                          </div>
                      </div>
                  </div> 

                  <div class="form-group form-group-latin">
                      <div class="form-sellect">                
                          <div class="form_radio_btn">
                              <input form="add-item-form" id="item-9" type="hidden" name="animal_type_latin" value="mammuthus primigenius">
                              <!-- <label for="item-9">Mammuthus primigenius (woolly mammoth)</label> -->
                          </div>                
                          <div class="form_radio_btn">
                              <!-- <input form="add-item-form" id="item-10" type="hidden" name="animal_type_latin" value="coelodonta antiquitatis" checked> -->
                              <!-- <label for="item-10">Coelodonta antiquitatis (woolly rhinoceros)</label> -->
                          </div>                   
                          <div class="form_radio_btn">
                              <!-- <input form="add-item-form" id="item-11" type="hidden" name="animal_type_latin" value="bison priscus"> -->
                              <!-- <label for="item-11">Bison priscus (steppe bison)</label> -->
                          </div>
                      </div>
                  </div>
              
                  <div class="form-group">
                      <label for="lot_type">lot origin</label>
                      <div class="form-sellect">                
                          <div class="form_radio_btn">
                              <input form="add-item-form" id="item-12" type="radio" name="lot_origin" value="yakutia" checked>
                              <label for="item-12">Yakutia</label>
                          </div>                
                          <div class="form_radio_btn">
                              <input form="add-item-form" id="item-13" type="radio" name="lot_origin" value="chukotka">
                              <label for="item-13">Chukotka</label>
                          </div>                   
                      </div>
                  </div> 

                  <div class="form-group">         
                          <label for="lot_weight">lot's weight</label>
                          <input form="add-item-form" type="number" class="form_number_area" name="lot_weight" placeholder="0">           
                  </div> 

                  <div class="form-size-group">
                      <div class="form-group form-size-parameter">
                          <label for="lot_size_length">length</label>
                          <input form="add-item-form" type="number" class="form-control" name="lot_size_length" placeholder=0>
                      </div> 
                      <div class="form-group form-size-parameter">
                          <label for="lot_size_width">width</label>
                          <input form="add-item-form" type="number" class="form-control" name="lot_size_width" placeholder=0>
                      </div> 
                      <div class="form-group form-size-parameter">
                          <label for="lot_size_height">height</label>
                          <input form="add-item-form" type="number" class="form-control" name="lot_size_height" placeholder=0>
                      </div>                
                      <div class="form-group form-size-parameter">
                          <label for="lot_size_diameter">diameter</label>
                          <input form="add-item-form" type="number" class="form-control" name="lot_size_diameter" placeholder=0>
                      </div> 
                  </div>
                  
                  <div class="form-group">
                      <label for="lot_size_title">lot's size title</label>
                      <div class="form-sellect">                
                          <div class="form_radio_btn">
                              <input form="add-item-form" id="item-15" type="radio" name="lot_size_title" value="small" checked>
                              <label for="item-15">Small ( up to 10kg )</label>
                          </div>                
                          <div class="form_radio_btn disable">
                              <input form="add-item-form" id="item-16" type="radio" name="lot_size_title" value="average">
                              <label for="item-16">Average ( up to 20kg )</label>
                          </div>                   
                          <div class="form_radio_btn">
                              <input form="add-item-form" id="item-17" type="radio" name="lot_size_title" value="big">
                              <label for="item-17">Big ( up to 30kg )</label>
                          </div>
                          <div class="form_radio_btn">
                              <input form="add-item-form" id="item-17-1" type="radio" name="lot_size_title" value="huge">
                              <label for="item-17-1">Huge ( from 30kg )</label>
                          </div>
                      </div>
                  </div>

                  <div class="form-group">
                      <label for="lot_size_title">lot's grade</label>
                      <div class="form-sellect">                
                          <div class="form_radio_btn">
                              <input form="add-item-form" id="item-18" type="radio" name="lot_grade" value="4" checked>
                              <label for="item-18">Fourth grade - 4</label>
                          </div>                
                          <div class="form_radio_btn">
                              <input form="add-item-form" id="item-19" type="radio" name="lot_grade" value="3">
                              <label for="item-19">Third grade - 3</label>
                          </div>                   
                          <div class="form_radio_btn">
                              <input form="add-item-form" id="item-20" type="radio" name="lot_grade" value="2">
                              <label for="item-20">Second grade - 2</label>
                          </div>
                          <div class="form_radio_btn">
                              <input form="add-item-form" id="item-21" type="radio" name="lot_grade" value="1">
                              <label for="item-21">First grade - 1</label>
                          </div>
                      </div>
                  </div>

                  <div class="form-group">
                      <label for="lot_size_title">lot status</label>
                      <div class="form-sellect">                
                          <div class="form_radio_btn">
                              <input form="add-item-form" id="item-22" type="radio" name="lot_status" value="standart" checked>
                              <label for="item-22">Standart</label>
                          </div>                
                          <div class="form_radio_btn">
                              <input form="add-item-form" id="item-23" type="radio" name="lot_status" value="on sale">
                              <label for="item-23">On sale</label>
                          </div>                   
                          <div class="form_radio_btn">
                              <input form="add-item-form" id="item-24" type="radio" name="lot_status" value="hot">
                              <label for="item-24">Hot</label>
                          </div>
                          <div class="form_radio_btn">
                              <input form="add-item-form" id="item-25" type="radio" name="lot_status" value="sold">
                              <label for="item-25">Sold</label>
                          </div>
                      </div>
                  </div>

                  <div class="form-group">
                      <label for="lot_size_title">wet condition</label>
                      <div class="form-sellect">                
                          <div class="form_radio_btn">
                              <input form="add-item-form" id="item-26" type="radio" name="wet_condition" value="dry" checked>
                              <label for="item-26">Dry</label>
                          </div>                
                          <div class="form_radio_btn">
                              <input form="add-item-form" id="item-27" type="radio" name="wet_condition" value="wet">
                              <label for="item-27">Wet</label>
                          </div>                   
                          <div class="form_radio_btn">
                              <input form="add-item-form" id="item-28" type="radio" name="wet_condition" value="semidry">
                              <label for="item-28">Semidry</label>
                          </div>
                      </div>
                  </div>

                  <div class="form-group">
                      <label for="date_of_found">date of found</label>
                      <input form="add-item-form" type="date" class="form-control" name="date_of_found" placeholder="enter date of found"> 
                  </div>   

                  <div class="form-group">
                      <label for="lot_annotation">item's annotation</label>
                      <input form="add-item-form" readonly type="text" class="form-control form-lot-annotation" name="lot_annotation" value="short annotation" placeholder="enter item's annotation">
                  </div>   

                  <div class="form-group">
                      <label for="lot_rarity">lot's rarity</label>
                      <div class="form-sellect">                
                          <div class="form_radio_btn">
                              <input form="add-item-form" id="item-48" type="radio" name="lot_rarity" value="not rare" checked>
                              <label for="item-48">Not rare</label>
                          </div>                
                          <div class="form_radio_btn">
                              <input form="add-item-form" id="item-49" type="radio" name="lot_rarity" value="rare">
                              <label for="item-49">Rare</label>
                          </div>
                      </div>
                  </div>
                  
                  <div class="form-group">
                      <label for="lot_color">lot's color</label>
                      <div class="form-sellect">                
                          <div class="form_radio_btn">
                              <input form="add-item-form" id="item-50" type="radio" name="lot_color" value="natural" checked>
                              <label for="item-50">Natural</label>
                          </div>                
                          <div class="form_radio_btn">
                              <input form="add-item-form" id="item-51" type="radio" name="lot_color" value="blue">
                              <label for="item-51">Blue</label>
                          </div>
                          <div class="form_radio_btn">
                              <input form="add-item-form" id="item-52" type="radio" name="lot_color" value="dark blue">
                              <label for="item-52">Dark blue</label>
                          </div>                    
                          <div class="form_radio_btn">
                              <input form="add-item-form" id="item-53" type="radio" name="lot_color" value="brown">
                              <label for="item-53">Brown</label>
                          </div>
                      </div>
                  </div>

                  <div class="form-group">
                      <label for="lot_price">item's price in USD</label>
                      <input form="add-item-form" type="number" class="form-control form-lot-price" name="lot_price" placeholder="100">
                  </div>

                  <div class="form-group">
                      <label for="files">upload item's files</label>
                      <input 
                          type="file" 
                          class="form-control" 
                          name="images[]"
                          accept="image/*" 
                          multiple
                      >
                  </div>

                  <div class="form-btn-wrapper">
                      <button class="btn btn-form" type="submit">save item</button>
                  </div>

              </div>
          </form>

          <form class="admin-form-content form-lot admin-form-lot" id="addLot" action="/private" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                  <label for="type">type</label>
                  <div class="form-sellect">                      
                      <div class="form_radio_btn">
                          <input class="form-type" form="addItem" id="radio-101" type="checkbox" name="type" value="lot" checked>
                          <label for="radio-101">Lot</label>
                      </div>                        
                  </div>
              </div> 

              <div class="form-group-lot">

                  <div class="form-group">
                      <label for="animal_type">animal's type</label>
                      <div class="form-sellect">
                          <div class="form_radio_btn">
                              <input form="addItem" id="radio-1" type="radio" name="animal_type" value="mammoth" checked>
                              <label for="radio-1">Mammoth</label>
                          </div>                       
                          <div class="form_radio_btn">
                              <input form="addItem" id="radio-2" type="radio" name="animal_type" value="rhinoceros">
                              <label for="radio-2">Rhinoceros</label>
                          </div>                        
                          <div class="form_radio_btn">
                              <input form="addItem" id="radio-3" type="radio" name="animal_type" value="bison">
                              <label for="radio-3">Bison</label>
                          </div>
                      </div>
                  </div> 

                  <div class="form-group">
                      <label for="lot_type">item's type</label>
                      <div class="form-sellect">                
                          <div class="form_radio_btn">
                              <input id="radio-4" type="radio" name="lot_type" value="tusk" checked>
                              <label for="radio-4">Tusk</label>
                          </div>                
                          <div class="form_radio_btn">
                              <input id="radio-5" type="radio" name="lot_type" value="tooth">
                              <label for="radio-5">Tooth</label>
                          </div>
                          <div class="form_radio_btn">
                              <input id="radio-5-2" type="radio" name="lot_type" value="splint">
                              <label for="radio-5-2">Splint</label>
                          </div>                   
                          <div class="form_radio_btn">
                              <input id="radio-6" type="radio" name="lot_type" value="horn">
                              <label for="radio-6">Horn</label>
                          </div>
                          <div class="form_radio_btn">
                              <input id="radio-7" type="radio" name="lot_type" value="skull">
                              <label for="radio-7">Skull</label>
                          </div>
                          <div class="form_radio_btn">
                              <input id="radio-8" type="radio" name="lot_type" value="bone">
                              <label for="radio-8">Bone</label>
                          </div>
                      </div>
                  </div> 

                  <div class="form-group">
                      <label for="animal_type_latin">animal's latin type</label>
                      <div class="form-sellect">                
                          <div class="form_radio_btn">
                              <input id="radio-9" type="radio" name="animal_type_latin" value="mammuthus primigenius" checked>
                              <label for="radio-9">Mammuthus primigenius (woolly mammoth)</label>
                          </div>                
                          <div class="form_radio_btn disable">
                              <input id="radio-10" type="radio" name="animal_type_latin" value="coelodonta antiquitatis" disabled>
                              <label for="radio-10">Coelodonta antiquitatis (woolly rhinoceros)</label>
                          </div>                   
                          <div class="form_radio_btn">
                              <input id="radio-11" type="radio" name="animal_type_latin" value="bison priscus" disabled>
                              <label for="radio-11">Bison priscus (steppe bison)</label>
                          </div>
                      </div>
                  </div>
              
                  <div class="form-group">
                      <label for="lot_type">lot origin</label>
                      <div class="form-sellect">                
                          <div class="form_radio_btn">
                              <input id="radio-12" type="radio" name="lot_origin" value="yakutia" checked>
                              <label for="radio-12">Yakutia</label>
                          </div>                
                          <div class="form_radio_btn">
                              <input id="radio-13" type="radio" name="lot_origin" value="chukotka">
                              <label for="radio-13">Chukotka</label>
                          </div>                   
                      </div>
                  </div> 

                  <div class="form-group">         
                          <label for="lot_weight">lot's weight</label>
                          <input type="number" value="" class="form_number_area" name="lot_weight" placeholder="0">           
                  </div> 
         
                  <div class="form-group">
                      <label for="lot_size_title">lot's size title</label>
                      <div class="form-sellect">                
                          <div class="form_radio_btn">
                              <input id="radio-15" type="radio" name="lot_size_title" value="small" checked>
                              <label for="radio-15">Small ( up to 20kg )</label>
                          </div>                
                          <div class="form_radio_btn disable">
                              <input id="radio-16" type="radio" name="lot_size_title" value="average">
                              <label for="radio-16">Average ( up to 30kg )</label>
                          </div>                   
                          <div class="form_radio_btn">
                              <input id="radio-17" type="radio" name="lot_size_title" value="big">
                              <label for="radio-17">Big ( up to 40kg )</label>
                          </div>
                          <div class="form_radio_btn">
                              <input id="radio-17-1" type="radio" name="lot_size_title" value="huge">
                              <label for="radio-17-1">Huge ( from 50kg )</label>
                          </div>
                      </div>
                  </div>

                  <div class="form-group">
                      <label for="lot_size_title">lot's grade</label>
                      <div class="form-sellect">                
                          <div class="form_radio_btn">
                              <input id="radio-18" type="radio" name="lot_grade" value="4" checked>
                              <label for="radio-18">Fourth grade - 4</label>
                          </div>                
                          <div class="form_radio_btn">
                              <input id="radio-19" type="radio" name="lot_grade" value="3">
                              <label for="radio-19">Third grade - 3</label>
                          </div>                   
                          <div class="form_radio_btn">
                              <input id="radio-20" type="radio" name="lot_grade" value="2">
                              <label for="radio-20">Second grade - 2</label>
                          </div>
                          <div class="form_radio_btn">
                              <input id="radio-21" type="radio" name="lot_grade" value="1">
                              <label for="radio-21">First grade - 1</label>
                          </div>
                      </div>
                  </div>

                  <div class="form-group">
                      <label for="lot_size_title">lot status</label>
                      <div class="form-sellect">                
                          <div class="form_radio_btn">
                              <input id="radio-22" type="radio" name="lot_status" value="standart" checked>
                              <label for="radio-22">Standart</label>
                          </div>                
                          <div class="form_radio_btn">
                              <input id="radio-23" type="radio" name="lot_status" value="on sale">
                              <label for="radio-23">On sale</label>
                          </div>                   
                          <div class="form_radio_btn">
                              <input id="radio-24" type="radio" name="lot_status" value="hot">
                              <label for="radio-24">Hot</label>
                          </div>
                          <div class="form_radio_btn">
                              <input id="radio-25" type="radio" name="lot_status" value="sold">
                              <label for="radio-25">Sold</label>
                          </div>
                      </div>
                  </div>

                  <div class="form-group">
                      <label for="lot_size_title">wet condition</label>
                      <div class="form-sellect">                
                          <div class="form_radio_btn">
                              <input id="radio-26" type="radio" name="wet_condition" value="dry" checked>
                              <label for="radio-26">Dry</label>
                          </div>                
                          <div class="form_radio_btn">
                              <input id="radio-27" type="radio" name="wet_condition" value="wet">
                              <label for="radio-27">Wet</label>
                          </div>                   
                          <div class="form_radio_btn">
                              <input id="radio-28" type="radio" name="wet_condition" value="semidry">
                              <label for="radio-28">Semidry</label>
                          </div>
                      </div>
                  </div>

                  <div class="form-group">
                      <label for="date_of_found">date of found</label>
                      <input type="date" class="form-control" name="date_of_found" placeholder="enter date of found"> 
                  </div>   

                  <div class="form-group">
                      <label for="lot_annotation">item's annotation</label>
                      <input readonly type="text" class="form-control form-lot-annotation" name="lot_annotation" value="qqqqqqqqqqqqq" placeholder="enter item's annotation">
                  </div>   

                  <div class="form-group">
                      <label for="lot_rarity">lot's rarity</label>
                      <div class="form-sellect">                
                          <div class="form_radio_btn">
                              <input id="radio-48" type="radio" name="lot_rarity" value="not rare" checked>
                              <label for="radio-48">Not rare</label>
                          </div>                
                          <div class="form_radio_btn">
                              <input id="radio-49" type="radio" name="lot_rarity" value="rare">
                              <label for="radio-49">Rare</label>
                          </div>
                      </div>
                  </div>
                  
                 

                  <div class="form-group">
                      <label for="lot_price">item's price in USD</label>
                      <input type="number" class="form-control form-lot-price" name="lot_price" placeholder="100">
                  </div>

                  <div class="form-group">
                      <label for="files">upload item's files</label>
                      <input 
                          type="file" 
                          class="form-control" 
                          name="images[]"
                          accept="image/*" 
                          multiple
                      >
                  </div>

                  <div class="form-btn-wrapper">
                      <button class="btn btn-form" type="submit">save item</button>
                  </div>

              </div>
          </form>
      </div>
  </div>


</section>







