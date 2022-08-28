<ul class="grid justify-center gap-5">
    <?php foreach($playlist as $plItem){?>
        <li>
            <a href="/playlist/<?php echo $plItem['id']; ?>">
            <h3><?php echo $plItem['list_name']; ?></h3>
            <?php 
                foreach($playlistUsers as $plUser){
                    if($plUser['playlist_id'] === $plItem['id']){
                        foreach($users as $user){
                            if($user['id'] === $plUser['user_id']){
            ?>
            <div>
            Playlist created by: <?php echo $user['username']; ?>
            </div>
            <?php 
            }
        }
    }
}?>
            </a>
        </li>
       <?php } ?>
</ul>