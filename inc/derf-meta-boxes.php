<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}


/* -----------------------------------------------------------------------------
*  Add Meta Boxes
* ------------------------------------------------------------------------------
*/

function derf_add_meta_box() {
  add_meta_box(
  'derf_choose_sidebar',
  'Select a Sidebar',
  'derf_add_meta_box_callback',
  'page',
  'side',
  'core'
);
}

add_action( 'add_meta_boxes', 'derf_add_meta_box');

function derf_add_meta_box_callback( $post ) {
  wp_nonce_field( basename( __FILE__ ), 'derf_page_nonce' );
  $derf_stored_meta = get_post_meta( $post->ID );

  ?>

  <div>
    <div class="meta-row">
      <div class="meta-th">
        <label for="select-sidebar" class="row-title"></label>
      </div>
      <div class="meta-td">
        <?php $dropdown_value = get_post_meta( get_the_ID(), 'derf_choose_sidebar', true ); ?>
        <select name="derf_choose_sidebar" id="derf_choose_sidebar">
          <option value="empty" <?php if($dropdown_value == 'empty') echo 'selected'; ?>>Default</option>
          <option value="sidebar-blog" <?php if($dropdown_value == 'sidebar-blog') echo 'selected'; ?>>Blog</option>
          <option value="sidebar1" <?php if($dropdown_value == 'sidebar1') echo 'selected'; ?>>Sidebar 1</option>
          <option value="sidebar2" <?php if($dropdown_value == 'sidebar2') echo 'selected'; ?>>Sidebar 2</option>
          <option value="sidebar3" <?php if($dropdown_value == 'sidebar3') echo 'selected'; ?>>Sidebar 3</option>
          <option value="sidebar4" <?php if($dropdown_value == 'sidebar4') echo 'selected'; ?>>Sidebar 4</option>
          <option value="sidebar5" <?php if($dropdown_value == 'sidebar5') echo 'selected'; ?>>Sidebar 5</option>
        </select>
      </div>
    </div>
  </div>

  <?php }

  function derf_meta_save( $post_id ) {

    $new_value = $_POST['derf_choose_sidebar'];
    update_post_meta( $post_id, 'derf_choose_sidebar', $new_value );
  }

  add_action('save_post', 'derf_meta_save');



  /* -----------------------------------------------------------------------------
  *  Edit Author Meta  data
  * ------------------------------------------------------------------------------
  */

  add_action('show_user_profile', 'my_user_profile_edit_action');
  add_action('edit_user_profile', 'my_user_profile_edit_action');
  function my_user_profile_edit_action($user) {
    ?>
    <h2>User Title/Position</h2>
    <table class="form-table">
      <tbody>
        <tr>
          <th>
            <label for="title_position">
              Title/Position  </label>
            </th>
            <td><input type="text" name="title_position" value="<?php echo esc_attr(get_the_author_meta( 'title_position', $user->ID )); ?>" class="regular-text" /></td>
          </tr>
        </tbody>
      </table>
      <br />
      <?php
    }

    add_action('personal_options_update', 'my_user_profile_update_action');
    add_action('edit_user_profile_update', 'my_user_profile_update_action');
    function my_user_profile_update_action($user_id) {
      update_user_meta( $user_id,'title_position', sanitize_text_field( $_POST['title_position'] ) );
    }
