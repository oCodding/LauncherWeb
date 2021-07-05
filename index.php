<?php
    error_reporting(0);
    function mostrarPlayer(){
        $server = json_encode(file_get_contents("http://IP:PORT/players.json"), true);
        $wordfrequency = array_count_values(str_word_count($server, 1));
        if (array_key_exists('name', $wordfrequency)){
            $players_online = $wordfrequency['name'] . " 🔥";
        }else{
            $players_online = "👀 Não encontrei ninguém!";
        }
        echo $players_online;
    }
    function statusServer(){
        $server_info = json_encode(file_get_contents("http://IP:PORT/info.json"), true);
        $array_testar = array_count_values(str_word_count($server_info, 1));   
        if (array_key_exists('licenseKeyToken', $array_testar)){
            $server_up_down = "🔥 STATUS: O servidor está online!";
        }else{
            $server_up_down = "STATUS: 🙄 O servidor está offline!";
        }
        echo $server_up_down;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <script type="text/javascript" src="server.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
        <link rel="icon" type="imagem/png" href="LINK_FOTO_ÍCONE_PNG"/>
        <title>LETUGAHHHHHHH#1843</title>
    </head>
    <body>
        <div class="container">
            <div class="box">
                <div class="connect">
                        <p id="verificar"><?php statusServer(); ?> - JOGADORES: <?php mostrarPlayer(); ?></p>
                        <a id="steamopen" onclick="openSTEAM()">💻 Conectar na Steam</a>
                        <a id="rp" onclick="openRP()">🎮 Conectar no Servidor</a>
                        <a id="ts" onclick="openTS()">🎤 Conectar no TeamSpeak</a>
                </div>        
            </div>
        </div>
    </body>
</html>