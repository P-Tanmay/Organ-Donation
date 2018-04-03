<?php

function editevent($id, $event_head, $event_date, $event_time, $event_venues, $event_details) {
  include('connect.php');

  $updatestring = "UPDATE od_events SET event_head='{$event_head}', event_date='{$event_date}', event_time='{$event_time}', event_venues='{$event_venues}', event_details='{$event_details}' WHERE event_id={$id}";
  $updatequery = mysqli_query($link, $updatestring);

  if($updatequery) {
    redirect_to("admin_index.php");
  }else{
    $message = "hey, something is wrong....";
    return $message;
  }

  mysqli_close($link);
}



function deleteUser($id) {
  //echo $id;
  include('connect.php');
  $delstring = "DELETE FROM images WHERE user_id={$id}";
  $delquery = mysqli_query($link, $delstring);
  if($delquery){
    redirect_to("../admin_index.php");
  }else{
    $message = "your image couldn't remove";
    return $message;
  }
  mysqli_close($link);
}

?>
