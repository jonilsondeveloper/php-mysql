<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gerenciador de Tarefas</title>
  </head>
  <body>
    <h1>Gerenciador de Tarefas</h1><br/>

    <form class="" action="" method="get">
        <legend>Nova Tarefa</legend><br/>
        <label for="nome">Tarefa: </label>
        <input type="text" name="nome"/>
        <br/><br/><br/>
        <input type="submit" name="cadastrar" value="Cadastrar">
    </form>

     <table>
       <tr>
         <th>
           Tarefas
         </th>
       </tr>

       <?php foreach($lista_tarefas as $item):  ?>
       <tr>
         <td>   <?php echo $item; ?>   </td>
       </tr>
     <?php endforeach  ?>
     </table>

  </body>
</html>
