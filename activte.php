<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      background-color: #f7f7f7;
      font-family: Arial, sans-serif;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      flex-direction: column;
    }

    .question-container {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      text-align: center;
      margin-bottom: 20px;
    }

    .question {
      font-size: 24px;
      margin-bottom: 20px;
      text-align: right;
    }

    .shape-container {
      display: flex;
      justify-content: center;
    }

    .shape {
      width: 60px;
      height: 60px;
      margin: 0 10px;
      cursor: pointer;
      transition: transform 0.3s ease-in-out;
      box-shadow: 0 2px 4px rgba(231, 9, 9, 0.2);
    }

    table, th, td {
  border:1px solid black;
}
  </style>
</head>
<body>


  <div class="container mt-3">
    <h2>Toggleable Tabs</h2>
    <br>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu1">Menu 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
      </li>
    </ul>

    <div class="tab-content">
      <div id="home" class="container tab-pane active"><br>
       
        <h3 class="box-title">Tâche et exigence générale et relation avec activités</h3>
                    
        <table>
         
    <th>Activités</th>
    <th>A</th>
    <th>B</th>
    <th>C</th>
    <th>D</th>
    <th>Obstacles à la réalisation de l'activité</th>
    <th>Points d'appui et commentaires

    </th>
    </tr>
    <tr>
    <td>S’orienter dans l’espace
    </td>
    <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <td> <textarea ></textarea></td>
    <td> <textarea ></textarea></td>
    </tr>
    <tr>
    <td>S’orienter dans le temps
    </td>
    <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <td> <textarea ></textarea></td>
    <td> <textarea ></textarea></td>
    </tr>
    <tr>
    <td>Fixer une zone d’attention
    </td>
    <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <td> <textarea ></textarea></td>
    <td> <textarea ></textarea></td>
    </tr>
    <tr>
    <td>Mémoriser
    </td>
    <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <td> <textarea ></textarea></td>
    <td> <textarea ></textarea></td>
    </tr>
    <tr>
    <td>Gérer se sécurité</td>
    <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <td> <textarea ></textarea></td>
    <td> <textarea ></textarea></td>
    </tr>
    <tr>
    <td>Respecter les règles
    </td>
    <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <td> <textarea ></textarea></td>
    <td> <textarea ></textarea></td>
    </tr>
    <tr>
    <td> Avoir des relations avec l'autrui conformes aux règles sociales
    </td>
    <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <td> <textarea ></textarea></td>
    <td> <textarea ></textarea></td>
    </tr>
    
    <tr>
    <td>Maîtriser son comportement dans ses relations avec l'autrui</td>
    <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <td> <textarea ></textarea></td>
    <td> <textarea ></textarea></td>
    </tr>
      </table>
      </div>
      <div id="menu1" class="container tab-pane fade"><br>
        <h3 class="box-title">Tâche et exigence en relation avec la scolarité</h3>
                        
            <table>
            <tr>
        <th>Activités</th>
        <th>A</th>
        <th>B</th>
        <th>C</th>
        <th>D</th>
        <th>Obstacles à la réalisation de l'activité</th>
        <th>Points d'appui et de commentaires</th>
        </tr>
        <tr>
        <td>Lire</td>
      
        <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <td> <textarea ></textarea></td>
        <td> <textarea ></textarea></td>
        </tr>
        <tr>
        <td>Écrire</td>
        <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <td> <textarea ></textarea></td>
        <td> <textarea ></textarea></td>
        </tr>
        <tr>
        <td>Organiser son travail
        </td>
        <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <td> <textarea ></textarea></td>
        <td> <textarea ></textarea></td>
        </tr>
        <tr>
        <td>Accepter les consignes
        </td>
        <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <td> <textarea ></textarea></td>
        <td> <textarea ></textarea></td>
        </tr>
        <tr>
        <td>S'installer dans la classe
        </td>
        <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <td> <textarea ></textarea></td>
        <td> <textarea ></textarea></td>
        </tr>
        <tr>
        <td>Utiliser des supports pédagogiques
        </td>
        <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <td> <textarea ></textarea></td>
        <td> <textarea ></textarea></td>
        </tr>
        <tr>
        <td>Utiliser un matériel adapté à sa pathologie (prendre des notes)
        </td>
        <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <td> <textarea ></textarea></td>
        <td> <textarea ></textarea></td>
        </tr>
        <tr>
        <td> Participer à des sorties scolaires</td>
        <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <td> <textarea ></textarea></td>
        <td> <textarea ></textarea></td> 
        </tr>
          </table>
          </div>
          <div id="menu2" class="container tab-pane fade"><br>
            <h3 class="box-title">Activités</h3>
                            
                <table>
                <tr>
            <th>Activités</th>
            <th>A</th>
            <th>B</th>
            <th>C</th>
            <th>D</th>
            <th>     Activités</th>
            <th>Points d'appui et de commentaires</th>
            </tr>
            <tr>
            <td>Faire ses transferts 
            </td>
            <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
            <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <td> <textarea ></textarea></td>
            <td> <textarea ></textarea></td>
            </tr>
            <tr>
            <td>Se déplacer de l'intérieur à l'extérieur dans le cadre des activités scolaires 
            </td>
            <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <td> <textarea ></textarea></td>
            <td> <textarea ></textarea></td>
            </tr>
            <tr>
            <td>Utiliser les transports en commun 
            </td>
            <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <td> <textarea ></textarea></td>
            <td> <textarea ></textarea></td>
            </tr>
            <tr>
            <td>Assurer l'élimination et utiliser la toilette
            </td>
            <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <td> <textarea ></textarea></td>
            <td> <textarea ></textarea></td>
            </tr>
            <tr>
            <td>S'habiller/Se déshabiller 
            </td>
            <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <td> <textarea ></textarea></td>
            <td> <textarea ></textarea></td>
            </tr>
            <tr>
            <td>Entretien personnel (autonomie)
            </td>
            <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <td> <textarea ></textarea></td>
            <td> <textarea ></textarea></td>
            </tr>
            <tr>
            <td>Prendre ses repas (manger)
            </td>
            <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <td> <textarea ></textarea></td>
            <td> <textarea ></textarea></td>
            </tr>
            <tr>
            <td>Prendre soin de sa santé</td>
            <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <td> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <td> <textarea ></textarea></td>
            <td> <textarea ></textarea></td>
            </tr>
              </table>
              </div>
            </div>
            </div>

</body>
</html>
