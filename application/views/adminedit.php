<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
<?php echo form_open('/admin/post'); ?>
<input type="hidden" name="idh" value="{idh}">
<input type="hidden" name="cateh" value="{cateh}">
    {fid}
    {fname}
    {flocation}
    {fdescription}
    {fcategory}
    {fimage}
    {fimage1}
    {fimage2}
    {fprice}
    {ffoodtype}
    {ftogo}
    {fcardio}
    {fdropin}
    {fsound}
    {fprivacy}<br />
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
