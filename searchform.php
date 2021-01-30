<form class="wwsh-search-form" role="search" method="get" action="<?php echo home_url( '/' ); ?>">

        <input class="search-input-1" type="search"

            placeholder="<?php echo esc_attr_x( 'دلت می خواد چی یاد بگیری؟', 'placeholder' ) ?>"

            value="<?php echo get_search_query() ?>" name="s"

            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />

        <button class="search-button-1" type="submit" value="<?php echo esc_attr_x( ' ', 'submit button' ) ?>">

          <i class="fas fa-search "></i>

        </button>

</form>

