<li class="p-2 border-double border-4 border-slate-600 rounded-xl">
    <a href="./songDetail/<?php echo $songId;?>">
    <div class="title">
        <h3 class="text-2xl font-medium">
            <?php echo $songName; ?>
        </h3>
    </div>
    
    <div class="artist">
    <div class="text-xl">
                    Artist: <?php echo $artistName; ?>
                </div>
                <div class="text-xl">
                    Genre: <?php echo $genreName; ?>
                </div>
    </div>
</a>
<?php 
    if(isset($isLoggedIn['user']))
    {
?>
<a class="text-4xl underline text-indigo-600" href="./queue/<?php echo $song['id']; ?>">Add to queue</a>
<?php } ?>
</li>