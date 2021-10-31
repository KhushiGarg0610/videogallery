<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<style>
/* 
* { box-sizing: border-box; }
body { background: slategray; margin: 0; padding: 3em 1em;}
ul { list-style: none; margin: 0; padding: 0;}
figure { margin: 0; }
figcaption { font-style: italic; font-size: 0.8em; color: grey; line-height: 1.4; }


.grid {
  display: grid;
  grid-auto-flow: column; // display the items in columns only, ie horizontal
  grid-auto-columns: 90%; // create as many columns as there are items. 90% so we can see next item on the right.
  grid-gap: 1em;
  overflow-x: scroll; // scroll only within the grid, not entire page
  -webkit-overflow-scrolling: touch; // better scrolling on touch
  padding: 2em 1em;
  background: white;
  
  @media all and (min-width: 600px) {
    grid-auto-flow: initial; // default: display items in rows and cols
    grid-template-columns: repeat(auto-fit, minmax(auto,20em)); // as many columns with max-width of 20em;
    justify-content: center; // center the items - this is optional
  }
  
  &__figure {
    display: grid;
    grid-template-rows: 15em 1fr; // 15em high row for image – value could be whatever
    grid-gap: 1em;
    */
    /* img {
      width: 100px;
      height: 100px;
      object-fit: cover; // crop image within its cell
    } */
  /* }
} */
img{
    height:200px;
    width:auto;
    margin-top:10px;
}
.card{
    margin:10px;
}
h1{
    /* margin:20px;
    padding:10px;
    text-align:center;
    color:white;
    background-color:#014f86; */
}
.gallery_part{
    display:flex;
    justify-content:start;
    /* align-content:start; */
}
.exit{
    margin:20px;
    background-color:#014f86;
}
.heading{
                color:white;
                background-color:black;
                padding-top:10px;
                padding-bottom:5px;
                text-align:center;
                margin-bottom:30px;
            }


</style>
</head>
<body>


<!--  -->



<div class="row">
        <div class="heading col-lg-12">
            <h1>Movie Magic</h1>
        </div>
    </div>


  
<div class="container-fluid">
    <div class="row">
      <div class="col-md-1"><a href="/" class="exit btn btn-dark">Upload files</a></div>
      <div class="gallery_part col-md-11">
      @foreach($data as $thumb)
    <div class="card" style="width: 18rem;">
        <a href="{{$thumb->video}}">
            <img class="card-img-top" src="{{$thumb->nail}}" alt="Card image cap">
        </a>
        <div class="card-body">
            <h5 class="card-title">{{$thumb->movie_name}}</h5>
            <p class="card-text">{{$thumb->year}}<br>{{$thumb->lang}}</p>
            <a href="{{$thumb->video}}" class="btn btn-primary">Go to video</a>
        </div></div>
  @endforeach
      </div>
    
 
</div>
</div>















</body>
</html>