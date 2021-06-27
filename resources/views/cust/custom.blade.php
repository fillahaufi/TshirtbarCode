@extends('layout')

@section('content')
    <div class="m-5" style="min-height: 100vh">
        <div class="ui grid">
            <div class="four wide column">
              <div class="ui fluid accordion">
                <div class="title">
                  <i class="dropdown icon"></i>
                  <i class="icon setting"></i>
                  Settings
                </div>
                <div class="content">
                  <a href="#" id="resetButton">
                    <div class="ui button">
                      <i class="refresh icon"></i>
                      Reset
                    </div>
                  </a>
                  <p>You can choose to add unlimited fext or Image below.</p>
                </div>
                <div class="title">
                  <i class="dropdown icon"></i>
                  <i class="font icon"></i>
                  Add Text
                </div>
                <div class="content">
                  <div class="ui form">
                    <div class="field">
                      <label>Text:</label>
                      <div class="ui left labeled input">
                        <input placeholder="Text" type="text" id="inputText">
                      </div>
                    </div>
                    
                    <div class="field">
                      <label>Font</label>
                      <div class="ui selection dropdown fluid">
                        <input name="gender" type="hidden" id="inputFont" value="Arial">
                        <div class="default text">Arial</div>
                        <i class="dropdown icon"></i>
                        <div class="menu">
                          <div class="item" data-value="Arial">Arial</div>
                          <div class="item" data-value="Impact">Impact</div>
                          <div class="item" data-value="Lobster">Lobster</div>
                          <div class="item" data-value="Indie Flower">Indie Flower</div>
                          <div class="item" data-value="Gloria Hallelujah">Gloria Hallelujah</div>
                        </div>
                      </div>
                    </div>
                      
                    <!--<div class="field">
                      <label>Size</label>
                      <input placeholder="14" value="14" type="text" id="inputSize">
                    </div>-->
          
                    <div class="field">
                      <label>Color</label>
                      <div class="ui selection dropdown fluid">
                        <input name="color" type="hidden" id="inputColor" value="red">
                        <div class="default text">Red</div>
                        <i class="dropdown icon"></i>
                        <div class="menu">
                          <div class="item" data-value="black">Black</div>
                          <div class="item" data-value="white">White</div>
                          <div class="item" data-value="red">Red</div>
                          <div class="item" data-value="orange">Orange</div>
                          <div class="item" data-value="blue">Blue</div>
                          <div class="item" data-value="green">Green</div>
                          <div class="item" data-value="aqua">Aqua</div>
                        </div>
                      </div>
                    </div>
                    <a href="#" id="addTextButton">
                      <div class="ui orange button">
                        <i class="add sign icon"></i>
                        Add Text
                      </div>
                    </a>
                  </div><!-- form -->
                </div>
                <div class="title">
                  <i class="dropdown icon"></i>
                  <i class="icon photo"></i>
                  Add Image
                </div>
                <div class="content">
                  <a href="#" id="libraryButton">
                    <div class="ui orange button">
                      <i class="block layout icon"></i>
                      from Library
                    </div>
                  </a>
                  <p>OR</p>
                  <input type="file" id="imgLoader" class="imgLoader" />
                  <label for="imgLoader">
                    <div class="ui orange button">
                      <i class="upload disk icon"></i>
                      Upload Image
                    </div>
                  </label>
                  <p>Supported files: JPG, JPEG, PNG</p>
                </div>
              </div>
            </div>
            <div class="eight wide column">
              <div class="canvas">
                <canvas id="c" width="450" height="700"></canvas>
              </div>
            </div>
            <div class="four wide column">
          
              <div id="boxEdit">
                <div class="ui top tertiary inverted attached segment">
                  <p>EDIT</p>
                </div>
                <div class="ui bottom attached segment">
                  <p>Select object to edit or Add new object from left menu.</p>
                </div>
              </div><!-- .boxEditImage -->
              
              <div id="boxEditText">
                <div class="ui top orange inverted attached segment">
                  <p>EDIT : Text</p>
                </div>
                <div class="ui bottom attached segment">
                  <div class="ui form">
                      <div class="field">
                        <label>Text:</label>
                        <div class="ui left labeled input">
                          <input placeholder="Text" type="text" id="editText">
                        </div>
                      </div>
          
                      <div class="field">
                        <label>Font</label>
                        <div class="ui selection dropdown fluid" id="uiEditFont">
                          <input name="gender" type="hidden" id="editFont">
                          <div class="default text">select</div>
                          <i class="dropdown icon"></i>
                          <div class="menu">
                            <div class="item" data-value="Arial">Arial</div>
                            <div class="item" data-value="Impact">Impact</div>
                            <div class="item" data-value="Lobster">Lobster</div>
                            <div class="item" data-value="Indie Flower">Indie Flower</div>
                            <div class="item" data-value="Gloria Hallelujah">Gloria Hallelujah</div>
                          </div>
                        </div>
                      </div>
          
                      <!--<div class="field">
                        <label>Size</label>
                        <input placeholder="14" value="14" type="text" id="editSize">
                      </div>-->
          
                      <div class="field">
                        <label>Color</label>
                        <div class="ui selection dropdown fluid" id="uiEditColor">
                          <input name="gender" type="hidden" id="editColor">
                          <div class="default text">Red</div>
                          <i class="dropdown icon"></i>
                          <div class="menu">
                            <div class="item" data-value="black">Black</div>
                            <div class="item" data-value="white">White</div>
                            <div class="item" data-value="red">Red</div>
                            <div class="item" data-value="orange">Orange</div>
                            <div class="item" data-value="blue">Blue</div>
                            <div class="item" data-value="green">Green</div>
                            <div class="item" data-value="aqua">Aqua</div>
                          </div>
                        </div>
                      </div>
                      <a href="#" id="updateTextButton">
                        <div class="ui orange button">
                          <i class="checkmark icon"></i>
                          Update
                        </div>
                      </a>
                      <a href="#" class="trashButton">
                        <div class="ui icon button black">
                          <i class="trash icon"></i>
                        </div>
                      </a>
                    </div><!-- form -->
                </div>
              </div><!-- .boxEditText -->
          
              <div id="boxEditImage">
                <div class="ui top orange inverted attached segment">
                  <p>EDIT : Image</p>
                </div>
                <div class="ui bottom attached segment">
                  <p>Use rectangle control around image to move / scale / rotate.</p>
                  <a href="#" class="trashButton">
                    <div class="ui icon button black">
                      <i class="trash icon"></i>
                    </div>
                  </a>
                </div>
              </div><!-- .boxEditImage -->
              
              <div class="ui segment pricebox">
                <strong>Price:</strong> <span>Rp 40000</span>
              </div>
              
              <div class="ui segment pricebox">
                <a href="#" id="getdata-button">
                  <div class="ui uk-button uk-button-primary" style="width: 100%">Submit</div>
                </a>
              </div>
            </div>
          </div>
          
          <div class="library ui modal">
            <i class="close icon"></i>
            <div class="header">
              Choose our high-quality image to add
            </div>
            <div class="content">
              <div class="librarylist">
                <div class="ui five connected items">
                  <div class="item" data-price="-50">
                    <div class="ui left corner label">
                      <div class="text">-50</div>
                    </div>
                    <div class="image">
                      <img src="https://blog.spoongraphics.co.uk/wp-content/uploads/2010/badge/chrisspooner-emblem.png" alt="" />
                    </div>
                  </div>
                  <div class="item" data-price="-30">
                    <div class="ui left corner label">
                      <div class="text">-30</div>
                    </div>
                     <div class="image">
                      <img src="http://static.freepik.com/free-photo/tribal-star-shape-vector_91-3339.jpg" alt="" />
                    </div>
                  </div>
                  <div class="item">
                     <div class="image">
                      <img src="http://cdn.vectorstock.com/i/composite/26,74/apple-shape-vector-752674.jpg" alt="" />
                    </div>
                  </div>
                  <div class="item">
                     <div class="image">
                      <img src="http://static.freepik.com/free-photo/tribal-star-shape-vector_91-3339.jpg" alt="" />
                    </div>
                  </div>
                  <div class="item">
                    <div class="image">
                      <img src="https://blog.spoongraphics.co.uk/wp-content/uploads/2010/badge/chrisspooner-emblem.png" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="actions">
              <div class="ui button orange" id="libAddButton">
                Add Image
              </div>
              <div class="ui button">
                Cancel
              </div>
            </div>
          </div>
          
          <div class="ui small modal" id="modalDelete">
            <i class="close icon"></i>
            <div class="header">
              Remove Object
            </div>
            <div class="content">
              <p>Are you sure you want to remove this object?</p>
            </div>
            <div class="actions">
              <div class="ui negative labeled button">
                Cancel
              </div>
              <div class="ui positive right labeled button">
                Delete !
              </div>
            </div>
          </div>
          
          <script src="//cdnjs.cloudflare.com/ajax/libs/fabric.js/1.4.8/fabric.min.js"></script>
    </div>
    <x-Keranjang/>
@endsection