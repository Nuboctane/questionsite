<?php
    include_once 'config/database.php';
    $db = new Database();
    $conn = $db->getConnection();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style2.css">
    <title>create</title>
</head>
<body>
    <?php
    $pre_question = $_POST["question"]
    ?>
      <div id="container">
        <nav>
            <ul class="topnav">
                <svg class="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="368" height="117" viewBox="0 0 368 117">
          <defs>
            <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%" viewBox="0 0 389 551">
              <image width="389" height="551"
              xlink:href="https://cdn.discordapp.com/attachments/648146265649053696/969336309900529674/idfk.png">
            </pattern>
          </defs>
          <rect id="logo" width="83" height="117" fill="url(#pattern)" />
          <text id="vrijwilligersHuis" transform="translate(83 20)" fill="#fff" font-size="28"
            font-family="OpenSans-Light, Open Sans" font-weight="300" letter-spacing="0.061em">
            <tspan x="0" y="30">vrijwilligers</tspan>
            <tspan y="30" fill="#8b14ab">Huis</tspan>
          </text>
          <text id="Nieuwegein" transform="translate(103 57)" fill="#fff" font-size="28"
            font-family="OpenSans-Light, Open Sans" font-weight="300">
            <tspan x="0" y="30">Nieuwegein</tspan>
          </text>
        </svg>
                </logo>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="157.704" height="64" viewBox="0 0 157.704 64">
            <g id="Group_9" data-name="Group 9" transform="translate(-1179.296 -13)">
              <text id="inloggen_" data-name="inloggen
                    " transform="translate(1206 13)" fill="#fff" font-size="32" font-family="OpenSans, Open Sans">
                <tspan x="0" y="34">inloggen</tspan>
              </text>
              <path id="ic_input_24px"
                d="M21.64,3.01H3.064A2.07,2.07,0,0,0,1,5.074V9.192H3.064V5.053H21.64V19.532H3.064V15.384H1v4.138a2.052,2.052,0,0,0,2.064,2.043H21.64A2.052,2.052,0,0,0,23.7,19.522V5.074A2.063,2.063,0,0,0,21.64,3.01ZM11.32,16.415l4.128-4.128L11.32,8.16v3.1H1V13.32H11.32Z"
                transform="translate(1178.296 25.5)" fill="#fff" />
            </g>
          </svg>
                </li>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="312" height="64" viewBox="0 0 312 64">
            <g id="Group_22" data-name="Group 22" transform="translate(-662 -15)">
              <g id="Group_8" data-name="Group 8" transform="translate(-150 2)">
                <text id="account_aanmaken_" data-name="account aanmaken
                " transform="translate(835 13)" fill="#fff" font-size="32" font-family="OpenSans, Open Sans">
                  <tspan x="0" y="34">account aanmaken</tspan>
                </text>
                <path id="ic_perm_identity_24px"
                  d="M13.065,6.153a2.38,2.38,0,1,1-2.38,2.38,2.379,2.379,0,0,1,2.38-2.38m0,10.2c3.365,0,6.912,1.654,6.912,2.38v1.246H6.153V18.731c0-.725,3.547-2.38,6.912-2.38M13.065,4A4.533,4.533,0,1,0,17.6,8.533,4.531,4.531,0,0,0,13.065,4Zm0,10.2C10.04,14.2,4,15.717,4,18.731v3.4H22.13v-3.4C22.13,15.717,16.091,14.2,13.065,14.2Z"
                  transform="translate(808 24.935)" fill="#fff" />
              </g>
            </g>
          </svg>
                </li>
            </ul>
        </nav>
        <main>
            <p style="text-align: center;margin-top: 40px;font-size: x-large;font-weight: bold;">Stel Je Vraag</p>
            <form action="ask.php" method="POST">
                <section style="padding: 20px;">
                    <div class="container">
                        <div class="item">
                            <input id="ask" name="question" value="<?php echo $pre_question ?>" style="width: 95%; border: none;border-bottom: 2px solid gray;padding: 10px;" type="text" placeholder="Titel van u vraag">
                        </div>
                        <div class="item">
                            <select name="type" id="type" style="width: 95%;border: none;border-bottom: 2px solid gray;padding: 10px;">
                                    <option value="any%">any%</option>
                                    <option value="medical">medical</option>
                                    <option value="groceries">groceries</option>
                                    <option value="online help">online help</option>
                            </select>
                        </div>
                    </div>
                    <div hidden style="height: 50%; margin-top: 5%; ">
                        <span style="margin-left: 20px; margin-right: 15px; width: max-content; font-family: sans-serif;font-size: larger;">Bestranden
                         Toevoegen</span>
                        <button style="width:150px ;background-color: #8B14AB; border: 1px black; padding: 10px; border-radius: 25px; color: white; font-family: sans-serif;
                           font-size: medium;">Kies Bestand</button>
                    </div>
                </section>
                <section>
                    <textarea name="context" style=" color:#ffff; padding:1vh; font-size: 4vh; width:100%; height:50vh; background-color: #8B14AB;border: none;resize: none;" placeholder="Type hier u context..." id="txtarea" cols="112" rows="14"></textarea>
                    <div style="text-align: end; height: 34%;">
                        <button style="width:150px ;background-color: gray; border: 1px black; padding: 10px; border-radius: 25px; color: white; font-family: sans-serif;
                         font-size: medium;">
                         Clear</button>
                        <button style="width:150px ;background-color: #FF7800; border: 1px black; padding: 10px; border-radius: 25px; color: white; font-family: sans-serif;
                         font-size: medium; margin-top: 77px; margin-right: 20px;" id='submit'>
                         Verstuur</button>
                    </div>
                </section>
            </form>
        </main>
    </div>
</body>
</html>