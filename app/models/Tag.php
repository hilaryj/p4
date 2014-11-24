<?php 

class Tag extends Eloquent { 

    public function items() {
        # Tags belong to many Items
        return $this->belongsToMany('Item');
    }

}