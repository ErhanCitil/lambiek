<div class="flex flex-wrap flex-shrink justify-evenly w-full mx-auto border-t-4 border-t-modern_dark_blue">
    <?php foreach (range('a', 'z') as $letter) { ?>
       <span class="uppercase">
           <a href="artists.php?filter=<?= $letter ?>">
               <p class="p-2 bg-old_paper-100 text-center "><?= $letter ?></p>
            </a>
        </span>
    <?php } ?>
</div>