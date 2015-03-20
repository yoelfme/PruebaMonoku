<div class="form-group">
    <label class="col-md-3 control-label">{{ $label }}</label>
    <div class="col-md-9">
        <input type="text" name="{{ $name }}" class="input-tags" value="{{ $value }}">
    </div>
</div>

<script>
    $('.input-tags').tagsInput({ width: 'auto', height: 'auto'});
</script>