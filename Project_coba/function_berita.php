<?php

function get_all_berita(){
  $sql = "select * from berita order by id_berita desc";
  $query = mysqli_query($sql);
  return($query);
}

function get_berita_by_id($id_berita){
  $sql = "select * from berita where id_berita='".$id_berita."'";
  $query = mysql_query($sql);
  return($query);
}
?>