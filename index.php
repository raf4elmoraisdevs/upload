<html>
    
    <body>
            <?php

                if(isset($_POST["acao"]))
                //formulario foi enviado!
            {   $arquivo = $_FILES ['file']  

                $arquivo = explode('.',$arquivo['name']);

                if($arquivo[sizeof($arquivo)-3])

        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="file" /> 
            <input type="submit" name="acao" value="Enviar" />
        </form>
    </body>


</html>