<?php

$entry_time = "2022-11-30 12:34:56";
$exit_time = "2022-11-30 14:12:01";

$entry_time_obj = new DateTime($entry_time);
$exit_time_obj = new DateTime($exit_time);

function getVisitDuration($entry_time, $exit_time) {
  $duration = $exit_time->diff($entry_time);
  return $duration->format("%h saat, %i dakika ve %s saniye");
}

echo getVisitDuration($entry_time_obj, $exit_time_obj);
