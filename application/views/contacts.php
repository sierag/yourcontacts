<? $this->load->view('includes/header'); ?>
<? $this->load->view('includes/navbar'); ?>
<div class="container">
<div class="content" style="display:none">
  <div class="page-header">
    <h3>Contacts</h3>
  </div>
  <div class="row-fluid">
    <div class="span12">
      <table class="table table-striped table-bordered tablesorter" id="tcontacts">
        <thead>
          <tr>
            <th class="hidden-phone"><i class="icon-user"></i> Name</th>
            <th><i class="icon-home"></i> Address</th>
            <th class="hidden-tablet hidden-phone">Nr</th>
            <th class="hidden-phone">Zipcode</th>
            <th class="hidden-phone">City</th>
            <th class="hidden-phone"><i class="icon-flag"></i> Country</th>
            <th class="hidden-tablet hidden-phone"><i class="icon-envelope"></i> Email</th>
            <th class="hidden-tablet hidden-phone"><i class="icon-headphones"></i> Phone</th>
          </tr>
        </thead>
        <tbody>
        <? foreach($contacts as $contact): ?>
          <tr>
            <td class="hidden-phone"><?=$contact['name']; ?></td>
            <td>
            	<span class="visible-tablet visible-phone" style="float:left"><b><?=$contact['name']; ?></b>&nbsp;</span>
            	<span style="float:left"><?=$contact['street']; ?></span>
            	<span class="visible-tablet visible-phone" style="float:left">&nbsp;<?=$contact['streetnr']; ?></span>
            	<span class="visible-tablet visible-phone" style="float:left">&nbsp;<?=$contact['zipcode']; ?></span>
            	<span class="visible-tablet visible-phone" style="float:left">,&nbsp;<?=$contact['city']; ?></span>
            	<span class="visible-tablet visible-phone" style="float:left">,&nbsp;<?=$contact['country']; ?></span>
            </td>
            <td class="hidden-tablet hidden-phone"><?=$contact['streetnr']; ?></td>
            <td class="hidden-phone"><?=$contact['zipcode']; ?></td>
            <td class="hidden-phone"><?=$contact['city']; ?></td>
            <td class="hidden-phone"><?=$contact['country']; ?></td>
            <td class="hidden-tablet hidden-phone"><?=$contact['email']; ?></td>
            <td class="hidden-tablet hidden-phone"><?=$contact['phone']; ?></td>
          </tr>
          <? endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<script src="<?=base_url('js/jquery.js'); ?>"></script>
<script src="<?=base_url('js/jquery.tablesorter.js'); ?>"></script>
<script>
$(document).ready(function() {
  $('#tcontacts').tablesorter();
  $('.content').fadeIn(1000);
});
</script>
<? $this->load->view('includes/footer'); ?>
