<div class="btn-toolbar" role="toolbar">
    <button type="button" class="btn btn-secondary" onclick="javascript: location.href='<?php echo base_url_with_language('option/add'); ?>'"><?php echo $this->lang->line('Add option'); ?></button>
</div>
<div class="row">
    <div class="col-md-12">
    <table class="table">
        <thead>
            <tr>
                <th><?php echo $this->lang->line('Dropdown'); ?></th>
                <th><?php echo $this->lang->line('Option'); ?></th>
                <th><?php echo $this->lang->line('Action'); ?></th>
            </tr>
        </thead>
        <tbody>
        <?php if (count($options) > 0): ?>
            <?php foreach ($options as $option): ?>
            <tr>
                <td><?php echo $dropdowns[$option['dropdown']]; ?></td>
                <td><?php echo $option['option_title_'.$lang]; ?></td>
                <td>
                    <a href="<?php echo base_url_with_language('/option/edit/'. $option['option_id']); ?>" class="btn btn-large"><?php echo $this->lang->line('Edit'); ?></a>
                    |
                    <a href="javascript: confirm_url('<?php echo base_url_with_language('/option/delete/'. $option['option_id']); ?>')" class="btn btn-large"><?php echo $this->lang->line('Delete'); ?></a>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="4"><?php echo $this->lang->line('There is no record.'); ?></td></tr>
        <?php endif; ?>
        </tbody>
    </table>
    </div>
</div>
<script type="text/javascript">
function confirm_url(url)
{
    if (confirm("<?php echo $this->lang->line('Are you sure'); ?>"))
    {
        location.href = url;
    }
}
</script>