<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div>
        <label for="s" class="screen-reader-text"><?php 'Search for:'; ?></label>
        <input type="search" id="s" name="s" value="" />

        <input type="submit" value="<?php 'Search'; ?>" id="searchsubmit" />
    </div>
</form>
