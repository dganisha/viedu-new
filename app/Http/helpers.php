<?php

function urlSlug($string){
   $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
   return $slug;
}

function getRupiah($value) {
        $format = "Rp. " . number_format($value,0,',','.');
        return $format;
}