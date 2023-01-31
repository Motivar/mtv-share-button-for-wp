<?php
if (!defined('ABSPATH')) {
 exit;
}
global $post;
?>
<button class="share-button" type="button" title="<?php echo sprintf(__('Share %s', 'mtv-share'), $post->post_title); ?>">
 <svg>
  <use href="#share-icon"></use>
 </svg>
 <span><?php echo __('Share', 'mtv-share'); ?></span>
</button>
<svg class="hidden">
 <defs>
  <symbol id="share-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share">
   <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
   <polyline points="16 6 12 2 8 6"></polyline>
   <line x1="12" y1="2" x2="12" y2="15"></line>
  </symbol>
 </defs>
</svg>