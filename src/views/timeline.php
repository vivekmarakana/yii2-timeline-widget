<?php
    if(count($history) > 0):
        \vivekmarakana\widgets\TimelineAssets::register($this);
        $date = "";
?>
    <ul class="timeline">
        <?php for($i = 0; $i < count($history); $i++) : ?>
            <?php if($history[$i]['date'] != $date) : $date = $history[$i]['date'];?>
                <li class="time-label">
                    <span class="bg-blue"><?=$history[$i]['date']?></span>
                </li>
            <?php endif;?>
            <li>
                <?php
                    $icon = (isset($history[$i]['icon_class'])) ? $history[$i]['icon_class'] : (($i==count($history)-1) ? "fa-clock-o" : "fa-check");
                    if(stripos($icon, 'fa-') !== false){
                        $icon .= " fa";
                    }
                    $icon_color = (isset($history[$i]['icon_color'])) ? $history[$i]['icon_color'] : (($i==count($history)-1 && $different_last_icon) ? $last_icon_color : $icon_color);
                    $icon_font_color = (isset($history[$i]['icon_font_color'])) ? $history[$i]['icon_font_color'] : (($i==count($history)-1 && $different_last_icon) ? $last_icon_font_color : $icon_font_color);
                ?>
                <i class="<?=$icon?>" style="background-color: <?=$icon_color?>; color: <?=$icon_font_color?>"></i>
                <div class="timeline-item">
                    <span class="time"><i class="glyphicon glyphicon-time"></i> <?=$history[$i]['time']?></span>
                    <?php if(isset($history[$i]['subtitle'])): ?>
                        <span class="time">
                            <strong> <?= $history[$i]['subtitle'] ?> </strong>
                        </span>
                    <?php endif; ?>
                    <h3 class="timeline-header"><?=$history[$i]['title']?></h3>
                    <?php if(!empty($history[$i]['notes'])) : ?>
                        <div class="timeline-body"><?=$history[$i]['notes']?></div>
                    <?php endif; ?>
                    <?php if(!empty($history[$i]['footer'])) : ?>
                        <div class="timeline-footer"><?=$history[$i]['footer']?></div>
                    <?php endif; ?>
                </div>
            </li>
        <?php endfor; ?>
      </ul>
<?php else: ?>
    <h2>No data available.</h2>
<?php endif; ?>
