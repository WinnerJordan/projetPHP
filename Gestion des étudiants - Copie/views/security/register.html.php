<?php

use ism\lib\Session;
use ism\lib\Role;
//verification des erreur de session

$array_error = [];
if (Session::keyExist("array_error")){
    //recuperation des erreur de la session dans la variable local
    $array_error = Session::getSession("array_error");
    Session::destroyKey("array_error");    
}
?>
<div class="container" style="margin-top: 5%;">
    <div class="row">    
        <div class="col-md-4">
        
                <form action="<?php ROOT_CONTROLLERS.'/security.php' ?>" method="post">

                <div class="form-group">
                    <label for="UserName" >Nom</label>
                    <input type="text" class="form-control" name="nom">
                </div>

                <div class="form-group">
                    <label for="UserName" >Prenom</label>
                    <input type="text" class="form-control" name="prenom">
                </div>
                
                <div class="form-group">
                    <label for="email" >login</label>
                    <input type="email" class="form-control" name="login">
                </div>

                <div class="form-group">
                    <label for="pwd">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>

                 <div class="form-group">
                    <label for="" class="pr-5">Role</label>
                    <label class="pl-4">
                        <select class="form-control" name="role" id="">
                                <option value="ROLE_AC">ASSISTANT DE CLASSE</option>
                                <option value="ROLE_RP ">RESPONSABLE PEDAGOGIQUEP</option>
                        </select>
                    </label>
                </div>


                <button type="submit" class="btn btn-outline-primary">Submit</button>

               
            </form>
        </div>
    </div>
  </div>