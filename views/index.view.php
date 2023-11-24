<?php if (!empty($images)) : ?>
    <div class="image-gallery">
        <?php foreach ($images as $image) : ?>
            
            <figure class="image-gallery-item">
                <img class="image-gallery-image" src="./images/<?php echo $image->src ?>" />
                <figcaption><?php echo $image->title ?></figcaption>
            </figure>
        <?php endforeach ?>
    <?php else : ?>
        <p>es wurden bis jetzt keine Bilder erfasst</p>
<?php endif ?>