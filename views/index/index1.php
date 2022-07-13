<style type="text/css">
  /*
inspired from http://codepen.io/Rowno/pen/Afykb
& https://jsfiddle.net/q0rgL8ws/
*/
.carousel-fade .carousel-inner .item {
  opacity: 0;
  transition-property: opacity;
    overflow:hidden;
}
.item.active img {
    transition: transform 5000ms linear 0s;
    /* This should be based on your carousel setting. For bs, it should be 5second*/
    transform: scale(1.05, 1.05);
}
.carousel-fade .carousel-inner .active {
  opacity: 1;
}

.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
  left: 0;
  opacity: 0;
  z-index: 1;
}

.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
  opacity: 1;
}

.carousel-fade .carousel-control {
  z-index: 2;
}

/*
WHAT IS NEW IN 3.3: "Added transforms to improve carousel performance in modern browsers."
now override the 3.3 new styles for modern browsers & apply opacity
*/
@media all and (transform-3d), (-webkit-transform-3d) {
    .carousel-fade .carousel-inner > .item.next,
    .carousel-fade .carousel-inner > .item.active.right {
      opacity: 0;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.prev,
    .carousel-fade .carousel-inner > .item.active.left {
      opacity: 0;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.next.left,
    .carousel-fade .carousel-inner > .item.prev.right,
    .carousel-fade .carousel-inner > .item.active {
      opacity: 1;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
}

</style>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner carousel-zoom" role="listbox">
      <div class="item active">
        <img class="img-responsive" src="https://statik.tempo.co/data/2019/09/30/id_876773/876773_720.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Sell $</h3>
          <p>Money Money.</p>
        </div>      
      </div>

      <div class="item">
        <img class="img-responsive" src="https://d2hhj3gz5jljkm.cloudfront.net/assets2/127/212/795/648/normal/avatar.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>More Sell $</h3>
          <p>Lorem ipsum...</p>
        </div>      
      </div>
      <div class="item">
        <img class="img-responsive" src="https://images.unsplash.com/photo-1445462657202-a0893228a1e1?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1200" alt="Image">
        <div class="carousel-caption">
          <h3>More Sell $</h3>
          <p>Lorem ipsum...</p>
        </div>      
      </div>
     
    </div>



    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3>CV. Purnama Indah Travel</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Current Project</p>
    </div>
    <div class="col-sm-4"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 2</p>    
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>
  </div>
</div><br>
