
   
   <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 230px;">  

    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li>
        <a  href="<?php path('user/showEtu') ?>" class="nav-link text-white">
          Listrer les Etudiants
        </a>
      </li>
        <div class="dropdown">
                            <button class=" text-white btn  dropdown-toggle ml-3 bi me-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                              Absences
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <li><a class="dropdown-item" href="<?php path('user/markAbsence') ?>">Marquer une absence</a></li>
                              <li><a class="dropdown-item" href="<?php path('user/listeAbsence') ?>">Lister les absences</a></li>
                            </ul>
         </div>
      </li>
    </ul>
    <hr>
  </div>