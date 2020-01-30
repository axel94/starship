<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js/jquery.js"></script>
</head>
    <body>
        <header>
            <div>
                <label for="">nombre</label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="">referencia</label>
                <input type="text" name="referencia" id="referencia">
            </div>
        </header>
        <main></main>
        <footer>
            <script>
                $(document).ready(function () {
                    $("main").load("php/main.php");
                    $("input").keyup(function (e) { 
                        var name=$("#name");
                        var input=e.target.id;
                        var info=$(this).val();
                        console.log(input);
                        console.log(info);
                        if(info.length>0 && input==="name"){
                            $.post("url", {name:info},
                                function (data, textStatus, jqXHR) {
                                    
                            });
                        }
                        if(info.length>0 && input==="referencia"){
                            $.post("php/ref.php", {ref:info},
                                function (data, textStatus, jqXHR) {
                                   console.log(data);
                            });
                        }
                    });
                });
            </script>
        </footer>
    </body>
</html>