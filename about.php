

    <!-- Navigation -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" align="center"><font color="#00FF33">Online Feedback System</font> </h1>
                
            </div>
        </div>

<!DOCTYPE html>
<html>
<div id="captioned-gallery">
  <figure class="slider">
    <figure>
      <img src="images/i1.jpeg" alt>
      <figcaption>VB</figcaption>
    </figure>
    <figure>
      <img src="images/i2 (1).jpg" alt>
      <figcaption>VB</figcaption>
    </figure>
    <figure>
      <img src="images/i2 (2).jpg" alt>
      <figcaption>VB</figcaption>
    </figure>
    <figure>
      <img src="images/g1 (1).jpg" alt>
      <figcaption>VB</figcaption>
    </figure>
    <figure>
      <img src="images/g1 (3).jpg" alt>
      <figcaption>VB</figcaption>
    </figure>
  </figure>
</div>
</html>>

<style>
@import url(https://fonts.googleapis.com/css?family=Istok+Web);
@keyframes slidy {
0% { left: 0%; }
20% { left: 0%; }
25% { left: -100%; }
45% { left: -100%; }
50% { left: -200%; }
70% { left: -200%; }
75% { left: -300%; }
95% { left: -300%; }
100% { left: -400%; }
}
* {
  box-sizing: border-box;
}
body, figure { 
  margin: 0; background: #101010;
  font-family: Istok Web, sans-serif;
  font-weight: 100;
}
div#captioned-gallery { 
  width: 100%; overflow: hidden; 
}
figure.slider { 
  position: relative; width: 500%;
  font-size: 0; animation: 30s slidy infinite; 
}
figure.slider figure { 
  width: 20%; height: auto;
  display: inline-block;  position: inherit; 
}
figure.slider img { width: 100%; height: auto; }
figure.slider figure figcaption { 
  position: absolute; bottom: 0;
  background: rgba(0,0,0,0.4);
  color: #fff; width: 100%;
  font-size: 2rem; padding: .6rem; 
}

</style>