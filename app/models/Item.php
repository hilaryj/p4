<?php

class Item extends Eloquent {
    
    public function tags() {
            # Items belong to many Tags     
            return $this->belongsToMany('Tag');
    }
}