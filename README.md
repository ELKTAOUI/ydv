ydv-youtube-dailymotion-vimeo-data
==================================

get youtube dailymotion vimeo data


YDV documentation

get Youtube , Dailymotion , Vimeo videos with the YDV php class

Example :
require 'ydv.php';
$video = new ydv('VIDEO_ID','VIDEO_TYPE');
echo $video->getTitle();
echo $video->getUrl();
echo $video->getPic();
echo $video->getDescription();
echo $video->getUploadDate();
echo $video->getDuration();
echo $video->getViews();
echo $video->getLikes();
echo $video->getUser();


http://www.najih.info/ydv
