<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/checkbox.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
  <header>
    <div id="logo"><img src="img/Logo Indolor Dark Render.png" alt="logo"></div>
    <button class="connexion"><a href="user/connexion.php"></a>Se connecter</button>
  </header>
  <main>
    <div id="app">
      <!-- <fieldset> -->
        <h1>Notez votre douleur sur 
          une échelle de 1 à 10 :</h1>
        <div class="input"> 
        <input type="radio" id="1" value="1" v-model="douleur">
        <label for="1">1</label>
        <br>
        <input type="radio" id="2" value="2" v-model="douleur">
        <label for="2">2</label>
        <br>
        <input type="radio" id="3" value="3" v-model="douleur">
        <label for="3">3</label>
        <br>
        <input type="radio" id="4" value="4" v-model="douleur">
        <label for="4">4</label>
        <br>
        <input type="radio" id="5" value="5" v-model="douleur">
        <label for="5">5</label>
        <br>
        <input type="radio" id="6" value="6" v-model="douleur">
        <label for="6">6</label>
        <br>
        <input type="radio" id="7" value="7" v-model="douleur">
        <label for="7">7</label>
        <br>
        <input type="radio" id="8" value="8" v-model="douleur">
        <label for="8">8</label>
        <br>
        <input type="radio" id="9" value="9" v-model="douleur">
        <label for="9">9</label>
        <br>
        <input  type="radio" id="10" value="10" v-model="douleur">
        <label for="10">10</label>
      </div>
        <br>
        <button  v-on:click="confirme" class="suite">Suite</button>
      <!-- </fieldset> -->
    </div>
  </main>
    
      <script>
        var app = new Vue({
          el: "#app",
          data:{
              douleur: []
          },
          methods:{
            confirme(){
                  console.warn( this.douleur)
            }
          },
        })
      </script>
    
</body>
</html>