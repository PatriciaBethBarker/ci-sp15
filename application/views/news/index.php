<div>
<div style="float:left;">
<h2><?php echo $title ?></h2>

<?php foreach ($news as $news_item): ?>

        <h3><?php echo $news_item['title'] ?></h3>
        <div class="main">
                <?php echo $news_item['text'] ?>
        </div>
        <p><a href="<?php echo $news_item['slug'] ?>">View articles</a></p>

<?php endforeach ?>
</div>

<?php
///Prints RSS

  echo '<div style="float:right;width:800px;"><h1>RSS Feed</h1>';	
  print '<h2>' . $xml->channel->title . '</h2>';
	  echo '<p>' . $xml->channel->description . '</p>';
	  foreach($xml->channel->item as $story)
	  {
	    echo '<a href="' . $story->link . '">' . $story->title . '</a><br />'; 
	    echo '<p>' . $story->description . '</p><br /><br />';
	  }
  echo '</div>';	
?>
</div>
