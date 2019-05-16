<div class="portfolio">
    <h1>Portfolio Recente</h1>
    <?php foreach ($portfolio as $item): ?>
        <div class="portfolio_item">
            <img src="<?php echo BASE_URL; ?>assets/images/portfolio/<?php echo $item['imagem']; ?>" border="0" width="200" height="150">
        </div>
    <?php endforeach; ?>
    <div style="clear:both"></div>
</div>