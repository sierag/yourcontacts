<? $this->load->view('includes/header'); ?>
<? $this->load->view('includes/navbar'); ?>
<div class="container">
<div class="content" style="display:none">
  <div class="page-header">
    <h2>Your Contacts</h2>
  </div>
  <div class="row-fluid">
    <div class="span12">
      <table class="table table-striped table-bordered tablesorter" id="tcontacts">
        <thead>
          <tr>
            <th><i class="icon-user"></i> Name</th>
            <th><i class="icon-home"></i> Street</th>
            <th class="hidden-tablet hidden-phone">Nr</th>
            <th>Zipcode</th>
            <th>City</th>
            <th class="hidden-phone"><i class="icon-flag"></i> Country</th>
            <th class="hidden-tablet hidden-phone"><i class="icon-envelope"></i> Email</th>
            <th class="hidden-tablet hidden-phone"><i class="icon-headphones"></i> Phone</th>
          </tr>
        </thead>
        <tbody>
        <? foreach($contacts as $contact): ?>
          <tr>
            <td><?=$contact['name']; ?></td>
            <td><span style="float:left"><?=$contact['street']; ?></span><span class="visible-tablet visible-phone" style="float:left">&nbsp;<?=$contact['streetnr']; ?></span></td>
            <td class="hidden-tablet hidden-phone"><?=$contact['streetnr']; ?></td>
            <td><?=$contact['zipcode']; ?></td>
            <td><?=$contact['city']; ?></td>
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
