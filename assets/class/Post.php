<?php

class Post {
   
    public function getPost(string $index) {
        if(empty($index) || empty(filter_input(INPUT_POST, $index))){
            return '';
        }else{
        return filter_input(INPUT_POST, $index);   
        }
    }   
}
