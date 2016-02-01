<script>
function toggle(el){ 
  if (el.className == "col-sm-4 col-lg-4 col-md-4"){
    el.className = "hidden";      
  } else {
    el.className = "col-sm-4 col-lg-4 col-md-4";
  }
};

function toggleform(el){
  if (el.className == "col-sm-8 col-lg-8 col-md-8"){
    el.className = "hidden";
  } else {
    el.className = "col-sm-8 col-lg-8 col-md-8";
  }
};
            
function togglebig(el){
  if (el.className == "col-sm-4 col-lg-4 col-md-4"){
    el.className = "col-sm-12 col-lg-12 col-md-12";
  } else {  
    el.className = "col-sm-4 col-lg-4 col-md-4";
  }
};

function togglecase(){
  toggle(cat);
  toggle(dog);
  toggleform(hcase);
};

function togglecat(){
  toggle(cases);
  toggle(dog);
  toggleform(hcat);
};

function toggledog(){
  toggle(cases);
  toggle(cat);
  toggleform(hdog);
};
</script>
  <div class="container">
    <div class="row">
      <div id="cases" class="col-sm-4 col-lg-4 col-md-4">
        <div class="thumbnail">
          <img src="img/cases_example.jpg" alt="Example of phone cases">
          <hr>
          <div class="caption">
            <h4 class="pull-right">$10</h4>
            <h4>Custom Phone Case</h4>
            <p>Get a custom phone case with a picture or text to show off to everyone!</p>
            <button class="btn btn-primary" onclick="togglecase()">Get yours today!</button>
          </div>
        </div>
      </div>
      <div id="cat" class="col-sm-4 col-lg-4 col-md-4">
        <div class="thumbnail">
          <img src="img/cats.jpg" alt="Example of printed cats">
          <hr>
          <div class="caption">
            <h4 class="pull-right">$3</h4>
            <h4>Cuddling Cats</h4>
            <p>Cats are the cutest things you will ever see in your life. Especially cuddling cats!</p>
            <button class="btn btn-primary" onclick="togglecat()">You lika da catz?</button>
          </div>
        </div>
      </div>
      <div id="dog" class="col-sm-4 col-lg-4 col-md-4">
        <div class="thumbnail">
          <img src="img/dogs.jpg" alt="Example of printed dogs">
          <hr>
          <div class="caption">
            <h4 class="pull-right">$3</h4>
            <h4>Sleeping Dog</h4>
            <p>Here it is for you, if you're more of a dog person! Dogs are just so cute when sleeping.</p>
            <button class="btn btn-primary" onclick="toggledog()">Get one!</button>
          </div>
        </div>
      </div>
      <div id="hcase" class="hidden">
        <iframe src="https://docs.google.com/forms/d/1c9a5DCYuqkCMRVKI036pjlZp_vJ4X5xHeV1QAiuhbow/viewform?embedded=true" width="760" height="1000">Loading...</iframe>
      </div>
      <div id="hcat" class="hidden">
        <iframe src="https://docs.google.com/forms/d/1vHff0TbsCmwho8SVlhFYNLis9d9_tSenVhVFy2ScPJk/viewform?embedded=true" width="760" height="1000" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
      </div>
      <div id="hdog" class="hidden">
        <iframe src="https://docs.google.com/forms/d/1Vt51KSGHA1JWxw-73UnK9TEu9ZJ_xJreUVImldLaTwc/viewform?embedded=true" width="760" height="1000" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
      </div>
    </div>
  </div>
