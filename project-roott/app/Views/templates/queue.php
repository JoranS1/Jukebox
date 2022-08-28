<?php
if(isset($queue[0])){
?>
    <?php foreach($queue as $queueItem){ ?>
        <li>
            <a href="/removeQueue/<?php echo $queueItem['id'] ?>">
            <i class="fa-solid fa-trash-can"></i> <?php echo $queueItem['songName'];?>
        </a>
        </li>
<?php } ?>
        <li><a href="/playlistGen">Make a new playlist</a></li>
    </ul>
<?php } ?>