<?php
if (!defined('ABSPATH')) {
 exit;
}
global $post;
$link = get_permalink($post->ID);

?>
<div class="mtv-share-link">
 <a href="https://www.addtoany.com/share#url=<?php echo urlencode($link); ?>&amp;title=<?php echo urlencode($post->post_title); ?>" title="<?php echo sprintf(__('Share %s', 'mtv-share'), $post->post_title); ?>" target="_blank" rel="noopener noreferrer" link="<?php echo $link; ?>" onclick="mtv_share(this);" post_title="<?php echo $post->post_title; ?>">
  <svg>
   <use href=" #share-icon"></use>
  </svg>
  <span><?php echo __('Share', 'mtv-share'); ?></span>
 </a>
 <svg class="hidden">
  <defs>
   <symbol id="share-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share">
    <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
    <polyline points="16 6 12 2 8 6"></polyline>
    <line x1="12" y1="2" x2="12" y2="15"></line>
   </symbol>
  </defs>
 </svg>
</div>