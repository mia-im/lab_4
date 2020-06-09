<?php
 while ($result = mysqli_fetch_array($sql)) {

        echo '<tr>' .
            "<td>{$result['id']}</td>" .
            "<td>{$result['name']}</td>" .
            "<td>{$result['surname']}</td>" .
            "<td>{$result['login']}</td>" .
            "<td>{$result['lang']}</td>" .
            "<td>{$result['role']}</td>" .
            "<td><a href='change.php?id=".$result['id']."'>Change</a></td>" .
            "<td><a href='delete.php?id=".$result['id']."'>Delete</a></td>" .
            '</tr>';
    
    }
?>