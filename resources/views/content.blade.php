<?php
/**
 * Created by PhpStorm.
 * User: puman_000
 * Date: 2015-08-04
 * Time: 12:03
 */

 //Information about mem :
 $countOfLikes = 50;
 $countOfDislikes = 40;
 $addedBy = "Microsoft";
 $linkToCreator = "Adress url do konta gościa, który wrzucił mema";
 $linkToComment = "Adres ulr do miejsca mema, gdzie można komentować";
 ?>
<div class="container-fluid" style=" margin-top: 100px;">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <?php
                     for($i=0;$i<4;$i++){
                        addMem($i,$countOfLikes,$countOfDislikes,$linkToCreator,$addedBy,$linkToComment);
                     }
                     ?>
                </div>
                <div class="col-sm-2"></div>
            </div>
</div>