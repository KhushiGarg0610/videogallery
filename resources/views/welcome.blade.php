


<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> -->

        <!-- <title>Laravel</title> -->

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    <!-- </head> -->
    <!-- <body class="antialiased"> -->
    <div class="container-fluid">
    <!-- @if($errors->any())
    @foreach($errors->all() as $error){
        <li> {{$error}} </li>
    }
    @endforeach
    @endif -->
            <div class="row">
                <div class="col-md-4">
                  
               
                </div>
                <div class="col-md-4">
                <h2 align='center'>Input form</h2>
                <form action="/videoUploaded" method = "post" enctype="multipart/form-data">
                @csrf     
                    <div class="form-group">
                         <label for="movie_name">Movie Name</label>
                         <input type="text" class="form-control" name="movie_name" id="movie_name"  placeholder="Enter Movie Name">
                         @error('movie_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                        </div>
                     <div class="form-group">
                     <label for="year-of-release">Year of release</label>
                          <input type="number" name="year_of_release" class="form-control" id="year_of_release" placeholder="Enter year of release">
                          @error('year_of_release')
                        <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                        </div>      
                      <div class="form-group">
                         <label for="lang">Language</label>
                         <input type="text" name="language" class="form-control" id="language"  placeholder="Enter language">
                         @error('language')
                        <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                        </div>
                     <div class="form-group">
                         <label for="imageUpload"> Thumbnail</label><br>
                        
                         <input type="file" name="thumbnail" class="form-control-image" accept="image/*"> <br>
                         @error('thumbnail')
                        <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                        </div>
                     <div class="form-group">
                         <label for="videoUpload"> Video</label><br>
                         <input type="file" name="video" class="form-control-image" accept="video/*"> <br>
                         @error('video')
                        <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                        </div><br>
                      <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
        <a href="/gallery"><button class="btn btn-success">View Gallery</button></a>
        </div>
    </div>
        </div>
    <!-- </body> -->
<!-- </html> -->
