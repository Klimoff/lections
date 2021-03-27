<html>
    <head>
        <style>
            div{
                margin: 100px auto;
                width: 300px;
                text-align: center;
            }
            input {
                width: 100px;
                height:25px;
                
            }
            button,input{
                border-radius:5px;
                margin-top:5px;
            }
        </style>
    </head>
    <body>
        <div>
            <hr>
            <input id="login" type="text" name="login" placeholder="Login"> <br>
            <input  id="pass" type="password" name="password" placeholder="Password"> <br>
            <button id="submit" type="submit">Send</button>
            <hr>
        </div>
    </body>
    <footer>
        <script>
            document.getElementById('submit').onclick = function(){
                let login = document.getElementById('login').value;
                let pass = document.getElementById('pass').value;

                let xhr = new XMLHttpRequest();
                let rareGetData = "?login="+encodeURIComponent(login)+"&password="+encodeURIComponent(pass);
                
                xhr.open('GET','study.php'+rareGetData);
                
                xhr.send();
                
                if (xhr.status != 200) {
                    alert( xhr.status + ': ' + xhr.statusText );
                } else {
                    alert( xhr.responseText.result );
                }

            };
        </script>
    </footer>
</html>