<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Shinakamana</title>
</head>
<body>    
    <div class="container text-center mt-5" id="merah" x-data="quote" x-init="getQuote()">
        <div class="row my-5 justify-content-center">
            <p class="mt-5 mb-3 display-4" id="logo">Shinakamana</p>
            <div class="col-10">
                <div class="card border-0 mb-5">
                    <div class="card-header">
                        <div class="text-end" id="item">
                            <i class="bi bi-circle-fill" id="merah"></i>
                            <i class="bi bi-circle-fill" id="cream"></i>
                            <i class="bi bi-circle-fill" id="hitam"></i>
                        </div>
                    </div>
                    <div class="card-body" id="text">
                        <p class="quote fs-4" x-text="quote"></p>
                        <p class="lead" x-text="character"></p>
                        <p x-text="anime"></p>
                        <a class="btn btn-lg hero shadow-lg mt-4" href="index">Buka <i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <script>
        const quote = {
          anime:"",
          character:"",
          quote:"",
          getQuote(){
            fetch("https://animechan.vercel.app/api/random")
            .then(res=>res.json())
            .then(data=>{
              this.anime = data.anime
              this.character = data.character
              this.quote = data.quote
            })
          }
        }
    </script>
    <script src="js/script.js"></script>
    <script src="//cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>