<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de Tarefas</title>
    </head>
    <body>
       
        <h1>Lista de Tarefas</h1>     
        <form action="dados.php">
            <p>
                <label>Nome:</label> 
                <input type="text" name="nome" />
            </p>
            <p>
                <label>Sobrenome</label>
                <input type="text" name="sobrenome"
            </p>
            <p>
                <label>Idade:</label> 
                <input type="number" name="idade" />
            </p>
            <p>
                <label>E-mail:</label> 
                <input type="email" name="email"/>
            </p>
        
            <p>
                <label>Senha:</label> 
                <input type="password" name="password" />
            </p>
            
            <input type="submit" value="Enviar dados" />
        </form>
        
        
    </body>
</html>
