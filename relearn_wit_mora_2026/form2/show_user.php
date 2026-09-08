<link rel="stylesheet" href="../../starter-1/css/bootstrap.css">
<link rel="stylesheet" href="../starter-1/css/bootstrap.main.css">
<div id="users" style="width:50%; margin:auto;padding-top: 15px;">

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">username</th>
                <th scope="col">email</th>
                <th scope="col">password</th>
                <th scope="col">edit</th>
                <th scope="col">delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
            require 'connect.php';
            $select = "SELECT * FROM users";
            $query = mysqli_query($conn, $select);
            
            if(mysqli_num_rows($query)>0){
                while ($row = mysqli_fetch_array($query)) {
                    echo '<tr>';
                    echo '<td>' . $row["id"] . '</td>';
                    echo '<td>' . $row["username"] . '</td>';
                    echo '<td>' . $row["email"] . '</td>';
                    echo '<td>' . $row["password"] . '</td>';
                    echo '<td><a href="edit.php?pid= '. $row["id"] . '" class="btn btn-outline-success" role="button" area-pressed="true"> edit</a></td>';
                    echo '<td>'.'<a href="delete.php?pid='. $row["id"] . '" class="btn btn-outline-danger" role="button" aria-pressed="true">delete</a>'.'</td>';
                    
                    echo '</tr>';
                    } 
                    
                } else {
                        echo 'noooo data';
                    }
                        
                        
        ?>
    </tbody>
    
    
    
    
</table>
</div>


