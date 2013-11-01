ydv-youtube-dailymotion-vimeo-data
==================================

get youtube dailymotion vimeo data


YDV documentation

get Youtube , Dailymotion , Vimeo videos with the YDV php class

Example :
require 'ydv.php';
$video = new ydv("VIDEO_ID","VIDEO_TYPE");
echo $video->getTitle();<br>
echo $video->getUrl();<br>
echo $video->getPic();<br>
echo $video->getDescription();<br>
echo $video->getUploadDate();<br>
echo $video->getDuration();<br>
echo $video->getViews();<br>
echo $video->getLikes();<br>
echo $video->getUser();<br>


http://www.najih.info/ydv
