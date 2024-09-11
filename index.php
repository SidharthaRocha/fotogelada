<!-- <?php 
session_start();
if(empty($_SESSION)){
  print"<script>location.href='indexsemlogado.php';</script>";
}

?> -->




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotografia gelada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="login.css">
<link rel="stylesheet" href="modalbot.css">
<link rel="stylesheet" href="galeria.css">
 
   

    
    
</head>

<body>
    <header>
        <h1 id="logo">Fotografia Gelada</h1>
        <button id="login"data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
    </header>

    <hr>
    <p id="home">Home</p>
    <hr>

 

    
    <!-- Modal de login -->
    <div class="modal fade"  id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Cabeçalho do modal -->
                <div class="modal-header">
                    <h5 class="titulo">Login</h5>
                </div>
                <!-- Corpo do modal com o formulário de login -->
                <div class="modal-body">
                    <form action="process_login.php" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="senha" class="form-label">senha</label>
                            <input type="password" class="form-control" id="senha" name="senha" required>
                        </div>
                        
                        
                        <!-- Botão de login -->
                        <div class="cance-entrar">
                            <button type="submit" id="cancelar"  data-bs-dismiss="modal" aria-label="Close" >Cancelar</button>
                            <button type="submit" id="entrar" >Entrar</button>  
                       </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>


    <main class="container">
        <div class=" galeria">
            <figure class=" itemGaleria  item01">
                <img   data-bs-toggle="modal" data-bs-target="#exampleModal" src="./Imagens/Everest.jpg" alt="Everest" class="imgGaleria">
                <div class="icone">
                    <img class="like" id="image1" src="./Icones/coração.svg" alt="coração"><span
                        class="numero" >0</span>
                    <img class="coment"   src="./Icones/chat-preto.svg" alt="comentarios"><span
                        class="btn-hearth" id="counter1">0</span>

                </div>

            </figure>


        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Everest</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img class="foto" src="./Imagens/Everest.jpg" width="460px" alt="Everest">
          
                </div>
                <div class="cora-curtida">
                  <img  id="heart" src="./Icones/coraçãoVermelho.svg" alt="coração">
          
                 
                  <img src="./Icones/chat-preto.svg" alt="chat" id="comentary" > <div class="curtida"><span >0</span> </div><p class="comentarios">comentários</p>
              </div>
                <div class="modal-footer">
                 
                  <div class="chat"> <img src="./Icones/chat-preto.svg" id="nuvem" alt=""> <div id="texto"><input  type="text"  name="texto"  placeholder="Adicionar comentarios..."></div></div><img  src="./Icones/send.svg" width="50px" alt="">
                    
                </div>
              </div>
            </div>
          </div>
       

        <div class=" galeria">
            <figure class=" itemGaleria  item02">
                <img data-bs-toggle="modal" data-bs-target="#exampleModal2"  src="./Imagens/AlpesSuiços.jpg" alt="lpesSuiços" class="imgGaleria">
                <div class="icone">
                    <img  class="like" id="image2" src="./Icones/coração.svg" alt="coração" onclick="trocarImagem2()"><span
                    class="numero">0</span>
                    <img class="coment"src="./Icones/chat-preto.svg" alt="comentarios"><span class="btn-hearth" id="counter2">0
                    </span>

                </div>
            </figure>

        </div>
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">AlpesSuiços</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img class="foto" src="./Imagens/AlpesSuiços.jpg" width="460px" alt="Everest">
          
                </div>
                <div class="cora-curtida">
                  <img  id="heart" src="./Icones/coraçãoVermelho.svg" alt="coração">
          
                 
                  <img src="./Icones/chat-preto.svg" alt="chat" id="comentary" > <div class="curtida"><span >0</span> </div><p class="comentarios">comentários</p>
              </div>
                <div class="modal-footer">
                 
                  <div class="chat"> <img src="./Icones/chat-preto.svg" id="nuvem" alt=""> <div id="texto"><input  type="text"  name="texto"  placeholder="Adicionar comentarios..."></div></div><img  src="./Icones/send.svg" width="50px" alt="">
                    
                </div>
              </div>
            </div>
          </div>
       
        <div class="galeria">
            <figure class=" itemGaleria  item03">
                <img data-bs-toggle="modal" data-bs-target="#exampleModal3" src="./Imagens/GrandCanyon.jpg" alt="GrandCanyon" class="imgGaleria">
                <div class="icone">
                    <img  class="like" id="image3" src="./Icones/coração.svg" alt="coração" onclick="trocarImagem()" ><span
                    class="numero">0</span>
                    <img  class="coment" src="./Icones/chat-preto.svg" alt="comentarios"><span class="btn-hearth" id="counter3">0
                    </span>

                </div>
            </figure>

        </div>
        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">GrandCanyon</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img class="foto" src="./Imagens/GrandCanyon.jpg" width="460px" alt="Everest">
          
                </div>
                <div class="cora-curtida">
                  <img  id="heart" src="./Icones/coraçãoVermelho.svg" alt="coração">
          
                 
                  <img src="./Icones/chat-preto.svg" alt="chat" id="comentary" > <div class="curtida"><span >0</span> </div><p class="comentarios">comentários</p>
              </div>
                <div class="modal-footer">
                 
                  <div class="chat"> <img src="./Icones/chat-preto.svg" id="nuvem" alt=""> <div id="texto"><input  type="text"  name="texto"  placeholder="Adicionar comentarios..."></div></div><img  src="./Icones/send.svg" width="50px" alt="">
                    
                </div>
              </div>
            </div>
          </div>





     
        <div class="galeria">
            <figure class=" itemGaleria  item04">
                <img  data-bs-toggle="modal" data-bs-target="#exampleModal4" src="./Imagens/MonteFuji.jpg" alt="MonteFuji" class="imgGaleria">
                <div class="icone">
                    <img  class="like" id="image4" src="./Icones/coração.svg" alt="coração"  onclick="trocarImagem()"><span
                    class="numero">0</span>
                    <img class="coment"  src="./Icones/chat-preto.svg" alt="comentarios"><span class="btn-hearth" id="counter4">0
                    </span>

                </div>
            </figure>

        </div>

        <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">MonteFuji</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img class="foto" src="./Imagens/MonteFuji.jpg" width="460px" alt="Everest">
          
                </div>
                <div class="cora-curtida">
                  <img  id="heart" src="./Icones/coraçãoVermelho.svg" alt="coração">
          
                 
                  <img src="./Icones/chat-preto.svg" alt="chat" id="comentary" > <div class="curtida"><span >0</span> </div><p class="comentarios">comentários</p>
              </div>
                <div class="modal-footer">
                 
                  <div class="chat"> <img src="./Icones/chat-preto.svg" id="nuvem" alt=""> <div id="texto"><input  type="text"  name="texto"  placeholder="Adicionar comentarios..."></div></div><img  src="./Icones/send.svg" width="50px" alt="">
                    
                </div>
              </div>
            </div>
          </div>
        
        <div class="galeria">
            <figure class=" itemGaleria  item05">
                <img  data-bs-toggle="modal" data-bs-target="#exampleModal5" src="./Imagens/MonteBranco.jpg" alt="MonteBranco" class="imgGaleria">
                <div class="icone">
                    <img  class="like"  id="image5"src="./Icones/coração.svg" alt="coração"  onclick="trocarImagem()"><span
                    class="numero">0</span>
                    <img  class="coment"src="./Icones/chat-preto.svg" alt="comentarios"><span
                    class="btn-hearth" id="counter5">0</span>

                </div>
            </figure>


        </div>
        <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">MonteBranco</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img class="foto" src="./Imagens/MonteBranco.jpg" width="460px" alt="Everest">
          
                </div>
                <div class="cora-curtida">
                  <img  id="heart" src="./Icones/coraçãoVermelho.svg" alt="coração">
          
                 
                  <img src="./Icones/chat-preto.svg" alt="chat" id="comentary" > <div class="curtida"><span >0</span> </div><p class="comentarios">comentários</p>
              </div>
                <div class="modal-footer">
                 
                  <div class="chat"> <img src="./Icones/chat-preto.svg" id="nuvem" alt=""> <div id="texto"><input  type="text"  name="texto"  placeholder="Adicionar comentarios..."></div></div><img  src="./Icones/send.svg" width="50px" alt="">
                    
                </div>
              </div>
            </div>
          </div>
        
        <div class=" galeria">
            <figure class=" itemGaleria  item06">
                <img  data-bs-toggle="modal" data-bs-target="#exampleModal6" src="./Imagens/MonteElbrus.jpg" alt="MonteElbrus" class="imgGaleria">
                <div class="icone">
                    <img  class="like" id="image6" src="./Icones/coração.svg" alt="coração"  onclick="trocarImagem()"><span
                    class="numero">0</span>
                    <img class="coment"  src="./Icones/chat-preto.svg" alt="comentarios"><span class="btn-hearth" id="counter6">0
                    </span>

                </div>
            </figure>

        </div>
        <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">MonteElbrus</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img class="foto" src="./Imagens/MonteElbrus.jpg" width="460px" alt="Everest">
          
                </div>
                <div class="cora-curtida">
                  <img  id="heart" src="./Icones/coraçãoVermelho.svg" alt="coração">
          
                 
                  <img src="./Icones/chat-preto.svg" alt="chat" id="comentary" > <div class="curtida"><span >0</span> </div><p class="comentarios">comentários</p>
              </div>
                <div class="modal-footer">
                 
                  <div class="chat"> <img src="./Icones/chat-preto.svg" id="nuvem" alt=""> <div id="texto"><input  type="text"  name="texto"  placeholder="Adicionar comentarios..."></div></div><img  src="./Icones/send.svg" width="50px" alt="">
                    
                </div>
              </div>
            </div>
          </div>
        
       

        <div class="galeria">
            <figure class=" itemGaleria  item07">
                <img data-bs-toggle="modal" data-bs-target="#exampleModal7" src="./Imagens/PicoPikes.jpg" alt="PicoPikes" class="imgGaleria">
                <div class="icone">
                    <img  class="like" id="image7" src="./Icones/coração.svg" alt="coração"  onclick="trocarImagem()"><span
                    class="numero">0</span>
                    <img class="coment"  src="./Icones/chat-preto.svg" alt="comentarios"><span class="btn-hearth" id="counter7">0
                    </span>

                </div>
            </figure>

        </div>
        <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">PicoPikes</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img class="foto" src="./Imagens/PicoPikes.jpg" width="460px" alt="Everest">
          
                </div>
                <div class="cora-curtida">
                  <img  id="heart" src="./Icones/coraçãoVermelho.svg" alt="coração">
          
                 
                  <img src="./Icones/chat-preto.svg" alt="chat" id="comentary" > <div class="curtida"><span >0</span> </div><p class="comentarios">comentários</p>
              </div>
                <div class="modal-footer">
                 
                  <div class="chat"> <img src="./Icones/chat-preto.svg" id="nuvem" alt=""> <div id="texto"><input  type="text"  name="texto"  placeholder="Adicionar comentarios..."></div></div><img  src="./Icones/send.svg" width="50px" alt="">
                    
                </div>
              </div>
            </div>
          </div>

      
        
        <div class=" galeria">
            <figure class="itemGaleria  item08">
                <img  data-bs-toggle="modal" data-bs-target="#exampleModal8"  src="./Imagens/Huandoy.jpg" alt="Huandoy" class="imgGaleria">
                <div class="icone">
                    <img  class="like" id="image8" src="./Icones/coração.svg" alt="coração"  onclick="trocarImagem()"><span
                    class="numero">0</span>
                    <img class="coment"  src="./Icones/chat-preto.svg" alt="comentarios"><span class="btn-hearth" id="counter8">0
                    </span>

                </div>
            </figure>

        </div>
        <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Huandoy</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img class="foto" src="./Imagens/Huandoy.jpg" width="460px" alt="Everest">
          
                </div>
                <div class="cora-curtida">
                  <img  id="heart" src="./Icones/coraçãoVermelho.svg" alt="coração">
          
                 
                  <img src="./Icones/chat-preto.svg" alt="chat" id="comentary" > <div class="curtida"><span >0</span> </div><p class="comentarios">comentários</p>
              </div>
                <div class="modal-footer">
                 
                  <div class="chat"> <img src="./Icones/chat-preto.svg" id="nuvem" alt=""> <div id="texto"><input  type="text"  name="texto"  placeholder="Adicionar comentarios..."></div></div><img  src="./Icones/send.svg" width="50px" alt="">
                    
                </div>
              </div>
            </div>
          </div>
       
    </main>




    <footer>
        <article>
            <div class="fotografia">
                <p id="photo">FOTOGRAFIA</p>
                <p id="gelada">GELADA</p>
            </div>
            <div class="rede-social">
                <img class="emoji" id="" src="./Icones/Twitter.svg" alt="twitter">
                <img class="emoji" src="./Icones/Instagram.svg" alt="instagram">
                <img class="emoji" src="./Icones/youtube.svg" height="20px" alt="youtube">
                <img class="emoji" src="./Icones/tiktok.svg" alt="tik-toker">
                <div class="copy">
                    <span class="copyright">Copyright-2024 </span>
                </div>

            </div>
        </article>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

<script src="fotogelada.js"></script>


</body>

</html>