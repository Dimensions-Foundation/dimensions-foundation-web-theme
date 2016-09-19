<aside class="background-green-light">
  <div class=" fixed-position">
    <?php $children = get_pages('child_of='.get_post_top_ancestor_id()); ?>
    <?php if( count( $children ) != 0 ) { ?>
      <ul class="sidebar-nav">
        <span class="sidebar-nav-title" >
          <?php wp_list_pages( array('title_li'=>'','include'=>get_post_top_ancestor_id()) ); ?>
        </span>
        <?php wp_list_pages( array('title_li'=>'','depth'=>1,'child_of'=>get_post_top_ancestor_id()) ); ?>
      </ul>
      <?php } ?>
      <?php  $post_sidebar = get_post_meta($post->ID,'derf_choose_sidebar', true);
      switch ($post_sidebar) {
        case 'sidebar1':
        dynamic_sidebar( 'custom_sidebar' );
        break;
        case 'sidebar2':
        dynamic_sidebar( 'custom-2_sidebar' );
        break;
        case 'sidebar3':
        dynamic_sidebar( 'custom-3_sidebar' );
        break;
        case 'sidebar4':
        dynamic_sidebar( 'custom-4_sidebar' );
        break;
        case 'sidebar5':
        dynamic_sidebar( 'custom-5_sidebar' );
        break;
        case 'sidebar6':
        dynamic_sidebar( 'custom-6_sidebar' );
        break;
        case 'sidebar-blog':
        dynamic_sidebar( 'community_sidebar' );
        break;
        default:
        // No sidebar needed
        break;
      }
      ?>
      <?php dynamic_sidebar( 'newsletter_sidebar' ); ?>
    </div>
  </aside>
