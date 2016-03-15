<?php
/**
 * Created by PhpStorm.
 * User: chenkuan
 * Date: 16/3/15
 * Time: 上午9:30
 */

function getNewBox(){
    $args = func_get_args();
    if(count($args)>=2 && $args[1]=="floatright"){
        echo "<div class=\"box floatright\">";
    }else{
        echo "<div class=\"box\">";
    }
    foreach($args[0] as $news){
        echo '<div class="newslabel">
                    <div class="datepick">
                        <span class="day">'.$news['day'].'</span>
                        <span class="month">'.$news['month'].'</span>
                    </div>
                    <div class="newsdesc">
                        <p class="title">'.$news['title'].'</p>
                        <p class="desc">'.$news['desc'].'</p>
                    </div>
                </div>';
    }
    echo "</div>";
}