

 <?php

 
/***** CHG Carrusel *****/
/***** CHG Carrusel *****/
/***** CHG Carrusel *****/
if(isset($_POST['chgCarr'])){


    if((isset($_POST['changeCarrId'])) && (!empty($_POST['changeCarrId'])) && (isset($_POST['changeCarrSection'])) && (!empty($_POST['changeCarrSection'])) && (isset($_POST['changeCarrTitle'])) && (!empty($_POST['changeCarrTitle'])) && (isset($_POST['changeCarrText'])) && (!empty($_POST['changeCarrText'])) && (isset($_POST['changeCarrFooter'])) && (!empty($_POST['changeCarrFooter'])) ){

        $id = $_POST['changeCarrId'];
        $title = $_POST['changeCarrTitle'];
        $text = $_POST['changeCarrText'];
        $footer = $_POST['changeCarrFooter'];
        
        $sqlChgCarr = "UPDATE inicio
                        SET title = '".$title."',
                        texto = '".$text."',
                        footer = '".$footer."'
                        WHERE id LIKE '".$id."';
        ";

        $queryChgCarr = mysqli_query($conectar, $sqlChgCarr);  
    }

}

/***** CHG Carrusel End *****/
/***** CHG Carrusel End *****/
/***** CHG Carrusel End *****/





/****Modal Change Carrusel ****/
$sqlMainCarrusel = "SELECT * from inicio";
$queryMainCarrusel = mysqli_query($conectar, $sqlMainCarrusel);
while($rowMainCarrusel = mysqli_fetch_assoc($queryMainCarrusel )){


    echo '<div class="modal fade" id="modalIndex'.$rowMainCarrusel['id'].'" tabindex="-1" role="dialog" aria-labelledby="modalIndex'.$rowMainCarrusel['id'].'" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal">Change User Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST">
                    <div class="modal-body">
                    <label for="changeId">ID</label>
                    <input type="text" id="changeCarrId" class="form-control changeUser" value="'.$rowMainCarrusel['id'].'"  name="changeCarrId" readonly>
                    <br>
                    <label for="changeName">Section</label>
                    <input type="text" id="changeCarrSection" class="form-control changeUser" value="'.$rowMainCarrusel['seccion'].'"  name="changeCarrSection" readonly>
                    <br>
                    <label for="changeLast">Title</label>
                    <input type="text" id="changeCarrTitle" class="form-control changeUser" value="'.$rowMainCarrusel['title'].'" name="changeCarrTitle" require>
                    <br>
                    <label for="changeEmail">Text</label>
                    <input type="text" id="changeCarrText" class="form-control changeUser" value="'.$rowMainCarrusel['texto'].'" name="changeCarrText" require>
                    <br>
                    <label for="changeEmail">Footer</label>
                    <input type="text" id="changeCarrFooter" class="form-control changeUser" value="'.$rowMainCarrusel['footer'].'" name="changeCarrFooter" require>
                    <br>
                    
                    </div>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="chgCarr">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>';

    /****Modal Change Carrusel End****/


}
        
?>
<!-- Main Carrusel Content -->

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Main Carrusel Content</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Section</th>
                        <th>Title</th>
                        <th>Text</th>
                        <th>Footer</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                
                <tbody>
                <?php
                    $sqlMainCarrusel = "SELECT * from inicio";
                    $queryMainCarrusel = mysqli_query($conectar, $sqlMainCarrusel);
                    while($rowMainCarrusel = mysqli_fetch_assoc($queryMainCarrusel )){
                        echo ' 
                        <tr>
                            <td>'.$rowMainCarrusel['id'].'</td>
                            <td>'.$rowMainCarrusel['seccion'].'</td>
                            <td>'.$rowMainCarrusel['title'].'</td>
                            <td>'.$rowMainCarrusel['texto'].'</td>
                            <td>'.$rowMainCarrusel['footer'].'</td>
                            <td>
                                <button type="button" class="btn btn-warning btn-circle btn-sm" data-toggle="modal" data-target="#modalIndex'.$rowMainCarrusel['id'].'">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                            </td>
                        </tr>
                        
                        ';
                    }
                ?>
                    

                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Main Carrusel Content End -->