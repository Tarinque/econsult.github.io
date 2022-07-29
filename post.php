<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <style>
        body{
        background: black;
        width: 100vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: 500;
    }
    .post{
        background: white;
        position: relative;
        display: flex;
        flex-direction: column;
        width: 500px;
    }
    .header{
        position: relative;
        width: 100%;
        height: 50px;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: baseline;
        margin-bottom: 1rem;
    }
    .logo{
        position: relative;
        top: 40%;
        width:auto;
        height: auto;
        margin-left: 1rem;
    }
    .user{
        position: relative;
        height: auto;
        width: auto;
        padding-left: 8px;
    }
    .puntos{
        position: relative;
        width:auto;
        height: auto;
        top: 50%;
        transform: translate(-1rem,-25%);
    }
    .subheader{
        position: relative;
        display: flex;
        flex-direction: row;
        height: 40px;
    }
    .image img{
        width: 100%;
        height: 100%;
      }
      /* @supports(object-fit: cover){
          .image img{
            height: 100%;
            object-fit: cover;
            object-position: center center;
            position: relative;
          }
      } */
      .texto{
          display: flex;
          flex-direction: column;
          margin-top: 0.5rem;
          margin-left: 1rem;
          margin-right: 1rem;
          margin-bottom: 1.5rem;
      }
      .botones {
          display: flex;
          justify-content: space-between;
      }
      .left {
          display: flex;
      }
      .likes{
        margin-top: 1.5rem;
        margin-bottom: 1rem;
      }
      .comment{
          margin-left: 8px;
          margin-right: 8px;
      }
      .descripcion{
        width: 100%;
        height: 100%;
        text-align: justify;
        padding-bottom: 5px;
    }
    </style>
    <title>Post</title>
</head>
<body>
    <div class="post">
        <div class="header">
            <div class="subheader">
                <div class="logo">
                    <i class="fab fa-html5 fa-2x" ></i>
                </div>
                <div class="user">
                    <div>
                        <p>
                            <strong>HTML5</strong> <br>
                            Rigoberto
                        </p>
                    </div>
                </div>
            </div>
            <div class="puntos">
                <i class="fas fa-ellipsis-v fa-2x"></i>
            </div>
        </div>
        <div class="image">
            <img src="https://www.picgaga.com/uploads/wallpaper/motorcycles/nature-evening-long-ride-motorcycle-tired-motorcycle-wallpaper-1614240610.jpg">
        </div>
        <div class="texto">
            <div class="botones">
                <div class="left">
                    <div class="like">
                        <i class="far fa-heart fa-2x"></i>
                    </div>
                    <div class="comment">
                        <i class="far fa-comment fa-2x"></i>
                    </div>
                    <div class="share">
                        <i class="far fa-paper-plane fa-2x"></i>
                    </div>
                </div>
                <div class="right">
                    <i class="far fa-bookmark fa-2x"></i>
                </div>
            </div>
            <div class="likes">
                Liked by <strong> 4GeeksAcademy, html5, Web</strong> and <strong>100,000 others</strong>
            </div>
            <div class="descripcion">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eleifend tellus in elit aliquet vestibulum. Phasellus quis erat ante. Integer ultrices consequat eros, eget sagittis massa mollis et. Etiam lectus dolor, hendrerit fermentum aliquet sed, egestas vitae odio. Mauris non turpis at dui placerat ullamcorper. Integer condimentum, dui quis condimentum venenatis, sapien quam ullamcorper felis, sed pellentesque felis massa non justo. </div>
        </div>
    </div>
</body>
</html>
Footer
© 2022 GitHub, Inc.
Footer navigation

    Terms
    Privacy
    Security
    Status
    Docs
    Contact GitHub
    Pricing
    API
    Training
    Blog
    About

You have no unread notifications