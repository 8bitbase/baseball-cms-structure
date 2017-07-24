<nav class="pagination-box">
    <ul class="pagination">
        <li <?php if ($paginator->first == $paginator->current) { ?> class="disabled" <?php } ?>>
            <a href="<?= \Lcd\App\Helpers\PaginatorHelper::get_page_url($paginator->before) ?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <?php foreach ($pageNum as $page) { ?>
        <li <?php if ($paginator->current == $page) { ?> class="active" <?php } ?>>
            <a href="<?= \Lcd\App\Helpers\PaginatorHelper::get_page_url($page) ?>"><?= $page ?> <span class="sr-only"></span></a>
        </li>
        <?php } ?>
        <li <?php if ($paginator->last == $paginator->current) { ?> class="disabled" <?php } ?>>
            <a href="<?= \Lcd\App\Helpers\PaginatorHelper::get_page_url($paginator->next) ?>" aria-label="Next">
                <span aria-hidden="true">»</span>
            </a>
        </li>
        <div class="clearfix"></div>
    </ul>
</nav>