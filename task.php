<?php
require 'connexion.php';
$task_user_id=$_SESSION['user_id'];
$statement = "SELECT * FROM task WHERE task_user_id=?";
$stmt = $connexion->prepare($statement);
$stmt->bind_param("i",$task_user_id);
$stmt->execute();
//$connexion->close();
$resultat = $stmt->id;
$result=$stmt->get_result();
 echo "<div class='container-fluid'>
              <div class='row'>
                 <div class='col-sm-12'>
                    <table class='table-borderless table  table-striped '>
                         <thead class=''>
                              <td>   </td>
                             <td class='font-weight-bold'>Task Name</td>
                             <td class='font-weight-bold'>Completion date</td>
                             <td class='font-weight-bold'>Completion time</td>
                             <td class='font-weight-bold'>state</td>
                             <td class='font-weight-bold'>change state</td>
                             <td>   </td>
                          </thead>
                         <tbody>";
                                 $i=1;

                               while ($row=$result->fetch_array()){
                                   $task_id=$row['task_id'];
                                         echo "<tr class='border-top'>
                                                  <td>".$i." </td>
                                                  <td>".$row['task']."</td>
                                                  <td>".$row['date']."</td>
                                                  <td>".$row['time']."</td>
                                                  <td id='task'>".$row['state'] ."</td>
                                                  <td><form action='update_task.php?id_task=$task_id' method='post' class='form-inline'>
                                                            <select name='state' id='' class='rounded'>
                                                                    <option class='text-warning px-0' value=''>-----</option>
                                                                     <option class='text-success' value='Waiting'>Waiting</option>
                                                                    <option  class='text-primary' value='Running'>Running</option>
                                                                    <option class='text-success' value='Finish'>Finish</option>                                      
                                                             </select>
                                                             <button type='submit' class='btn btn-outline-dark ' style='padding: 0 ;margin: auto' >Go</button>
                                                  </td></form>
                                                
                                                  <td><a class='text-danger' href='delete_task.php?task_id=$task_id'>Delete</td>                                                 
                                                </tr>";
                                           $i=$i+1;};
                              echo "</tbody>  
                           </table>
                       </div>
                  </div>
            </div>";
