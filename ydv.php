<?php

    class ydv{

      public $video_id;
      public $video_type;

      private $types=array("youtube","dailymotion","vimeo");

      function __construct($id,$type=false){
        if($type==false){
          $this->video_type='youtube';
        }else{
          $this->video_type=$type;
        }
        $this->video_id=$id;
      }


      function getTitle(){
        if($this->video_type==$this->types[0]){

          $link='http://gdata.youtube.com/feeds/api/videos/'.$this->video_id.'?v=2&alt=json';
          $json = json_decode(file_get_contents($link), true);
          return $json['entry']['title']['$t'];

        }elseif($this->video_type==$this->types[1]){

          $link='https://api.dailymotion.com/video/'.$this->video_id.'?fields=title';
          $json = json_decode(file_get_contents($link), true);
          return $json['title'];

        }elseif($this->video_type==$this->types[2]){

          $link='http://vimeo.com/api/v2/video/'.$this->video_id.'.json';
          $json = json_decode(file_get_contents($link), true);
          return $json[0]['title'];

        }else{
          die('type not found');
        }

      }


      function getDescription(){
        if($this->video_type==$this->types[0]){

          $link='http://gdata.youtube.com/feeds/api/videos/'.$this->video_id.'?v=2&alt=json';
          $json = json_decode(file_get_contents($link), true);
          return $json['entry']['media$group']['media$description']['$t'];

        }elseif($this->video_type==$this->types[1]){

          $link='https://api.dailymotion.com/video/'.$this->video_id.'?fields=description';
          $json = json_decode(file_get_contents($link), true);
          return $json['description'];

        }elseif($this->video_type==$this->types[2]){

          $link='http://vimeo.com/api/v2/video/'.$this->video_id.'.json';
          $json = json_decode(file_get_contents($link), true);
          return $json[0]['description'];

        }else{
          die('type not found');
        }

      }



      function getUrl(){
        if($this->video_type==$this->types[0]){

          $link='http://gdata.youtube.com/feeds/api/videos/'.$this->video_id.'?v=2&alt=json';
          $json = json_decode(file_get_contents($link), true);
          return $json['entry']['link'][0]['href'];

        }elseif($this->video_type==$this->types[1]){

          $link='https://api.dailymotion.com/video/'.$this->video_id.'?fields=url';
          $json = json_decode(file_get_contents($link), true);
          return $json['url'];

        }elseif($this->video_type==$this->types[2]){

          $link='http://vimeo.com/api/v2/video/'.$this->video_id.'.json';
          $json = json_decode(file_get_contents($link), true);
          return $json[0]['url'];

        }else{
          die('type not found');
        }

      }


      function getPic(){
        if($this->video_type==$this->types[0]){

          $link='http://gdata.youtube.com/feeds/api/videos/'.$this->video_id.'?v=2&alt=json';
          $json = json_decode(file_get_contents($link), true);
          return $json['entry']['media$group']['media$thumbnail'][0]['url'];

        }elseif($this->video_type==$this->types[1]){

          $link='https://api.dailymotion.com/video/'.$this->video_id.'?fields=thumbnail_120_url';
          $json = json_decode(file_get_contents($link), true);
          return $json['thumbnail_120_url'];

        }elseif($this->video_type==$this->types[2]){

          $link='http://vimeo.com/api/v2/video/'.$this->video_id.'.json';
          $json = json_decode(file_get_contents($link), true);
          return $json[0]['thumbnail_small'];

        }else{
          die('type not found');
        }

      }

      function getUploadDate(){

        if($this->video_type==$this->types[0]){

          $link='http://gdata.youtube.com/feeds/api/videos/'.$this->video_id.'?v=2&alt=json';
          $json = json_decode(file_get_contents($link), true);
          return date('Y-m-d h:i:s',strtotime($json['entry']['media$group']['yt$uploaded']['$t']));

        }elseif($this->video_type==$this->types[1]){

          $link='https://api.dailymotion.com/video/'.$this->video_id.'?fields=created_time';
          $json = json_decode(file_get_contents($link), true);
          return date('Y-m-d h:i:s',$json['created_time']);

        }elseif($this->video_type==$this->types[2]){

          $link='http://vimeo.com/api/v2/video/'.$this->video_id.'.json';
          $json = json_decode(file_get_contents($link), true);
          return $json[0]['upload_date'];

        }else{
          die('type not found');
        }
      }

      function getDuration(){

        if($this->video_type==$this->types[0]){

          $link='http://gdata.youtube.com/feeds/api/videos/'.$this->video_id.'?v=2&alt=json';
          $json = json_decode(file_get_contents($link), true);
          return $json['entry']['media$group']['yt$duration']['seconds'];

        }elseif($this->video_type==$this->types[1]){

          $link='https://api.dailymotion.com/video/'.$this->video_id.'?fields=duration';
          $json = json_decode(file_get_contents($link), true);
          return $json['duration'];

        }elseif($this->video_type==$this->types[2]){

          $link='http://vimeo.com/api/v2/video/'.$this->video_id.'.json';
          $json = json_decode(file_get_contents($link), true);
          return $json[0]['duration'];

        }else{
          die('type not found');
        }
      }

      function getLikes(){

        if($this->video_type==$this->types[0]){

          $link='http://gdata.youtube.com/feeds/api/videos/'.$this->video_id.'?v=2&alt=json';
          $json = json_decode(file_get_contents($link), true);
          if(isset($json['entry']['yt$rating']['numLikes'])){
              return $json['entry']['yt$rating']['numLikes'];
          }else{
              return 0;
          }
        }elseif($this->video_type==$this->types[1]){

          return 0;

        }elseif($this->video_type==$this->types[2]){

          $link='http://vimeo.com/api/v2/video/'.$this->video_id.'.json';
          $json = json_decode(file_get_contents($link), true);
          return $json[0]['stats_number_of_likes'];

        }else{
          die('type not found');
        }
      }

      function getViews(){

        if($this->video_type==$this->types[0]){

          $link='http://gdata.youtube.com/feeds/api/videos/'.$this->video_id.'?v=2&alt=json';
          $json = json_decode(file_get_contents($link), true);
          return $json['entry']['yt$statistics']['viewCount'];

        }elseif($this->video_type==$this->types[1]){

          $link='https://api.dailymotion.com/video/'.$this->video_id.'?fields=views_total ';
          $json = json_decode(file_get_contents($link), true);
          return $json['views_total'];

        }elseif($this->video_type==$this->types[2]){

          $link='http://vimeo.com/api/v2/video/'.$this->video_id.'.json';
          $json = json_decode(file_get_contents($link), true);
          return $json[0]['stats_number_of_plays'];

        }else{
          die('type not found');
        }
      }

      function getUser(){

        if($this->video_type==$this->types[0]){

          $link='http://gdata.youtube.com/feeds/api/videos/'.$this->video_id.'?v=2&alt=json';
          $json = json_decode(file_get_contents($link), true);
          return $json['entry']['author'][0]['name']['$t'];

        }elseif($this->video_type==$this->types[1]){

          $link='https://api.dailymotion.com/video/'.$this->video_id.'?fields=owner ';
          $json = json_decode(file_get_contents($link), true);
          return $json['owner'];

        }elseif($this->video_type==$this->types[2]){

          $link='http://vimeo.com/api/v2/video/'.$this->video_id.'.json';
          $json = json_decode(file_get_contents($link), true);
          return $json[0]['user_id'];

        }else{
          die('type not found');
        }
      }


    }
?>