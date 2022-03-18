<!DOCTYPE html>

<head>

    <title>Curriculum Vitea</title>

    <style>
      body {
      background-image: url('Gandalf.gif');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
}
      div{
        text-align: left;
      }    
      .pg-input{
        color: pink;
        margin-left: 50px;
        font-size: 23px;
        
      }
      form{
        background-color: rgba(0,0,0, 0.6);
        background-repeat: no-repeat;
        width: 25%;
      }

      @font-face { font-family: braille; src: url(http://localhost/BRAILLE1.woff2) format('woff2');
      } 
      
      .pik{
        float:right;
        height: 5px;
      }

    </style>


</head>

<Body>
    


<h1 style="color:lightgrey;">Online CV</h1>
  
<h3 style="color:lightgrey;">Mijn Gegevens</h3>
<form style="color:lightgray;" method="post">
  <div class="pg-input">

  Naam: <div class="pik"><input type='text' name='name'/></div><br/>
  Leeftijd: <div class="pik"><input type='date' name='leeftijd'/></div><br/>
  geslacht: <br/>
  <input type='radio' value='man'       name='geslacht'/>Man<br/>
  <input type='radio' value='vrouw'     name='geslacht'/>Vrouw<br/>
  <input type='radio' value='helicopter'name='geslacht'/>Apache Attack Helicopter<br/>
  <input type='radio' value='kenzo'     name='geslacht'/>Kenzo<br/>
  <input type='radio' value='anders'    name='geslacht'/>Anders<br/>
  <input type='radio' value='omslachtig'name='geslacht'/>omslachtig<br/>
  <div class="cg-gegevens">
  Email:<div class="pik"><input type='email' name='email'/></div><br/>
  Adres: <div class="pik"><input type='text'name='adres'/></div><br/>
  Mobiel telefoon nummer:<div class="pik"><input type='text' name='nummer'/></div><br/>
  <input type='submit' name='verstuurknop' value='versturen'/>
  <input type='submit' name='verstuurknopPik' value='Ik ben blind'/>

  </div> 
  
</form>
<?php

if (isset($_POST['verstuurknopPik'])){
    echo '<style type="text/css">
    body {
      font-family: braille, Sans-serif;
    }
    </style>';
}

#Gegevens verwerken
if (isset($_POST['verstuurknop'])){
  echo "<b>Naam: </b>";
      if (empty($_POST['name'])) {
          echo "Er is geen naam ingevuld";
      } else {
          echo $_POST['name'];
      }
        echo "<br/>";

        echo "<b>Geslacht: </b>";
      if (empty($_POST['geslacht'])) {
          echo "Er is geen geslacht ingevuld";
      } else {
          echo $_POST['geslacht'];
      }
        echo "<br/>";

        echo "<b>Leeftijd: </b>";
      if (empty($_POST['leeftijd'])) {
          echo "Er is geen leeftijd ingevuld";
      } else {
          echo $_POST['leeftijd'];
      }

        echo "<br/>";
        echo "<b>Email: </b>";
      if (empty($_POST['email'])) {
          echo "Er is geen Email adres ingevuld";
      } else {
          echo $_POST['email'];
      }
        echo "<br/>";
        echo "<b>Adres: </b>";
      if (empty($_POST['adres'])) {
          echo "Er is geen adres ingevuld";
      } else {
          echo $_POST['adres'];
      }

        echo "<br/>";
        echo "<b>Nummer: </b>";
      if (empty($_POST['nummer'])) {
          echo "Er is geen telefoonnummer ingevuld";
      } else {
          echo $_POST['nummer'];
      }
      #Database
      $host = 'localhost';
      $dbname = 'massieve_slang';
      $username = 'root';
      $password = "";

      $name = $_POST["name"];
      $geslacht = $_POST["geslacht"];
      $adres = $_POST["adres"];  
      $leeftijd = $_POST["leeftijd"];
      $nummer = $_POST["nummer"];
      $email = $_POST["email"];
  
  try{
    $pdo = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
      echo '<br/>verbinding gelukt';
  }catch (PDOExeption $ex) {
    echo 'verbinding mislukt';
  }
  

  $upload_data = $pdo->prepare("INSERT INTO cv (naam, geslacht, leeftijd, email, adres, nummer) VALUES (?, ?, ?, ?, ?, ?)");
  $upload_data->execute([$name, $geslacht , $leeftijd, $email, $adres, $nummer,]);

  }   
  ?>
        
    
        

     
     </Body>

</html>