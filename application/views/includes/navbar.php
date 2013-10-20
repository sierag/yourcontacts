<div class="navbar navbar-static-top navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <ul class="nav">
        <li id="nav-add"><?=anchor('/', '<i class="icon-home"></i>'); ?></li>
        <li id="nav-add"><?=anchor('site/add', '<i class="icon-plus"></i> Add'); ?></li>
        <li id="nav-edit"><?=anchor('site/edit', '<i class="icon-pencil"></i> Edit'); ?></li>
        <li id="nav-delete"><?=anchor('site/delete', '<i class="icon-trash"></i> Delete'); ?></li>
      </ul>
      <div class="pull-right">
        <ul class="nav">
	     	<li class="hidden-phone"><small class="navbar-text">User: <?=anchor('site/profile', $this->session->userdata('email')); ?> </small></li>
        	<li><a href="<?=site_url('login/logout'); ?>" class=""><i class="icon-road"></i> Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
