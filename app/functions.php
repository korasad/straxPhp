<?php
function get_yslugi(){
    global $link;
    $sql = "SELECT * FROM все_услуги";
    $result = mysqli_query($link,$sql);

    $yslugi = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $yslugi;
}
